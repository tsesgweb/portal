<?php
include('config.inc.php');
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

// João/Edivaldo
include BASE_URL . '/includes/noticias/home-tv.inc.php';
include BASE_URL . '/includes/footer.inc.php';
?>