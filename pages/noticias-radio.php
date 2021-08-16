<?php
include 'config.inc.php';
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = 'Rádio';
$compartilhar         = false;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
$destaquenoticia      = true;
$asidenoticiaradio    = true;
$data                 = file_get_contents(BASE_URL."/includes/noticias/conteudo.json");
$outrasNoticias       = json_decode($data);
$outrasNoticias[1]->image_preview = '';
$outrasNoticias[5]->image_preview = '';
$porcentagem = 0;

include BASE_URL . '/includes/header.inc.php';
// include BASE_URL . '/includes/noticias/titulo-descricao-categorias.inc.php';
include BASE_URL.'/includes/noticias/navegacao-data.inc.php';?>

<div id="radio-list" class="radio-list">
  <?php  
    foreach ($outrasNoticias as $key => $noticia) :        
      list($data, $horas) = explode(' ', $noticia->date_modify);
      list($dia, $mes, $ano) = explode('/', $data);
      list($hora, $min, $segundos) = explode(':', $horas);

      $data_final = "{$dia}.{$mes}.{$ano}"; 
      $hora_final = "{$hora}:{$min}";  
      
      $porcentagem = rand(0, 100);
  ?>
  <article class="radio-list-card">
    <div class="radio-list-row">

      <?php
      if ($noticia->image_preview  || $noticia->video_image) :
      ?>
      <div class="radio-list-col-4">
        <?php if(!$noticia->video_image): ?>
        <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
          <?php else: ?>
          <a title="<?= $noticia->title; ?>" data-fancybox data-caption="<?= $noticia->title; ?>"
            href="<?= $noticia->video_url?>">
            <?php endif; ?>
            <figure
              class="radio-list-media <?php $noticia->video_image && print 'je-icone je-icone-5x je-icone-youtube'?>">
              <img src="<?php $noticia->image_preview ? print $noticia->image_large: print $noticia->video_image; ?>"
                class="radio-list-img img-responsive" alt="<?= $noticia->title; ?>" />
            </figure>
            <?php if(!$noticia->video_image): ?>
          </a>
          <?php endif; ?>
          <time class="time" datetime="<?= "{$ano}-{$mes}-{$dia} {$hora}:{$min}" ?>"><?= $data_final; ?> |
            <?= $hora_final?></time>
      </div>
      <?php endif; ?>
      <div class="radio-list-col-<?php $noticia->image_preview || $noticia->video_image ? print '8': print '12';?>">
        <div class="radio-list-content">
          <h3 class="radio-list-title">
            <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
              <?= $noticia->title; ?>
            </a>
          </h3>
          <p class="radio-list-description">
            <?= $noticia->description; ?>
          </p>

        </div>
        <footer class="radio-list-footer">
          <div class="ready-player-<?= $key.$noticia->time; ?> player-with-accessibility">
            <audio crossorigin>
              <source src="<?=$noticia->audio_url; ?>" type="audio/mpeg">
            </audio>
          </div>
          <button class="radio-list-view" type="button">
            <img src="assets/imagens/noticias/view.svg" alt="">
          </button>
          <button class="radio-list-download" type="button">
            <img src="assets/imagens/noticias/download.svg" alt="">
          </button>
          <button class="radio-list-sharing" type="button">
            <img src="assets/imagens/noticias/share.svg" alt="">
          </button>

        </footer>
        <div
          class="radio-list-sharing-overlay radio-list-sharing-overlay__active radio-list-sharing-overlay_color-radio">
          <button class="radio-list-sharing-overlay__close">X</button>
          <span class="radio-list-sharing-overlay__title"><?= $noticia->title; ?></span>
          <span class="radio-list-sharing-overlay__content">
            <div class="header">
              COMPARTILHAR:
              <div class="icons radio-list-sharing-overlay__content_color-radio_icons">
                <?php include BASE_URL . '/includes/share.inc.php';?>
              </div>
            </div>
            <button aria-label="COPIAR LINK DA MATÉRIA" data-clipboard-text="<?= $noticia->url; ?>"
              class="btn btn-link footer radio-list-sharing-clipboard radio-list-sharing-overlay__content_color-radio__footer">
              COPIAR LINK DA MATÉRIA
            </button>
          </span>

        </div>
      </div>
    </div>
  </article>
  <?php endforeach; ?>
  <footer class="radio-list-read-more">
    <button id="radio-list-read-more-button" class="btn btn-radio btn-lg btn-block">Mais rádio</button>
  </footer>
  <?php $paginacao && include BASE_URL . '/includes/paginacao.inc.php'; ?>
</div>
<?php include BASE_URL . '/includes/footer.inc.php'; ?>