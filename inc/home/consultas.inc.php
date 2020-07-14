<section id="home-consultas">
    <h2 class="sr-only">Consultas.</h2>
    <div class="centralizar">
        <section id="consulta-jurisprudencia" class="consulta-jurisprudencia">
            <div class="consulta-item">
                <div class="titulo-personalizado">
                    <h3 class="titulo-padrao">Jurisprudência</h3>
                </div>
                <div class="conter-conteudo">
                    <form id="form_plt_jurisprudencia" method="post" action=" http://www.tse.jus.br/jurisprudencia/@@processrequest">
                        <fieldset>
                            <legend class="sr-only">Jurisprudência</legend>
                            <div class="form-group">
                                <input type="hidden" id="sectionServers" name="sectionServers" value="TSE">
                                <input type="hidden" id="configName" name="configName" value="SJUT">
                                <input type="hidden" id="toc" name="toc" value="true">
                                <input type="hidden" id="pageList" name="pageList" value="tocCompleto.jsp">
                                <input type="hidden" id="sectionName" name="sectionName" value="avancado">
                                <input type="hidden" id="textoTodos" name="textoTodos" value="true">
                                <input type="hidden" id="textoEmenta" name="textoEmenta" value="true">
                                <input type="hidden" id="textoDecisao" name="textoDecisao" value="true">
                                <input type="hidden" id="textoIndexacao" name="textoIndexacao" value="true">
                                <input type="hidden" id="textoObservacao" name="textoObservacao" value="true">
                                <input type="hidden" id="tipo1" name="tipo1" value="Art">
                                <input type="hidden" id="tipo2" name="tipo2" value="Par">
                                <input type="hidden" id="tipo3" name="tipo3" value="Inc">
                                <input type="hidden" id="tipo4" name="tipo4" value="Let">
                                <input type="hidden" id="tipoData" name="tipoData" value="J">
                                <input type="hidden" id="tipoAcordao" name="tipoAcordao" value="on">
                                <input type="hidden" id="tipoResolucao" name="tipoResolucao" value="on">
                                <input type="hidden" id="tipoDecisaoSemResolucao" name="tipoDecisaoSemResolucao" value="on">
                                <label for="form_submit_juriprudencia" class="r-only">Pesquisa livre</label>
                                <input type="text" class="retiraValue form-control" id="form_submit_juriprudencia" name="livre" placeholder="Digite aqui sua pesquisa">
                                <span class="help-block">
                                    <a class="btn btn-link" title="mais opções jurisprudência" href="http://www.tse.jus.br/jurisprudencia/@@processrequest?sectionServers=TSE">mais opções</a>
                                </span>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit">Consultar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <section id="consulta-legislacao-compilada" class="consulta-legislacao-compilada">
            <div class="consulta-item">
                <div class="titulo-personalizado">
                    <h3 class="titulo-padrao">Legislação compilada</h3>
                </div>

                <div class="conter-conteudo">
                    <form class="form" id="form-pesquisa-gsa" method="get" name="searchForm" action="http://www.tse.jus.br/@@compiladas-search" target="_blank">
                        <fieldset>
                            <legend class="sr-only">Legislação compilada</legend>
                            <div class="form-group">
                                <label for="legislacao-compilada" class="r-only">Pesquisa livre</label>
                                <input class="fieldForm retiraValue" name="proxystylesheet" value="legislacao-tse" type="hidden">
                                <input class="fieldForm retiraValue" name="site" value="legislacao-tse" type="hidden">
                                <input class="fieldForm retiraValue" name="client" value="intranet" type="hidden">
                                <input id="legislacao-compilada" placeholder="Digite aqui sua pesquisa" class="form-control fieldForm retiraValue" name="q" size="50" maxlength="256" type="text">
                                <span class="help-block">
                                    <a class="btn btn-link " title="mais opções jurisprudência" href=" http://www.tse.jus.br/jurisprudencia/@@processrequest?sectionServers=TSE">mais opções</a>
                                </span>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit">Consultar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <section id="consulta-processos-fisicos" class="consulta-processos-fisicos">
            <div class="consulta-item">
                <div class="titulo-personalizado">
                    <h3 class="titulo-padrao">Processos físicos</h3>
                </div>
                <div class="conter-conteudo">
                    <form method="post" action="http://www.tse.jus.br/@@processrequest">
                        <fieldset>
                            <legend class="sr-only">Processos físicos</legend>
                            <div class="selecionarTribunal">
                                <label for="tribunal">Tribunal</label>
                                <select class="form-control icone icone-select" id="tribunal">
                                    <option value="TSE">TSE</option>
                                    <option value="TRE-AC">AC</option>
                                    <option value="TRE-AL">AL</option>
                                    <option value="TRE-AM">AM</option>
                                    <option value="TRE-AP">AP</option>
                                    <option value="TRE-BA">BA</option>
                                    <option value="TRE-CE">CE</option>
                                    <option value="TRE-DF">DF</option>
                                    <option value="TRE-ES">ES</option>
                                    <option value="TRE-GO">GO</option>
                                    <option value="TRE-MA">MA</option>
                                    <option value="TRE-MG">MG</option>
                                    <option value="TRE-MS">MS</option>
                                    <option value="TRE-MT">MT</option>
                                    <option value="TRE-PA">PA</option>
                                    <option value="TRE-PB">PB</option>
                                    <option value="TRE-PE">PE</option>
                                    <option value="TRE-PI">PI</option>
                                    <option value="TRE-PR">PR</option>
                                    <option value="TRE-RJ">RJ</option>
                                    <option value="TRE-RN">RN</option>
                                    <option value="TRE-RO">RO</option>
                                    <option value="TRE-RR">RR</option>
                                    <option value="TRE-RS">RS</option>
                                    <option value="TRE-SC">SC</option>
                                    <option value="TRE-SE">SE</option>
                                    <option value="TRE-SP">SP</option>
                                    <option value="TRE-TO">TO</option>
                                </select>
                            </div>
                            <div class="selecionarTipoPesquisa">
                                <label for="acao">Tipo de pesquisa</label>
                                <select class="form-control icone icone-select" id="acao" name="acao">
                                    <option value="pesquisarNumProcesso">Nº do processo</option>
                                    <option value="pesquisarNumeroOrigem">Nº na origem</option>
                                    <option value="pesquisarNomeParte">Partes</option>
                                    <option value="pesquisarNumeroProtocolo">Nº do protocolo</option>
                                    <option value="pesquisarNomeAdvogado">Advogado</option>
                                    <option value="pesquisarNumAdvogado">Advogado(nº OAB)</option>
                                    <option value="pesquisarNumUnico">Nº único</option>
                                    <option value="pesquisarNomeMunicipio">Município de origem</option>
                                </select>
                            </div>
                            <div id="pesquisarNumUnico" class="pesquisa-box" style="display:none">
                                <div class="box-12">
                                    <label for="numUnicoSequencial">Número do processo</label>
                                </div>
                                <div class="box-4">
                                    <label class="sr-only" for="numUnicoSequencial">NNNNNNNDD</label>
                                    <input class="form-control" type="text" placeholder="NNNNNNNDD" id="numUnicoSequencial" name="numUnicoSequencial">
                                </div>
                                <div class="box-4">
                                    <label class="sr-only" for="numUnicoAno">AAAA</label>
                                    <input class="form-control" type="text" placeholder="2011" id="numUnicoAno" name="numUnicoAno">
                                </div>
                                <div class="box-4">
                                    <label class="sr-only" for="numUnicoOrigem">JTR0000</label>
                                    <input class="form-control" type="text" id="numUnicoOrigem" name="numUnicoOrigem" placeholder="9999999">
                                </div>
                                <div class="box-12">
                                    <span class="help-block">Obs.: Digitar apenas números.</span>
                                </div>
                            </div>
                            <div id="pesquisarNomeMunicipio" class="pesquisa-box" style="display:none">
                                <div class="box-5">
                                    <label for="anoEleicao">Ano eleição</label>
                                    <input class="form-control" type="text" placeholder="2010" id="anoEleicao" name="anoEleicao">
                                    <span class="help-block">Ano</span>
                                </div>
                                <div class="box-7">
                                    <label for="nomeMunicipio">Nome do município</label>
                                    <input class="form-control" type="text" id="nomeMunicipio" name="nomeMunicipio" placeholder="Digite o município">
                                    <span class="help-block">Nome completo</span>
                                </div>
                            </div>
                            <div id="pesquisarNumProcesso" class="pesquisa-box">
                                <div class="box-12">
                                    <label for="numProcesso">Número do processo</label>
                                    <input class="form-control" id="numProcesso" type="text" placeholder="99999999">
                                    <span class="help-block">Consulta por número do processo</span>
                                </div>
                            </div>
                            <div id="pesquisarNumAdvogado" class="pesquisa-box" style="display:none">
                                <div class="box-4">
                                    <label for="uf">UF</label>
                                    <select class="form-control icone icone-select" id="uf" name="ufOAB">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AM">AM</option>
                                        <option value="AP">AP</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MG">MG</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="PR">PR</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="RS">RS</option>
                                        <option value="SC">SC</option>
                                        <option value="SE">SE</option>
                                        <option value="SP">SP</option>
                                        <option value="TO">TO</option>
                                    </select>

                                </div>
                                <div class="box-8">
                                    <label for="numOAB">Número</label>
                                    <input class="form-control" id="numOAB" type="text" placeholder="99999999" name="numOAB">
                                </div>
                                <div class="box-12">
                                    <span class="help-block">Consulta por Advogados (OAB)</span>
                                </div>
                            </div>
                            <div id="pesquisarNumeroProtocolo" class="pesquisa-box" style="display:none">
                                <div class="box-12">
                                    <label for="numProtocolo">Número do protocolo</label>
                                    <input class="form-control" id="numProtocolo" name="tipoConsultaProtocolo" type="text" placeholder="9999999">
                                    <div class="help-block">
                                        <label class="radio-inline" for="pesquisaComAno">
                                            <input type="radio" name="tipoConsultaProtocolo" value="ca" id="pesquisaComAno">Com o ano
                                        </label>
                                        <label class="radio-inline" for="pesquisaSemAno">
                                            <input type="radio" name="tipoConsultaProtocolo" value="sa" id="pesquisaSemAno">Sem o ano
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="pesquisarNomeAdvogado" class="pesquisa-box" style="display:none">
                                <div class="box-12">
                                    <label for="nomeAdvogado">Nome</label>
                                    <input class="form-control" type="text" id="nomeAdvogado" name="nomeAdvogado" placeholder="Digite o nome">
                                    <div class="help-block">
                                        <label class="radio-inline" for="InNomeAdv">
                                            <input type="radio" name="tipoConsultaNomeAdvogado" value="in" id="InNomeAdv">Início</label>
                                        <label class="radio-inline" for="ParteAdv">
                                            <input type="radio" name="tipoConsultaNomeAdvogado" value="me" id="ParteAdv">Parte</label>
                                        <label class="radio-inline" for="FimAdv">
                                            <input type="radio" name="tipoConsultaNomeAdvogado" value="fi" id="FimAdv">Fim</label>
                                    </div>
                                </div>
                            </div>
                            <div id="pesquisarNomeParte" class="pesquisa-box" style="display:none">
                                <div class="box-12">
                                    <label for="nomeParte">Nome</label>
                                    <input class="form-control" type="text" id="nomeParte" name="nomeParte" placeholder="Digite o nome">
                                    <div class="help-block">
                                        <label class="radio-inline" for="IniNomeParte">
                                            <input type="radio" name="tipoConsultaNomeParte" value="in" id="IniNomeParte">Início
                                        </label>
                                        <label class="radio-inline" for="ParteNome">
                                            <input type="radio" name="tipoConsultaNomeParte" value="me" id="ParteNome">Parte
                                        </label>
                                        <label class="radio-inline" for="FinalNome">
                                            <input type="radio" name="tipoConsultaNomeParte" value="fi" id="FinalNome">Fim
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="pesquisarNumeroOrigem" class="pesquisa-box" style="display:none">
                                <div class="box-12">
                                    <label for="numOrigem">Número na origem</label>
                                    <input class="form-control" id="numOrigem" name="numOrigem" type="text" placeholder="999999">
                                    <span class="help-block">Consulta por número na origem</span>
                                </div>
                            </div>
                            <div class="consultas-mais-opcoes">
                                <div class="btn-group" role="group" aria-label="outras opções de consulta">
                                    <a class="btn btn-link" href="#">acesso ao push</a>
                                    <a class="btn btn-link" href="#">mais opções</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit">Consultar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <section id="consulta-diversos" class="consulta-diversos">
            <div class="consulta-item">
                <h3 class="sr-only">Links para outras consultas</h3>
                <div class="item">
                    <img class="img-responsive" src="http://placehold.it/360x203" alt="PJE">
                </div>
                <div class="item">
                    <img class="img-responsive" src="http://placehold.it/360x203" alt="Outro serviço">
                </div>
            </div>
        </section>
    </div>
</section>