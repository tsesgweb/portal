<div class="panel__rich-text panel__intro">
  <?php 
    printf('%s', $panel['content']['section']);
    printf('%s', $panel['content']['title']);
    printf('%s', $panel['content']['subtitle']);
    printf('<div class="panel__descricao">%s</div>', $panel['content']['description']);
  ?>
</div> 