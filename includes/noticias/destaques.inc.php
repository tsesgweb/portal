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
"img" => 'https://placeimg.com/600/310/any', 
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
      <article class="noticia-listagem_card">
        <figure class="noticia-listagem_card-img">
        <img src="<?= $value['img'];?>"           
          alt="<?= $value['title'];?>">
        </figure>
        <div class="noticia-listagem_card-img-overlay">
          <span class="noticia-listagem_badge badge-<?= $value['tag']?>"><?= $value['tag'];?></span>
          <h3 class="noticia-listagem_title"><a href="http://"><?= $value['title'];?></a>
          </h3>
          
          <p class="noticia-listagem_description">
            <span class="ready-player-<?= $key.$card->time; ?> player-with-accessibility">
            <audio crossorigin>
              <source src="<?=$card->audio; ?>" type="audio/mpeg">
            </audio>
          </span>
        </p>
        
        </div>
      </article>
      <?php } ?>
    </div>
  </div>
</section>