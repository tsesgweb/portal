<?php
include('config.inc.php');
$home = true;
$interna = false;
$recaptcha = false;
$breadcrumb = false;
$compartilhar = false;
$titulo = 'Home';
$ocultartitulo = true;
$tags = false;
$gestor = false;
$maisvisitados = false;
include BASE_URL . '/includes/header.inc.php';
include BASE_URL . '/includes/home/destaques-topo.inc.php';
print '<div class="servicos-destaques__conteudo"><div class="servicos-destaques__linha">';
include BASE_URL . '/includes/home/servicos.inc.php';
include BASE_URL . '/includes/home/destaques-temas.inc.php';
print '</div></div>';
include BASE_URL . '/includes/home/full-cards.inc.php';
include BASE_URL . '/includes/home/redes-sociais.inc.php';
// include BASE_URL . '/includes/home/cards-social-media.inc.php';
include BASE_URL . '/includes/home/banners-home.inc.php';
include BASE_URL . '/includes/home/modal-servicos-eleitor.inc.php';
include BASE_URL . '/includes/home/modal-consultas.inc.php';
include BASE_URL . '/includes/home/modal-dje.inc.php';
include BASE_URL . '/includes/footer.inc.php';