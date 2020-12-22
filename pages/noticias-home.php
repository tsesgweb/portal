<?php
include 'config.inc.php';
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = null;
$compartilhar         = false;
$home                 = true;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
include BASE_URL . '/includes/header.inc.php';
// Edivaldo
include BASE_URL . '/includes/noticias/home/topo.inc.php';
include BASE_URL . '/includes/noticias/home/cards.inc.php';
// Standby
include BASE_URL . '/includes/noticias/home/tv.inc.php';
// Anderson
include BASE_URL . '/includes/noticias/home/principais-assuntos.inc.php';
include BASE_URL . '/includes/noticias/home/mais-lidas.inc.php';
// João/Edivaldo
include BASE_URL . '/includes/noticias/home/radio.inc.php';
// João/Edivaldo
include BASE_URL . '/includes/noticias/home/playlist.inc.php';
include BASE_URL . '/includes/noticias/home/campanhas.inc.php';
include BASE_URL . '/includes/footer.inc.php';
?>