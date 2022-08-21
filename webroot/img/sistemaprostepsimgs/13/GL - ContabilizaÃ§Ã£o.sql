/*begin
apps.fnd_client_info.set_org_context('580');
end;
*/

select /* xal.application_id,
       xe.event_id,
       xah.entity_id,
       xah.ae_header_id,
       xte.ledger_id,
       xal.ledger_id,*/
 xah.period_name,
 gl.name,
 xah.gl_transfer_status_code,
 xte.entity_code,
 xe.event_type_code,
 xte.transaction_number,
 xal.accounting_class_code,
 xal.ae_line_num,
 gcc.concatenated_segments,
 gcc.segment4,
 xal.entered_dr,
 xal.entered_cr,
 xal.currency_code,
 xal.accounted_dr,
 xal.accounted_cr,
 currency_conversion_type,
 xal.currency_conversion_rate,
 xal.currency_conversion_date,
 xal.description,
 xte.entity_id,
 (select distinct vendor_name
    from apps.ap_invoices_all            ai,
         apps.ap_invoice_lines_all       ail,
         ap.ap_invoice_distributions_all aida,
         xla.xla_transaction_entities    xte,
         xla_distribution_links          xdl,
         po_vendors                      pv
   where ai.invoice_id = aida.invoice_id
     and xdl.application_id = xah.application_id
     and xah.EVENT_ID = xdl.EVENT_ID
        ---   and ail.line_number = aida.distribution_line_number
     and xdl.ae_line_num = xal.ae_line_num
     and aida.invoice_line_number = ail.line_number --- xal.ae_line_num    
     AND xdl.ae_header_id = xah.ae_header_id
     And xte.source_id_int_1 = ai.invoice_id
     And ai.invoice_id = ail.invoice_id
     AND xte.entity_id = xah.entity_id
     and ai.vendor_id = pv.vendor_id) vendor_name,
 
 (select distinct ass.global_attribute10 || '/' || ass.global_attribute11 || '-' ||
                  ass.global_attribute12
  
    from apps.ap_invoices_all            ai,
         apps.ap_invoice_lines_all       ail,
         ap.ap_invoice_distributions_all aida,
         xla.xla_transaction_entities    xte,
         xla_distribution_links          xdl,
         po_vendors                      pv,
         ap_supplier_sites_all           ass
   where ass.vendor_site_id = ai.vendor_site_id
     and ai.invoice_id = aida.invoice_id
     and xdl.application_id = xah.application_id
     and xah.EVENT_ID = xdl.EVENT_ID
        ---   and ail.line_number = aida.distribution_line_number
     and xdl.ae_line_num = xal.ae_line_num
     and aida.invoice_line_number = ail.line_number --- xal.ae_line_num    
     AND xdl.ae_header_id = xah.ae_header_id
     And xte.source_id_int_1 = ai.invoice_id
     And ai.invoice_id = ail.invoice_id
     AND xte.entity_id = xah.entity_id
     and ai.vendor_id = pv.vendor_id) cnpj,
 xe.process_status_code,
 event_status_code,
 xal.description, xah.creation_date

  from xla_ae_lines                 xal,
       apps.gl_code_combinations_kfv     gcc,
       xla_ae_headers               xah,
       xla_events                   xe,
       apps.gl_ledgers              gl,
       xla.xla_transaction_entities xte
 where xe.event_id = xah.event_id
   and xte.entity_id = xah.entity_id
  -- and xal.application_id = 200
      ---  and xte.ledger_id = xah.ledger_id
   and xte.application_id = xal.application_id
   and xal.code_combination_id = gcc.code_combination_id
   and xah.ae_header_id = xal.ae_header_id
   and xal.ledger_id = gl.ledger_id
  -- and xal.currency_code <> 'BRL'
 --  and xte.entity_id = 120107677
      --and xah.event_id = 69370108
      --- and xal.code_combination_id = 210407
      -- and transaction_number = '2351'
   and xal.ledger_id = 2029
      -- and gcc.segment4 in ( '244100', '117150')
   and xah.period_name = 'ABR-22'
   and xal.description like '%7126-01/2022%'
--   AND XE.EVENT_TYPE_CODE = 'PO_RECEIPT'
--   and  xal.accounting_class_code = 'FUTURE_DATED_PMT'
--and transaction_number in( '15100')
--   AND gcc.concatenated_segments like '15.663.41909043.00000.00.00000000'
 order by xal.ae_line_num, xal.ledger_id;
 
001-002-0003577
--- and xal.ae_line_num = 1

--select * from     xla.xla_transaction_entities  xte
--select * from xla.xla_events
