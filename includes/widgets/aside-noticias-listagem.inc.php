<aside id="coluna-lateral-noticias" class="<?php $asidenoticialistagem || $destaquenoticia ? print 'listagem' :print 'lateral' ;?> nao-imprimir">
	<h2 class="sr-only">Coluna relacionada a notícias</h2>
  <?php $destaquenoticia && include 'relacionadas.inc.php';?>
  <?php $destaquenoticia && include 'recentes.inc.php';?>
  <?php $destaquenoticia && include 'temas.inc.php';?>
</aside>