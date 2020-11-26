<?php
$tagsRadio = ['Comunicação', 'Plenário', 'Partidos Políticos', 'Informação', 'Bolsonaro', 'Haddad'];
?>
<div class="portletWrapper">
  <div class="lateral__tags">
    <header class="lateral__tags-header">
      <h4 class="lateral__tags-title">Navegue por temas</h4>
    </header>
    <div class="lateral__tags-items">
      <?php foreach ($tagsRadio as $tag ) :?>
      <a class="lateral__tags-item btn btn-cinza-claro">
        <?= $tag ?>
      </a>
      <?php endforeach;?>
    </div>
  </div>
</div>
