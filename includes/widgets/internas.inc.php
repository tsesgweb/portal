<aside id="coluna-lateral-interna" class="mobile-active alinhar-interna">
    <nav id="menu-lateral" class="nao-imprimir">
        <h3>Eleitor</h3>
        <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-lateral-res" aria-expanded="false" id="ui-collapse-143"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
        <div class="collapse navbar-collapse" id="menu-lateral-res">
            <ul class="menu-lateral">
                <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/servicos-1/servicos-ao-eleitor" target="_self" class="menu-lateral-item-link state-private">Serviços ao eleitor</a></li>
                <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/biometria/biometria" target="_self" class="menu-lateral-item-link None">Biometria</a></li>
                <li class="menu-lateral-item menu-lateral-item_ativo has-submenu">
                    <a href="http://localhost:8401/portalje/tse/eleitor/mesario/canal-do-mesario" target="_self" class="menu-lateral-item-link">Canal do Mesário</a>
                    <ul class="menu-lateral submenu">
                        <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/mesario/declaracao-de-dias-trabalhados" target="_self" class="menu-lateral-item-link">Declaração de dias trabalhados</a></li>
                        <li class="menu-lateral-item menu-lateral-item_ativo"><a href="http://localhost:8401/portalje/tse/eleitor/mesario/programa-mesario-voluntario" target="_self" class="menu-lateral-item-link">Mesário voluntário</a></li>
                        <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/mesario/treinamento" target="_self" class="menu-lateral-item-link">Treinamento</a></li>
                    </ul>
                </li>
                <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/certidoes/certidoes" target="_self" class="menu-lateral-item-link None">Certidões</a></li>
                <li class="menu-lateral-item  menu-lateral-item_ativo"><a href="http://localhost:8401/portalje/tse/eleitor/estatisticas-de-eleitorado/eleitorado" target="_self" class="menu-lateral-item-link None">Estatísticas do eleitorado</a></li>
                <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/processo-eleitoral-brasileiro/funcionamento-do-processo-eleitoral-no-brasil" target="_self" class="menu-lateral-item-link None">Processo Eleitoral no Brasil</a></li>
                <li class="menu-lateral-item"><a href="http://localhost:8401/portalje/tse/eleitor/servicos/servicos-ao-eleitor" target="_self" class="menu-lateral-item-link None">Serviços ao eleitor</a></li>
            </ul>

        </div>
    </nav>
    <?php 
    if ($tags or $gestor) {
      print '<div id="coluna-lateral" class="nao-imprimir">';
      $tags && include __DIR__ . '/tags.inc.php';
      $gestor && include __DIR__ . '/gestor.inc.php';
      print '</div>';
    }
    ?>
</aside>