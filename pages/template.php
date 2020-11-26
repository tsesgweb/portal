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
$feedback = false;
include BASE_URL . '/includes/header.inc.php';
?>
<?php include BASE_URL . '/includes/breadcrumb.inc.php'; ?>
<div class="bg-primary">
    <h1>Home</h1>
    <p>Conteúdo home</p>
</div>
<main class="main__conteudo">
    <h1>Interna</h1>
    <div class="main__linha" style="height: 100px;">
        <nav id="coluna-lateral-interna" class="bg-primary">
            <p>Aside</p>
        </nav>
        <div id="conteudo" class="conteudo conteudo_coluna bg-amarelo">
            <p>conteudo</p>
        </div>
    </div>
</main>
<main class="main__conteudo">
    <h1>Notícia</h1>
    <div class="main__linha" style="height: 100px;">
        <div id="conteudo" class="conteudo conteudo_coluna bg-amarelo">
            <p>conteudo</p>
        </div>
        <nav id="coluna-lateral-noticias" class="bg-azul" style="margin-top:0">
            <p>Aside noticias</p>
        </nav>
    </div>
</main>
<main class="main__conteudo">
    <h1>Interna sem coluna</h1>
    <div class="main__linha" style="height: 100px;">
        <div id="conteudo" class="conteudo bg-azul">
            <p>conteudo</p>
        </div>
    </div>
</main>
<main class="main__conteudo_full">
    <h1>Full width</h1>
    <div class="main__linha" style="height: 100px;">
        <div id="conteudo" class="conteudo bg-cinza">
            <p>conteudo</p>
        </div>
    </div>
</main>
<?php
include BASE_URL . '/includes/footer.inc.php';
?>