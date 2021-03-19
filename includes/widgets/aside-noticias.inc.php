<aside id="aside-noticias" class="nao-imprimir">
    <div class="lateral__mais-lidas">
        <h2 class="sr-only">Relacionadas</h2>
        <div class="lateral__mais-lidas-header">
            <h3 class="lateral__mais-lidas-title">Notícias relacionadas</h3>
        </div>
        <?php include __DIR__ . '/relacionadas.inc.php';?>
    </div>

    <div class="lateral__mais-lidas">
        <h2 class="sr-only">Últimas notícias postadas</h2>
        <div class="lateral__mais-lidas-header">
            <h3 class="lateral__mais-lidas-title">Últimas</h3>
        </div>
        <?php include __DIR__ . '/recentes.inc.php';?>
    </div>

    <div class="lateral__mais-lidas">
        <h2 class="sr-only">Temas</h2>
        <div class="lateral__mais-lidas-header">
            <h3 class="lateral__mais-lidas-title">Navegue por temas</h3>
        </div>
            <?php include __DIR__ . '/temas.inc.php';?>
    </div>

    <div class="lateral__mais-lidas">
        <h2 class="sr-only">Relacionadas</h2>
        <div class="lateral__mais-lidas-header">
            <h3 class="lateral__mais-lidas-title">Quem leu isso, leu também</h3>
        </div>
        <?php include __DIR__ . '/relacionadas.inc.php';?>
    </div>

    <div class="lateral">
        <?php $internanoticia && include __DIR__ . '/gestor-noticia.inc.php';?>  
    </div>

</aside>