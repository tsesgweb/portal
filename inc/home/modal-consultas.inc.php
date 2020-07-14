<!-- Consulta Jurisprudência -->
<div class="servicos__modal">
    <div class="modal fade" id="consultaJurisprudencia" tabindex="-1" role="dialog" aria-labelledby="consultaJurisprudencia" aria-hidden="true">
        <div class="modal-dialog servicos__modal_show" role="document">
            <div class="modal-content">
                <div class="servicos__conteudo">
                    <div class="servicos__linha">
                        <div class="modal-header servicos__modal_head">
                            <h2 class="servicos__modal_titulo">Jurisprudência</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body servicos__modal_body">
                            <form id="form_plt_jurisprudencia" class="form-horizontal servicos__form" method="" action="http://www.tse.jus.br/jurisprudencia/@@processrequest">
                                <fieldset class="servicos__form_bloco">
                                    <div class="servicos__linha">
                                        <legend class="sr-only">Jurisprudência</legend>
                                        <div class="form-group servicos__form_duas-colunas">
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
                                        </div>
                                        <div class="form-group servicos__form_botao-float">
                                            <button class="btn btn-amarelo" type="submit">Consultar</button>
                                        </div>

                                        <div class="form-group servicos__form_uma-coluna">
                                            <a class="btn btn-link" title="mais opções jurisprudência" href="http://www.tse.jus.br/jurisprudencia/@@processrequest?sectionServers=TSE">mais opções</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Consulta Legislação Compilada -->
<div class="servicos__modal">
    <div class="modal fade" id="consultaLegislacaoCompilada" tabindex="-1" role="dialog" aria-labelledby="consultaLegislacaoCompilada" aria-hidden="true">
        <div class="modal-dialog servicos__modal_show" role="document">
            <div class="modal-content">
                <div class="servicos__conteudo">
                    <div class="servicos__linha">
                        <div class="modal-header servicos__modal_head">
                            <h2 class="servicos__modal_titulo">Legislação Compilada</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body servicos__modal_body">
                            <form class="form-horizontal servicos__form" id="form-pesquisa-gsa" method="get" name="searchForm" action="http://www.tse.jus.br/@@compiladas-search" target="_blank">
                                <fieldset class="servicos__form_bloco">
                                    <div class="servicos__linha">
                                        <legend class="sr-only">Legislação Compilada</legend>

                                        <div class="form-group servicos__form_duas-colunas">
                                            <label for="legislacao-compilada" class="r-only">Pesquisa livre</label>
                                            <input class="fieldForm retiraValue" name="proxystylesheet" value="legislacao-tse" type="hidden">
                                            <input class="fieldForm retiraValue" name="site" value="legislacao-tse" type="hidden">
                                            <input class="fieldForm retiraValue" name="client" value="intranet" type="hidden">
                                            <input id="legislacao-compilada" placeholder="Digite aqui sua pesquisa" class="form-control fieldForm retiraValue" name="q" size="50" maxlength="256" type="text">

                                        </div>
                                        <div class="form-group servicos__form_botao-float">
                                            <button class="btn btn-amarelo" type="submit">Consultar</button>
                                        </div>

                                        <div class="form-group servicos__form_uma-coluna">
                                            <a class="btn btn-link" title="mais opções jurisprudência" href=" http://www.tse.jus.br/jurisprudencia/@@processrequest?sectionServers=TSE">mais opções</a>
                                        </div>

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Consulta Processos físicos -->
<div class="servicos__modal">
    <div class="modal fade" id="consultaProcessosFisicos" tabindex="-1" role="dialog" aria-labelledby="consultaProcessosFisicos" aria-hidden="true">
        <div class="modal-dialog servicos__modal_show" role="document">
            <div class="modal-content">
                <div class="servicos__conteudo">
                    <div class="servicos__linha">
                        <div class="modal-header servicos__modal_head">
                            <h2 class="servicos__modal_titulo">Processos físicos</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body servicos__modal_body">
                            <form class="form-horizontal servicos__form" method="post" action="http://www.tse.jus.br/@@processrequest">
                                <fieldset class="servicos__form_bloco">
                                    <div class="servicos__linha">
                                        <legend class="sr-only">Processos físicos</legend>

                                        <div class="selecionarTribunal form-group servicos__form_quatro-colunas">
                                            <label for="tribunal">Tribunal</label>
                                            <select class="form-control icone icone-select" id="tribunal">
                                                <optgroup label="Tribunais">
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
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="selecionarTipoPesquisa form-group servicos__form_quatro-colunas">
                                            <label for="acao">Tipo de pesquisa</label>
                                            <select class="form-control icone icone-select" id="acao" name="acao">
                                                <optgroup label="Tipo de pesquisa">
                                                    <option value="pesquisarNumProcesso">Nº do processo</option>
                                                    <option value="pesquisarNumeroOrigem">Nº na origem</option>
                                                    <option value="pesquisarNomeParte">Partes</option>
                                                    <option value="pesquisarNumeroProtocolo">Nº do protocolo</option>
                                                    <option value="pesquisarNomeAdvogado">Advogado</option>
                                                    <option value="pesquisarNumAdvogado">Advogado(nº OAB)</option>
                                                    <option value="pesquisarNumUnico">Nº único</option>
                                                    <option value="pesquisarNomeMunicipio">Município de origem</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div id="pesquisarNumUnico" class="pesquisa-box form-group servicos__form_tres-colunas" style="display:none">
                                            <div class="servicos__form_um-coluna">
                                                <label for="numUnicoSequencial">Número do processo</label>
                                            </div>
                                            <div class="servicos__form_uma-coluna sem-padding">
                                                <div class="input-group borda-redonda-grupo">
                                                    <label class="sr-only" for="numUnicoSequencial">NNNNNNNDD</label>
                                                    <input class="form-control" type="text" placeholder="NNNNNNNDD" id="numUnicoSequencial" name="numUnicoSequencial">
                                                    <label class="sr-only" for="numUnicoAno">AAAA</label>
                                                    <input class="form-control" type="text" placeholder="2011" id="numUnicoAno" name="numUnicoAno">
                                                    <label class="sr-only" for="numUnicoOrigem">JTR0000</label>
                                                    <input class="form-control" type="text" id="numUnicoOrigem" name="numUnicoOrigem" placeholder="9999999">
                                                </div>
                                            </div>
                                            <div class="servicos__form_um-coluna">
                                                <span class="help-block">Obs.: Digitar apenas números.</span>
                                            </div>
                                        </div>
                                        <div id="pesquisarNomeMunicipio" class="pesquisa-box form-group servicos__form_duas-colunas" style="display:none">
                                            <div class="servicos__conteudo">
                                                <div class="servicos__linha">
                                                    <div class="servicos__form_quatro-colunas sem-padding-xs">
                                                        <label for="anoEleicao">Ano eleição</label>
                                                        <input class="form-control" type="text" placeholder="2010" id="anoEleicao" name="anoEleicao">
                                                        <span class="help-block">Ano</span>
                                                    </div>
                                                    <div class="servicos__form_duas-colunas sem-padding-xs">
                                                        <label for="nomeMunicipio">Nome do município</label>
                                                        <input class="form-control" type="text" id="nomeMunicipio" name="nomeMunicipio" placeholder="Digite o município">
                                                        <span class="help-block">Nome completo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pesquisarNumProcesso" class="pesquisa-box form-group servicos__form_quatro-colunas">
                                            <label for="numProcesso">Número do processo</label>
                                            <input class="form-control" id="numProcesso" type="text" placeholder="99999999">
                                            <span class="help-block">Consulta por número do processo</span>
                                        </div>
                                        <div id="pesquisarNumAdvogado" class="pesquisa-box form-group servicos__form_duas-colunas" style="display:none">
                                            <div class="servicos__conteudo">
                                                <div class="servicos__linha">
                                                    <div class="form-group servicos__form_quatro-colunas sem-padding-xs">
                                                        <label for="uf">UF</label>
                                                        <select class="form-control icone icone-select" id="uf" name="ufOAB">
                                                            <optgroup label="UF">
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
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="form-group servicos__form_duas-colunas sem-padding-xs">
                                                        <label for="numOAB">Número</label>
                                                        <input class="form-control" id="numOAB" type="text" placeholder="99999999" name="numOAB">
                                                        <span class="help-block">Consulta por Advogados (OAB)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pesquisarNumeroProtocolo" class="pesquisa-box form-group servicos__form_quatro-colunas" style="display:none">
                                            <div class="servicos__form_uma-coluna sem-padding">
                                                <label for="numProtocolo">Número do protocolo</label>
                                                <input class="form-control" id="numProtocolo" name="tipoConsultaProtocolo" type="text" placeholder="9999999">
                                            </div>
                                            <div class="servicos__form_radio">
                                                <input type="radio" name="tipoConsultaProtocolo" value="ca" id="pesquisaComAno">
                                                <label for="pesquisaComAno">Com o ano</label>
                                                <input type="radio" name="tipoConsultaProtocolo" value="sa" id="pesquisaSemAno">
                                                <label for="pesquisaSemAno">Sem o ano</label>
                                            </div>
                                        </div>
                                        <div id="pesquisarNomeAdvogado" class="pesquisa-box form-group servicos__form_quatro-colunas" style="display:none">
                                            <div class="servicos__form_uma-coluna sem-padding">
                                                <label for="nomeAdvogado">Nome</label>
                                                <input class="form-control" type="text" id="nomeAdvogado" name="nomeAdvogado" placeholder="Digite o nome">
                                            </div>
                                            <div class="servicos__form_radio">
                                                <input type="radio" name="tipoConsultaNomeAdvogado" value="in" id="InNomeAdv">
                                                <label class="radio-inline" for="InNomeAdv">Início</label>
                                                <input type="radio" name="tipoConsultaNomeAdvogado" value="me" id="ParteAdv">
                                                <label class="radio-inline" for="ParteAdv">Parte</label>
                                                <input type="radio" name="tipoConsultaNomeAdvogado" value="fi" id="FimAdv">
                                                <label class="radio-inline" for="FimAdv">Fim</label>
                                            </div>
                                        </div>
                                        <div id="pesquisarNomeParte" class="pesquisa-box form-group servicos__form_quatro-colunas" style="display:none">
                                            <div class="servicos__form_uma-coluna sem-padding">
                                                <label for="nomeParte">Nome</label>
                                                <input class="form-control" type="text" id="nomeParte" name="nomeParte" placeholder="Digite o nome">
                                            </div>
                                            <div class="servicos__form_radio sem-padding">
                                                <input type="radio" name="tipoConsultaNomeParte" value="in" id="IniNomeParte">
                                                <label class="radio-inline" for="IniNomeParte"> Início</label>

                                                <input type="radio" name="tipoConsultaNomeParte" value="me" id="ParteNome">
                                                <label class="radio-inline" for="ParteNome"> Parte</label>

                                                <input type="radio" name="tipoConsultaNomeParte" value="fi" id="FinalNome">
                                                <label class="radio-inline" for="FinalNome"> Fim</label>
                                            </div>
                                        </div>
                                        <div id="pesquisarNumeroOrigem" class="pesquisa-box form-group servicos__form_quatro-colunas" style="display:none">
                                            <label for="numOrigem">Número na origem</label>
                                            <input class="form-control" id="numOrigem" name="numOrigem" type="text" placeholder="999999">
                                            <span class="help-block">Consulta por número na origem</span>
                                        </div>
                                        <div class="form-group servicos__form_botao">
                                            <button class="btn btn-amarelo" type="submit">Consultar</button>
                                        </div>
                                        <div class="form-group servicos__form_uma-coluna">
                                            <div class="btn-group" role="group" aria-label="outras opções de consulta">
                                                <span class="link-modal-processo-fisico">
                                                    <a class="btn btn-link" href="#">acesso ao push</a>
                                                </span>
                                                <span class="link-modal-processo-fisico">
                                                    <a class="btn btn-link" href="#">mais opções</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>