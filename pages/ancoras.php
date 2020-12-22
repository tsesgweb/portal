<?php
include 'config.inc.php';
$titulo = 'Organograma';
$asideinterna = true;
include BASE_URL .'/includes/header.inc.php';
?>
<section id="texto-conteudo">
    <div class="center">
        <img src="http://www.tse.jus.br/imagens/imagens/organograma-tse-2018-08-16/image" usemap="#Map" />
        <map id="Map" name="Map">
            <area shape="rect" coords="295,10,415,61" href="#PRES" />
            <area shape="rect" coords="10,67,132,118" href="http://www.tse.jus.br/o-tse/ministros/apresentacao" />
            <area shape="rect" coords="9,140,132,190" href="#GABMIN" />
            <area shape="rect" coords="206,113,334,167" href="#GABPRES" />
            <area shape="rect" coords="381,112,518,165" href="#EJE" />
            <area shape="rect" coords="549,127,720,176" href="#CGE" />
            <area shape="rect" coords="546,195,721,248" href="#ACTSE" />
            <area shape="rect" coords="545,263,721,327" href="#ASEPA" />
            <area shape="rect" coords="106,391,243,444" href="#SPR" />
            <area shape="rect" coords="479,387,615,441" href="#SEC" />
            <area shape="rect" coords="14,475,156,528" href="#ACP" />
            <area shape="rect" coords="194,476,335,526" href="#ASCOM" />
            <area shape="rect" coords="387,475,530,526" href="#GABDG" />
            <area shape="rect" coords="385,552,527,609" href="#ANP" />
            <area shape="rect" coords="14,557,155,608" href="#ASPLEN" />
            <area shape="rect" coords="191,555,337,608" href="#AIN" />
            <area shape="rect" coords="12,634,154,687" href="#ASPAR" />
            <area shape="rect" coords="194,635,336,687" href="#ASESP" />
            <area shape="rect" coords="13,716,153,767" href="#OUV" />
            <area shape="rect" coords="195,716,334,766" href="#SJD" />
            <area shape="rect" coords="570,551,711,609" href="#AGE" />
            <area shape="rect" coords="568,474,709,528" href="#ASJUR" />
            <area shape="rect" coords="125,1120,232,1225" href="#SCI" />
            <area shape="rect" coords="14,797,157,845" href="#PESQUISA" />
            <area shape="rect" coords="192,796,335,847" href="#SUBSTITUTOS" />
            <area shape="rect" coords="15,877,155,930" href="#ASPJE" />
            <area shape="rect" coords="621,1015,722,1096" href="#STI" />
            <area shape="rect" coords="520,1016,621,1097" href="#SST" />
            <area shape="rect" coords="416,1017,517,1098" href="#SOF" />
            <area shape="rect" coords="314,1017,415,1098" href="#SGP" />
            <area shape="rect" coords="210,1017,311,1098" href="#SGI" />
            <area shape="rect" coords="107,1016,208,1097" href="#SCI" />
            <area shape="rect" coords="1,1015,102,1096" href="#SAD" />
        </map>
    </div>
    <div class="todasUnidades">
        <div class="unidadePresidencia">
            <h2 id="PRES">Presidência</h2>
            <div id="estrutura_simples_presidencia">
                <h4 class="topico">Presidente: Ministra Rosa Weber</h4>
            </div>
            <div class="estrutura_spr">
                <h4 class="topico">Secretaria-Geral da Presidência (SPR)</h4>
                <p class="marcador">Secretário-Geral da Presidência: Estêvão André Cardoso Waterloo</p>
                <p class="marcador">Telefone: (61) 3030-7037/7151</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:presidencia@tse.jus.br">presidencia@tse.jus.br</a></p>
            </div>
            <a id="GABPRES"></a>
            <div id="estrutura_gabpres">
                <h4 class="topico">Gabinete da Presidência (GAB-PRES)</h4>
                <p class="marcador">Assessora-Chefe: Renata Dallposso de Azevedo</p>
                <p class="marcador">Telefone: (61) 3030-7151/7037</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:presidencia@tse.jus.br">presidencia@tse.jus.br</a></p>
            </div>

        </div>
        <div class="unidadeMinistros">
            <h2 id="GABMIN">Gabinetes </h2>

            <div id="estrutura_gab_stf_1">
                <h4 class="topico">Gabinete da Ministra Rosa Weber (Presidente)</h4>
                <p class="marcador">Assessora-Chefe: Renata Dallposso de Azevedo</p>
                <p class="marcador">Telefone: (61) 3030-7151/7037</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:presidencia@tse.jus.br">presidencia@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_stf_2">
                <h4 class="topico">Gabinete do Ministro Luís Roberto Barroso (Vice-Presidente)</h4>
                <p class="marcador">Assessora-Chefe: Aline Osorio</p>
                <p class="marcador">Telefone: (61) 3030-7155/7156</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:audienciamlrb@tse.jus.br">audienciamlrb@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_stf_3">
                <h4 class="topico">Gabinete do Ministro Edson Fachin</h4>
                <p class="marcador">Assessora-Chefe: Raquel S. M. Coutinho</p>
                <p class="marcador">Telefone: 3030-7419/7195</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gab.edsonfachin@tse.jus.br">gab.edsonfachin@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_stj_1">
                <h4 class="topico">Gabinete do Ministro Jorge Mussi (Corregedor)</h4>
                <p class="marcador">Assessor-Chefe: Manoel José Ferreira Nunes Filho</p>
                <p class="marcador">Telefone: (61) 3030-7404/7403</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gmjm@tse.jus.br">gmjm@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_stj_2">
                <h4 class="topico">Gabinete do Ministro Og Fernandes</h4>
                <p class="marcador">Assessora-Chefe: Liana Pedroso Dias Dourado de Carvalho</p>
                <p class="marcador">Telefone: (61) 3030-7502/7482</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gab.og.fernandes@tse.jus.br">gab.og.fernandes@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_jur_1">
                <h4 class="topico">Gabinete do Ministro Sérgio Silveira Banhos</h4>
                <p class="marcador">Assessor-Chefe: Eilzon Teotônio Almeida</p>
                <p class="marcador">Telefone: (61) 3030-7777</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gab.sb@tse.jus.br">gab.sb@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gab_jur_2">
                <h4 class="topico">Gabinete do Ministro Tarcisio Vieira de Carvalho Neto</h4>
                <p class="marcador">Assessor-Chefe: Kleber Lacerda Filgueiras Tavares</p>
                <p class="marcador">Telefone: (61) 3030-7606/7607/7597</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gab.tvc@tse.jus.br">gab.tvc@tse.jus.br</a></p>
            </div>


        </div>
        <div class="unidadeEJE">
            <a id="EJE"></a>
            <div id="estrutura_avulsa_eje">
                <h4 class="topico">Escola Judiciária Eleitoral (EJE)</h4>
                <p class="marcador">Diretor: Flávio Pansieri</p>
                <p class="marcador">Assessor-Chefe: Rene Erick Sampar</p>
                <p class="marcador">Telefone: (61) 3030-7474</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:eje.tse@tse.jus.br">eje.tse@tse.jus.br</a></p>
            </div>
        </div>
        <div class="unidadeCGE">
            <a id="CGE"></a>
            <div id="estrutura_cge">
                <h4 class="topico">Corregedoria-Geral da Justiça Eleitoral (CGE)</h4>
                <p class="marcador">Corregedor-Geral da Justiça Eleitoral: Ministro Jorge Mussi</p>
                <p class="marcador">Telefone: (61) 3030-7431</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cge@tse.jus.br">cge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_scg">
                <h4 class="topico">Secretaria da Corregedoria-Geral da Justiça Eleitoral (SCG)</h4>
                <p class="marcador">Secretária: Márcia Magliano Pontes</p>
                <p class="marcador">Telefone: (61) 3030-7427</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cge@tse.jus.br">cge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gabcge">
                <h4 class="topico">Gabinete (GAB-CGE)</h4>
                <p class="marcador">Assistente: Marília Carrilho Braz</p>
                <p class="marcador">Telefone: (61) 3030-7431</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cge@tse.jus.br">cge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_ascge">
                <h4 class="topico">Assessoria (ASCGE)</h4>
                <p class="marcador">Assessora: Sonja Maiara Martins de Oliveira</p>
                <p class="marcador">Telefone: (61) 3030-7454</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:ascge@tse.jus.br">ascge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_coaju">
                <h4 class="topico">Coordenadoria de Assuntos Judiciários (Coaju)</h4>
                <p class="marcador">Coordenador: Sergio Dias Cardoso</p>
                <p class="marcador">Telefone: (61) 3030-7446</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:coaju@tse.jus.br">coaju@tse.jus.br</a></p>
            </div>
            <div id="estrutura_seaa">
                <h4 class="topico">Seção de Análise e Acompanhamento (Seaa)</h4>
                <p class="marcador">Titular: Valério de Carvalho dos Anjos</p>
                <p class="marcador">Telefone: (61) 3030-7436</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:coaju@tse.jus.br">coaju@tse.jus.br</a></p>
            </div>
            <div id="estrutura_sepc">
                <h4 class="topico">Seção de Procedimentos Cartorários (SEPC)</h4>
                <p class="marcador">Titular: André Ferreira Laterza</p>
                <p class="marcador">Telefone: (61) 3030-7442</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:coaju@tse.jus.br">coaju@tse.jus.br</a></p>
            </div>
            <div id="estrutura_cfcad">
                <h4 class="topico">Coordenadoria de Fiscalização de Cadastro (CFCAD)</h4>
                <p class="marcador">Coordenadora: Adriana Maria Leal Meneses</p>
                <p class="marcador">Telefone: (61) 3030-7433</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cfcad@tse.jus.br">cfcad@tse.jus.br</a></p>
            </div>
            <div id="estrutura_sedp">
                <h4 class="topico">Seção de Direitos Políticos (SEDP)</h4>
                <p class="marcador">Titular: Giselle Pereira Sales</p>
                <p class="marcador">Telefone: (61) 3030-7459</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cge@tse.jus.br">cge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_sers">
                <h4 class="topico">Seção de Regularização de Situação Eleitoral (Sers)</h4>
                <p class="marcador">Titular: Fabrício José de Souza</p>
                <p class="marcador">Telefone: (61) 3030-7463</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cge@tse.jus.br">cge@tse.jus.br</a></p>
            </div>
            <div id="estrutura_csori">
                <h4 class="topico">Coordenadoria de Supervisão e Orientação (Csori)</h4>
                <p class="marcador">Coordenador: Carlos Leonardo S. Santos</p>
                <p class="marcador">Telefone: (61) 3030-7426</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:csori@tse.jus.br">csori@tse.jus.br</a></p>
            </div>
            <div id="estrutura_seic">
                <h4 class="topico">Seção de Inspeções e Correições (Seic)</h4>
                <p class="marcador">Titular: Apollws Beckman Mendes Almeida Guimarães</p>
                <p class="marcador">Telefone: (61) 3030-7452</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:csori@tse.jus.br">csori@tse.jus.br</a></p>
            </div>
            <div id="estrutura_seot">
                <h4 class="topico">Seção de Orientação e Treinamento (Seot)</h4>
                <p class="marcador">Titular: Maria Eugenia da Silva L. Filha</p>
                <p class="marcador">Telefone: (61) 3030-7457</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:seot@tse.jus.br">seot@tse.jus.br</a></p>
            </div>



        </div>
        <div class="unidadeASSEC">
            <a id="ACTSE"></a>
            <div id="estrutura_assec">
                <h4 class="topico">Assessoria Consultiva (Assec)</h4>
                <p class="marcador">Assessora-Chefe: Elaine Carneiro Batista Staerke de Resende</p>
                <p class="marcador">Telefone: (61) 3030-7122</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:assec@tse.jus.br">assec@tse.jus.br</a></p>
            </div>
        </div>
        <div class="unidadeASEPA">
            <a id="ASEPA"></a>
            <div id="estrutura_asepa">
                <h4 class="topico">Assessoria de Exame de Contas Eleitorais e Partidárias (Asepa)</h4>
                <p class="marcador">Assessor-Chefe: Eron Júnior Vieira Pessoa</p>
                <p class="marcador">Telefone: (61) 3030-7264</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:asepa@tse.jus.br">asepa@tse.jus.br</a></p>
            </div>

        </div>
        <div class="unidadeSPR">
            <a id="SPR"></a>

            <div class="estrutura_spr">
                <h4 class="topico">Secretaria-Geral da Presidência (SPR)</h4>
                <p class="marcador">Secretário-Geral da Presidência: Estêvão André Cardoso Waterloo</p>
                <p class="marcador">Telefone: (61) 3030-7037/7151</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:presidencia@tse.jus.br">presidencia@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gabspr">
                <h4 class="topico">Gabinete da Secretaria-Geral da Presidência (GAB-SPR)</h4>
                <p class="marcador">Assessora-Chefe: Joice Ribeiro Gonçalves da Rocha</p>
                <p class="marcador">Telefone: (61) 3030-7241</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:presidencia@tse.jus.br">presidencia@tse.jus.br</a></p>
            </div>
            <a id="ASPAR"></a>
            <div id="estrutura_aspar">
                <h4 class="topico">Assessoria de Articulação Parlamentar (Aspar)</h4>
                <p class="marcador">Assessor-Chefe: Izaias Faria de Abreu</p>
                <p class="marcador">Telefone: (61) 3030-7134</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:aspar@tse.jus.br">aspar@tse.jus.br</a></p>
            </div>
            <a id="AIN"></a>
            <div id="estrutura_ain">
                <h4 class="topico">Assessoria de Assuntos Internacionais (AIN)</h4>
                <p class="marcador">Assessor-Chefe: Ciro Leal Martins da Cunha</p>
                <p class="marcador">Telefone: (61) 3030-7072/7076</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:ain@tse.jus.br">ain@tse.jus.br</a></p>
            </div>
            <a id="ACP"></a>
            <div id="estrutura_acp">
                <h4 class="topico">Assessoria de Cerimonial (ACP)</h4>
                <p class="marcador">Assessora-Chefe: Paula Cristiane Amorim de Souza</p>
                <p class="marcador">Telefone: (61) 3030-7062</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:cerimonial@tse.jus.br">cerimonial@tse.jus.br</a></p>
            </div>
            <a id="ASCOM"></a>
            <div id="estrutura_ascom">
                <h4 class="topico">Assessoria de Comunicação (Ascom)</h4>
                <p class="marcador">Assessora-Chefe: Ana Cristina Rosa</p>
                <p class="marcador">Telefone: (61) 3030-7077/7078</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:imprensa@tse.jus.br">imprensa@tse.jus.br</a></p>
            </div>
            <a id="PESQUISA"></a>
            <div id="estrutura_gestao_identificacao">
                <h4 class="topico">Assessoria de Gestão de Identificação (AGI)</h4>
                <p class="marcador">Assessor-Chefe: Iuri Camargo Kisovec</p>
                <p class="marcador">Telefone: (61) 3030-7238</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:agi@tse.jus.br">agi@tse.jus.br</a></p>
            </div>
            <a id="ASPLEN"></a>
            <div id="estrutura_asplen">
                <h4 class="topico">Assessoria de Plenário (Asplen)</h4>
                <p class="marcador">Assessor-Chefe: Jean Carlos Silva de Assunção</p>
                <p class="marcador">Telefone: (61) 3030-7916</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:asplen@tse.jus.br">asplen@tse.jus.br</a></p>
            </div>
            <a id="ASESP"></a>
            <div id="estrutura_asesp">
                <h4 class="topico">Assessoria Especial (Asesp)</h4>
                <p class="marcador">Assessor-Chefe: Daniela Fernandes Darós Coutinho</p>
                <p class="marcador">Telefone: (61) 3030-7041</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:-">-</a></p>
            </div>
            <a id="OUV"></a>
            <div id="estrutura_avulsa_ouv">
                <h4 class="topico">Ouvidoria (OUV)</h4>
                <p class="marcador">Ouvidor: Fernando Pessôa da Silveira Mello</p>
                <p class="marcador">Assessora-Chefe: Roberta Leocadie Caldas M. Fernandes</p>
                <p class="marcador">Telefone: (61) 3030-7358</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:aic@tse.jus.br">aic@tse.jus.br</a></p>
            </div>
            <a id="ASPJE"></a>
            <div id="estrutura_aspje">
                <h4 class="topico">Assessoria do Processo Judicial Eletrônico (ASPJE)</h4>
                <p class="marcador">Assessora-Chefe: Simone Holanda Batalha</p>
                <p class="marcador">Telefone: (61) 3030-9074</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:aspje@tse.jus.br">aspje@tse.jus.br</a></p>
            </div>
            <a id="SUBSTITUTOS"></a>
            <div id="estrutura_aams">
                <h4 class="topico">Assessoria de Apoio aos Ministros Substitutos (AAMS)</h4>
                <p class="marcador">Assessor-Chefe: Sérgio Ricardo dos Santos</p>
                <p class="marcador">Telefone: (61) 3030-7196/7550</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:aams@tse.jus.br, audienciasaams@tse.jus.br">aams@tse.jus.br, audienciasaams@tse.jus.br</a></p>
            </div>

            <div class="unidadeSJD">
                <a id="SJD"></a>
                <div id="estrutura_sjd">
                    <h4 class="topico">Secretaria Judiciária (SJD)</h4>
                    <p class="marcador">Secretário: Fernando Maciel de Alencastro</p>
                    <p class="marcador">Telefone: (61) 3030-7925</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sjd@tse.jus.br">sjd@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coare">
                    <h4 class="topico">Coordenadoria de Acórdãos e Resoluções (Coare)</h4>
                    <p class="marcador">Coordenadora: Andréa Faria da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-7920</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coare@tse.jus.br">coare@tse.jus.br</a></p>
                </div>
                <div id="estrutura_semar">
                    <h4 class="topico">Seção de Montagem de Acórdãos e Resoluções (Semar)</h4>
                    <p class="marcador">Titular: Janete Barbosa Freitas da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-7886</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:janete.silva@tse.jus.br">janete.silva@tse.jus.br</a></p>
                </div>
                <div id="estrutura_separ">
                    <h4 class="topico">Seção de Processamento e Publicação de Acórdãos e Resoluções (Separ)</h4>
                    <p class="marcador">Titular: Enimar Moreira Cunha</p>
                    <p class="marcador">Telefone: (61) 3030-7912</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:enimar.cunha@tse.jus.br">enimar.cunha@tse.jus.br</a></p>
                </div>
                <div id="estrutura_spnotas">
                    <h4 class="topico">Seção de Produção de Notas Orais (SPnotas)</h4>
                    <p class="marcador">Titular: Frederico Augusto Rodrigues Cordeiro</p>
                    <p class="marcador">Telefone: (61) 3030-7878</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:frederico.cordeiro@tse.jus.br">frederico.cordeiro@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cpro">
                    <h4 class="topico">Coordenadoria de Processamento (CPRO)</h4>
                    <p class="marcador">Coordenador: Daniel Vasconcelos Borges Netto</p>
                    <p class="marcador">Telefone: (61) 3030-7800</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cpro@tse.jus.br">cpro@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seproc1">
                    <h4 class="topico">Seção de Processamento I (Seproc 1)</h4>
                    <p class="marcador">Titular: Haroldo Cesar de Souza Cruz Rodrigues</p>
                    <p class="marcador">Telefone: (61) 3030-7820</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seproc1@tse.jus.br">seproc1@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seproc2">
                    <h4 class="topico">Seção de Processamento II (Seproc 2)</h4>
                    <p class="marcador">Titular: Ivete Ferreira Marques</p>
                    <p class="marcador">Telefone: (61) 3030-7812</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seproc2@tse.jus.br">seproc2@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seproc3">
                    <h4 class="topico">Seção de Processamento III (Seproc 3)</h4>
                    <p class="marcador">Titular: Fernando Maurício Pessoa Ramalho Vianna</p>
                    <p class="marcador">Telefone: (61) 3030-7807</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seproc3@tse.jus.br">seproc3@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cpadi">
                    <h4 class="topico">Coordenadoria de Registros Partidários, Autuação e Distribuição (Cpadi)</h4>
                    <p class="marcador">Coordenador: Bruney Guimarães Brum</p>
                    <p class="marcador">Telefone: (61) 3030-7866</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cpadi@tse.jus.br">cpadi@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seadi">
                    <h4 class="topico">Seção de Autuação e Distribuição (Seadi)</h4>
                    <p class="marcador">Titular: Flávia Farias T. Palitot</p>
                    <p class="marcador">Telefone: (61) 3030-7842</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seadi@tse.jus.br">seadi@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seprom">
                    <h4 class="topico">Seção de Classificação Processual e Montagem (Seprom)</h4>
                    <p class="marcador">Titular: Ítala Maria Araújo Santos</p>
                    <p class="marcador">Telefone: (61) 3030-7855</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seprom@tse.jus.br">seprom@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedap">
                    <h4 class="topico">Seção de Gerenciamento de Dados Partidários (Sedap)</h4>
                    <p class="marcador">Titular: José Wilton Alves Freire</p>
                    <p class="marcador">Telefone: (61) 3030-7873</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedap@tse.jus.br">sedap@tse.jus.br</a></p>
                </div>

            </div>
        </div>
        <div class="unidadeSEC">
            <a id="SEC"></a>
            <div id="estrutura_sec">
                <h4 class="topico">Secretaria do Tribunal (SEC)</h4>
                <p class="marcador">Diretor-Geral: Anderson Vidal Corrêa</p>
                <p class="marcador">Telefone: (61) 3030-7375</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gabdg@tse.jus.br">gabdg@tse.jus.br</a></p>
            </div>
            <div id="estrutura_gabdirgeral">
                <h4 class="topico">Gabinete do Diretor-Geral (GAB-DG)</h4>
                <p class="marcador">Assessora-Chefe: Márcia Lobo Paiva Rodrigues</p>
                <p class="marcador">Telefone: (61) 3030-7364</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:gabdg@tse.jus.br">gabdg@tse.jus.br</a></p>
            </div>
            <div id="estrutura_agel">
                <h4 class="topico">Assessoria de Gestão Eleitoral (AGEL)</h4>
                <p class="marcador">Assessor-Chefe: Thiago Fini Kanashiro</p>
                <p class="marcador">Telefone: (61) 3030-7352</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:agel@tse.jus.br">agel@tse.jus.br</a></p>
            </div>
            <div id="estrutura_ages">
                <h4 class="topico">Assessoria de Gestão Estratégica e Socioambiental (AGES)</h4>
                <p class="marcador">Assessora-Chefe: Julianna Sant'ana Sesconetto</p>
                <p class="marcador">Telefone: (61) 3030-7339</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:age@tse.jus.br">age@tse.jus.br</a></p>
            </div>
            <div id="estrutura_asjur">
                <h4 class="topico">Assessoria Jurídica (Asjur)</h4>
                <p class="marcador">Assessora-Chefe: Lílian de Moura Andrade</p>
                <p class="marcador">Telefone: (61) 3030-7356</p>
                <p class="marcador"><em>E-mail</em>: <a href="mailto:asjur@tse.jus.br">asjur@tse.jus.br</a></p>
            </div>
            <div class="unidadeSAD">
                <a id="SAD"></a>
                <div id="estrutura_sad">
                    <h4 class="topico">Secretaria de Administração (SAD)</h4>
                    <p class="marcador">Secretário: Salatiel Gomes dos Santos</p>
                    <p class="marcador">Telefone: (61) 3030-8038</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secadm@tse.jus.br">secadm@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cpl">
                    <h4 class="topico">Comissão Permanente de Licitação (CPL)</h4>
                    <p class="marcador">Presidente: Maria Angélica Borges da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-8173</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:questionamento.licita@tse.jus.br">questionamento.licita@tse.jus.br</a></p>
                </div>
                <div id="estrutura_codaq">
                    <h4 class="topico">Coordenadoria de Aquisições (Codaq)</h4>
                    <p class="marcador">Coordenadora: Luciana Rodrigues de Castro</p>
                    <p class="marcador">Telefone: (61) 3030-8059</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:codaq@tse.jus.br">codaq@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seare">
                    <h4 class="topico">Seção de Apoio ao Requisitante (Seare)</h4>
                    <p class="marcador">Titular: André Afonso de Almeida Rocha</p>
                    <p class="marcador">Telefone: (61) 3030-8116</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:apoioaorequisitante@tse.jus.br">apoioaorequisitante@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secom">
                    <h4 class="topico">Seção de Compras (Secom)</h4>
                    <p class="marcador">Titular: Mari Matsuoka Tomikawa</p>
                    <p class="marcador">Telefone: (61) 3030-8102</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secom@tse.jus.br">secom@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secont">
                    <h4 class="topico">Seção de Contratos (Secont)</h4>
                    <p class="marcador">Titular: Flávia Brito dos Santos Ferreira</p>
                    <p class="marcador">Telefone: (61) 3030-8072</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secont@tse.jus.br">secont@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secga">
                    <h4 class="topico">Seção de Controle de Custo e Gestão de Ata de Registro de Preços (SECGA)</h4>
                    <p class="marcador">Titular: José Cipriano dos Santos Neto</p>
                    <p class="marcador">Telefone: (61) 3030-8078</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:atas@tse.jus.br">atas@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seedi">
                    <h4 class="topico">Seção de Editais (Seedi)</h4>
                    <p class="marcador">Titular: Christina da Cruz Silva</p>
                    <p class="marcador">Telefone: (61) 3030-8109</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seedi@tse.jus.br">seedi@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cenaq">
                    <h4 class="topico">Coordenadoria de Engenharia e Arquitetura (Cenaq)</h4>
                    <p class="marcador">Coordenador: Cristiane Vale de Sousa</p>
                    <p class="marcador">Telefone: (61) 3030-8235</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cenaq@tse.jus.br">cenaq@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seap">
                    <h4 class="topico">Seção de Arquitetura e Projetos (Seap)</h4>
                    <p class="marcador">Titular: Ana Lúcia Lopes Zeredo</p>
                    <p class="marcador">Telefone: (61) 3030-8246</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seap@tse.jus.br">seap@tse.jus.br</a></p>
                </div>
                <div id="estrutura_setel">
                    <h4 class="topico">Seção de Áudio, Vídeo e Telefonia (Setel)</h4>
                    <p class="marcador">Titular: André Luiz Porto</p>
                    <p class="marcador">Telefone: 3030-8217</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:setel@tse.jus.br">setel@tse.jus.br</a></p>
                </div>
                <div id="estrutura_senge">
                    <h4 class="topico">Seção de Engenharia (Senge)</h4>
                    <p class="marcador">Titular: Eduardo Alencar</p>
                    <p class="marcador">Telefone: (61) 3030-8237</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:senge@tse.jus.br">senge@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sesel">
                    <h4 class="topico">Seção de Equipamentos e Sistemas Elétricos (Sesel)</h4>
                    <p class="marcador">Titular: Jair Altino de Carvalho Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-8231</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sesel@tse.jus.br">sesel@tse.jus.br</a></p>
                </div>
                <div id="estrutura_semap">
                    <h4 class="topico">Seção de Manutenção Predial (Semap)</h4>
                    <p class="marcador">Titular: João Cesar Novaes Cabral</p>
                    <p class="marcador">Telefone: (61) 3030-8239</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:semap@tse.jus.br">semap@tse.jus.br</a></p>
                </div>
                <div id="estrutura_ceofi">
                    <h4 class="topico">Coordenadoria de Execução Orçamentária e Financeira (Ceofi)</h4>
                    <p class="marcador">Coordenadora: Eliane Martins de Sousa</p>
                    <p class="marcador">Telefone: (61) 3030-8141</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:ceofi@tse.jus.br">ceofi@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seapre">
                    <h4 class="topico">Seção de Acompanhamento e Processamento de Restos a Pagar (Seapre)</h4>
                    <p class="marcador">Titular: Daniela Alves G. de Carvalho</p>
                    <p class="marcador">Telefone: (61) 3030-8151/8160</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seapre@tse.jus.br">seapre@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seat">
                    <h4 class="topico">Seção de Análise Técnica (Seat)</h4>
                    <p class="marcador">Titular: Lucilene Custódio da Siva</p>
                    <p class="marcador">Telefone: (61) 3030-8152</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seat@tse.jus.br">seat@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sefin">
                    <h4 class="topico">Seção de Execução Financeira (Sefin)</h4>
                    <p class="marcador">Titular: Irinaldo Portuguez da Cunha</p>
                    <p class="marcador">Telefone: (61) 3030-8146</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sefin@tse.jus.br">sefin@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seor">
                    <h4 class="topico">Seção de Execução Orçamentária (Seor)</h4>
                    <p class="marcador">Titular: Moizés Ferreira Borba Filho</p>
                    <p class="marcador">Telefone: (61) 3030-8135</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seor@tse.jus.br">seor@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepcd">
                    <h4 class="topico">Seção de Prestação de Contas e Conformidade Documental (SEPCD)</h4>
                    <p class="marcador">Titular: José Antônio Vale da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-8127</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sepcd@tse.jus.br">sepcd@tse.jus.br</a></p>
                </div>
                <div id="estrutura_comap">
                    <h4 class="topico">Coordenadoria de Material e Patrimônio (Comap)</h4>
                    <p class="marcador">Coordenador: José Gomes de Almeida Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-8187</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:comap@tse.jus.br">comap@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sealm">
                    <h4 class="topico">Seção de Gestão de Almoxarifado (Sealm)</h4>
                    <p class="marcador">Titular: Janaína Ribeiro Penna Pereira Paiva</p>
                    <p class="marcador">Telefone: (61) 3030-8189</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:almox@tse.jus.br">almox@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepat">
                    <h4 class="topico">Seção de Gestão de Patrimônio (Sepat)</h4>
                    <p class="marcador">Titular: Daniela Andrade Santiago</p>
                    <p class="marcador">Telefone: (61) 3030-8179</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sepat@tse.jus.br">sepat@tse.jus.br</a></p>
                </div>
                <div id="estrutura_selmat">
                    <h4 class="topico">Seção de Logística de Materiais (Selmat)</h4>
                    <p class="marcador">Titular: Antonio Carlos Martins da Cunha</p>
                    <p class="marcador">Telefone: (61) 3030-8124</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:selmat@tse.jus.br">selmat@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coseg">
                    <h4 class="topico">Coordenadoria de Serviços Gerais (Coseg)</h4>
                    <p class="marcador">Coordenadora: Eliane Josimar Alves</p>
                    <p class="marcador">Telefone: (61) 3030-8213</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coseg@tse.jus.br">coseg@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secli">
                    <h4 class="topico">Seção de Conservação e Limpeza (Secli)</h4>
                    <p class="marcador">Titular: Simone Gomes da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-8201</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secli@tse.jus.br">secli@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secop">
                    <h4 class="topico">Seção de Copeiragem (Secop)</h4>
                    <p class="marcador">Titular: Ivaldo Pinto de Oliveira Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-8200</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secop@tse.jus.br">secop@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sefas">
                    <h4 class="topico">Seção de Fiscalização Administrativa de Serviços Gerais (Sefas)</h4>
                    <p class="marcador">Titular: Ricardo Takeshi Ofuji</p>
                    <p class="marcador">Telefone: (61) 3030-8088</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sefas@tse.jus.br">sefas@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segsa">
                    <h4 class="topico">Seção de Gestão de Serviços Administrativos (Segsa)</h4>
                    <p class="marcador">Titular: Laurisar de Alcântara Amorim</p>
                    <p class="marcador">Telefone: (61) 3030-8209</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segsa@tse.jus.br">segsa@tse.jus.br</a></p>
                </div>

            </div>
            <div class="unidadeSCI">
                <a id="SCI"></a>
                <div id="estrutura_sci">
                    <h4 class="topico">Secretaria de Controle Interno e Auditoria (SCI)</h4>
                    <p class="marcador">Secretária: Mércia Giselle dos Santos Oliveira</p>
                    <p class="marcador">Telefone: (61) 3030-7307</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sci@tse.jus.br">sci@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coges">
                    <h4 class="topico">Coordenadoria de Acompanhamento e Orientação de Gestão (Coges)</h4>
                    <p class="marcador">Coordenadora: Érika de Oliveira dos Santos Scozziero</p>
                    <p class="marcador">Telefone: (61) 3030-7270</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coges@tse.jus.br">coges@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seage">
                    <h4 class="topico">Seção de Acompanhamento de Gestão (Seage)</h4>
                    <p class="marcador">Titular: Danilo Rodrigues Nunes</p>
                    <p class="marcador">Telefone: (61) 3030-7310</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seage@tse.jus.br">seage@tse.jus.br</a></p>
                </div>
                <div id="estrutura_samec">
                    <h4 class="topico">Seção de Análise e Monitoramento de Execução de Contratos (Samec)</h4>
                    <p class="marcador">Titular: Ana Paula Muniz da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-7300</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:samec@tse.jus.br">samec@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seago">
                    <h4 class="topico">Seção de Avaliação de Governança (Seago)</h4>
                    <p class="marcador">Titular: Andreia Nogueira Alves</p>
                    <p class="marcador">Telefone: (61) 3030-7301</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seago@tse.jus.br">seago@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coaud">
                    <h4 class="topico">Coordenadoria de Auditoria (Coaud)</h4>
                    <p class="marcador">Coordenadora: Evelaine Antônio Trindade</p>
                    <p class="marcador">Telefone: (61) 3030-7305</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:grupo_coaud@tse.jus.br">grupo_coaud@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaud">
                    <h4 class="topico">Seção de Auditoria de Desempenho (Seaud)</h4>
                    <p class="marcador">Titular: Evandro da Cunha Menezes</p>
                    <p class="marcador">Telefone: (61) 3030-7309</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seaud@tse.jus.br">seaud@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaug">
                    <h4 class="topico">Seção de Auditoria de Gestão (Seaug)</h4>
                    <p class="marcador">Titular: Humberto Garcia Cardoso</p>
                    <p class="marcador">Telefone: (61) 3030-7311</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seaug@tse.jus.br">seaug@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaup">
                    <h4 class="topico">Seção de Auditoria de Pessoal (Seaup)</h4>
                    <p class="marcador">Titular: Sílvia Caldas Ferreira</p>
                    <p class="marcador">Telefone: (61) 3030-7265</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seaup@tse.jus.br">seaup@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaut">
                    <h4 class="topico">Seção de Auditoria de Tecnologia da Informação (Seaut)</h4>
                    <p class="marcador">Titular: Dênis Paiva Carvalho</p>
                    <p class="marcador">Telefone: (61) 3030-7293</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seaut@tse.jus.br">seaut@tse.jus.br</a></p>
                </div>
            </div>
            <div class="unidadeSGP">
                <a id="SGP"></a>
                <div id="estrutura_sgp">
                    <h4 class="topico">Secretaria de Gestão de Pessoas (SGP)</h4>
                    <p class="marcador">Secretária: Thayanne Fonseca Pirangi Soares</p>
                    <p class="marcador">Telefone: (61) 3030-8287</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sgp@tse.jus.br">sgp@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cats">
                    <h4 class="topico">Coordenadoria de Atenção à Saúde (Cats)</h4>
                    <p class="marcador">Coordenadora: Dea Márcia da Silva Pereira</p>
                    <p class="marcador">Telefone: (61) 3030-8414</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cats@tse.jus.br">cats@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seadm">
                    <h4 class="topico">Seção de Apoio Administrativo (Seadm)</h4>
                    <p class="marcador">Titular: Raphael Barbosa Castro</p>
                    <p class="marcador">Telefone: (61) 3030-8489</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:atestados@tse.jus.br">atestados@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seame">
                    <h4 class="topico">Seção de Atenção Médica e de Enfermagem (Seame)</h4>
                    <p class="marcador">Titular: Paulo Ricardo de Fernando Rocha</p>
                    <p class="marcador">Telefone: (61) 3030-8488</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seame@tse.jus.br">seame@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seato">
                    <h4 class="topico">Seção de Atenção Odontológica (Seato)</h4>
                    <p class="marcador">Titular: Denise Poubel Vilar</p>
                    <p class="marcador">Telefone: (61) 3030-8506/8507</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seato@tse.jus.br">seato@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seasp">
                    <h4 class="topico">Seção de Atenção Social e Psicológica (Seasp)</h4>
                    <p class="marcador">Titular: Oracélia Rosa Sichera</p>
                    <p class="marcador">Telefone: (61) 3030-8501/8512</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seasp@tse.jus.br">seasp@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaf">
                    <h4 class="topico">Seção de Atenção Fisioterapêutica (Seaf)</h4>
                    <p class="marcador">Titular: Raquel Rodrigues Gontijo</p>
                    <p class="marcador">Telefone: (61) 3030-8558</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seaf@tse.jus.br">seaf@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coede">
                    <h4 class="topico">Coordenadoria de Educação e Desenvolvimento (Coede)</h4>
                    <p class="marcador">Coordenadora: Ana Cláudia Braga Mendonça</p>
                    <p class="marcador">Telefone: (61) 3030-8352</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coede@tse.jus.br">coede@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedes">
                    <h4 class="topico">Seção de Desenvolvimento Organizacional (Sedes)</h4>
                    <p class="marcador">Titular: Ana Claudia Chagas Estellita</p>
                    <p class="marcador">Telefone: (61) 3030-8526</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedes@tse.jus.br">sedes@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sead">
                    <h4 class="topico">Seção de Educação a Distância (Sead)</h4>
                    <p class="marcador">Titular: Mônica de Jesus Simões</p>
                    <p class="marcador">Telefone: (61) 3030-7055</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:ead@tse.jus.br">ead@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seduc">
                    <h4 class="topico">Seção de Educação Corporativa (Seduc)</h4>
                    <p class="marcador">Titular: Marcelo Morais de Souza</p>
                    <p class="marcador">Telefone: (61) 3030-8363</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:educacao@tse.jus.br">educacao@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seeve">
                    <h4 class="topico">Seção de Eventos Corporativos (Seeve)</h4>
                    <p class="marcador">Titular: Marlon Van Juen Sun</p>
                    <p class="marcador">Telefone: (61) 3030-8573</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:eventos@tse.jus.br">eventos@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seged">
                    <h4 class="topico">Seção de Lotação e Gestão de Desempenho (Seged)</h4>
                    <p class="marcador">Titular: Paula Christina Batista dos Santos</p>
                    <p class="marcador">Telefone: (61) 3030-8357</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seged@tse.jus.br">seged@tse.jus.br</a></p>
                </div>
                <div id="estrutura_copes">
                    <h4 class="topico">Coordenadoria de Pessoal (Copes)</h4>
                    <p class="marcador">Coordenadora: Zélia Oliveira de Miranda</p>
                    <p class="marcador">Telefone: (61) 3030-8300</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:copes@tse.jus.br">copes@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seben">
                    <h4 class="topico">Seção de Benefícios (Seben)</h4>
                    <p class="marcador">Titular: Raquel Ribeiro Teles</p>
                    <p class="marcador">Telefone: (61) 3030-8347</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seben@tse.jus.br">seben@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepag">
                    <h4 class="topico">Seção de Pagamentos (Sepag)</h4>
                    <p class="marcador">Titular: Erika Tavares Gonçalves Vidal Corrêa</p>
                    <p class="marcador">Telefone: (61) 3030-8317</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sepag@tse.jus.br">sepag@tse.jus.br</a></p>
                </div>
                <div id="estrutura_srsc">
                    <h4 class="topico">Seção de Responsabilidade Social Corporativa (Seresp)</h4>
                    <p class="marcador">Titular: Ivone de Fátima Santos</p>
                    <p class="marcador">Telefone: (61) 3030-8398</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seresp@tse.jus.br">seresp@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seref">
                    <h4 class="topico">Seção de Registros Funcionais (Seref)</h4>
                    <p class="marcador">Titular: Juliana Greimel Bernardes</p>
                    <p class="marcador">Telefone: (61) 3030-8308</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seref@tse.jus.br">seref@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cotejur">
                    <h4 class="topico">Coordenadoria Técnico-Jurídica (Cotejur)</h4>
                    <p class="marcador">Coordenador: Rodrigo Emanuel Couto</p>
                    <p class="marcador">Telefone: (61) 3030-8290</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cotejur@tse.jus.br">cotejur@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seatec">
                    <h4 class="topico">Seção de Análise Técnico-Processual (Seatec)</h4>
                    <p class="marcador">Titular: Eduardo de Seixas Scozziero</p>
                    <p class="marcador">Telefone: (61) 3030-8335</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seatec@tse.jus.br">seatec@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedid">
                    <h4 class="topico">Seção de Direitos e Deveres (Sedid)</h4>
                    <p class="marcador">Titular: Simone Coelho Pereira Matsunaga</p>
                    <p class="marcador">Telefone: (61) 3030-8333/8339</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedid@tse.jus.br">sedid@tse.jus.br</a></p>
                </div>
                <div id="estrutura_selep">
                    <h4 class="topico">Seção de Legislação de Pessoal (Selep)</h4>
                    <p class="marcador">Titular: José Alberto Naves Cocota</p>
                    <p class="marcador">Telefone: (61) 3030-8316</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:gruposelep@tse.jus.br">gruposelep@tse.jus.br</a></p>
                </div>

            </div>
            <div class="unidadeSOF">
                <a id="SOF"></a>
                <div id="estrutura_sof">
                    <h4 class="topico">Secretaria de Planejamento, Orçamento, Finanças e Contabilidade (SOF)</h4>
                    <p class="marcador">Secretário: Rui Moreira de Oliveira</p>
                    <p class="marcador">Telefone: (61) 3030-7610</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sof@tse.jus.br">sof@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cofic">
                    <h4 class="topico">Coordenadoria de Finanças e Contabilidade (Cofic)</h4>
                    <p class="marcador">Coordenadora: Juthy Maria Campos Rodrigues Pereira</p>
                    <p class="marcador">Telefone: (61) 3030-7684</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cofic@tse.jus.br">cofic@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seafin">
                    <h4 class="topico">Seção de Administração Financeira (Seafin)</h4>
                    <p class="marcador">Titular: Sérgio Aparecido de Oliveira</p>
                    <p class="marcador">Telefone: (61) 3030-7665</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seafin@tse.jus.br">seafin@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seconta">
                    <h4 class="topico">Seção de Contabilidade Analítica (Seconta)</h4>
                    <p class="marcador">Titular: Lucinei de Oliveira Pereira</p>
                    <p class="marcador">Telefone: (61) 3030-7675</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seconta@tse.jus.br">seconta@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seconge">
                    <h4 class="topico">Seção de Contabilidade Gerencial (Seconge)</h4>
                    <p class="marcador">Titular: Anderson Passos Zica</p>
                    <p class="marcador">Telefone: (61) 3030-7716</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seconge@tse.jus.br">seconge@tse.jus.br</a></p>
                </div>
                <div id="estrutura_codec">
                    <h4 class="topico">Coordenadoria de Orçamento de Despesas Obrigatórias e Custos (Codec)</h4>
                    <p class="marcador">Coordenadora: Renata Mansur Japur</p>
                    <p class="marcador">Telefone: (61) 3030-7637</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:codec@tse.jus.br">codec@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedaf">
                    <h4 class="topico">Seção de Análise de Dados Físicos das Despesas Obrigatórias (Sedaf)</h4>
                    <p class="marcador">Titular: Jardel Willian Vieira</p>
                    <p class="marcador">Telefone: (61) 3030-7522</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedaf@tse.jus.br">sedaf@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segec">
                    <h4 class="topico">Seção de Gerenciamento de Custos (Segec)</h4>
                    <p class="marcador">Titular: Marcelo Prates Grangeiro</p>
                    <p class="marcador">Telefone: (61) 3030-7654</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segec@tse.jus.br">segec@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedob">
                    <h4 class="topico">Seção de Orçamento de Despesas Obrigatórias (Sedob)</h4>
                    <p class="marcador">Titular: Janaina Maria Braga Ferreira</p>
                    <p class="marcador">Telefone: (61) 3030-7638</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedob@tse.jus.br">sedob@tse.jus.br</a></p>
                </div>
                <div id="estrutura_copor">
                    <h4 class="topico">Coordenadoria de Planejamento e Orçamento (Copor)</h4>
                    <p class="marcador">Coordenador: Eduardo Demetrio Bechara</p>
                    <p class="marcador">Telefone: (61) 3030-7630</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:copor@tse.jus.br">copor@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segeor">
                    <h4 class="topico">Seção de Gerenciamento Orçamentário (Segeor)</h4>
                    <p class="marcador">Titular: Carlos André Pereira da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-7653</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segeor@tse.jus.br">segeor@tse.jus.br</a></p>
                </div>
                <div id="estrutura_senor">
                    <h4 class="topico">Seção de Normas Orçamentárias (Senor)</h4>
                    <p class="marcador">Titular: Jean Carla Rodrigues Carvalho</p>
                    <p class="marcador">Telefone: (61) 3030-7678</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:senor@tse.jus.br">senor@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seplan">
                    <h4 class="topico">Seção de Planejamento (Seplan)</h4>
                    <p class="marcador">Titular: Aloísio Mayworm Pereira Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-7627</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seplan@tse.jus.br">seplan@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepor">
                    <h4 class="topico">Seção de Programação Orçamentária (Sepor)</h4>
                    <p class="marcador">Titular: Andréa Marques Pôrto</p>
                    <p class="marcador">Telefone: (61) 3030-7661</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sepor@tse.jus.br">sepor@tse.jus.br</a></p>
                </div>
            </div>
            <div class="unidadeSTI">
                <a id="STI"></a>
                <div id="estrutura_sti">
                    <h4 class="topico">Secretaria de Tecnologia da Informação (STI)</h4>
                    <p class="marcador">Secretário: Giuseppe Dutra Janino</p>
                    <p class="marcador">Telefone: (61) 3030-8882</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:gabsti@tse.jus.br">gabsti@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cogti">
                    <h4 class="topico">Coordenadoria de Gestão de TI (COGTI)</h4>
                    <p class="marcador">Coordenadora: Grace Porto dos Santos Veras</p>
                    <p class="marcador">Telefone: (61) 3030-8822</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cogti@tse.jus.br">cogti@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seai">
                    <h4 class="topico">Seção de Arquitetura da Informação (Seai)</h4>
                    <p class="marcador">Titular: Jonas Pereira da Silva Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-8932</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seai@tse.jus.br">seai@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seproj">
                    <h4 class="topico">Seção de Gestão de Projetos de TI (Seproj)</h4>
                    <p class="marcador">Titular: Eduardo Fleury Nogueira</p>
                    <p class="marcador">Telefone: (61) 3030-8954</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seproj@tse.jus.br">seproj@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seprop">
                    <h4 class="topico">Seção de Processos e Padrões de TI (Seprop)</h4>
                    <p class="marcador">Titular: Lucas Ferreira de Lima</p>
                    <p class="marcador">Telefone: (61) 3030-8818</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seprop@tse.jus.br">seprop@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sescon">
                    <h4 class="topico">Seção de Suporte Técnico a Contratos (Sescon)</h4>
                    <p class="marcador">Titular: Erick Rayne Lima Ferreira</p>
                    <p class="marcador">Telefone: (61) 3030-8635</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sescon@tse.jus.br">sescon@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coinf">
                    <h4 class="topico">Coordenadoria de Infraestrutura de TI (Coinf)</h4>
                    <p class="marcador">Coordenador: Cristiano Moreira Andrade</p>
                    <p class="marcador">Telefone: (61) 3030-8970</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coinf@tse.jus.br">coinf@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seau">
                    <h4 class="topico">Seção de Apoio ao Usuário (Seau)</h4>
                    <p class="marcador">Titular: Luciano Teixeira Andrade</p>
                    <p class="marcador">Telefone: (61) 3030-8736</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seau@tse.jus.br">seau@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sebd">
                    <h4 class="topico">Seção de Banco de Dados (SEBD)</h4>
                    <p class="marcador">Titular: Bruno de Oliveira</p>
                    <p class="marcador">Telefone: (61) 3030-9014</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sebd@tse.jus.br">sebd@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepd">
                    <h4 class="topico">Seção de Execução da Produção (SEPD)</h4>
                    <p class="marcador">Titular: Reinaldo Nonato da Silva</p>
                    <p class="marcador">Telefone: (61) 3030-8625</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sepd@tse.jus.br">sepd@tse.jus.br</a></p>
                </div>
                <div id="estrutura_semop">
                    <h4 class="topico">Seção de Monitoramento de Produção (Semop)</h4>
                    <p class="marcador">Titular: Humberto de Melo Falcão Neto</p>
                    <p class="marcador">Telefone: (61) 3030-9058</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:semop@tse.jus.br">semop@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sesap">
                    <h4 class="topico">Seção de Suporte a Aplicações (Sesap)</h4>
                    <p class="marcador">Titular: Ivanildo Ferreira Gomes</p>
                    <p class="marcador">Telefone: (61) 3030-8991</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sesap@tse.jus.br">sesap@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sesop">
                    <h4 class="topico">Seção de Suporte Operacional (Sesop)</h4>
                    <p class="marcador">Titular: Marcelo Carneiro Rodrigues</p>
                    <p class="marcador">Telefone: (61) 3030-8971</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sesop@tse.jus.br">sesop@tse.jus.br</a></p>
                </div>
                <div id="estrutura_csele">
                    <h4 class="topico">Coordenadoria de Sistemas Eleitorais (Csele)</h4>
                    <p class="marcador">Coordenador: José de Melo Cruz</p>
                    <p class="marcador">Telefone: (61) 3030-8850</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:csele@tse.jus.br">csele@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secon">
                    <h4 class="topico">Seção de Automação de Prestação de Contas (Secon)</h4>
                    <p class="marcador">Titular: Marcos Vinícius Amorim Ferreira Guimarães</p>
                    <p class="marcador">Telefone: (61) 3030-8795</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secon@tse.jus.br">secon@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secad">
                    <h4 class="topico">Seção de Cadastro de Eleitor (Secad)</h4>
                    <p class="marcador">Titular: Fernando Garcia de Medeiros Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-8861</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secad@tse.jus.br">secad@tse.jus.br</a></p>
                </div>
                <div id="estrutura_secinp">
                    <h4 class="topico">Seção de Candidaturas e Informações Partidárias (Secinp)</h4>
                    <p class="marcador">Titular: Wellington Galdino Evangelista</p>
                    <p class="marcador">Telefone: (61) 3030-8723</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:secinp@tse.jus.br">secinp@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seint">
                    <h4 class="topico">Seção de Integração de Sistemas Eleitorais (Seint)</h4>
                    <p class="marcador">Titular: Alberto Araújo Cavalcante Neto</p>
                    <p class="marcador">Telefone: (61) 3030-8747</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seint@tse.jus.br">seint@tse.jus.br</a></p>
                </div>
                <div id="estrutura_setot">
                    <h4 class="topico">Seção de Totalização e Divulgação de Resultados (Setot)</h4>
                    <p class="marcador">Titular: Julio Valente da Costa Junior</p>
                    <p class="marcador">Telefone: (61) 3030-8741</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:setot@tse.jus.br">setot@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sevin">
                    <h4 class="topico">Seção de Voto Informatizado (Sevin)</h4>
                    <p class="marcador">Titular: Rodrigo Carneiro Munhoz Coimbra</p>
                    <p class="marcador">Telefone: (61) 3030-8811</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sevin@tse.jus.br">sevin@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cscor">
                    <h4 class="topico">Coordenadoria de Soluções Corporativas (CSCOR)</h4>
                    <p class="marcador">Coordenadora: Ana Karinne Siqueira de Andrade dos Santos</p>
                    <p class="marcador">Telefone: (61) 3030-8938</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cscor@tse.jus.br">cscor@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedesc1">
                    <h4 class="topico">Seção de Desenvolvimento de Soluções Corporativas I (Sedesc 1)</h4>
                    <p class="marcador">Titular: Othon Henrique Rego Aranha</p>
                    <p class="marcador">Telefone: (61) 3030-9053</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedesc1@tse.jus.br">sedesc1@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedesc2">
                    <h4 class="topico">Seção de Desenvolvimento de Soluções Corporativas II (Sedesc 2)</h4>
                    <p class="marcador">Titular: Márcio Augusto Alves Rosner</p>
                    <p class="marcador">Telefone: (61) 3030-8652</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedesc2@tse.jus.br">sedesc2@tse.jus.br</a></p>
                    <p class="marcador">Site: <a href="http://sticonhecimento.tse.jus.br/cscor/sedesc2/" target="_blank">sticonhecimento.tse.jus.br/cscor/sedesc2</a></p>
                </div>
                <div id="estrutura_sedesc3">
                    <h4 class="topico">Seção de Desenvolvimento de Soluções Corporativas III (Sedesc 3)</h4>
                    <p class="marcador">Titular: Henrique da Silva Teixeira</p>
                    <p class="marcador">Telefone: (61) 3030-8632</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedesc3@tse.jus.br">sedesc3@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedesc4">
                    <h4 class="topico">Seção de Desenvolvimento de Soluções Corporativas IV (Sedesc 4)</h4>
                    <p class="marcador">Titular: Ianeiara Guedes de Assis</p>
                    <p class="marcador">Telefone: (61) 3030-8960</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedesc4@tse.jus.br">sedesc4@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedesc5">
                    <h4 class="topico">Seção de Desenvolvimento de Soluções Corporativas V (Sedesc 5)</h4>
                    <p class="marcador">Titular: Fabiano Damasceno Sousa Falcão</p>
                    <p class="marcador">Telefone: (61) 3030-8832</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sedescv@tse.jus.br">sedescv@tse.jus.br</a></p>
                    <p class="marcador">Site: <a href="http://sticonhecimento.tse.jus.br/cscor/sedesc5" target="_blank">sticonhecimento.tse.jus.br/cscor/sedesc5</a></p>
                </div>
                <div id="estrutura_seteq">
                    <h4 class="topico">Seção de Testes Integrados e Qualidade (Seteq)</h4>
                    <p class="marcador">Titular: Cássio Veiga Ramos</p>
                    <p class="marcador">Telefone: (61) 3030-9002</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seteq@tse.jus.br">seteq@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cotel">
                    <h4 class="topico">Coordenadoria de Tecnologia Eleitoral (Cotel)</h4>
                    <p class="marcador">Coordenador: Rafael Fernandes de Barros Costa Azevedo</p>
                    <p class="marcador">Telefone: (61) 3030-8894</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:gabcotel@tse.jus.br">gabcotel@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seue">
                    <h4 class="topico">Seção de Gestão Tecnológica das Urnas Eletrônicas (Seue)</h4>
                    <p class="marcador">Titular: Adilson Martins dos Santos</p>
                    <p class="marcador">Telefone: (61) 3030-9380</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seue@tse.jus.br">seue@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sipt">
                    <h4 class="topico">Seção de Inovação e Pesquisa Tecnológica (Sipt)</h4>
                    <p class="marcador">Titular: Celio Castro Wermelinger</p>
                    <p class="marcador">Telefone: (61) 3030-8940</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sipt@tse.jus.br">sipt@tse.jus.br</a></p>
                </div>
                <div id="estrutura_setr">
                    <h4 class="topico">Seção de Planejamento de Contratações e Elaboração de Termos de Referência (SETR)</h4>
                    <p class="marcador">Titular: Mara Nubia Dellinghausen Coelho</p>
                    <p class="marcador">Telefone: (61) 3030-8885</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:setr@tse.jus.br">setr@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segele">
                    <h4 class="topico">Seção de Segurança Eleitoral (Segele)</h4>
                    <p class="marcador">Titular: Luís Augusto Consularo</p>
                    <p class="marcador">Telefone: (61) 3030-8951</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segele@tse.jus.br">segele@tse.jus.br</a></p>
                </div>
            </div>
            <div class="unidadeSST">
                <a id="SST"></a>
                <div id="estrutura_sst">
                    <h4 class="topico">Secretaria de Segurança e Transporte (SST)</h4>
                    <p class="marcador">Secretária: Mariana Paranhos Calderon</p>
                    <p class="marcador">Telefone: (61) 3030-7188</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sst@tse.jus.br">sst@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cosgi">
                    <h4 class="topico">Coordenadoria de Segurança Institucional (Cosgi)</h4>
                    <p class="marcador">Coordenador: Antônio César da Silva Medeiros</p>
                    <p class="marcador">Telefone: (61) 3030-7146</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:antonio.medeiros@tse.jus.br">antonio.medeiros@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seaps">
                    <h4 class="topico">Seção de Análise e Planejamento de Segurança (Seaps)</h4>
                    <p class="marcador">Titular: Wladimir Azevedo Caetano</p>
                    <p class="marcador">Telefone: (61) 3030-7177</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:wladimir.caetano@tse.jus.br">wladimir.caetano@tse.jus.br</a></p>
                </div>
                <div id="estrutura_semoe">
                    <h4 class="topico">Seção de Monitoramento Eletrônico (Semoe)</h4>
                    <p class="marcador">Titular: João Rodrigues de Magalhães</p>
                    <p class="marcador">Telefone: (61) 3030-7910/8195</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:joao.rodrigues@tse.jus.br">joao.rodrigues@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sesgi">
                    <h4 class="topico">Seção de Segurança Institucional (Sesgi)</h4>
                    <p class="marcador">Titular: Millene Fernandes Machado Dias</p>
                    <p class="marcador">Telefone: (61) 3030-7204</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:grupo-sesam@tse.jus.br">grupo-sesam@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cotso">
                    <h4 class="topico">Coordenadoria de Transporte e Segurança Orgânica (Cotso)</h4>
                    <p class="marcador">Coordenador: Hélio Ferreira de Faria</p>
                    <p class="marcador">Telefone: (61) 3030-7139</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:helio.faria@tse.jus.br">helio.faria@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sealt">
                    <h4 class="topico">Seção de Apoio Logístico de Transporte (Sealt)</h4>
                    <p class="marcador">Titular: Michael Yani Martins Neto</p>
                    <p class="marcador">Telefone: (61) 3030-7185</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sealt@tse.jus.br">sealt@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sesgo">
                    <h4 class="topico">Seção de Segurança Orgânica (Sesgo)</h4>
                    <p class="marcador">Titular: Sérgio Luiz Teixeira</p>
                    <p class="marcador">Telefone: (61) 3030-8193</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sergio.teixeira@tse.jus.br">sergio.teixeira@tse.jus.br</a></p>
                </div>
                <div id="estrutura_setran">
                    <h4 class="topico">Seção de Transporte (Setran)</h4>
                    <p class="marcador">Titular: Reginaldo Rocha Melo</p>
                    <p class="marcador">Telefone: (61) 3030-9126</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:gruposetran@tse.jus.br">gruposetran@tse.jus.br</a></p>
                </div>
            </div>
            <div class="unidadeSGI">
                <a id="SGI"></a>
                <div id="estrutura_sgi"></div>
                <div id="estrutura_accje">
                    <h4 class="topico">Assessoria do Centro Cultural da Justiça Eleitoral (ACCJE)</h4>
                    <p class="marcador">Responsáveis: Carlos Vianna Trindade e Priscila Ferreira Medeiro da Silva Ramos</p>
                    <p class="marcador">Telefone: (21) 2283-1701 | (21) 2263-3266/3258</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:ccje@tse.jus.br">ccje@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cblem">
                    <h4 class="topico">Coordenadoria de Biblioteca, Legislação e Museu (Cblem)</h4>
                    <p class="marcador">Coordenadora: Eveline Mesquita Lucas</p>
                    <p class="marcador">Telefone: (61) 3030-9352</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:gabcblem@tse.jus.br">gabcblem@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sebbl">
                    <h4 class="topico">Seção de Biblioteca (SEBBL)</h4>
                    <p class="marcador">Titular: Lígia Cavalcante Ponte</p>
                    <p class="marcador">Telefone: (61) 3030-9296</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sebbl@tse.jus.br">sebbl@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sebbd">
                    <h4 class="topico">Seção de Biblioteca Digital (SEBBD)</h4>
                    <p class="marcador">Titular: Marcos Antônio Antunes</p>
                    <p class="marcador">Telefone: (61) 3030-9293</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sebbd@tse.jus.br">sebbd@tse.jus.br</a></p>
                </div>
                <div id="estrutura_semus">
                    <h4 class="topico">Seção de Museu (Semus)</h4>
                    <p class="marcador">Titular: Admilson Siqueira e Silva Júnior</p>
                    <p class="marcador">Telefone: (61) 3030-9283</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:museu@tse.jus.br">museu@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cedip">
                    <h4 class="topico">Coordenadoria de Editoração e Publicações (Cedip)</h4>
                    <p class="marcador">Coordenadora: Renata Leite Motta Paes Medeiros</p>
                    <p class="marcador">Telefone: (61) 3030-9323</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cedip@tse.jus.br">cedip@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seprov">
                    <h4 class="topico">Seção de Editoração e Programação Visual (Seprov)</h4>
                    <p class="marcador">Titular: Valéria Moraes Carneiro</p>
                    <p class="marcador">Telefone: (61) 3030-9180</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seprov@tse.jus.br">seprov@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sgweb">
                    <h4 class="topico">Seção de Gestão de Conteúdos Web (SGWeb)</h4>
                    <p class="marcador">Titular: Flávia Parreira Carril Pinheiro</p>
                    <p class="marcador">Telefone: (61) 3030-9325</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:sgweb@tse.jus.br">sgweb@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seprev">
                    <h4 class="topico">Seção de Preparação e Revisão de Conteúdos (Seprev)</h4>
                    <p class="marcador">Titular: Vanda de Farias Magalhães Tourinho</p>
                    <p class="marcador">Telefone: (61) 3030-9175</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seprev@tse.jus.br">seprev@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segraf">
                    <h4 class="topico">Seção de Serviços Gráficos (Segraf)</h4>
                    <p class="marcador">Titular: Camila Melo Oliveira Silva</p>
                    <p class="marcador">Telefone: (61) 3030-9161</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segraf@tse.jus.br">segraf@tse.jus.br</a></p>
                </div>
                <div id="estrutura_coged">
                    <h4 class="topico">Coordenadoria de Gestão Documental (Coged)</h4>
                    <p class="marcador">Coordenador: Cleber Schumann</p>
                    <p class="marcador">Telefone: (61) 3030-9250</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:coged@tse.jus.br">coged@tse.jus.br</a></p>
                </div>
                <div id="estrutura_searq">
                    <h4 class="topico">Seção de Arquivo (Searq)</h4>
                    <p class="marcador">Titular: Júlio César Sousa Gomes</p>
                    <p class="marcador">Telefone: (61) 3030-9108/9110</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:arquivo@tse.jus.br">arquivo@tse.jus.br</a></p>
                </div>
                <div id="estrutura_segedoc">
                    <h4 class="topico">Seção de Gestão de Documentos Eletrônicos (Segedoc)</h4>
                    <p class="marcador">Titular: Yan Amaral Engelke</p>
                    <p class="marcador">Telefone: (61) 3030-9270</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:segedoc@tse.jus.br">segedoc@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seprot">
                    <h4 class="topico">Seção de Protocolo Administrativo e Expedição (Seprot)</h4>
                    <p class="marcador">Titular: Diana de Carvalho L. de Araújo Palhano</p>
                    <p class="marcador">Telefone: (61) 3030-9289</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:protocolo@tse.jus.br">protocolo@tse.jus.br</a></p>
                </div>
                <div id="estrutura_cojur">
                    <h4 class="topico">Coordenadoria de Jurisprudência (Cojur)</h4>
                    <p class="marcador">Coordenadora: Cláudia Gontijo Corrêa Cahú</p>
                    <p class="marcador">Telefone: (61) 3030-9229</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:cojur@tse.jus.br">cojur@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seajur">
                    <h4 class="topico">Seção de Análise de Jurisprudência (Seajur)</h4>
                    <p class="marcador">Titular: Idenir Santos de Oliveira</p>
                    <p class="marcador">Telefone: (61) 3030-9246</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto: jurisprudencia@tse.jus.br"> jurisprudencia@tse.jus.br</a></p>
                </div>
                <div id="estrutura_seleg">
                    <h4 class="topico">Seção de Legislação (Seleg)</h4>
                    <p class="marcador">Titular: Diego Messina Felisbino</p>
                    <p class="marcador">Telefone: (61) 3030-9232</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:seleg@tse.jus.br">seleg@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sepjur">
                    <h4 class="topico">Seção de Pesquisa de Jurisprudência (Sepjur)</h4>
                    <p class="marcador">Titular: Leonardo Augusto Soares Del Menezzi</p>
                    <p class="marcador">Telefone: (61) 3030-9257</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:jurisprudencia@tse.jus.br">jurisprudencia@tse.jus.br</a></p>
                </div>
                <div id="estrutura_sedjur">
                    <h4 class="topico">Seção de Seleção e Divulgação de Jurisprudência (Sedjur)</h4>
                    <p class="marcador">Titular: Patrícia Marques Lôbo</p>
                    <p class="marcador">Telefone: (61) 3030-9236</p>
                    <p class="marcador"><em>E-mail</em>: <a href="mailto:jurisprudencia@tse.jus.br">jurisprudencia@tse.jus.br</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>