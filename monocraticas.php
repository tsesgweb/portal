<?php
   include(__DIR__ .'/inc/config.inc.php');
   $subnivel       = 'Conteúdo janela';
   $titulo         = 'Monocráticas';
   $asideinterna   = true;
   $maisvisitados  = true;
   include(__DIR__ .'/inc/header.inc.php');
   #include(__DIR__ .'/inc/imagem-topo.inc.php'); 
   ?>
    <div id="monocraticas-search">
        <div class="visualClear"></div>
        <div class="titulo">Pesquisa de decisões monocráticas</div>
        <div id="dsc-form-monocraticas-search">Abrange todas as decisões monocráticas do TSE a partir de sua publicação.</div>
        <form name="form-juris" id="form-juris" method="get" action="@@monocraticas-search">
            <input type="hidden" name="url" id="url">
            <div>
                <label>Pesquisa livre </label><input type="text" name="q" id="pesquisa_livre">
                <div class="borda">
                    <div>
                        <label> com a <strong>expressão</strong></label><input type="text" value="" name="as_epq" id="as_epq">
                    </div>
                    <div>
                        <label> com <strong>qualquer uma</strong> das palavras</label><input type="text" value="" name="as_oq" id="as_oq">
                    </div>
                    <div>
                        <label><strong>sem</strong> as palavras</label><input type="text" value="" name="as_eq" id="as_eq">
                    </div>
                </div>
                <div>
                    <label>Nº processo / decisão </label><input type="text" name="numero_decisao" id="numero_decisao">
                </div>
                <div>
                    <label>Relator(a) </label>
                    <select name="relator" id="relator">
               <option></option>
               <option value="ABNER CARNEIRO LEÃO VASCONCELOS|ABNER C. LEÃO VASCONCELOS">ABNER CARNEIRO LEÃO VASCONCELOS</option>
               <option value="ADMAR GONZAGA NETO|ADMAR GONZAGA">ADMAR GONZAGA NETO</option>
               <option value="AFFONSO CELSO|AFFONSO CELSO">AFFONSO CELSO</option>
               <option value="AFONSO PENNA JÚNIOR|AFONSO PENNA">AFONSO PENNA JÚNIOR</option>
               <option value="AFRÂNIO ANTÔNIO DA COSTA|AFRÂNIO ANTÔNIO DA COSTA">AFRÂNIO ANTÔNIO DA COSTA</option>
               <option value="ALDIR GUIMARÃES PASSARINHO|ALDIR GUIMARÃES PASSARINHO">ALDIR GUIMARÃES PASSARINHO</option>
               <option value="ALDIR GUIMARÃES PASSARINHO JUNIOR|ALDIR PASSARINHO JUNIOR">ALDIR GUIMARÃES PASSARINHO JUNIOR</option>
               <option value="ALEXANDRE DE MORAES|ALEXANDRE DE MORAES">ALEXANDRE DE MORAES</option>
               <option value="ALFRED BUZAID|ALFRED BUZAID">ALFRED BUZAID</option>
               <option value="ALFREDO LOUREIRO BERNARDES|ALFREDO LOUREIRO BERNARDES">ALFREDO LOUREIRO BERNARDES</option>
               <option value="ALFREDO MACHADO GUIMARÃES FILHO|ALFREDO MACHADO GUIMARÃES">ALFREDO MACHADO GUIMARÃES FILHO</option>
               <option value="AMARÍLIO AROLDO BENJAMIN DA SILVA|AMARÍLIO AROLDO B. DA SILVA">AMARÍLIO AROLDO BENJAMIN DA SILVA</option>
               <option value="AMÉRICO GODOY ILHA|AMÉRICO GODOY ILHA">AMÉRICO GODOY ILHA</option>
               <option value="AMÉRICO LUZ|AMERICO LUZ">AMÉRICO LUZ</option>
               <option value="ANTONIO CEZAR PELUSO|CEZAR PELUSO">ANTONIO CEZAR PELUSO</option>
               <option value="ANTONIO HERMAN DE VASCONCELLOS E BENJAMIN|HERMAN BENJAMIN">ANTONIO HERMAN DE VASCONCELLOS E BENJAMIN</option>
               <option value="ANTÔNIO CARLOS ELIZALDE OSÓRIO|ANTÔNIO CARLOS ELIZALDE OSÓRIO">ANTÔNIO CARLOS ELIZALDE OSÓRIO</option>
               <option value="ANTÔNIO CARLOS LAFAYETE DE ANDRADA|ANTÔNIO CARLOS L. DE ANDRADA">ANTÔNIO CARLOS LAFAYETE DE ANDRADA</option>
               <option value="ANTÔNIO DE PÁDUA RIBEIRO|ANTÔNIO DE PÁDUA RIBEIRO">ANTÔNIO DE PÁDUA RIBEIRO</option>
               <option value="ANTÔNIO GONÇALVES DE OLIVEIRA|ANTÔNIO GONÇALVES DE OLIVEIRA">ANTÔNIO GONÇALVES DE OLIVEIRA</option>
               <option value="ANTÔNIO JOAQUIM DE MACEDO SOARES|ANTÔNIO JOAQUIM DE MACEDO SOARES">ANTÔNIO JOAQUIM DE MACEDO SOARES</option>
               <option value="ANTÔNIO MARTINS VILLAS BOAS|VILLAS BOAS">ANTÔNIO MARTINS VILLAS BOAS</option>
               <option value="ANTÔNIO NEDER|ANTÔNIO NEDER">ANTÔNIO NEDER</option>
               <option value="ANTÔNIO SAMPAIO DÓRIA|ANTÔNIO SAMPAIO DÓRIA">ANTÔNIO SAMPAIO DÓRIA</option>
               <option value="ANTÔNIO TORREÃO BRAZ|ANTÔNIO TORREÃO BRAZ">ANTÔNIO TORREÃO BRAZ</option>
               <option value="ANTÔNIO VIEIRA BRAGA|ANTÔNIO VIEIRA BRAGA">ANTÔNIO VIEIRA BRAGA</option>
               <option value="ANTÔNIO VILAS BOAS TEIXEIRA DE CARVALHO|VILAS BOAS">ANTÔNIO VILAS BOAS TEIXEIRA DE CARVALHO</option>
               <option value="ARI PARGENDLER|ARI PARGENDLER">ARI PARGENDLER</option>
               <option value="ARMANDO LEITE ROLEMBERG|ARMANDO LEITE ROLEMBERG">ARMANDO LEITE ROLEMBERG</option>
               <option value="ARMANDO SAMPAIO COSTA|ARMANDO SAMPAIO COSTA">ARMANDO SAMPAIO COSTA</option>
               <option value="ARNALDO ESTEVES LIMA|ARNALDO ESTEVES LIMA">ARNALDO ESTEVES LIMA</option>
               <option value="ARNALDO VERSIANI LEITE SOARES|ARNALDO VERSIANI">ARNALDO VERSIANI LEITE SOARES</option>
               <option value="ARTHUR DE SOUSA MARINHO|ARTHUR DE SOUSA MARINHO">ARTHUR DE SOUSA MARINHO</option>
               <option value="ARTHUR RIBEIRO|ARTHUR RIBEIRO">ARTHUR RIBEIRO</option>
               <option value="ARTUR QUADROS COLARES MOREIRA|ARTUR QUADROS COLARES MOREIRA">ARTUR QUADROS COLARES MOREIRA</option>
               <option value="ARY DE AZEVEDO FRANCO|ARY DE AZEVEDO FRANCO">ARY DE AZEVEDO FRANCO</option>
               <option value="ATAULPHO DE PAIVA|ATAULPHO DE PAIVA">ATAULPHO DE PAIVA</option>
               <option value="AUGUSTO SABOYA DA SILVA LIMA|AUGUSTO SABOYA DA SILVA LIMA">AUGUSTO SABOYA DA SILVA LIMA</option>
               <option value="BENTO DE FARIA|BENTO DE FARIA">BENTO DE FARIA</option>
               <option value="C. MAXIMILIANO|C. MAXIMILIANO">C. MAXIMILIANO</option>
               <option value="CARLOS ALBERTO MADEIRA|CARLOS ALBERTO MADEIRA">CARLOS ALBERTO MADEIRA</option>
               <option value="CARLOS ALBERTO MENEZES DIREITO|CARLOS ALBERTO MENEZES DIREITO">CARLOS ALBERTO MENEZES DIREITO</option>
               <option value="CARLOS AUGUSTO AYRES DE FREITAS BRITTO|AYRES BRITTO">CARLOS AUGUSTO AYRES DE FREITAS BRITTO</option>
               <option value="CARLOS BASTIDE HORBACH|CARLOS HORBACH">CARLOS BASTIDE HORBACH</option>
               <option value="CARLOS EDUARDO CAPUTO BASTOS|CAPUTO BASTOS">CARLOS EDUARDO CAPUTO BASTOS</option>
               <option value="CARLOS EDUARDO DE BARROS BARRETO|CARLOS E. DE BARROS BARRETO">CARLOS EDUARDO DE BARROS BARRETO</option>
               <option value="CARLOS FULGÊNCIO DA CUNHA PEIXOTO|CARLOS F. DA CUNHA PEIXOTO">CARLOS FULGÊNCIO DA CUNHA PEIXOTO</option>
               <option value="CARLOS MÁRIO DA SILVA VELLOSO|CARLOS VELLOSO">CARLOS MÁRIO DA SILVA VELLOSO</option>
               <option value="CARLOS THOMPSON FLORES|CARLOS THOMPSON FLORES">CARLOS THOMPSON FLORES</option>
               <option value="CID FLAQUER SCARTEZZINI|FLAQUER SCARTEZZINI">CID FLAQUER SCARTEZZINI</option>
               <option value="CLÁUDIO PENNA LACOMBE|CLÁUDIO PENNA LACOMBE">CLÁUDIO PENNA LACOMBE</option>
               <option value="CLÓVIS RAMALHETE MAIA|CLÓVIS RAMALHETE MAIA">CLÓVIS RAMALHETE MAIA</option>
               <option value="COSTA MANSO|COSTA MANSO">COSTA MANSO</option>
               <option value="CÁRMEN LÚCIA ANTUNES ROCHA|CÁRMEN LÚCIA">CÁRMEN LÚCIA ANTUNES ROCHA</option>
               <option value="CÂNDIDO CERQUEIRA|CÂNDIDO CERQUEIRA">CÂNDIDO CERQUEIRA</option>
               <option value="CÂNDIDO COLOMBO CERQUEIRA|CÂNDIDO COLOMBO CERQUEIRA">CÂNDIDO COLOMBO CERQUEIRA</option>
               <option value="CÂNDIDO DE OLIVEIRA FILHO|CÂNDIDO DE OLIVEIRA FILHO">CÂNDIDO DE OLIVEIRA FILHO</option>
               <option value="CÂNDIDO MESQUITA DA CUNHA LOBO|CÂNDIDO MESQUITA DA CUNHA LOBO">CÂNDIDO MESQUITA DA CUNHA LOBO</option>
               <option value="CÂNDIDO MOTTA FILHO|CÂNDIDO MOTTA FILHO">CÂNDIDO MOTTA FILHO</option>
               <option value="CÉLIO DE OLIVEIRA BORJA|CELIO BORJA">CÉLIO DE OLIVEIRA BORJA</option>
               <option value="CÉLIO SILVA|CÉLIO SILVA">CÉLIO SILVA</option>
               <option value="DJACI ALVES FALCÃO|DJACI ALVES FALCÃO">DJACI ALVES FALCÃO</option>
               <option value="DJALMA TAVARES DA CUNHA MELLO|DJALMA TAVARES DA CUNHA MELLO">DJALMA TAVARES DA CUNHA MELLO</option>
               <option value="DÁRIO DE ALMEIDA MAGALHÃES|DÁRIO DE ALMEIDA MAGALHÃES">DÁRIO DE ALMEIDA MAGALHÃES</option>
               <option value="DÉCIO MEIRELLES DE MIRANDA|DÉCIO MEIRELLES DE MIRANDA">DÉCIO MEIRELLES DE MIRANDA</option>
               <option value="EDGAR COSTA|EDGAR COSTA">EDGAR COSTA</option>
               <option value="EDMUNDO DE MACEDO LUDOLF|EDMUNDO DE MACEDO LUDOLF">EDMUNDO DE MACEDO LUDOLF</option>
               <option value="EDSON CARVALHO VIDIGAL|EDSON VIDIGAL">EDSON CARVALHO VIDIGAL</option>
               <option value="EDUARDO ANDRADE RIBEIRO DE OLIVEIRA|EDUARDO RIBEIRO">EDUARDO ANDRADE RIBEIRO DE OLIVEIRA</option>
               <option value="EDUARDO ESPÍNOLA|EDUARDO ESPÍNOLA">EDUARDO ESPÍNOLA</option>
               <option value="ELIANA CALMON|ELIANA CALMON">ELIANA CALMON</option>
               <option value="ELLEN GRACIE NORTHFLEET|ELLEN GRACIE">ELLEN GRACIE NORTHFLEET</option>
               <option value="ELOY JOSÉ DA ROCHA|ELOY JOSÉ DA ROCHA">ELOY JOSÉ DA ROCHA</option>
               <option value="ENRIQUE RICARDO LEWANDOWSKI|RICARDO LEWANDOWSKI">ENRIQUE RICARDO LEWANDOWSKI</option>
               <option value="EROS ROBERTO GRAU|EROS GRAU">EROS ROBERTO GRAU</option>
               <option value="ESDRAS DA SILVA GUEIROS|ESDRAS DA SILVA GUEIROS">ESDRAS DA SILVA GUEIROS</option>
               <option value="EVANDRO GUEIROS LEITE|EVANDRO GUEIROS LEITE">EVANDRO GUEIROS LEITE</option>
               <option value="EVANDRO LINS E SILVA|EVANDRO LINS E SILVA">EVANDRO LINS E SILVA</option>
               <option value="FELIX FISCHER|FELIX FISCHER">FELIX FISCHER</option>
               <option value="FERNANDO GONÇALVES|FERNANDO GONÇALVES">FERNANDO GONÇALVES</option>
               <option value="FERNANDO NEVES DA SILVA|FERNANDO NEVES">FERNANDO NEVES DA SILVA</option>
               <option value="FIRMINO FERREIRA PAZ|FIRMINO FERREIRA PAZ">FIRMINO FERREIRA PAZ</option>
               <option value="FRANCISCO CARNEIRO MONTEIRO DE SALLES|FRANCISCO CARNEIRO">FRANCISCO CARNEIRO MONTEIRO DE SALLES</option>
               <option value="FRANCISCO CESAR ASFOR ROCHA|CESAR ASFOR ROCHA">FRANCISCO CESAR ASFOR ROCHA</option>
               <option value="FRANCISCO DE PAULA ROCHA LAGOA FILHO|FRANCISCO DE PAULA R. LAGOA F.">FRANCISCO DE PAULA ROCHA LAGOA FILHO</option>
               <option value="FRANCISCO MANOEL XAVIER DE ALBUQUERQUE|FRANCISCO M. X. DE ALBUQUERQUE">FRANCISCO MANOEL XAVIER DE ALBUQUERQUE</option>
               <option value="FRANCISCO PEÇANHA MARTINS|FRANCISCO PEÇANHA MARTINS">FRANCISCO PEÇANHA MARTINS</option>
               <option value="FRANCISCO SÁ FILHO|FRANCISCO SÁ FILHO">FRANCISCO SÁ FILHO</option>
               <option value="FREDERICO SUSSEKIND|FREDERICO SUSSEKIND">FREDERICO SUSSEKIND</option>
               <option value="FÁTIMA NANCY ANDRIGHI|NANCY ANDRIGHI">FÁTIMA NANCY ANDRIGHI</option>
               <option value="GERALDO OG NICÉAS MARQUES FERNANDES|GERALDO OG NICEAS MARQUES FERNANDES">GERALDO OG NICÉAS MARQUES FERNANDES</option>
               <option value="GILMAR FERREIRA MENDES|GILMAR MENDES">GILMAR FERREIRA MENDES</option>
               <option value="GILSON LANGARO DIPP|GILSON DIPP">GILSON LANGARO DIPP</option>
               <option value="GUILHERME ESTELLITA|GUILHERME ESTELLITA">GUILHERME ESTELLITA</option>
               <option value="HAHNEMANN GUIMARÃES|HAHNEMANN GUIMARÃES">HAHNEMANN GUIMARÃES</option>
               <option value="HAMILTON CARVALHIDO|HAMILTON CARVALHIDO">HAMILTON CARVALHIDO</option>
               <option value="HAROLDO TEIXEIRA VALLADÃO|HAROLDO TEIXEIRA VALLADÃO">HAROLDO TEIXEIRA VALLADÃO</option>
               <option value="HENOCK DA SILVA REIS|HENOCK DA SILVA REIS">HENOCK DA SILVA REIS</option>
               <option value="HENRIQUE AUGUSTO DINIZ DE ANDRADA|HENRIQUE A. DINIZ DE ANDRADA">HENRIQUE AUGUSTO DINIZ DE ANDRADA</option>
               <option value="HENRIQUE NEVES DA SILVA|HENRIQUE NEVES DA SILVA">HENRIQUE NEVES DA SILVA</option>
               <option value="HERMENEGILDO DE BARROS|HERMENEGILDO DE BARROS">HERMENEGILDO DE BARROS</option>
               <option value="HERMENEGILDO RODRIGUES DE BARROS|HERMENEGILDO RODRIGUES">HERMENEGILDO RODRIGUES DE BARROS</option>
               <option value="HERMES LIMA|HERMES LIMA">HERMES LIMA</option>
               <option value="HUGO AULER|HUGO AULER">HUGO AULER</option>
               <option value="HUGO GUEIROS BERNARDES|HUGO GUEIROS">HUGO GUEIROS BERNARDES</option>
               <option value="HUMBERTO EUSTÁQUIO SOARES MARTINS|HUMBERTO MARTINS">HUMBERTO EUSTÁQUIO SOARES MARTINS</option>
               <option value="HUMBERTO GOMES DE BARROS|GOMES DE BARROS">HUMBERTO GOMES DE BARROS</option>
               <option value="HÉLIO PROENÇA DOYLE|HÉLIO PROENÇA DOYLE">HÉLIO PROENÇA DOYLE</option>
               <option value="ILDEFONSO MASCARENHAS DA SILVA|ILDEFONSO MASCARENHAS DA SILVA">ILDEFONSO MASCARENHAS DA SILVA</option>
               <option value="ILMAR NASCIMENTO GALVÃO|ILMAR GALVÃO">ILMAR NASCIMENTO GALVÃO</option>
               <option value="INÁCIO MOACIR CATUNDA MARTINS|INÁCIO MOACIR CATUNDA MARTINS">INÁCIO MOACIR CATUNDA MARTINS</option>
               <option value="JACY GARCIA VIEIRA|GARCIA VIEIRA">JACY GARCIA VIEIRA</option>
               <option value="JARBAS DOS SANTOS NOBRE|JARBAS DOS SANTOS NOBRE">JARBAS DOS SANTOS NOBRE</option>
               <option value="JAYME LANDIN FERREIRA|JAYME LANDIN FERREIRA">JAYME LANDIN FERREIRA</option>
               <option value="JESUS COSTA LIMA|JESUS COSTA LIMA">JESUS COSTA LIMA</option>
               <option value="JOAQUIM BENEDITO BARBOSA GOMES|JOAQUIM BARBOSA">JOAQUIM BENEDITO BARBOSA GOMES</option>
               <option value="JOAQUIM DE TOLEDO PIZO E ALMEIDA|JOAQUIM DE TOLEDO PIZO E ALMEIDA">JOAQUIM DE TOLEDO PIZO E ALMEIDA</option>
               <option value="JOAQUIM LUSTOSA SOBRINHO|JOAQUIM LUSTOSA SOBRINHO">JOAQUIM LUSTOSA SOBRINHO</option>
               <option value="JOELSON COSTA DIAS|JOELSON DIAS">JOELSON COSTA DIAS</option>
               <option value="JORGE LAFAYETTE GUIMARÃES|JORGE LAFAYETTE GUIMARÃES">JORGE LAFAYETTE GUIMARÃES</option>
               <option value="JORGE MUSSI|JORGE MUSSI">JORGE MUSSI</option>
               <option value="JOSE LINHARES|JOSÉ LINHARES">JOSE LINHARES</option>
               <option value="JOSÉ ANTÔNIO DIAS TOFFOLI|DIAS TOFFOLI">JOSÉ ANTÔNIO DIAS TOFFOLI</option>
               <option value="JOSÉ ANTÔNIO NOGUEIRA|JOSÉ ANTÔNIO NOGUEIRA">JOSÉ ANTÔNIO NOGUEIRA</option>
               <option value="JOSÉ ARNALDO DA FONSECA|JOSÉ ARNALDO">JOSÉ ARNALDO DA FONSECA</option>
               <option value="JOSÉ AUGUSTO DELGADO|JOSÉ DELGADO">JOSÉ AUGUSTO DELGADO</option>
               <option value="JOSÉ BONIFÁCIO DINIZ DE ANDRADA|DINIZ DE ANDRADA">JOSÉ BONIFÁCIO DINIZ DE ANDRADA</option>
               <option value="JOSÉ CARLOS MOREIRA ALVES|MOREIRA ALVES">JOSÉ CARLOS MOREIRA ALVES</option>
               <option value="JOSÉ CELSO DE MELLO FILHO|CELSO DE MELLO">JOSÉ CELSO DE MELLO FILHO</option>
               <option value="JOSÉ COLOMBO DE SOUSA|JOSÉ COLOMBO DE SOUSA">JOSÉ COLOMBO DE SOUSA</option>
               <option value="JOSÉ CÂNDIDO DE CARVALHO FILHO|JOSE CANDIDO">JOSÉ CÂNDIDO DE CARVALHO FILHO</option>
               <option value="JOSÉ DE CASTRO MEIRA|CASTRO MEIRA">JOSÉ DE CASTRO MEIRA</option>
               <option value="JOSÉ DE JESUS FILHO|JOSÉ DE JESUS">JOSÉ DE JESUS FILHO</option>
               <option value="JOSÉ DE MIRANDA VALVERDE|JOSÉ DE MIRANDA VALVERDE">JOSÉ DE MIRANDA VALVERDE</option>
               <option value="JOSÉ DUARTE GONÇALVES DA ROCHA|JOSÉ DUARTE GONÇALVES DA ROCHA">JOSÉ DUARTE GONÇALVES DA ROCHA</option>
               <option value="JOSÉ EDUARDO RANGEL DE ALCKMIN|EDUARDO ALCKMIN">JOSÉ EDUARDO RANGEL DE ALCKMIN</option>
               <option value="JOSÉ FERNANDES DANTAS|JOSÉ FERNANDES DANTAS">JOSÉ FERNANDES DANTAS</option>
               <option value="JOSÉ FRANCISCO BOSELLI|JOSÉ FRANCISCO BOSELLI">JOSÉ FRANCISCO BOSELLI</option>
               <option value="JOSÉ FRANCISCO REZEK|FRANCISCO REZEK">JOSÉ FRANCISCO REZEK</option>
               <option value="JOSÉ GERALDO RODRIGUES DE ALCKMIN|JOSÉ GERALDO R. DE ALCKMIN">JOSÉ GERALDO RODRIGUES DE ALCKMIN</option>
               <option value="JOSÉ GERARDO GROSSI|GERARDO GROSSI">JOSÉ GERARDO GROSSI</option>
               <option value="JOSÉ GUILHERME VILLELA|JOSÉ GUILHERME VILLELA">JOSÉ GUILHERME VILLELA</option>
               <option value="JOSÉ JOAQUIM MOREIRA RABELLO|JOSÉ JOAQUIM MOREIRA RABELLO">JOSÉ JOAQUIM MOREIRA RABELLO</option>
               <option value="JOSÉ MARIA DE SOUZA ANDRADE|JOSÉ MARIA DE SOUZA ANDRADE">JOSÉ MARIA DE SOUZA ANDRADE</option>
               <option value="JOSÉ MATOS PEIXOTO|JOSÉ MATOS PEIXOTO">JOSÉ MATOS PEIXOTO</option>
               <option value="JOSÉ NERI DA SILVEIRA|NÉRI DA SILVEIRA">JOSÉ NERI DA SILVEIRA</option>
               <option value="JOSÉ OVÍDIO MARCONDES ROMEIRO|JOSÉ OVÍDIO MARCONDES ROMEIRO">JOSÉ OVÍDIO MARCONDES ROMEIRO</option>
               <option value="JOSÉ PAULO SEPÚLVEDA PERTENCE|SEPÚLVEDA PERTENCE">JOSÉ PAULO SEPÚLVEDA PERTENCE</option>
               <option value="JOSÉ SORIANO DE SOUZA FILHO|JOSÉ SORIANO DE SOUZA">JOSÉ SORIANO DE SOUZA FILHO</option>
               <option value="JOSÉ THOMAZ DA CUNHA VASCONCELLOS FILHO|JOSÉ THOMAZ DA C. V. FILHOS">JOSÉ THOMAZ DA CUNHA VASCONCELLOS FILHO</option>
               <option value="JOÃO BAPTISTA CORDEIRO GUERRA|JOÃO BAPTISTA CORDEIRO GUERRA">JOÃO BAPTISTA CORDEIRO GUERRA</option>
               <option value="JOÃO CHRISÓSTOMO DA ROCHA CABRAL|JOÃO CHRISÓSTOMO DA ROCHA">JOÃO CHRISÓSTOMO DA ROCHA CABRAL</option>
               <option value="JOÃO HENRIQUE BRAUNE|JOÃO HENRIQUE BRAUNE">JOÃO HENRIQUE BRAUNE</option>
               <option value="JOÃO LEITÃO DE ABREU|JOÃO LEITÃO DE ABREU">JOÃO LEITÃO DE ABREU</option>
               <option value="JOÃO MARTINS DE CARVALHO MOURÃO|JOÃO MARTINS DE CARVALHO">JOÃO MARTINS DE CARVALHO MOURÃO</option>
               <option value="JOÃO OTÁVIO DE NORONHA|JOÃO OTÁVIO DE NORONHA">JOÃO OTÁVIO DE NORONHA</option>
               <option value="JÚLIO DE OLIVEIRA SOBRINHO|JÚLIO DE OLIVEIRA SOBRINHO">JÚLIO DE OLIVEIRA SOBRINHO</option>
               <option value="LAUDO DE CAMARGO|LAUDO DE CAMARGO">LAUDO DE CAMARGO</option>
               <option value="LAURITA HILÁRIO VAZ|LAURITA VAZ">LAURITA HILÁRIO VAZ</option>
               <option value="LAURO FRANCO LEITÃO|LAURO FRANCO LEITÃO">LAURO FRANCO LEITÃO</option>
               <option value="LUCIANA CHRISTINA GUIMARÃES LÓSSIO|LUCIANA LÓSSIO">LUCIANA CHRISTINA GUIMARÃES LÓSSIO</option>
               <option value="LUIS FELIPE SALOMÃO|LUIS FELIPE SALOMÃO">LUIS FELIPE SALOMÃO</option>
               <option value="LUIZ CARLOS LOPES MADEIRA|LUIZ CARLOS MADEIRA">LUIZ CARLOS LOPES MADEIRA</option>
               <option value="LUIZ EDSON FACHIN|EDSON FACHIN">LUIZ EDSON FACHIN</option>
               <option value="LUIZ FUX|LUIZ FUX">LUIZ FUX</option>
               <option value="LUIZ OCTÁVIO P. E ALBUQUERQUE GALLOTTI|Octávio Gallotti">LUIZ OCTÁVIO P. E ALBUQUERQUE GALLOTTI</option>
               <option value="LUIZ OTAVIO GALLOTTI|LUIZ GALLOTTI">LUIZ OTAVIO GALLOTTI</option>
               <option value="LUIZ RAFAEL MAYER|LUIZ RAFAEL MAYER">LUIZ RAFAEL MAYER</option>
               <option value="LUIZ VICENTE CERNICCHIARO|VICENTE CERNICCHIARO">LUIZ VICENTE CERNICCHIARO</option>
               <option value="LUÍS ROBERTO BARROSO|LUÍS ROBERTO BARROSO">LUÍS ROBERTO BARROSO</option>
               <option value="MARCELO HENRIQUES RIBEIRO DE OLIVEIRA|MARCELO RIBEIRO">MARCELO HENRIQUES RIBEIRO DE OLIVEIRA</option>
               <option value="MARCO AURÉLIO MENDES DE FARIAS MELLO|MARCO AURÉLIO">MARCO AURÉLIO MENDES DE FARIAS MELLO</option>
               <option value="MARIA THEREZA ROCHA DE ASSIS MOURA|MARIA THEREZA DE ASSIS MOURA">MARIA THEREZA ROCHA DE ASSIS MOURA</option>
               <option value="MAURO CAMPBELL MARQUES|MAURO CAMPBELL MARQUES">MAURO CAMPBELL MARQUES</option>
               <option value="MAURÍCIO JOSÉ CORRÊA|MAURÍCIO CORRÊA">MAURÍCIO JOSÉ CORRÊA</option>
               <option value="MIGUEL JERONYMO FERRANTE|MIGUEL JERONYMO FERRANTE">MIGUEL JERONYMO FERRANTE</option>
               <option value="MIGUEL SEABRA FAGUNDES|MIGUEL SEABRA FAGUNDES">MIGUEL SEABRA FAGUNDES</option>
               <option value="MILTON SEBASTIÃO BARBOSA|MILTON SEBASTIÃO BARBOSA">MILTON SEBASTIÃO BARBOSA</option>
               <option value="MOACYR AMARAL SANTOS|MOACYR AMARAL SANTOS">MOACYR AMARAL SANTOS</option>
               <option value="MÁRCIO RIBEIRO|MÁRCIO RIBEIRO">MÁRCIO RIBEIRO</option>
               <option value="MÁRIO GUIMARÃES|MÁRIO GUIMARÃES">MÁRIO GUIMARÃES</option>
               <option value="MÁRIO GUIMARÃES FERNANDES PINHEIRO|MÁRIO GUIMARÃES F. PINHEIRO">MÁRIO GUIMARÃES FERNANDES PINHEIRO</option>
               <option value="NAPOLEÃO NUNES MAIA FILHO|NAPOLEÃO NUNES MAIA FILHO">NAPOLEÃO NUNES MAIA FILHO</option>
               <option value="NELSON AZEVEDO JOBIM|NELSON JOBIM">NELSON AZEVEDO JOBIM</option>
               <option value="NELSON HUNGRIA HOUFFBANER|NELSON HUNGRIA HOUFFBANER">NELSON HUNGRIA HOUFFBANER</option>
               <option value="NERY KURTZ|NERY KURTZ">NERY KURTZ</option>
               <option value="NILSON VITAL NAVES|NILSON NAVES">NILSON VITAL NAVES</option>
               <option value="OCTÁVIO KELLY|OCTÁVIO KELLY">OCTÁVIO KELLY</option>
               <option value="OLAVO BILAC PINTO|OLAVO BILAC PINTO">OLAVO BILAC PINTO</option>
               <option value="ORLANDO MIRANDA DE ARAGÃO|ORLANDO MIRANDA DE ARAGÃO">ORLANDO MIRANDA DE ARAGÃO</option>
               <option value="OSCAR DIAS CORRÊA|OSCAR DIAS CORRÊA">OSCAR DIAS CORRÊA</option>
               <option value="OSCAR SARAIVA|OSCAR SARAIVA">OSCAR SARAIVA</option>
               <option value="OSWALDO TRIGUEIRO DE ALBUQUERQUE MELO|OSWALDO TRIGUEIRO DE A. MELO">OSWALDO TRIGUEIRO DE ALBUQUERQUE MELO</option>
               <option value="OTTO ROCHA|OTTO ROCHA">OTTO ROCHA</option>
               <option value="PAULO BROSSARD|PAULO BROSSARD">PAULO BROSSARD</option>
               <option value="PAULO LAITANO TÁVORA|PAULO LAITANO TÁVORA">PAULO LAITANO TÁVORA</option>
               <option value="PAULO ROBERTO SARAIVA DA COSTA LEITE|COSTA LEITE">PAULO ROBERTO SARAIVA DA COSTA LEITE</option>
               <option value="PEDRO AUGUSTO DE FREITAS GORDILHO|PEDRO AUGUSTO DE F. GORDILHO">PEDRO AUGUSTO DE FREITAS GORDILHO</option>
               <option value="PEDRO DA ROCHA ACIOLI|PEDRO ACIOLI">PEDRO DA ROCHA ACIOLI</option>
               <option value="PEDRO PAULO PENA E COSTA|PEDRO PAULO PENA E COSTA">PEDRO PAULO PENA E COSTA</option>
               <option value="PEDRO RODOVALHO MARCONDES CHAVES|PEDRO RODOVALHO M. CHAVES">PEDRO RODOVALHO MARCONDES CHAVES</option>
               <option value="PEDRO SOARES MUNOZ|PEDRO SOARES MUÑOZ">PEDRO SOARES MUNOZ</option>
               <option value="PLÍNIO DE CASTRO CASADO|PLÍNIO DE CASTRO CASADO">PLÍNIO DE CASTRO CASADO</option>
               <option value="PLÍNIO DE FREITAS TRAVASSOS|PLÍNIO DE FREITAS TRAVASSOS">PLÍNIO DE FREITAS TRAVASSOS</option>
               <option value="PLÍNIO PINHEIRO GUIMARÃES|PLÍNIO PINHEIRO GUIMARÃES">PLÍNIO PINHEIRO GUIMARÃES</option>
               <option value="PRUDENTE DE MORAIS FILHO|PRUDENTE DE MORAIS FILHO">PRUDENTE DE MORAIS FILHO</option>
               <option value="RAPHAEL DE BARROS MONTEIRO|RAPHAEL DE BARROS MONTEIRO">RAPHAEL DE BARROS MONTEIRO</option>
               <option value="RAPHAEL DE BARROS MONTEIRO FILHO|BARROS MONTEIRO">RAPHAEL DE BARROS MONTEIRO FILHO</option>
               <option value="RENATO DE CARVALHO TAVARES|RENATO DE CARVALHO TAVARES">RENATO DE CARVALHO TAVARES</option>
               <option value="RIBEIRO DA COSTA|RIBEIRO DA COSTA">RIBEIRO DA COSTA</option>
               <option value="ROBERTO FERREIRA ROSAS|ROBERTO FERREIRA ROSAS">ROBERTO FERREIRA ROSAS</option>
               <option value="ROMILDO BUENO DE SOUZA|BUENO DE SOUZA">ROMILDO BUENO DE SOUZA</option>
               <option value="ROSA MARIA PIRES WEBER|ROSA WEBER">ROSA MARIA PIRES WEBER</option>
               <option value="RUY NUNES PEREIRA|RUY NUNES PEREIRA">RUY NUNES PEREIRA</option>
               <option value="SABOIA LIMA|SABOIA LIMA">SABOIA LIMA</option>
               <option value="SAMUEL ALVAREZ PUENTES|SAMUEL ALVAREZ PUENTES">SAMUEL ALVAREZ PUENTES</option>
               <option value="SEBASTIÃO REIS|SEBASTIÃO REIS">SEBASTIÃO REIS</option>
               <option value="SIDNEY SANCHES|SYDNEY SANCHES">SIDNEY SANCHES</option>
               <option value="SÁLVIO DE FIGUEIREDO TEIXEIRA|SÁLVIO DE FIGUEIREDO">SÁLVIO DE FIGUEIREDO TEIXEIRA</option>
               <option value="SÉRGIO GONZAGA DUTRA|SÉRGIO GONZAGA DUTRA">SÉRGIO GONZAGA DUTRA</option>
               <option value="SÉRGIO SILVEIRA BANHOS|SÉRGIO BANHOS">SÉRGIO SILVEIRA BANHOS</option>
               <option value="TARCISIO VIEIRA DE CARVALHO NETO|TARCISIO VIEIRA DE CARVALHO NETO">TARCISIO VIEIRA DE CARVALHO NETO</option>
               <option value="TEORI ALBINO ZAVASCKI|TEORI ZAVASCKI">TEORI ALBINO ZAVASCKI</option>
               <option value="THEMISTOCLES BRANDÃO CAVALCANTI|THEMISTOCLES B. CAVALCANTI">THEMISTOCLES BRANDÃO CAVALCANTI</option>
               <option value="TORQUATO LORENA JARDIM|TORQUATO JARDIM">TORQUATO LORENA JARDIM</option>
               <option value="VASCO HENRIQUE D'AVILA|VASCO HENRIQUE D'AVILA">VASCO HENRIQUE D'AVILA</option>
               <option value="VICTOR NUNES LEAL|VICTOR NUNES LEAL">VICTOR NUNES LEAL</option>
               <option value="WALDEMAR DO REGO FALCÃO|WALDEMAR DO REGO FALCÃO">WALDEMAR DO REGO FALCÃO</option>
               <option value="WALDEMAR ZVEITER|WALDEMAR ZVEITER">WALDEMAR ZVEITER</option>
               <option value="WALTER JOSÉ DE MEDEIROS|WALTER MEDEIROS">WALTER JOSÉ DE MEDEIROS</option>
               <option value="WALTER RAMOS DA COSTA PORTO|COSTA PORTO">WALTER RAMOS DA COSTA PORTO</option>
               <option value="WASHINGTON BOLÍVAR DE BRITO|WASHINGTON BOLÍVAR DE BRITO">WASHINGTON BOLÍVAR DE BRITO</option>
               <option value="WILLIAM PATTERSON|WILLIAM PATTERSON">WILLIAM PATTERSON</option>
               <option value="WILSON GONÇALVES|WILSON GONÇALVES">WILSON GONÇALVES</option>
               <option value="ÁLVARO MOUTINHO RIBEIRO DA COSTA|ÁLVARO MOUTINHO RIBEIRO">ÁLVARO MOUTINHO RIBEIRO DA COSTA</option>
               <option value="ÁLVARO PEÇANHA MARTINS|ÁLVARO PEÇANHA MARTINS">ÁLVARO PEÇANHA MARTINS</option>
            </select>
                </div>
                <div>
                    <label>Data</label><input type="text" name="data_inicial" id="data_inicial" class="validate[required] data datepicker"> a
                    <input type="text" name="data_final" id="data_final" class="validate[required] data datepicker">
                    <select name="tipo_doc" id="tipo_doc">
               <option value="dtdec">Decisão</option>
               <option value="dtpub">Publicação</option>
            </select>
                </div>
                <div style="margin-left:214px;">
                    <input type="checkbox" id="somente_pje" name="somente_pje" value="pje"> Pesquisar somente decisões do PJE
                </div>
                <div class="botoes">
                    <input id="enviar" value="Pesquisar" type="submit"><input class="limpar" type="reset" value="Limpar">
                </div>
            </div>
        </form>
    </div> 
    <?php include __DIR__ . '/inc/footer.inc.php';?>