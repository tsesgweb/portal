<?php
include 'config.inc.php';
$asideinterna   = false;
$asidenoticia   = false;
$titulo         = 'Conexão Eleitoral: TSE inaugura exposição sobre diplomação na República brasileira';
$compartilhar   = false;
$tags           = false;
$gestor         = false;
$ocultartitulo  = true;
$maisvisitados  = false;
$relacionadas   = false;
$internanoticia = true;
include BASE_URL . '/includes/header.inc.php';
?>
<div class="noticia__conteudo">
    <div class="noticia__linha">
        <section id="texto-conteudo" class="texto-noticias-internas">
            <div class="tab-content sem-galeria">
                <div role="tabpanel" class="tab-pane active" id="ancora-1"></div>
                <div role="tabpanel" class="tab-pane" id="ancora-2"></div>
                <div role="tabpanel" class="tab-pane" id="ancora-3"></div>
                <div role="tabpanel" class="tab-pane" id="ancora-4"></div>
            </div>
            <?php include BASE_URL . '/includes/noticias/paragrafo-importante.inc.php';?>
            <?php include BASE_URL . '/includes/noticias/aviso.inc.php';?>

        </section> 
        <?php include BASE_URL . '/includes/widgets/aside-noticias-radio.inc.php';?>
        <?php include BASE_URL . '/includes/noticias/barra-ferramentas-noticias.inc.php';?>
    </div>
</div>

<?php include BASE_URL . '/includes/footer.inc.php';?>