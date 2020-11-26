<?php
include('config.inc.php');
$titulo         = 'Validação de documentos';
$asideinterna   = true;
$tags           = true;
$recaptcha      = true;
$datepicker     = true;
include BASE_URL. '/includes/header.inc.php';
?>
    <section id="texto-conteudo">
        <p>Validação de documentos tais como: e-Título, título impresso e certidões de quitação e de crimes eleitorais.</p>
        <form id="form-validar-documentos" class="form-horizontal" method="post" action="http://www.tse.jus.br/eleitor/servicos/validacao-de-documentos/@@validar_documentos" novalidate="novalidate">
            <fieldset>
                <legend class="sr-only">Validação de documentos</legend>
                <div class="form-group">
                    <label for="VQE_NumeroTitulo">Número do título</label><input name="numeroTitulo" id="VQE_NumeroTitulo" class="form-control" placeholder="Número do título" type="text" maxlength="12">
                </div>
                <div class="form-group">
                    <label for="VQE_DataEmissao">Data de emissão do documento</label>
                    <div class="input-group">
                        <input name="dataEmissao" id="VQE_DataEmissao" class="abrir-datepicker form-control" placeholder="Data de emissão do documento" type="text" maxlength="10">                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="VQE_HoraEmissao">Horário de emissão do documento</label>
                    <div class="input-group">
                        <input name="horaEmissao" id="VQE_HoraEmissao" class="abrir-timepicker form-control valid" placeholder="Horário de emissão do documento" type="text" maxlength="5" aria-required="true" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label for="VQE_CodigoCertidao">Código do documento</label><input name="codigoCertidao" id="VQE_CodigoCertidao" class=" form-control chave-codigo" placeholder="Código de validação" type="text" maxlength="19">
                </div>
                <div class="form-group">
                    <div class="center-block">
                        <div id="captcha-validar-documentos"></div>
                    </div>
                    <p class="help-block">Esta informação ajuda o Tribunal Superior Eleitoral a evitar a consulta por programas automáticos, que dificultam a utilização deste aplicativo pelos demais usuários.</p>
                </div>
                <button class="btn btn-primary" id="validar-documentos-form-submit" name="validar_documentos_form_submit" type="submit">
                                Validar
                            </button>
            </fieldset>
        </form>
        <!-- Tela de resposta para validação de documentos -->
        <div id="resposta-validar-documentos"></div>
    </section>
    <?php include BASE_URL. '/includes/footer.inc.php';?>