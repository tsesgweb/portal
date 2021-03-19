<?php
include 'config.inc.php';
$home = true;
$interna = false;
$recaptcha = false;
$breadcrumb = false;
$compartilhar = false;
$titulo = 'Exposição';
$ocultartitulo = true;
$tags = false;
$gestor = false;
$maisvisitados = false;
include BASE_URL . '/includes/header.inc.php';
include BASE_URL . '/includes/exposicao/index.php';
include BASE_URL . '/includes/footer.inc.php';
