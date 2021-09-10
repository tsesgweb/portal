<aside id="aside-noticias" class="<?php $asidenoticialistagem || $destaquenoticia ? print 'listagem' : print 'lateral'; ?> nao-imprimir">
  <h2 class="sr-only">Coluna relacionada a notícias</h2>
  <?php $destaquenoticia && !$asidenoticialistagem && include 'relacionadas.inc.php'; ?>
  <?php $destaquenoticia && !$asidenoticialistagem && include 'recentes.inc.php'; ?>
  <?php $destaquenoticia && !$asidenoticialistagem && include 'temas.inc.php'; ?>
  <?php $asidenoticialistagem && include 'mais-lidas.inc.php'; ?>
  <?php $asidenoticialistagem && include 'serie.inc.php'; ?>
  <?php $asidenoticialistagem && include 'biometria.inc.php'; ?>
  <?php $asidenoticialistagem && include 'tps.inc.php'; ?>
</aside>