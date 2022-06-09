<!-- Serviço Título eleitoral -->
<div class="servicos__modal">
  <div
    class="modal fade"
    id="servicoTituloEleitoral"
    tabindex="-1"
    role="dialog"
    aria-labelledby="servicoTituloEleitoral"
    aria-hidden="true"
  >
    <div class="modal-dialog servicos__modal_show" role="document">
      <div class="modal-content">
        <div class="servicos__conteudo">
          <div class="servicos__linha">
            <div class="modal-header servicos__modal_head">
              <h2 class="servicos__modal_titulo">Título eleitoral</h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body servicos__modal_body">
              <form
                id="form-consultar-titulo-eleitoral"
                class="form-horizontal servicos__form "
                method="POST"
                action="http://www.tse.jus.br/@@consultar_local_votacao"
                novalidate
              >
                <fieldset class="servicos__form_bloco">
                  <legend class="sr-only">Título eleitoral</legend>
                  <div class="servicos__linha">
                    <div class="form-group servicos__form_duas-colunas">
                      <label class="sr-only" for="TE_NomeTituloCPF"
                        >Nome ou número do título de eleitor ou CPF</label
                      ><input
                        name="nomeTituloCPF"
                        id="TE_NomeTituloCPF"
                        class="form-control"
                        placeholder="Nome ou número do título de eleitor ou CPF"
                        type="text"
                      />
                    </div>
                    <div class="form-group servicos__form_duas-colunas">
                      <label for="TE_NomeMae" class="sr-only">Mãe:</label>
                      <div class="input-group">
                        <input
                          name="nomeMae"
                          id="TE_NomeMae"
                          placeholder="Nome da mãe"
                          class="form-control"
                          aria-label="..."
                        />
                        <div class="input-group-append">
                          <span class="input-group-text"
                            ><input
                              name="naoConstaMae"
                              id="TE_NaoConstaMae"
                              type="checkbox"
                              aria-label="..."
                              title="Não consta nome da mãe"
                            /><label for="TE_NaoConstaMae"
                              >Não consta</label
                            ></span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="form-group servicos__form_duas-colunas">
                      <label class="sr-only" for="TE_DataNascimento"
                        >Data de nascimento</label
                      ><input
                        name="dataNascimento"
                        id="TE_DataNascimento"
                        class="form-control"
                        placeholder="Data de nascimento"
                        type="text"
                        maxlength="10"
                      />
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div
                        id="captcha-consulta-titulo-eleitoral"
                        class="captcha-portal"
                      ></div>
                    </div>
                    <div class="form-group servicos__form_botao">
                      <button
                        class="btn btn-amarelo"
                        id="consulta-titulo-eleitoral-form-submit"
                        name="consulta_titulo_eleitoral_form_submit"
                        type="submit"
                      >
                        Consultar
                      </button>
                    </div>
                  </div>
                </fieldset>
              </form>
              <!-- Tela de resposta para a consulta titulo eleitoral -->
              <div id="resposta-consulta-titulo-eleitoral"></div>
              <p class="img-loading loading-consulta-titulo-eleitoral">
                carregando conteúdo...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Serviço Quitação Eleitoral -->
<div class="servicos__modal">
  <div
    class="modal fade"
    id="servicoQuitacaoEleitoral"
    tabindex="-1"
    role="dialog"
    aria-labelledby="servicoQuitacaoEleitoral"
    aria-hidden="true"
  >
    <div class="modal-dialog servicos__modal_show" role="document">
      <div class="modal-content">
        <div class="servicos__conteudo">
          <div class="servicos__linha">
            <div class="modal-header servicos__modal_head">
              <h2 class="servicos__modal_titulo">Emitir Certidão</h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body servicos__modal_body">
              <form
                id="form-consulta-quitacao-eleitoral"
                class="form-horizontal servicos__form validar-formulario"
                method="post"
                action="http://www.tse.jus.br/consulta_quitacao_eleitoral"
                novalidate
              >
                <fieldset class="servicos__form_bloco">
                  <div class="servicos__linha">
                    <legend class="sr-only">Quitação eleitoral</legend>
                    <div class="form-group servicos__form_duas-colunas">
                      <label for="QE_NomeEleitor" class="sr-only">Nome:</label>
                      <input
                        name="nomeEleitor"
                        id="QE_NomeEleitor"
                        class="form-control"
                        placeholder="Nome do eleitor"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha o com seu nome completo!
                      </div>
                    </div>

                    <div class="form-group servicos__form_quatro-colunas">
                      <label for="QE_NumeroTitulo" class="sr-only"
                        >Título:</label
                      >
                      <input
                        name="numeroTitulo"
                        id="QE_NumeroTitulo"
                        class="form-control"
                        placeholder="Número do título"
                        type="text"
                        maxlength="12"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com o número do seu titulo!
                      </div>
                    </div>

                    <div class="form-group servicos__form_quatro-colunas">
                      <label for="QE_DataNascimento" class="sr-only"
                        >Nascido:</label
                      >
                      <input
                        name="dataNascimento"
                        id="QE_DataNascimento"
                        class="form-control"
                        placeholder="Data de nascimento"
                        type="text"
                        maxlength="10"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com a data do seu nascimento! dia/mes/ano
                      </div>
                    </div>

                    <div class="form-group servicos__form_duas-colunas">
                      <label for="QE_NomeMae" class="sr-only">Mãe:</label>
                      <div class="input-group">
                        <input
                          name="nomeMae"
                          id="QE_NomeMae"
                          placeholder="Nome da mãe"
                          class="form-control"
                          aria-label="..."
                          required
                        />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <input
                              name="naoConstaMae"
                              id="QE_NaoConstaMae"
                              type="checkbox"
                              aria-label="..."
                              title="Não consta nome da mãe"
                            />
                            <label for="QE_NaoConstaMae">Não consta</label>
                          </span>
                        </div>
                        <div class="invalid-feedback">
                          Preencha com o nome completo da sua mãe!
                        </div>
                      </div>
                    </div>

                    <div class="form-group servicos__form_duas-colunas">
                      <label for="QE_NomePai" class="sr-only">Pai:</label>
                      <div class="input-group">
                        <input
                          name="nomePai"
                          id="QE_NomePai"
                          placeholder="Nome do pai"
                          class="form-control"
                          aria-label="..."
                          required
                        />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <input
                              name="naoConstaPai"
                              id="QE_NaoConstaPai"
                              type="checkbox"
                              aria-label="..."
                              title="Não consta nome do pai"
                            />
                            <label for="QE_NaoConstaPai">Não consta</label>
                          </span>
                        </div>
                        <div class="invalid-feedback">
                          Preencha com o nome completo do seu pai!
                        </div>
                      </div>
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div id="captcha-form-consulta-quitacao-eleitoral" class="captcha-portal">
                                                    protegido por reCAPTCHA
                                                    ( <a href="https://www.google.com/intl/pt-BR/policies/privacy/">Privacidade</a> -
                                                    <a href="https://www.google.com/intl/pt-BR/policies/terms/">Termos</a> )
                                                </div></div>
                    <div class="form-group servicos__form_botao">
                      <button
                        class="btn btn-amarelo"
                        name="consulta_quitacao_eleitoral_form_submit"
                        type="submit"
                      >
                        Emitir
                      </button>
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div id="captcha-consulta-quitacao"></div>
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

<!-- Serviço Validação de documentos -->
<div class="servicos__modal">
  <div
    class="modal fade"
    id="servicoValidacaoDocumentos"
    tabindex="-1"
    role="dialog"
    aria-labelledby="servicoValidacaoDocumentos"
    aria-hidden="true"
  >
    <div class="modal-dialog servicos__modal_show" role="document">
      <div class="modal-content">
        <div class="servicos__conteudo">
          <div class="servicos__linha">
            <div class="modal-header servicos__modal_head">
              <h2 class="servicos__modal_titulo">
                Validação de e-Título, título impresso e certidões de quitação
                ou crimes eleitorais
              </h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body servicos__modal_body">
              <form
                id="form-certidao-quitacao-eleitoral"
                class="form-horizontal servicos__form validar-formulario"
                method="post"
                action="http://www.tse.jus.br/consulta_quitacao_eleitoral"
                novalidate
              >
                <fieldset class="servicos__form_bloco">
                  <div class="servicos__linha">
                    <legend class="sr-only">
                      Certidão de quitação eleitoral
                    </legend>
                    <div class="form-group servicos__form_quatro-colunas">
                      <label class="sr-only" for="NumeroTitulo">Título:</label>
                      <input
                        class="form-control"
                        id="NumeroTitulo"
                        placeholder="Número do título"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com o número do seu titulo!
                      </div>
                    </div>
                    <div class="form-group servicos__form_quatro-colunas">
                      <label class="sr-only" for="VQE_DataEmissao"
                        >Nascido:</label
                      >
                      <input
                        class="form-control"
                        id="VQE_DataEmissao"
                        placeholder="Data de emissão do documento"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com a data do seu nascimento!
                      </div>
                    </div>
                    <div class="form-group servicos__form_quatro-colunas">
                      <label class="sr-only" for="VQE_HoraEmissao"
                        >Horário:</label
                      >
                      <input
                        class="form-control"
                        id="VQE_HoraEmissao"
                        placeholder="Horário de emissão do documento"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com o horário de emissão do documento!
                      </div>
                    </div>
                    <div class="form-group servicos__form_quatro-colunas">
                      <label class="sr-only" for="VQE_CodigoCertidao"
                        >Código:</label
                      >
                      <input
                        class="form-control chave-codigo"
                        id="VQE_CodigoCertidao"
                        placeholder="Código do documento"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com o código do documento!
                      </div>
                    </div>
                    <div class="form-group servicos__form_botao">
                      <button
                        type="submit"
                        class="btn btn-amarelo"
                        name="c_form_submit"
                      >
                        Validar
                      </button>
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div id="captcha-valida-quitacao"></div>
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

<!-- Serviço Situação eleitoral -->
<div class="servicos__modal">
  <div
    class="modal fade"
    id="servicoSituacaoEleitoral"
    tabindex="-1"
    role="dialog"
    aria-labelledby="servicoSituacaoEleitoral"
    aria-hidden="true"
  >
    <div class="modal-dialog servicos__modal_show" role="document">
      <div class="modal-content">
        <div class="servicos__conteudo">
          <div class="servicos__linha">
            <div class="modal-header servicos__modal_head">
              <h2 class="servicos__modal_titulo">
                Consultar a situação eleitoral
              </h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body servicos__modal_body">
              <form
                class="form-horizontal servicos__form validar-formulario"
                method=""
                action="#"
                novalidate
              >
                <fieldset class="servicos__form_bloco">
                  <div class="servicos__linha">
                    <legend class="sr-only">
                      Consultar a situação eleitoral
                    </legend>
                    <div class="form-group servicos__form_duas-colunas">
                      <label class="sr-only" for="SE_NomeTituloEleitor"
                        >Nome ou título de eleitor</label
                      >
                      <input
                        name="nomeTituloEleitor"
                        id="SE_NomeTituloEleitor"
                        class="form-control"
                        placeholder="Nome ou número do título de eleitor"
                        type="text"
                      />
                    </div>
                    <div
                      class="form-group servicos__form_duas-colunas campo-data-situacao-eleitoral"
                    >
                      <label class="sr-only" for="SE_DataNascimento"
                        >Data de nascimento</label
                      ><input
                        name="dataNascimento"
                        id="SE_DataNascimento"
                        class="form-control"
                        placeholder="Data de nascimento"
                        type="text"
                        maxlength="10"
                      />
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div
                        id="captcha-consulta-situacao"
                        class="captcha-portal"
                      ></div>
                    </div>
                    <div class="form-group servicos__form_botao">
                      <button
                        id="consulta-situacao-eleitoral-form-submit"
                        name="consulta_situacao_eleitoral_form_submit"
                        type="submit"
                        class="btn btn-amarelo"
                      >
                        Consultar
                      </button>
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

<!-- Serviço Local de votação -->
<div class="servicos__modal">
  <div
    class="modal fade"
    id="servicoLocalVotacao"
    tabindex="-1"
    role="dialog"
    aria-labelledby="servicoLocalVotacao"
    aria-hidden="true"
  >
    <div class="modal-dialog servicos__modal_show" role="document">
      <div class="modal-content">
        <div class="servicos__conteudo">
          <div class="servicos__linha">
            <div class="modal-header servicos__modal_head">
              <h2 class="servicos__modal_titulo">
                Consulta à local de votação
              </h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body servicos__modal_body">
              <form
                id="form-consultar-local-votacao"
                class="form-horizontal servicos__form validar-formulario"
                method=""
                action=""
                novalidate
              >
                <fieldset class="servicos__form_bloco">
                  <div class="servicos__linha">
                    <legend class="sr-only">Consulta à local de votação</legend>
                    <div class="form-group servicos__form_duas-colunas">
                      <label class="sr-only" for="LV_NomeTituloEleitor"
                        >Nome ou título de eleitor</label
                      >
                      <input
                        name="nomeTituloEleitor"
                        id="LV_NomeTituloEleitor"
                        class="form-control"
                        placeholder="Nome ou número do título de eleitor"
                        type="text"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com o seu nome completo ou com o número do seu
                        título de eleitor!
                      </div>
                    </div>
                    <div class="form-group servicos__form_duas-colunas">
                      <label for="LV_NomeMae" class="sr-only">Mãe:</label>
                      <div class="input-group">
                        <input
                          name="nomeMae"
                          id="LV_NomeMae"
                          placeholder="Nome da mãe"
                          class="form-control"
                          aria-label="..."
                          required
                        />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <input
                              name="naoConstaMae"
                              id="LV_NaoConstaMae"
                              type="checkbox"
                              aria-label="..."
                              title="Não consta nome da mãe"
                            />
                            <label for="LV_NaoConstaMae">Não consta</label>
                          </span>
                        </div>
                        <div class="invalid-feedback">
                          Preencha com o nome completo da sua mãe!
                        </div>
                      </div>
                    </div>
                    <div class="form-group servicos__form_tres-colunas">
                      <label class="sr-only" for="LV_DataNascimento"
                        >Data de nascimento</label
                      >
                      <input
                        name="dataNascimento"
                        id="LV_DataNascimento"
                        class="form-control"
                        placeholder="Data de nascimento"
                        type="text"
                        maxlength="10"
                        required
                      />
                      <div class="invalid-feedback">
                        Preencha com a data do seu nascimento! dia/mes/ano
                      </div>
                    </div>

                    <div class="form-group servicos__form_botao-float">
                      <button
                        class="btn btn-amarelo"
                        id="consultar-local-votacao-form-submit"
                        name="consultar_local_votacao_form_submit"
                        type="submit"
                      >
                        Consultar
                      </button>
                    </div>
                    <div class="form-group servicos__form_uma-coluna">
                      <div id="captcha-consulta-local"></div>
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
