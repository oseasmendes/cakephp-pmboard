REM $Header: ap_Rel_Inv_frm_TermPPR_sel.sql 120.1.12010000.21 2015/08/14 23:08:35 anacastr noship $
REM +=======================================================================+
REM |    Copyright (c) 2001, 2015 Oracle Corporation, Redwood Shores, CA, USA     |
REM |                         All rights reserved.                          |
REM +=======================================================================+
REM | FILENAME                                                              |
REM |     AP_Rel_Inv_frm_TermPPR_sel.sql                                    |
REM |                                                                       |
REM | DESCRIPTION                                                           |
REM |     This data fix lists all the PPRs which are in                     |
REM |     Terminated/Confirmed/Review state but                             |
REM |     whose associated invoices are still in selected state.            |
REM |                                                                       |
REM | USAGE                                                                 |
REM |     This script runs automatically on patching and creates an         |
REM |     output file for the user to review.                               |
REM |                                                                       |
REM | HISTORY                                                               |
REM |     22-May-2009 CTETALA  Created                                      |
REM |     12-Nov-2009 DAWASTHI Added condition to fetch data when PPR has   |
REM |                          been terminated before Build payments        |
REM |     19-Mar-2010 CTETALA  Rewrote the selection logic to handle these  |
REM |                          cases:                                       |
REM |       Case 1: PPR is submitted but PSR is not yet created             |
REM |       Case 2: PSR is TERMINATED but invoices were not released        |
REM |       Case 3: PSR is CONFIRMED. Few Documents Payable were removed    |
REM |               during document/payment review but the corresponding    |
REM |               invoices remained locked                                |
REM |       Case 4: PSR is CONFIRMED. Few Invoices added during 'Invoices   |
REM |               Pending Review' Stage neither got paid nor released     |
REM |       Case 5: PPR is submitted. AP_SELECTED_INVOICES_ALL is not       |
REM |               populated but AP_PAYMENT_SCHEDULES_ALL is stamped       |
REM |               with checkrun_id. PPR is stuck in SELECTING/CANCELING   |
REM |               status.                                                 |
REM |                                                                       |
REM |     19-Mar-2010 CTETALA  Added new case and modified existing cases   |
REM |                          vide bug 9710812                             |
REM |       Case 6: Org_id is missing in AP_SELECTED_INVOICES_ALL while     |
REM |               it is present in corresponding AP_PAYMENT_SCHEDULES_ALL |
REM |     19-Jun-2010 CTETALA  Added new case 7                             |
REM |                          vide bug 9799808                             |
REM |       Case 7: PSR is CONFIRMED and all payment releated information   |
REM |               is created in AP but the invoices are not released.     |
REM |     24-Apr-2013 PPODHIYA Modified the GDF to be driven by a single    |
REM |                          PPR name. GDF now would accept PPR name as   |
REM |                          one input parameter.                         |
REM |                          Modified GDF to enable termination of PPR    |
REM |                          stuck in any one of Selecting/Calculating/   |
REM |                          New(Unstarted)/Canceling or Selected.        |
REM |                          It assumes that customer has tried out all   |
REM |                          options to terminate the PPR and using this  |
REM |                          generic solution as the last resort.         |
REM |     20-Apr-2015 ANACASTR Added new case 9                             |
REM |        Case 9: PSR is either TERMINATED or CONFIRMED, but still it is |
REM |                holding the payment documents.                         |
REM +=======================================================================+
REM dbdrv:none
PROMPT Following are the parameters that would be asked for
PROMPT by the script, along with their meanings:
PROMPT
PROMPT Enter value for DETAILS_FLAG  in character format (Eg Y or N)
ACCEPT DETAILS_FLAG CHAR PROMPT 'Do You want details of invoices held by the PPR? Y or N: ' 
PROMPT Enter value for PPR_NAME  in character format (provide valid PPR name)
PROMPT Enter value for Email_id  in alphanumeric format (Eg abcd_efg@xxx.com)
PROMPT P_User_Name:
PROMPT ===========
PROMPT A Valid Application user name.
SET VERIFY OFF
SET SERVEROUTPUT ON
WHENEVER SQLERROR EXIT FAILURE ROLLBACK;
WHENEVER OSERROR EXIT FAILURE ROLLBACK;


DECLARE
  l_count              NUMBER;
  l_count1             NUMBER := 0;  
  l_file_location      v$parameter.value%TYPE;
  l_message            VARCHAR2(500);
  l_exists             NUMBER :=0;
  l_debug_info         VARCHAR2(500);
  l_details_flag       VARCHAR2(1) := '&DETAILS_FLAG';
  l_checkrun_name      AP_INV_SELECTION_CRITERIA_ALL.CHECKRUN_NAME%TYPE := '&PPR_NAME' ;
  l_checkrun_id        AP_INV_SELECTION_CRITERIA_ALL.CHECKRUN_ID%TYPE ;
  invalid_ppr_name     EXCEPTION ;
  l_email_flag         BOOLEAN DEFAULT FALSE;
  l_email_id           VARCHAR2(255) := '&Email_id';
  l_instance_name      VARCHAR2(100);
  l_host_name          VARCHAR2(100);
  invalid_params       EXCEPTION;
  l_user_name          VARCHAR2(100):='&USER_NAME';
  l_user_id           fnd_user.user_id%TYPE;
BEGIN
  AP_Acctg_Data_Fix_PKG.Open_Log_Out_Files (17856010||'-diag',l_file_location);
  AP_Acctg_Data_Fix_PKG.Print('<html><body>');
  
  
       -----------------------------------------------------------------------------
  --               Printing instance details
  -----------------------------------------------------------------------------
  BEGIN
    SELECT instance_name,
      host_name
    INTO l_instance_name,
      l_host_name
    FROM v$instance;
    AP_Acctg_Data_Fix_PKG.Print('Selection script executed on instance '|| l_instance_name||' host_name '||l_host_name||' on '||sysdate);
    AP_Acctg_Data_Fix_PKG.Print('The ap_Rel_Inv_frm_TermPPR_sel.sql select file version is :	120.0.12000000.27');
  EXCEPTION
  WHEN OTHERS THEN
    AP_Acctg_Data_Fix_PKG.Print('While querying instance name');
    l_message := 'Exception :: '||SQLERRM||'';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
  END;
  
  
  ------------------------------------------------------------------

   BEGIN
      SELECT user_id
      INTO   l_user_id
      FROM   fnd_user
      WHERE  user_name = Upper(l_user_name);
      
        EXCEPTION
      WHEN no_data_found THEN
        l_message := 'Invalid User Name entered';
        dbms_output.Put_line(l_message);
        AP_ACCTG_DATA_FIX_PKG.Print(l_message);
        RAISE invalid_params;
        end;


  --------------------------------------------------------------------------
  -- Validate PPR name entered by the user.
  --------------------------------------------------------------------------

  BEGIN
    l_debug_info := 'Validating PPR name - ' || l_checkrun_name ;
    FND_File.Put_Line(fnd_file.output,l_debug_info);

    AP_Acctg_Data_Fix_PKG.Print('Validating PPR name - ' || l_checkrun_name);

    SELECT checkrun_id INTO l_checkrun_id
    FROM ap_inv_selection_criteria_all aisc
    WHERE  checkrun_name = l_checkrun_name ;
  EXCEPTION
  WHEN OTHERS THEN
      RAISE invalid_ppr_name ;
  END;

  --------------------------------------------------------------------------
  -- Step 1: Drop the data driver tables if it already exists
  --------------------------------------------------------------------------
  BEGIN
    EXECUTE Immediate 'DROP TABLE ap_temp_data_driver_8525551';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info :='Could not drop ap_temp_data_driver_8525551' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  BEGIN
    EXECUTE Immediate 'DROP TABLE ap_temp_data_driver_8525551_d';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info :='Could not drop ap_temp_data_driver_8525551_d' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  --Bug 14337501
  BEGIN
    EXECUTE Immediate 'DROP TABLE ap_temp_data_driver_8525551_N';  
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info :='Could not drop ap_temp_data_driver_8525551_N' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  BEGIN
    EXECUTE Immediate 'DROP TABLE ap_temp_data_driver_8525551_p';  
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info :='Could not drop ap_temp_data_driver_8525551_p' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  --------------------------------------------------------------------------
  -- Step 2: Create the data driver tables
  --------------------------------------------------------------------------
  BEGIN
    EXECUTE Immediate 'CREATE TABLE ap_temp_data_driver_8525551
  (
    CHECKRUN_ID NUMBER(15),
    CHECK_DATE DATE,
    PPR_NAME       VARCHAR2(255),
    PPR_STATUS     VARCHAR2(30),
    REQUEST_ID     NUMBER(15),
    INVOICES_HELD  NUMBER(15),
    SCHEDULES_HELD NUMBER(15),
    PAYMENT_DOCUMENT_ID NUMBER(15),     /*for case 9*/
    PAYMENT_INSTRUCTION_ID NUMBER(15),  /*for case 9*/    
    PROCESS_FLAG   VARCHAR2(1) DEFAULT ''Y''
  )';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Driver table ap_temp_data_driver_8525551 could not be created.' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  BEGIN
    EXECUTE Immediate 'CREATE TABLE ap_temp_data_driver_8525551_d
  (
    CHECKRUN_ID NUMBER(15),
    CHECK_DATE DATE,
    PPR_NAME     VARCHAR2(255),
    PPR_STATUS   VARCHAR2(30),
    INVOICE_ID   NUMBER(15),
    SCHEDULE_NUM NUMBER(15),
    INVOICE_NUM  VARCHAR2(50),
    INVOICE_DATE DATE
  )';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Driver table ap_temp_data_driver_8525551_d could not be created.' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  --Bug 14337501
  BEGIN   
    EXECUTE Immediate 'CREATE TABLE ap_temp_data_driver_8525551_N  
  (
    INVOICE_ID   NUMBER(15),  
    PPR_NAME     VARCHAR2(255),
	SCHEDULE_NUM NUMBER(15),
    ORG_ID       VARCHAR2(10),
	EXCLUSIVE_PAYMENT_FLAG VARCHAR2(10),
	PAYMENT_AMOUNT VARCHAR2(10),
	PAYMENT_METHOD_CODE  VARCHAR2(10),
	PAYMENT_CURRENCY_CODE VARCHAR2(10),
	CHECK_DATE   VARCHAR2(10), 
	VENDOR_NAME  VARCHAR2(10)
  )';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Driver table ap_temp_data_driver_8525551_N could not be created.' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;
  /* Bug 19243069 - Used in CASE 1,2,3,4 and 7*/
  BEGIN
    EXECUTE Immediate 'CREATE TABLE ap_temp_data_driver_8525551_p
    AS (SELECT CHECKRUN_ID,
               INVOICE_ID,
               PAYMENT_NUM 
        FROM AP_SELECTED_INVOICES_ALL 
        WHERE CHECKRUN_ID = ' || l_checkrun_id || '
        UNION
        SELECT CHECKRUN_ID,
               INVOICE_ID,
               PAYMENT_NUM 
        FROM AP_PAYMENT_SCHEDULES_ALL 
        WHERE CHECKRUN_ID = ' || l_checkrun_id || ')';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Driver table ap_temp_data_driver_8525551_p could not be created.' ||sqlerrm;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;	
	
  --------------------------------------------------------------------------
  -- Step 3: Populate the data driver tables with affected transactions
  --------------------------------------------------------------------------
  BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
        /* CASE 1 */
         SELECT /*+ index(APS, AP_PAYMENT_SCHEDULES_N4) */ aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            /*This is AISC Status */
            aisc.status || '' (Case 1)'',
            aisc.request_id,
            COUNT(DISTINCT invoice_id),
            COUNT(invoice_id),
            ''Y''
          FROM ap_inv_selection_criteria_all aisc,
               ap_temp_data_driver_8525551_p asi
          WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	  AND asi.checkrun_id = aisc.checkrun_id
          AND NOT EXISTS
            (SELECT ''Corresponding PSR''
            FROM iby_pay_service_requests ipsr
            WHERE ipsr.calling_app_id              = 200
            AND ipsr.call_app_pay_service_req_code = aisc.checkrun_name
            )
          /* Bug 19644547 Added CANCELED in the status check */        
          AND aisc.status in (''CANCELING'',''CANCELED'',''SELECTING'', ''CALCULATING'', ''REVIEW'', ''SELECTED'')
            
          GROUP BY aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status,
            aisc.request_id

         UNION

         /* CASE 1.1 - No data in asi/aps - specially for UNSTARTED case*/
         SELECT /*+ index(APS, AP_PAYMENT_SCHEDULES_N4) */ aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            /*This is AISC Status */
            aisc.status || '' (Case 1.1)'',
            aisc.request_id,
            0,
            0,
            ''Y''
          FROM ap_inv_selection_criteria_all aisc
          WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
          AND (NOT EXISTS
                (SELECT ''Corresponding PSR''
                 FROM iby_pay_service_requests ipsr
                 WHERE ipsr.calling_app_id              = 200
                 AND ipsr.call_app_pay_service_req_code = aisc.checkrun_name) 
               OR EXISTS
		(SELECT ''Corresponding PSR''
                 FROM   iby_pay_service_requests ipsr
                 WHERE  ipsr.calling_app_id              = 200
                 AND    ipsr.call_app_pay_service_req_code = aisc.checkrun_name
                 AND    AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status)=''TERMINATED'') /* Bug 19189501 */
              )
	  AND aisc.status in (''CANCELING'',''SELECTING'', ''CALCULATING'', ''UNSTARTED'', ''REVIEW'', ''SELECTED'')
          AND NOT EXISTS (
	    SELECT 1 FROM ap_temp_data_driver_8525551_p asi
	    WHERE  asi.checkrun_id = aisc.checkrun_id
	  ) 
          GROUP BY aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status,
            aisc.request_id
      )
     ' ;
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 1/Case 1.1)'||SQLERRM;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
    dbms_output.put_line(l_debug_info);
  END;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 2 */
        SELECT aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          /* Bug 9373129 Replaced below value with API call */
          /*ipsr.payment_service_request_status,  */
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) || '' (Case 2)'',
          aisc.request_id,
          COUNT(DISTINCT invoice_id),
          COUNT(invoice_id),
          ''Y''
        FROM iby_pay_service_requests ipsr,
          ap_inv_selection_criteria_all aisc,
          ap_temp_data_driver_8525551_p aps
        WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	AND aisc.checkrun_name = ipsr.call_app_pay_service_req_code
        AND aps.checkrun_id      = aisc.checkrun_id
        AND ipsr.calling_app_id  = 200
          /* Bug 9373129 Replaced below value with API call */
          /* AND ipsr.payment_service_request_status IN */
        AND AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) = ''TERMINATED''     
        GROUP BY aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status),
          aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 2)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
       /* CASE 3 */
        SELECT aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          /* Bug 9373129 Replaced below value with API call */
          /*ipsr.payment_service_request_status,  */
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) || '' (Case 3)'',
          aisc.request_id,
          COUNT(DISTINCT invoice_id),
          COUNT(invoice_id),
          ''Y''
        FROM iby_pay_service_requests ipsr,
          ap_inv_selection_criteria_all aisc,
          ap_temp_data_driver_8525551_p aps,
          iby_docs_payable_all idp 
        WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	AND aps.checkrun_id                                                     = aisc.checkrun_id
        AND ipsr.call_app_pay_service_req_code                                    = aisc.checkrun_name
        AND ipsr.calling_app_id                                                   = 200
        
          /*  When only some of the docs are removed, PSR status will not be in either of CONFIRMED or TERMINATED. However
              we can released the docs in below statuses. So removing check on PSR status */
          /*  AND AP_PAYMENT_UTIL_PKG.get_psr_status
           (ipsr.payment_service_request_id,ipsr.payment_service_request_status) IN (''CONFIRMED'',''TERMINATED'')*/
        AND idp.calling_app_doc_unique_ref1                                       = aps.checkrun_id
        AND idp.calling_app_doc_unique_ref2                                       = aps.invoice_id
        AND idp.calling_app_doc_unique_ref3                                       = aps.payment_num
        AND idp.payment_service_request_id                                        = ipsr.payment_service_request_id
        AND idp.document_status                                                   IN 
        (''REMOVED'',''REMOVED_INSTRUCTION_TERMINATED'', ''REMOVED_REQUEST_TERMINATED'',''REMOVED_PAYMENT_REMOVED'',''REMOVED_PAYMENT_SPOILED'',
         ''FAILED_VALIDATION'', ''PAYMENT_FAILED_VALIDATION'', ''REJECTED'' , ''FAILED_BY_REJECTION_LEVEL'' , ''FAILED_BY_CALLING_APP'',
         ''FAILED_BY_RELATED_DOCUMENT'',''REMOVED_PAYMENT_STOPPED'',''REMOVED_PAYMENT_VOIDED'')
   
        GROUP BY aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status),
          aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 3)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 4 */
        SELECT aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          /* Bug 9373129 Replaced below value with API call */
          /*ipsr.payment_service_request_status,  */
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) || '' (Case 4)'',
          aisc.request_id,
          COUNT(DISTINCT invoice_id),
          COUNT(invoice_id),
          ''Y''
        FROM iby_pay_service_requests ipsr,
          ap_inv_selection_criteria_all aisc,
          ap_temp_data_driver_8525551_p aps        
        WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	AND aps.checkrun_id                                                       = aisc.checkrun_id
        AND ipsr.call_app_pay_service_req_code                                    = aisc.checkrun_name
        AND ipsr.calling_app_id                                                   = 200
        AND AP_PAYMENT_UTIL_PKG.get_psr_status
            (ipsr.payment_service_request_id,ipsr.payment_service_request_status) = ''CONFIRMED''
        AND NOT EXISTS
        (SELECT ''Corresponding Docs Payable'' from iby_docs_payable_all idp
        WHERE idp.calling_app_doc_unique_ref1                                     = aps.checkrun_id
        AND idp.calling_app_doc_unique_ref2                                       = aps.invoice_id
        AND idp.calling_app_doc_unique_ref3                                       = aps.payment_num
        AND idp.payment_service_request_id                                        = ipsr.payment_service_request_id
        )
        
        GROUP BY aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status),
          aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 4)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 5 */
         SELECT aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            /*This is AISC Status */
            aisc.status || '' (Case 5)'',
            aisc.request_id,
            COUNT(DISTINCT aps.invoice_id),
            COUNT(aps.invoice_id),
            ''Y''
          FROM ap_inv_selection_criteria_all aisc,
               ap_payment_schedules_all aps
          WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	  AND   aps.checkrun_id = aisc.checkrun_id
          AND NOT EXISTS
            (SELECT ''Data in AP_SELECTED_INVOICES_ALL''
            FROM ap_selected_invoices_all asi
            WHERE asi.checkrun_id = aisc.checkrun_id
            )
		/*  AND NOT EXISTS
            (SELECT ''Corresponding PSR''
            FROM iby_pay_service_requests ipsr
            WHERE ipsr.calling_app_id              = 200
            AND ipsr.call_app_pay_service_req_code = aisc.checkrun_name
            )*/
			           
          GROUP BY aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status,
            aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 5)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 6 */
                 /* Bug14279492 Add additional conditions to be checked in asi,ps,asic that would
                    prevent processing a PPR from UI to completion or termination*/
            SELECT aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status || '' (Case 6)'',
            aisc.request_id,
            COUNT(DISTINCT aps.invoice_id),
            COUNT(aps.invoice_id),
            ''Y''
          FROM ap_inv_selection_criteria_all aisc,
               ap_payment_schedules_all aps
          WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	  AND   aps.checkrun_id = aisc.checkrun_id
          AND EXISTS
            (select 1
            from ap_selected_invoices_all si2
            , ap_payment_schedules_all ps
            where si2.checkrun_id = aisc.checkrun_id
            and si2.invoice_id = ps.invoice_id
            and si2.payment_num = ps.payment_num
            and ( (si2.org_id is null and ps.org_id is not null)  OR
                   si2.exclusive_payment_flag is null OR
                   ps.payment_method_code is null OR
                   si2.payment_amount is null OR
                   si2.payment_currency_code is null OR
                   aisc.check_date is null  
                )
             )       
          GROUP BY aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status,
            aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 6)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 7 */
        SELECT aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          /* Bug 9373129 Replaced below value with API call */
          /*ipsr.payment_service_request_status,  */
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) || '' (Case 7)'',
          aisc.request_id,
          COUNT(DISTINCT invoice_id),
          COUNT(invoice_id),
          ''Y''
        FROM iby_pay_service_requests ipsr,
          ap_inv_selection_criteria_all aisc,
          ap_temp_data_driver_8525551_p aps,
          iby_docs_payable_all idp 
        WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	AND aps.checkrun_id                                                     = aisc.checkrun_id
        AND ipsr.call_app_pay_service_req_code                                    = aisc.checkrun_name
        AND ipsr.calling_app_id                                                   = 200
        AND AP_PAYMENT_UTIL_PKG.get_psr_status
            (ipsr.payment_service_request_id,ipsr.payment_service_request_status) = ''CONFIRMED''
        AND idp.calling_app_doc_unique_ref1                                       = aps.checkrun_id
        AND idp.calling_app_doc_unique_ref2                                       = aps.invoice_id
        AND idp.calling_app_doc_unique_ref3                                       = aps.payment_num
        AND idp.payment_service_request_id                                        = ipsr.payment_service_request_id
        AND idp.document_status                                                   IN 
        (''PAYMENT_CREATED'')
        AND exists
        (SELECT ''AP Pmt Data Exists''
            FROM iby_docs_payable_all idp,
              ap_checks_all ac,
              ap_invoice_payments_all aip,
              ap_payment_history_all aph
            WHERE idp.payment_id        = ac.payment_id
            AND ac.check_id             = aip.check_id
            AND aip.invoice_id          = aps.invoice_id
            AND aip.payment_num         = aps.payment_num
            AND aip.accounting_event_id = aph.accounting_event_id
            AND ac.check_id             = aph.check_id
            /* dont consider reversed checks */
            AND nvl(aip.reversal_flag,''N'') <> ''Y'')
        GROUP BY aisc.checkrun_id,
          aisc.check_date,
          ipsr.call_app_pay_service_req_code,
          AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status),
          aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 7)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF l_count = 0 THEN

    BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PROCESS_FLAG
      )
      (
      /* CASE 8 Bug 14279492 - New case for PPR in Pending Review status that cannot be processed */
          SELECT aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status || ''(Case 8)'',
            aisc.request_id,
            COUNT(DISTINCT aps.invoice_id),
            COUNT(aps.invoice_id),
            ''Y''
          FROM ap_inv_selection_criteria_all aisc,
               ap_payment_schedules_all aps
          WHERE aisc.checkrun_id = ' || l_checkrun_id || ' 
	  AND aps.checkrun_id = aisc.checkrun_id
          AND EXISTS
              (select 1
               from ap_selected_invoices_all si2
                    , ap_invoices_all ai
               where si2.checkrun_id = aisc.checkrun_id
               and si2.invoice_id = ai.invoice_id
               and si2.vendor_name is null 
               and ai.vendor_id is not null)
	    GROUP BY aisc.checkrun_id,
            aisc.check_date,
            aisc.checkrun_name,
            aisc.status,
            aisc.request_id
      )
     ';
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 8)'||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
      dbms_output.put_line(l_debug_info);
    END;

  END IF;

  BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551' INTO l_count;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 '||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  BEGIN
       IF NVL(UPPER(l_details_flag), 'Y') = 'Y' AND l_count > 0 THEN
         EXECUTE Immediate
         'INSERT
          INTO ap_temp_data_driver_8525551_d
          (
           CHECKRUN_ID,
           CHECK_DATE,
           PPR_NAME,
           PPR_STATUS,
           INVOICE_ID,
           SCHEDULE_NUM,
           INVOICE_NUM,
           INVOICE_DATE
         )
         ( 
           SELECT *
           FROM
             (
		 SELECT drv.checkrun_id,
                   drv.check_date,
                   drv.ppr_name,
                   drv.ppr_status,
                   aps.invoice_id,
                   aps.payment_num,
                   ai.invoice_num,
                   ai.invoice_date
             FROM ap_temp_data_driver_8525551 drv,
                  ap_payment_schedules_all aps,
                  ap_invoices_all ai
             WHERE aps.checkrun_id = drv.checkrun_id
		  AND ai.invoice_id = aps.invoice_id
             )
         )
	 ' ;
       END IF;
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551_d'||SQLERRM;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
    dbms_output.put_line(l_debug_info);
  END;

--Bug 14337501
  BEGIN   
    Execute Immediate
      'INSERT
      INTO ap_temp_data_driver_8525551_N
      (
         INVOICE_ID ,  
         PPR_NAME     ,
         SCHEDULE_NUM ,
         ORG_ID       ,
         EXCLUSIVE_PAYMENT_FLAG ,
         PAYMENT_AMOUNT,
         PAYMENT_METHOD_CODE  ,
         PAYMENT_CURRENCY_CODE,
         CHECK_DATE	,
         VENDOR_NAME		 
      )
      (
     SELECT 
     aps.invoice_id,
     apd.ppr_name,
     aps.payment_num,
     DECODE(asi.org_id, NULL, ''NULL''), 
     DECODE(asi.exclusive_payment_flag, NULL, ''NULL''), 
     DECODE(asi.payment_amount, NULL, ''NULL''),
     DECODE(aps.payment_method_code, NULL, ''NULL''),
     DECODE(asi.payment_currency_code, NULL, ''NULL''),
     DECODE(apd.check_date, NULL, ''NULL''),
	 DECODE(asi.vendor_name, NULL, ''NULL'')
     FROM ap_temp_data_driver_8525551 apd, 
          ap_payment_schedules_all aps, 
          ap_selected_invoices_all asi
     WHERE asi.checkrun_id = apd.checkrun_id
           AND   aps.checkrun_id = asi.checkrun_id
           AND   aps.payment_num = asi.payment_num
           AND   aps.invoice_id = asi.invoice_id
           AND   (apd.ppr_status like ''%Case 5%''
	 	   OR    apd.ppr_status like ''%Case 7%'')
           AND   (asi.org_id IS NULL
	 	   OR    asi.exclusive_payment_flag IS NULL
	 	   OR    asi.payment_amount IS NULL
	 	   OR    aps.payment_method_code IS NULL
	 	   OR    asi.payment_currency_code IS NULL
	 	   OR    apd.check_date IS NULL
	 	   OR    asi.vendor_name IS NULL)
	 )';	
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551_N'||SQLERRM;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
    dbms_output.put_line(l_debug_info);
  END;    

  /* CASE 9 */
  BEGIN
    EXECUTE Immediate
    '
    INSERT INTO ap_temp_data_driver_8525551
      (
        CHECKRUN_ID,
        CHECK_DATE,
        PPR_NAME,
        PPR_STATUS,
        /* This is IPSR Status */
        REQUEST_ID,
        INVOICES_HELD,
        SCHEDULES_HELD,
        PAYMENT_DOCUMENT_ID,
        PAYMENT_INSTRUCTION_ID,        
        PROCESS_FLAG
      )
      (
       /* CASE 9 */
      SELECT  
        aisc.CHECKRUN_ID,
        aisc.CHECK_DATE,
        ipsr.CALL_APP_PAY_SERVICE_REQ_CODE,
        AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.PAYMENT_SERVICE_REQUEST_ID,ipsr.PAYMENT_SERVICE_REQUEST_STATUS) || '' (Case 9)'',
        aisc.REQUEST_ID,
        0,
        0,
        cpd.PAYMENT_DOCUMENT_ID,                                                     
        cpd.PAYMENT_INSTRUCTION_ID,
        ''Y''   
      FROM 
        AP_INV_SELECTION_CRITERIA_ALL aisc,
        IBY_PAY_SERVICE_REQUESTS ipsr,
        IBY_PAYMENTS_ALL ipa,  
        CE_PAYMENT_DOCUMENTS cpd,                                                        
        IBY_PAY_INSTRUCTIONS_ALL ipia                                                    
      WHERE
        aisc.CHECKRUN_ID = ' || l_checkrun_id || '   and
        aisc.CHECKRUN_NAME = ipsr.CALL_APP_PAY_SERVICE_REQ_CODE  and
        ipsr.CALLING_APP_ID  = 200 and
        AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.payment_service_request_id,ipsr.payment_service_request_status) IN (''CONFIRMED'',''TERMINATED'') and
        ipsr.PAYMENT_SERVICE_REQUEST_ID = ipa.PAYMENT_SERVICE_REQUEST_ID and
        ipa.payment_instruction_id = ipia.PAYMENT_INSTRUCTION_ID and 
        cpd.PAYMENT_INSTRUCTION_ID = ipia.PAYMENT_INSTRUCTION_ID 
        /*AND NOT EXISTS
        (SELECT 1 FROM ap_temp_data_driver_8525551_p aps where aps.CHECKRUN_ID = aisc.CHECKRUN_ID) */
      GROUP BY
        aisc.CHECKRUN_ID,
        aisc.CHECK_DATE,
        ipsr.CALL_APP_PAY_SERVICE_REQ_CODE,  
        AP_PAYMENT_UTIL_PKG.get_psr_status(ipsr.PAYMENT_SERVICE_REQUEST_ID,ipsr.PAYMENT_SERVICE_REQUEST_STATUS) || '' (Case 9)'',
        aisc.REQUEST_ID,
        cpd.PAYMENT_DOCUMENT_ID,                                                     
        cpd.PAYMENT_INSTRUCTION_ID      )
     ';
  EXCEPTION
  WHEN OTHERS THEN
    l_debug_info := 'Exception in inserting records into '|| 'ap_temp_data_driver_8525551 (Case 9)'||SQLERRM;
    FND_File.Put_Line(fnd_file.output,l_debug_info);
    dbms_output.put_line(l_debug_info);
  END;
  
  --------------------------------------------------------------------------
  -- Step 4: Report all the affected transactions in Log file
  --------------------------------------------------------------------------

  --Check if any affected transactions exist
  IF (l_count > 0) THEN
    AP_Acctg_Data_Fix_PKG.Print('******* Summary of the PPR holding'|| ' invoices *******');
    BEGIN
      AP_Acctg_Data_Fix_PKG.Print_html_table ('CHECKRUN_ID,CHECK_DATE,PPR_NAME,' ||'PPR_STATUS,INVOICES_HELD,SCHEDULES_HELD,PROCESS_FLAG', 
						'ap_temp_data_driver_8525551', 
						'PAYMENT_INSTRUCTION_ID is null', 
						'ap_Rel_Inv_frm_TermPPR_sel.sql ');
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in Call to ' || 'AP_Acctg_Data_Fix_PKG.Print_html_table '||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
    END;
  
    BEGIN   --Bug 14337501
      EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551_N' INTO l_count1;
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551_N '||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
    END;	
    IF(l_count1 > 0) THEN
      AP_Acctg_Data_Fix_PKG.Print('******* Summary of Non Null Columns for Case 5 or Case 7 *******');  
      BEGIN
        AP_Acctg_Data_Fix_PKG.Print_html_table ('INVOICE_ID,PPR_NAME,SCHEDULE_NUM,ORG_ID,EXCLUSIVE_PAYMENT_FLAG,PAYMENT_AMOUNT,
              PAYMENT_METHOD_CODE,PAYMENT_CURRENCY_CODE,CHECK_DATE,VENDOR_NAME', 
              'ap_temp_data_driver_8525551_N', 
              NULL, 
              'ap_Rel_Inv_frm_TermPPR_sel.sql ');
      EXCEPTION	
      WHEN OTHERS THEN
        l_debug_info := 'Exception in Call to ' || 'AP_Acctg_Data_Fix_PKG.Print_html_table '||SQLERRM;
        FND_File.Put_Line(fnd_file.output,l_debug_info);
      END;	
     END IF;
   END IF;
   
   /* CASE 9 Report */
   l_count1 := 0;
   BEGIN
    EXECUTE Immediate 'SELECT count(*) FROM ap_temp_data_driver_8525551 where PAYMENT_INSTRUCTION_ID is not null' INTO l_count1;
  EXCEPTION
    WHEN OTHERS THEN
       l_debug_info := 'Exception in selecting count from '|| 'ap_temp_data_driver_8525551 for case 9'||SQLERRM;
       FND_File.Put_Line(fnd_file.output,l_debug_info);
  END;

  IF(l_count1 > 0) THEN
    AP_Acctg_Data_Fix_PKG.Print('******* Details of the PPR locking the payment documents *******');  
    BEGIN
      AP_Acctg_Data_Fix_PKG.Print_html_table ('CHECKRUN_ID,CHECK_DATE,PPR_NAME,' ||'PPR_STATUS,PAYMENT_DOCUMENT_ID,PAYMENT_INSTRUCTION_ID,PROCESS_FLAG', 
				'ap_temp_data_driver_8525551', 
				'PAYMENT_INSTRUCTION_ID is not null', 
				'ap_Rel_Inv_frm_TermPPR_sel.sql ');

    EXCEPTION	
    WHEN OTHERS THEN
      l_debug_info := 'Exception in Call to ' || 'AP_Acctg_Data_Fix_PKG.Print_html_table for case 9 '||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
    END;
    /*l_message := '<b>Legend for Cases</b>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 9: Payment Process Request is either TERMINATED or CONFIRMED, but still it is holding the payment documents.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);*/
  END IF;

   
    ---------------------------------------------------------------------
    -- Step 4.1: User need to follow the next steps to fix the issue
    ---------------------------------------------------------------------
    
  --Check if any affected transactions exist
  IF (l_count > 0 or l_count1 > 0) THEN
    l_message := 'This GDF releases invoices if the PPR is in TERMINATED/'|| 'CONFIRMED state or if stuck in Selecting/Calculating/New(Unstarted)/Canceling or Selected status.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'This GDF assumes that PPR is stuck and no other alternative option is available to terminate the PPR and release the invoices which are locked as part of the PPR.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '**** IMPORTANT ****';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'If the PPR is in one of Selecting/Calculating/New/Canceling/Invoices Pending Review/Selected status then';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'customer need to make sure that no concurrent programs related to the PPR are scheduled/running.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '**** IMPORTANT ****';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'The fix script anyways carries out this check and would release the invoices only if NO related concurrent requests are running.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '**********************************************************************************************';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Before using this GDF, we strongly recommend you to attempt termination from UI as follows';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '**********************************************************************************************';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Apply patches';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>9074848:R12.AP.A for 12.0.x</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>9460510:R12.AP.B for 12.1.x</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'These patches are enhancements to the PPR termination process. Try to terminate the PPRs from PPR Search Page UI  using ''Terminate'' icon.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'The PPR will either get terminated or a message will be shown saying why it can''t be terminated at this moment.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'If the PPR doesnt get terminated or shows as terminated but the invoices are still showing ''Selected for Payment'', continue with this Generic Data Fix';

    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Note :: In case the PPR terminate action error out (java.lang.StringIndexOutOfBoundsException: String index out of range: 0), this is a known code issue.'; 
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Please apply the following code fix patch and try to terminate the PPR again from UI.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>15903830:R12.AP.A for 12.0.x</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>16234039:R12.AP.B for 12.1.x</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);

    l_message := '<b>Legend for Cases</b>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 1: Payment Process Request is stuck in Selecting/Calculating/New/Canceling/Invoices Pending Review/Selected status.'; 
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'This generic fix would be applied only if the corresponding concurrent requests are in completed status.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 2: Payment Process Request is terminated in IBY module, but corresponding invoices remain locked in AP</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 3: Payment Process Request is confirmed or terminated. Few Documents Payable were removed/rejected during document/payment review stage and are unpaid but the corresponding invoices remained locked.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 4: Payment Process Request is confirmed. Few Invoices added during ''Invoices Pending Review'' Stage neither got paid nor released.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 5: Payment Process Request is submitted, AP_PAYMENT_SCHEDULES are locked but AP_SELECTED_INVOICES has no data. PPR is stuck in SELECTING/CANCELING status.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 6: Some of the mandatory Non Columns are null in AP_SELECTED_INVOICES_ALL </ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 7: Payment Process Request is completed, ap checks have been created but payment schedules remain locked.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 8: Vendor_name in ap_selected_invoices_all is null while corresponding invoice has not null vendor_id.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '<ul>Case 9: Payment Process Request is either TERMINATED or CONFIRMED, but still it is holding the payment documents.</ul>';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    
    l_message := '_______________________________________'|| '_______________________________________';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Following are the next steps to be followed '|| 'to fix the issue, if any';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '1. To fix the identified transactions run '|| 'ap_Rel_Inv_frm_TermPPR_fix.sql which is present in '|| '$AP_TOP/patch/115/sql.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '2. If data is not corrected contact'|| ' Oracle Support and supply files'|| ' 8525551-diag-<HH24:MI:SS>.html, 8525551-fix-<HH24:MI:SS>.html,'|| ' 8525551-diag.out and 8525551-fix.out';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'Disclaimer :  This GDF fix is going to update the WHO columns (Last_updated_by, Last_update_date) ';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'with  USERID of User and SYSDATE on the transaction tables that will be fixed. This may impact ';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'purging of those transactions as Payables Purge program considers the last_update_date to Purge the data.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    AP_Acctg_Data_Fix_PKG.Print('<br>******* Details of the Terminated/Confirmed/Stuck PPR holding'|| ' invoices *******');
    BEGIN
      AP_Acctg_Data_Fix_PKG.Print_html_table ('CHECKRUN_ID,CHECK_DATE,PPR_NAME,' ||'PPR_STATUS,INVOICE_ID,SCHEDULE_NUM,INVOICE_NUM,INVOICE_DATE', 'ap_temp_data_driver_8525551_d', NULL, 'AP_Rel_Inv_frm_TermPPR-sel.sql ');
    EXCEPTION
    WHEN OTHERS THEN
      l_debug_info := 'Exception in Call to ' || 'AP_Acctg_Data_Fix_PKG.Print_html_table '||SQLERRM;
      FND_File.Put_Line(fnd_file.output,l_debug_info);
    END;
  ELSE
    ---------------------------------------------------------------------
    -- Step 4.2: No PPRs are affected
    ---------------------------------------------------------------------
    l_message := '_______________________________________'|| '_______________________________________';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'This GDF releases invoices from the PPR if the PPR is in TERMINATED/'|| 'CONFIRMED or if stuck in Selecting/Calculating/New/Canceling/Invoices Pending Review/Selected status and are still holding invoices.'; 
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'There is no PPR in TERMINATED/CONFIRMED or Selecting/Calculating/New/Canceling/Invoices Pending Review/Selected state which this AP GDF can release.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := 'If you still have this PPR stuck, please follow these steps';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '1. Ensure that you have patches 9074848:R12.AP.A (for 12.0.x) or 9460510:R12.AP.B (for 12.1.x) applied.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '2. Try terminating the PPR from PPR Search Page UI using ''Terminate'' icon.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '3. The PPR will either get terminated or a message will be shown why it can''t be terminated at this moment.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    l_message := '4. If you still seek clarification/help from Development, please log bug with Development giving the above message and confirmation that the above patches are applied.';
    AP_Acctg_Data_Fix_PKG.Print(l_message);
    
  END IF;
  
  AP_Acctg_Data_Fix_PKG.Print('</body></html>');
  AP_Acctg_Data_Fix_PKG.Close_Log_Out_Files;
       -- sending log files as email
     IF (l_email_id IS NOT NULL) THEN
       l_email_flag := AP_Acctg_Data_Fix_PKG.send_mail_clob_impl(l_email_id,l_file_location);
     END IF;
      IF (l_email_flag) THEN
           dbms_output.put_line ('Email Sent');
     ELSE
          dbms_output.put_line ('Email Sending Failed');  
     END IF;
  dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
  dbms_output.put_line(l_file_location||' is the log file created');
  dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
EXCEPTION
 WHEN  invalid_params THEN
        l_message:='Invalid USER NAME';
        dbms_output.Put_line(l_message);
        AP_ACCTG_DATA_FIX_PKG.Print(l_message);
        AP_Acctg_Data_Fix_PKG.Print('</body></html>');
        AP_Acctg_Data_Fix_PKG.Close_Log_Out_Files;
            -- sending log files as email
     IF (l_email_id IS NOT NULL) THEN
       l_email_flag := AP_Acctg_Data_Fix_PKG.send_mail_clob_impl(l_email_id,l_file_location);
     END IF;
      IF (l_email_flag) THEN
           dbms_output.put_line ('Email Sent');
     ELSE
          dbms_output.put_line ('Email Sending Failed');  
     END IF;
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
    dbms_output.put_line(l_file_location||' is the log file created');
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
  


WHEN invalid_ppr_name THEN
  l_debug_info := 'PPR name (' || l_checkrun_name || ') provided seems invalid. Please check again.' ;
  FND_File.Put_Line(fnd_file.output,l_debug_info);
  AP_Acctg_Data_Fix_PKG.Print(l_debug_info);
  AP_Acctg_Data_Fix_PKG.Print('</body></html>');
  AP_Acctg_Data_Fix_PKG.Close_Log_Out_Files;
       -- sending log files as email
     IF (l_email_id IS NOT NULL) THEN
       l_email_flag := AP_Acctg_Data_Fix_PKG.send_mail_clob_impl(l_email_id,l_file_location);
     END IF;
      IF (l_email_flag) THEN
           dbms_output.put_line ('Email Sent');
     ELSE
          dbms_output.put_line ('Email Sending Failed');  
     END IF;
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
    dbms_output.put_line(l_file_location||' is the log file created');
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
  

WHEN OTHERS THEN
  l_message := 'After '||l_message||'';
  AP_Acctg_Data_Fix_PKG.Print(l_message);
  l_message := 'Exception :: '||SQLERRM||'';
  AP_Acctg_Data_Fix_PKG.Print(l_message);
  AP_Acctg_Data_Fix_PKG.Print('</body></html>');
  AP_Acctg_Data_Fix_PKG.Close_Log_Out_Files;
       -- sending log files as email
     IF (l_email_id IS NOT NULL) THEN
       l_email_flag := AP_Acctg_Data_Fix_PKG.send_mail_clob_impl(l_email_id,l_file_location);
     END IF;
      IF (l_email_flag) THEN
           dbms_output.put_line ('Email Sent');
     ELSE
          dbms_output.put_line ('Email Sending Failed');  
     END IF;
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
    dbms_output.put_line(l_file_location||' is the log file created');
    dbms_output.put_line('--------------------------------------------------'|| '-----------------------------');
   APP_EXCEPTION.RAISE_EXCEPTION;
END;
/
COMMIT;
EXIT;
