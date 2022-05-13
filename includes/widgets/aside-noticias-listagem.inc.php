<aside id="aside-noticias"
  class="<?php $asidenoticialistagem || $destaquenoticia || $destaqueradio ? print 'listagem' : print 'lateral'; ?> nao-imprimir">
  <h2 class="sr-only">Coluna relacionada a notícias</h2>
  <?php $destaquenoticia || $destaqueradio && !$asidenoticialistagem && include 'relacionadas.inc.php'; ?>
  <?php $destaquenoticia || $destaqueradio && !$asidenoticialistagem && include 'recentes.inc.php'; ?>
  <?php $destaquenoticia || $destaqueradio && !$asidenoticialistagem && include 'temas.inc.php'; ?>
  <?php $asidenoticialistagem && include 'mais-lidas.inc.php'; ?>
  <?php $asidenoticialistagem && include 'serie.inc.php'; ?>
  <?php $asidenoticialistagem && include 'biometria.inc.php'; ?>
  <?php $asidenoticialistagem && include 'tps.inc.php'; ?>
</aside>