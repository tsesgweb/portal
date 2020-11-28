<?php 

$ultimasRadio = [
  ['title'=>
'Confira as principais alterações legislativas nas regras eleitorais que valerão
para o pleito de 2020', 'image'=> 'https://placeimg.com/80/80/tech'], ['title'=>
'Biometria já alcançou mais de 78% do eleitorado brasileiro', 'image'=>
'https://placeimg.com/80/80/people'], ['title'=> 'Saiba como emitir a guia para
quitação de multa eleitoral', 'image'=> 'https://placeimg.com/80/80/nature'] ];
?>
<div class="portletWrapper">
  <div class="lateral__ultimas">
    <header class="lateral__ultimas-header">
      <h4 class="lateral__ultimas-title">Últimas da rádio</h4>
    </header>
    <?php foreach ($ultimasRadio as $ultima ) :?>
    <article class="lateral__ultimas-items">
      <figure class="ultimas-imagem">
        <img src="<?= $ultima['image']?>" alt="<?= $ultima['title']?>" />
      </figure>
      <h5 class="ultimas-titulo"><a href="#" title="<?= $ultima['title']?>"><?= $ultima['title']?></a></h5>
    </article>
    <?php endforeach;?>
  </div>
</div>
