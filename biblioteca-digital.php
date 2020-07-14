<?php
include __DIR__ . '/inc/config.inc.php';
$subnivel = 'Biblioteca';
$titulo = 'Biblioteca digital da Justiça Eleitoral';
$asideinterna = false;
$biblioteca = true;
$tags = false;
$gestor = false;
include __DIR__ . '/inc/header.inc.php';
?>
<!-- start:Conteudo página -->
<section id="texto-conteudo">
    <div>
        <iframe src="http://bibliotecadigital.tse.jus.br/xmlui/discover" height="1800" title="Biblioteca Digital do Tribunal Superior Eleitoral"></iframe>
    </div>
</section>                
<?php include __DIR__ . '/inc/footer.inc.php';?>