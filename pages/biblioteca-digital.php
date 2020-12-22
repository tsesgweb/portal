<?php
include 'config.inc.php';
$subnivel = 'Biblioteca';
$titulo = 'Biblioteca digital da Justiça Eleitoral';
$asideinterna = false;
$biblioteca = true;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
<!-- start:Conteudo página -->
<section id="texto-conteudo">
    <div>
        <iframe src="http://bibliotecadigital.tse.jus.br/xmlui/discover" height="1800" title="Biblioteca Digital do Tribunal Superior Eleitoral"></iframe>
    </div>
</section>                
<?php include BASE_URL . '/includes/footer.inc.php';?>