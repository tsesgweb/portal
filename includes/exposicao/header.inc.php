<header class="panel__header" data-color="<?= $color; ?>">
  <?php 
  $panel['header']['subtitle'] && printf('<p class="subtitle">%s</p>', $panel['header']['subtitle']);
  $panel['header']['title'] && printf('<h2 class="title">%s</h2>', $panel['header']['title']);
  $panel['header']['description'] && printf('<p class="description">%s</p>', $panel['header']['description']);
  ?>
</header>