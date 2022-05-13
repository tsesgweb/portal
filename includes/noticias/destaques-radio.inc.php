<?php 
$ocultartitulo = true;
$noticias = [
  [
  "img" => '',
  "tag"=> 'destaque',
    "title"=> "Conheça a logo das Eleições Municipais de 2020, diversidade
  é o tema central",
  "description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fugiat
  dolore adipisci repellat
  consequuntur, voluptate qui nisi. Minus corrupti eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut,
  alias.',
  "link" => 'https://www.tse.jus.br',
],
[
"img" => '', 
"tag"=> 'noticia',
 "title"=> "Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político",
 "description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fugiat
  dolore adipisci repellat
  consequuntur, voluptate qui nisi. Minus corrupti eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut,
  alias.',
  "link" => 'https://www.tse.jus.br',
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
          <img src="<?= $value['img'];?>" alt="<?= $value['title'];?>">
        </figure>
        <?php endif; ?>
        <div class="noticia-listagem_card-<?php $value['img'] ? print('img-overlay') : print('item');?>">
          <span class="noticia-listagem_badge badge-<?= $value['tag']?>"><?= $value['tag'];?></span>
          <h3 class="noticia-listagem_title"><a href="http://"><?= $value['title'];?></a>
          </h3>

          <div class="noticia-listagem_description noticia-listagem_description-radio">
            <div class="ready-player-<?= $key ?> player-with-accessibility">
              <audio crossorigin>
                <source src="" type="audio/mpeg">
              </audio>
            </div>
            <div class="noticia-listagem_description-buttons">
              <button class="radio-list-view" type="button">
                <img src="assets/imagens/noticias/view.svg" alt="">
              </button>
              <button class="radio-list-download" type="button">
                <img src="assets/imagens/noticias/download.svg" alt="">
              </button>
              <button class="radio-list-sharing" type="button">
                <img src="assets/imagens/noticias/share.svg" alt="">
              </button>
              <div
                class="radio-list-sharing-overlay radio-list-sharing-overlay__active radio-list-sharing-overlay_color-radio">
                <button class="radio-list-sharing-overlay__close">X</button>
                <span class="radio-list-sharing-overlay__title"><?= $value['title'] ?></span>
                <span class="radio-list-sharing-overlay__content">
                  <div class="header">
                    COMPARTILHAR:
                    <div class="icons radio-list-sharing-overlay__content_color-radio_icons">
                      <?php include BASE_URL . '/includes/share.inc.php';?>
                    </div>
                  </div>
                  <button aria-label="COPIAR LINK DA MATÉRIA" data-clipboard-text="<?= $value['link'] ?>"
                    class="btn btn-link footer radio-list-sharing-clipboard radio-list-sharing-overlay__content_color-radio__footer">
                    COPIAR LINK DA MATÉRIA
                  </button>
                </span>

              </div>
            </div>
          </div>
        </div>
      </article>
      <?php } ?>
    </div>
  </div>
</section>