<!-- Feedback -->
<div class="feedback__modal">
    <div class="modal fade" id="modal-sugestao-pagina" tabindex="-1" role="dialog" aria-labelledby="modal-sugestao-pagina" aria-hidden="true">
        <div class="modal-dialog feedback__modal_show" role="document">
            <div class="modal-content">
                <div class="feedback__conteudo">
                    <div class="feedback__linha">
                        <div class="modal-header feedback__modal_head">
                            <h2 class="feedback__modal_titulo">Sua opinião é importante para melhorar a navegação do portal.</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body feedback__modal_body">
                            <p>Caso necessite de informações institucionais acesse
                                <a title="Link para a Ouvidoria" href="http://www.tse.jus.br/eleitor-e-eleicoes/servicos/ouvidoria">Ouvidoria.</a>
                            </p>
                            <div id="form">
                                <h3 class="feedback__modal_sub-titulo sr-only">Coloque seu e-mail</h3>
                                <div class="form-group">
                                    <label for="email-feed">E-mail</label>
                                    <input type="email" class="form-control" id="email-feed">
                                </div>

                                <h3 class="feedback__modal_sub-titulo">Como foi sua experiência em nosso site?</h3>

                                <div class="btn-group-toggle feedback__modal_radio" data-toggle="buttons">

                                    <label class="btn" for="ex-site-pessima">
                                        <input type="radio" name="experiencia-site" id="ex-site-pessima" autocomplete="off" value="péssima">
                                        <span class="sr-only">Péssima</span>
                                    </label>

                                    <label class="btn" for="ex-site-ruim">
                                        <input type="radio" name="experiencia-site" id="ex-site-ruim" autocomplete="off" value="ruim">
                                        <span class="sr-only">Ruim</span>
                                    </label>

                                    <label class="btn" for="ex-site-normal">
                                        <input type="radio" name="experiencia-site" id="ex-site-normal" autocomplete="off" value="normal">
                                        <span class="sr-only">Normal</span>
                                    </label>

                                    <label class="btn" for="ex-site-boa">
                                        <input type="radio" name="experiencia-site" id="ex-site-boa" autocomplete="off" value="boa">
                                        <span class="sr-only">Boa</span>
                                    </label>

                                    <label class="btn" for="ex-site-otima">
                                        <input type="radio" name="experiencia-site" id="ex-site-otima" autocomplete="off" value="ótima">
                                        <span class="sr-only">Ótima</span>
                                    </label>
                                </div>

                                <h3 class="feedback__modal_sub-titulo">Seu feedback</h3>
                                <div id="seu-feedback">
                                    <ul class="nav nav-tabs" id="navfeedback" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="feed-esc-sugestao-tab" data-toggle="tab" href="#feed-esc-sugestao" role="tab" aria-controls="feed-esc-sugestao" aria-selected="true">Sugestão</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="feed-esc-elogio-tab" data-toggle="tab" href="#feed-esc-elogio" role="tab" aria-controls="feed-esc-elogio" aria-selected="false">Elogio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="feed-esc-criticas-tab" data-toggle="tab" href="#feed-esc-criticas" role="tab" aria-controls="feed-esc-criticas" aria-selected="false">Críticas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="feed-esc-erro-tab" data-toggle="tab" href="#feed-esc-erro" role="tab" aria-controls="feed-esc-erro" aria-selected="false">Erro na página</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="feed-esc-nao-encontrou-tab" data-toggle="tab" href="#feed-esc-nao-encontrou" role="tab" aria-controls="feed-esc-nao-encontrou" aria-selected="false">Não encontrou o que queria?</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content" id="tabfeedback">
                                        <div class="tab-pane fade show active" id="feed-esc-sugestao" role="tabpanel" aria-labelledby="feed-esc-sugestao-tab">
                                            <div class="form-group">
                                                <label for="texts-sugestao" class="sr-only">Escrever sugestão</label>
                                                <textarea class="form-control" rows="3" id="texts-sugestao" name="Sugestão"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="feed-esc-elogio" role="tabpanel" aria-labelledby="feed-esc-elogio-tab">
                                            <div class="form-group">
                                                <label for="texts-elogio" class="sr-only">Escrever Elogio</label>
                                                <textarea class="form-control" rows="3" id="texts-elogio" name="Elogio"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="feed-esc-criticas" role="tabpanel" aria-labelledby="feed-esc-criticas-tab">
                                            <div class="form-group">
                                                <label for="texts-criticas" class="sr-only">Escrever críticas</label>
                                                <textarea class="form-control" rows="3" id="texts-criticas" name="Críticas"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="feed-esc-erro" role="tabpanel" aria-labelledby="feed-esc-erro-tab">
                                            <div class="form-group">
                                                <label for="texts-erro" class="sr-only">Escrever erro na página</label>
                                                <textarea class="form-control" rows="3" id="texts-erro" name="Erro na página"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="feed-esc-nao-encontrou" role="tabpanel" aria-labelledby="feed-esc-nao-encontrou-tab">
                                            <div class="form-group">
                                                <label for="texts-nao-encontrou" class="sr-only">Não encontrou o que queria</label>
                                                <textarea class="form-control textarea-feed" rows="3" id="texts-nao-encontrou" name="Não encontrei"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-block">
                                <div class="captcha-portal" id="captcha-feedback">
                                </div>
                            </div>
                            <div id="resp"></div>
                        </div>
                        <div class="modal-footer feedback__modal_footer">
                            <div class="form-group">
                                <button type="reset" data-dismiss="modal" class="btn btn-cinza">Cancelar</button>
                                <button type="submit" class="btn btn-amarelo">Enviar feedback</button>
                                <div class="center-block">
                                    <div id="captcha-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>