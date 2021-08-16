<?php 
$ocultartitulo = true;
$noticias = [
  [
  "img" => 'https://placeimg.com/600/310/tech',
  "tag"=> 'destaque',
    "title"=> "Conheça a logo das Eleições Municipais de 2020, diversidade
  é o tema central",
  "description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fugiat
  dolore adipisci repellat
  consequuntur, voluptate qui nisi. Minus corrupti eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut,
  alias.'
],
[
"img" => '', 
"tag"=> 'noticia',
 "title"=> "Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político",
 "description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fugiat
  dolore adipisci repellat
  consequuntur, voluptate qui nisi. Minus corrupti eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut,
  alias.'
  ],
];
?>
<section id="imprensa" class="imprensa__conteudo">
  <div class="imprensa__linha">
    <h2 class="titulo"><?= $titulo; ?></h2>
    <div class="noticia-listagem_destaque">
      <?php foreach ($noticias as $key => $value) { ?>
      <article class="noticia-listagem_card <?php !$value['img'] ? print('noticia-listagem_card__not-img') : null;?>">
        <?php if($value['img']): ?>
        <figure class="noticia-listagem_card-img">
        <img src="<?= $value['img'];?>"           
          alt="<?= $value['title'];?>">
        </figure>
        <?php endif; ?>
        <div class="noticia-listagem_card-<?php $value['img'] ? print('img-overlay') : print('item');?>">
          <span class="noticia-listagem_badge badge-<?= $value['tag']?>"><?= $value['tag'];?></span>
          <h3 class="noticia-listagem_title"><a href="http://"><?= $value['title'];?></a>
          </h3>
          
          <p class="noticia-listagem_description">
            <a href="http://" class="noticia-listagem_description_link">
              <?= $value['description'];?>
            </a>
          </p>
        
        </div>
      </article>
      <?php } ?>
    </div>
  </div>
</section>