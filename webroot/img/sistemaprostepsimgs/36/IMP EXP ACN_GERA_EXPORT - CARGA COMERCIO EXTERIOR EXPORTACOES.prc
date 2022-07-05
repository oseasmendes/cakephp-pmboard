CREATE OR REPLACE PROCEDURE "LFISCAL"."ACN_GERA_EXPORT" ( p_estab      VARCHAR2,
                                              p_dt_ini     DATE,
                                              p_dt_fim     DATE,
                                              p_processo   NUMBER
                                            ) IS

    Cursor C_EXP is

    Select  Cp.Pfj_Codigo Pfj,
            E.C_08_Num_Nf nf,
           (select substr(lpad(p.codigo_bc,6,0), -4)                  -- alterado 01/10/2012
              from COR_PAIS                  P
             where trim(P.NOME) = trim(E.PAIS_DESTINO_FINAL)
               and P.ABREV      is null
               and rownum = 1)                          codigo_bc,    -- alterado 17/9/2012
            e.*
      FROM
            EXP_VW_SPED_CAI_NOVELIS@DBL_ECOMEX.NOVELIS.COM  e
           ,COR_PESSOA                                      CP
     where
            E.C_55_DAT_AVERBACAO              BETWEEN P_DT_INI AND P_DT_FIM
        AND E.C_01_02_CNPJ_EMPRESA_ESTABE     = CP.CODIGO_USUAL
        AND CP.IND_ESTABELECIMENTO            = 'S'
        And Cp.Pfj_Codigo                     = Nvl(P_Estab,Cp.Pfj_Codigo)
      order by 1,2;

    CURSOR C_IMP_NUM(P_NOTA IN VARCHAR2, P_DT IN DATE) IS

    select n.dof_IMPORT_numero
      from COR_DOF N
     where N.NUMERO            = LPAD(P_NOTA,9,'0')
       and N.IND_ENTRADA_SAIDA = 'S'
       and N.UF_CODIGO_DESTINO = 'EX'
       and N.DH_EMISSAO        = P_DT;

    cursor C_ORIGEM_PESSOA(P_CHAVE_ORIGEM in varchar2) is
/*
-- Marcio Tott - 16.dez.2016
-- Alterado para buscar o LOC_CODIGO.
-- Solicitado por Paulo Marchetti.
    select P.ORIGEM, P.PFJ_CODIGO
      from COR_PESSOA P
     where P.CODIGO_USUAL = P_CHAVE_ORIGEM
       and rownum = 1;
*/
    select P.ORIGEM, P.PFJ_CODIGO, LOC.LOC_CODIGO
      from COR_PESSOA P
         , cor_localidade_pessoa LOC
     where P.CODIGO_USUAL = P_CHAVE_ORIGEM
       And loc.PFJ_CODIGO = P.PFJ_CODIGO
       And loc.chave_origem = p.chave_origem
       and rownum = 1;
    --
    L_ORIGEM_PESSOA       COR_PESSOA.ORIGEM%type;
    L_DOF_IMP_NUM         COR_DOF.DOF_IMPORT_NUMERO%type;
    L_PFJ_CODIGO          COR_PESSOA.PFJ_CODIGO%TYPE;
    l_NUM_CONHEC_EMB      varchar2(30);
    L_CONT                number:=0;
    CONTEUDO              varchar2(3000);
    --
    L_LOC_CODIGO          cor_localidade_pessoa.LOC_CODIGO%Type;  -- Marcio Tott - 16.dez.2016 - Solic. Paulo Marchetti.

    Begin

        syn_out.inicializa  (p_processo_corrente => p_processo,p_linhas_por_pagina => 100,p_colunas_por_linha => 187);
        conteudo :=  syn_str.At_Say ('', rpad(' -',140,'-'),  0 );
        syn_out.put_line(conteudo);
        syn_out.put_line(conteudo);
        syn_out.put_line( ' ' );
        syn_out.put_line( '  *** GeraÁ„o de Carga de ExportaÁ„o ****' );
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

      FOR R in C_EXP LOOP

            L_DOF_IMP_NUM  := NULL;

        open C_IMP_NUM( R.C_08_NUM_NF, R.C_05_DATA_NF );
          FETCH C_IMP_NUM into L_DOF_IMP_NUM;
          close C_IMP_NUM;

          L_ORIGEM_PESSOA := Null;

          open C_ORIGEM_PESSOA(R.C_01_02_CNPJ_EMPRESA_ESTABE);
          --FETCH C_ORIGEM_PESSOA into L_ORIGEM_PESSOA, L_PFJ_CODIGO;             -- Marcio Tott - 16.dez.2016 - Solic. Paulo Marchetti.
          FETCH C_ORIGEM_PESSOA into L_ORIGEM_PESSOA, L_PFJ_CODIGO, L_LOC_CODIGO; -- Marcio Tott - 16.dez.2016 - Solic. Paulo Marchetti.
          close C_ORIGEM_PESSOA;

            l_NUM_CONHEC_EMB := trim(replace(translate(r.C_75_NUM_CONHEC_EMB,'„√ı’Á«¸‹‚¬Í Ù‘·¡‡¿È…ÌÕÛ”˙⁄!@#$%&*()_+=[]{}/\?:<>|-','aAoOcCuUaAeEoOaAaAeEiIoOuU                        '),' ',''));

            Begin

                INSERT into SYNITF_IMP_EXP
             (
                      DOF_IMPORT_NUMERO,              --    1
                      INFORMANTE_EST_CODIGO,         --    2
                      INFORMANTE_PFJ_ORIGEM,         --    3
                      INFORMANTE_PFJ_CHAVE_ORIGEM,   --    4
                      NUM_REG_EXPORT,              --    5
                      NUM_DECL_IMPEXP,              --    6
                      OBS,                     --    7
                      DT_EMI_RE_DI,               --    8
                      CTRL_INSTRUCAO,               --    9
                      CTRL_CRITICA,              --    10
                      MSG_CRITICA,                --    11
                      DH_CRITICA,                --    12
                      DT_DECLARACAO,               --    13
                      DT_RG_EXPORTACAO,             --    14
                      DT_CONHECIMENTO,              --    15
                      DT_CP_EXPORTACAO,             --    16
                      DESPACHO_EXP,                 --    17
                      NUM_EMBARQUE,               --    18
                      TIPO_TRANSP,               --    19
                      CODIGO_PAIS_MERC,              --    20
                      NUM_COMPROVANTE,              --    21
                      DH_INCLUSAO,               --    22
                      NFE_LOCALIZADOR,             --    23
                      IND_DECL_SIMPL,              --    24
                      DESEMBARACO_LOC,              --    25
                      DESEMBARACO_UF,               --    26
                      DESEMBARACO_DATA,              --    27
                      EXPORTADOR_PFJ_CODIGO,         --    28
                      EXPORTADOR_PFJ_ORIGEM,         --    29
                      EXPORTADOR_PFJ_CHAVE_ORIGEM,   --    30
                      EXPORTADOR_LOC_CODIGO,         --    31
                      EXPORTADOR_LOC_ORIGEM,          --    32
                      EXPORTADOR_LOC_CHAVE_ORIGEM   )--    33
                values
            ( L_DOF_IMP_NUM,                 -- 1
                      L_PFJ_CODIGO,                  -- 2
                      L_ORIGEM_PESSOA,               -- 3
                      L_PFJ_CODIGO,                  -- 4
                      TRIM(TRANSLATE(R.C_04_NUMERO_RE,TRANSLATE(R.C_04_NUMERO_RE,'1234567890',' '),' ')), -- 5
                      R.C_51_NUM_DDE_DSE,            -- 6
                      'EXPORTACAO',                  -- 7
                      null,                          -- 8
                      'M',                           -- 9
                      null,                          -- 10
                      null,                          -- 11
                      null,                          -- 12
                      R.C_52_DAT_DDE_DSE,            -- 13
                      R.C_03_DATA_RE,                -- 14
                      R.C_76_DATA_CONHEC_EMB,        -- 15
                  --  R.C_76_DATA_CONHEC_EMB,        -- 16     -- comentado em 03/dez/2012
                      R.C_55_DAT_AVERBACAO,          -- 16     -- alterado  em 03/dez/2012
                      'S',                           -- 17
                  --  l_NUM_CONHEC_EMB,              -- 18     -- comentado em 15/jan/2014
                  R.NUM_EMBARQUE,                -- 18     -- alterado  em 15/jan/2014
                      R.C_77_COD_TP_CONHEC,          -- 19
                      r.codigo_bc,                   -- 20
                      NULL,                          -- 21      R.C_51_NUM_DDE_DSE
                      TRUNC(sysdate),                -- 22
                      null,                          -- 23
                      'N',                           -- 24
                      null,                          -- 25
                      null,                          -- 26
                      null,                          -- 27
                      L_PFJ_CODIGO,                  -- 28
                      L_ORIGEM_PESSOA,               -- 29
                      L_PFJ_CODIGO,                  -- 30
                      L_LOC_CODIGO,   --L_PFJ_CODIGO,                  -- 31 -- Marcio Tott - 16.dez.2016 - Solic. Paulo Marchetti.
                      L_ORIGEM_PESSOA,               -- 32
                      L_LOC_CODIGO    --L_PFJ_CODIGO                   -- 33 -- Marcio Tott - 16.dez.2016 - Solic. Paulo Marchetti.
                    );

                l_cont := l_cont + 1;

            Exception
                when others then
                     raise_application_error(-20001,'Erro ins. tab. SYNITF_IMP_EXP '||sqlerrm);
            End;

        End LOOP;

        Commit;

        syn_out.put_line ('  Registros gerados: ' ||to_char(l_cont));
        syn_out.put_line ('  ');

End ACN_GERA_EXPORT;
/
