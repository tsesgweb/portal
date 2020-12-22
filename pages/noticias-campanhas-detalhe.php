<?php
include 'config.inc.php';
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = 'Campanhas';
$ocultartitulo        = true;
$compartilhar         = false;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
include BASE_URL . '/includes/header.inc.php';
include BASE_URL . '/includes/noticias/campanha.inc.php';
include BASE_URL . '/includes/footer.inc.php';
?>