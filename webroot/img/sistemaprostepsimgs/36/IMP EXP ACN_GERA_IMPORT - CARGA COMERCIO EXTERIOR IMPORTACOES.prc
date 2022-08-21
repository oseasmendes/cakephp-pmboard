CREATE OR REPLACE PROCEDURE ACN_GERA_IMPORT (
  p_estab      VARCHAR2,
  p_dt_ini     DATE,
  p_dt_fim     DATE,
  p_processo   NUMBER
) IS
--
cursor c_imp is
--
SELECT C.IMPORT_DOCUMENT_TYPE                              TIPO_DOCUMENTO
     , C.IMPORTATION_NUMBER                                NRO_DI
     , C.IMPORTATION_PIS_AMOUNT                            PIS_IMPORTACAO
     , C.IMPORTATION_COFINS_AMOUNT                         COFINS_IMPORTACAO
     , C.PROCESS_INDICATOR                                 IND_PROCESSO_DRAWBACK
     , C.OPERATION_ID                                      NRO_RI
     , Trunc(C.INVOICE_NUM)                                NRO_NF
     , C.SERIES                                            SERIE
     , C.INVOICE_DATE                                      DATA_NF
     , Z.GL_DATE                                           DATA_GL
     , C.DI_DATE                                           DT_DOCUMENTO
     , CASE
         WHEN (LENGTH(C.ELETRONIC_INVOICE_KEY) <> 44) THEN NULL
         ELSE C.ELETRONIC_INVOICE_KEY
       END                                                 CHAVE_ACESSO  -- alteração 22/11/2012
     , C.IMPORTATION_TAX_AMOUNT                            IMPOSTO_IMPORTACAO
     , C.SISCOMEX_AMOUNT                                   SISCOMEX
     , substr(C.DESCRIPTION, 11, 20)                       NUM_EMBARQUE
     , X.ORGANIZATION_CODE                                 ORGANIZATION_CODE
     , O.NR_DOCUMENTO
     , C.ATTRIBUTE14
     , Cfo.Cfo_Code
     , C.DESCRIPTION
     , DECODE(E.INVOICE_TYPE_CODE
             ,'13.0.C','08'
             ,'13.AL.C','08'
             ,'13.ATI.C','08'
             ,'13.USO.C','08'
             ,'15.0.C','08'
             ,'15.0.C.R','08'
             ,REGRA.ATTRIBUTE5)        modelo
      ,MAX(B.INVOICE_LINE_ID)
FROM MTL_PARAMETERS_VIEW          X
    ,CLL_F189_VENDORS_V           Y
    ,CLL_F189_INVOICE_TYPES       E
    ,CLL_F189_INVOICES            C
    ,CLL_F189_INVOICE_LINES       B
    ,CLL_F189_CFO_UTILIZATIONS    REGRA
    ,CLL_F189_ENTRY_OPERATIONS    Z
    ,CAIBR_ORG_empresas_v         o
    ,CLL_F189_FISCAL_OPERATIONS   CFO
    ,COR_PESSOA                   CP
WHERE CFO.CFO_ID               = B.CFO_ID
AND   o.ORGANIZATION_ID       = c.ORGANIZATION_ID
AND   Z.ORGANIZATION_ID       = C.ORGANIZATION_ID
AND   Z.LOCATION_ID           = C.LOCATION_ID
AND   Z.OPERATION_ID          = C.OPERATION_ID
AND   C.ORGANIZATION_ID       = E.ORGANIZATION_ID
AND   C.INVOICE_TYPE_ID       = E.INVOICE_TYPE_ID
AND   C.ORGANIZATION_ID       = X.ORGANIZATION_ID
AND   C.ENTITY_ID             = Y.ENTITY_ID
AND   E.INVOICE_TYPE_CODE     NOT LIKE '%R%'
AND   E.FISCAL_FLAG           = 'Y'
AND   nvl(Z.reversion_flag,'X') <> 'R'  -- R = Revertida  (17/9/2012)
AND Not Exists ( SELECT 1                                                    -- Incluido 20/05/16
                       FROM CLL_F189_INVOICES            c1,
                            CLL_F189_ENTRY_OPERATIONS    z1
                      WHERE c1.INVOICE_PARENT_ID            = C.INVOICE_ID
                        AND z1.ORGANIZATION_ID     = C.ORGANIZATION_ID
                        AND z1.LOCATION_ID         = C.LOCATION_ID
                        AND z1.OPERATION_ID        = C.OPERATION_ID
                        AND z1.STATUS       = 'COMPLETE'
                        AND nvl(z1.reversion_flag,'N') <> 'R'
                        AND ROWNUM = 1
      )
AND   Z.STATUS                = 'COMPLETE'
AND   Z.GL_DATE               BETWEEN p_dt_ini AND p_dt_fim
and   Y.STATE_CODE            = 'EX'
--AND   C.IMPORTATION_NUMBER    IS NOT NULL
AND   C.INVOICE_ID            = B.INVOICE_ID
AND   REGRA.UTILIZATION_ID    = B.UTILIZATION_ID
AND   REGRA.CFO_ID            = B.CFO_ID
--
AND   O.NR_DOCUMENTO             = CP.CODIGO_USUAL
AND   CP.IND_ESTABELECIMENTO     = 'S'
AND   CP.PFJ_CODIGO              = NVL(P_ESTAB,CP.PFJ_CODIGO)

 GROUP BY C.IMPORT_DOCUMENT_TYPE
     , C.IMPORTATION_NUMBER
     , C.IMPORTATION_PIS_AMOUNT
     , C.IMPORTATION_COFINS_AMOUNT
     , C.PROCESS_INDICATOR
     , C.OPERATION_ID
     , C.INVOICE_NUM
     , C.SERIES
     , C.INVOICE_DATE
     , Z.GL_DATE
     , C.DI_DATE
     , C.ELETRONIC_INVOICE_KEY
     , C.IMPORTATION_TAX_AMOUNT
     , C.SISCOMEX_AMOUNT
     , X.ORGANIZATION_CODE
     , O.NR_DOCUMENTO
     , C.ATTRIBUTE14
     , Cfo.Cfo_Code
     , C.DESCRIPTION
     , DECODE(E.INVOICE_TYPE_CODE
             ,'13.0.C','08'
             ,'13.AL.C','08'
             ,'13.ATI.C','08'
             ,'13.USO.C','08'
             ,'15.0.C','08'
             ,'15.0.C.R','08'
             ,Regra.Attribute5)
Order By 16,2;
--
-- Busco o DI da NF Mae
--
cursor c_di(p_id in varchar2) is
Select Distinct IMPORTATION_NUMBER
 From Cll_F189_Invoices
Where Invoice_Id = To_Number(P_Id);
--
--
Cursor C_Di2(P_Nf In Varchar2) Is
select b.nr_declaracao
  From Imp_Nota_Fiscal@DBL_ECOMEX.NOVELIS.COM A
     , imp_declaracoes@DBL_ECOMEX.NOVELIS.COM b
Where B.Declaracao_Id = A.Declaracao_Id
  And B.Empresa_Id    = A.Empresa_Id
  and a.numero_nf     = p_nf;
--
--
CURSOR C_IMP_NUM(P_NOTA IN VARCHAR2, P_DT IN DATE) IS
select n.dof_IMPORT_numero
from COR_DOF N
where N.NUMERO     = LPAD(P_NOTA,decode(nfe_localizador,null,6,9),'0')
  and N.IND_ENTRADA_SAIDA = 'E'
  and N.UF_CODIGO_ORIGEM ='EX'
  and N.DH_EMISSAO = P_DT;

--
--
cursor C_ORIGEM_PESSOA(P_CHAVE_ORIGEM in varchar2) is
select P.ORIGEM, P.PFJ_CODIGO
 from COR_PESSOA P
where P.CODIGO_USUAL = P_CHAVE_ORIGEM
  and rownum = 1;
--
L_ORIGEM_PESSOA       COR_PESSOA.ORIGEM%type;
L_DOF_IMP_NUM         COR_DOF.DOF_IMPORT_NUMERO%type;
L_PFJ_CODIGO          COR_PESSOA.PFJ_CODIGO%type;
L_DI                  CLL_F189_INVOICES.IMPORTATION_NUMBER%Type;
--
l_cont       number:=0;
conteudo     VARCHAR2(3000);
--
Begin
    syn_out.inicializa  (p_processo_corrente => p_processo,p_linhas_por_pagina => 100,p_colunas_por_linha => 187);
    conteudo :=  syn_str.At_Say ('', rpad(' -',140,'-'),  0 );
    syn_out.put_line(conteudo);
    syn_out.put_line(conteudo);
    syn_out.put_line( ' ' );
    syn_out.put_line( '  *** Geração de Carga de Importação ****' );
    syn_out.put_line( '  ' );
    syn_out.put_line( '  Inicio em......: ' || to_char(SYSDATE,'DD/MM/YYYY HH24:MI:SS'));
    syn_out.put_line( '  Estabelecimento: ' || p_estab );
    syn_out.put_line( '  Data inicial...: ' || to_char(p_dt_ini, 'DD/MM/YYYY') );
    syn_out.put_line( '  Data final.....: ' || to_char(p_dt_fim, 'DD/MM/YYYY') );
    syn_out.put_line( '  ' );
    conteudo :=  syn_str.At_Say ('', rpad(' _',140,'_'),  0 );
    syn_out.put_line(conteudo);
    syn_out.put_line( '  ' );
    syn_out.put_line( '  ' );
  for R in C_IMP LOOP
    --
    IF R.NRO_DI IS NULL THEN
       L_Di := Null;
       OPEN C_DI(R.ATTRIBUTE14);
       FETCH C_DI INTO L_DI;
       Close C_Di;
       --
       If L_Di Is Null Then
          OPEN C_DI2(R.NRO_NF);
          Fetch C_Di2 Into L_Di;
          Close C_Di2;
       end if;
       --
    End if;
    --
    L_DOF_IMP_NUM  := NULL;
    open C_IMP_NUM( R.NRO_NF, R.DATA_NF );
    FETCH C_IMP_NUM into L_DOF_IMP_NUM;
    close C_IMP_NUM;
    --
    L_ORIGEM_PESSOA := Null;
    open C_ORIGEM_PESSOA(R.NR_DOCUMENTO);
    FETCH C_ORIGEM_PESSOA into L_ORIGEM_PESSOA, L_PFJ_CODIGO;
    close C_ORIGEM_PESSOA;
    --
    begin
      insert into SYNITF_IMP_EXP  (
                      DOF_IMPORT_NUMERO                 ,   --    1
                      INFORMANTE_EST_CODIGO             ,   --    2
                      INFORMANTE_PFJ_ORIGEM             ,   --    3
                      INFORMANTE_PFJ_CHAVE_ORIGEM    ,   --    4
                      NUM_REG_EXPORT                     ,   --    5
                      NUM_DECL_IMPEXP                     ,   --    6
                      OBS                                   ,   --    7
                      DT_EMI_RE_DI                       ,   --    8
                      CTRL_INSTRUCAO                     ,   --    9
                      CTRL_CRITICA                       ,   --    10
                      MSG_CRITICA                         ,   --    11
                      DH_CRITICA                         ,   --    12
                      DT_DECLARACAO                       ,   --    13
                      DT_RG_EXPORTACAO                 ,   --    14
                      DT_CONHECIMENTO                     ,   --    15
                      DT_CP_EXPORTACAO                 ,   --    16
                      DESPACHO_EXP                       ,   --    17
                      NUM_EMBARQUE                       ,   --    18
                      TIPO_TRANSP                         ,   --    19
                      CODIGO_PAIS_MERC                 ,   --    20
                      NUM_COMPROVANTE                     ,   --    21
                      DH_INCLUSAO                         ,   --    22
                      NFE_LOCALIZADOR                     ,   --    23
                      IND_DECL_SIMPL                     ,   --    24
                      DESEMBARACO_LOC                     ,   --    25
                      DESEMBARACO_UF                     ,   --    26
                      DESEMBARACO_DATA                 ,   --    27
                      EXPORTADOR_PFJ_CODIGO             ,   --    28
                      EXPORTADOR_PFJ_ORIGEM             ,   --    29
                      EXPORTADOR_PFJ_CHAVE_ORIGEM    ,   --    30
                      EXPORTADOR_LOC_CODIGO             ,   --    31
                      EXPORTADOR_LOC_ORIGEM             ,   --    32
                      EXPORTADOR_LOC_CHAVE_ORIGEM    )   --    33
      values ( L_DOF_IMP_NUM,                 -- 1
               L_PFJ_CODIGO,                  -- 2
               L_ORIGEM_PESSOA,               -- 3
               L_PFJ_CODIGO,                  -- 4
               null,                          -- 5
               NVL(R.NRO_DI,L_DI),            -- 6
               'IMPORTACAO',                  -- 7
               R.DATA_NF,                     -- 8
               'M',                           -- 9
               null,                          -- 10
               null,                          -- 11
               null,                          -- 12
               R.DATA_GL,                     -- 13
               null,                          -- 14
               R.DATA_NF,                     -- 15
               null,                          -- 16
               'N',                           -- 17
               substr(r.NUM_EMBARQUE,1,16),   -- 18
               '0',                           -- 19
               '0',                           -- 20
               '0',                           -- 21
               Trunc(Sysdate),                -- 22
               substr(r.CHAVE_ACESSO,1,44),   -- 23  -- alteração 22/11/2012
               'N',                           -- 24
               null,                          -- 25
               null,                          -- 26
               null,                          -- 27
               null,                          -- 28
               null,                          -- 29
               null,                          -- 30
               null,                          -- 31
               null,                          -- 32
               null                           -- 33
               );
               --
               l_cont := l_cont + 1;
    exception
      when others then
         raise_application_error(-20001,'Erro ins. tab. SYNITF_IMP_EXP '||sqlerrm);
    end;
  end loop;
  commit;
  syn_out.put_line ('  Registros gerados: ' ||to_char(l_cont));
  syn_out.put_line ('  ');
End ACN_GERA_IMPORT;
/
