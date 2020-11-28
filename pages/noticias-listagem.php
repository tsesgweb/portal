<?php
include('config.inc.php');
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = 'Notícias';
$compartilhar         = false;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
$destaquenoticia      = true;
$asidenoticialistagem = true;
$url            = 'https://www.tse.jus.br/@@get_lista_noticias_categoria?subject=Tribunal%20Superior%20Eleitoral&sort=date%3AD%3AL%3Ad1';
$data           = file_get_contents($url);
$outrasNoticias = json_decode($data);
$outrasNoticias[5]->image_preview = null;
$outrasNoticias[5]->video_image = null;
$outrasNoticias[7]->image_preview = null;
$outrasNoticias[6]->video_image = 'https://img.youtube.com/vi/1PlnZEt797o/maxresdefault.jpg';
$outrasNoticias[6]->video_url = 'https://www.youtube.com/watch?v=1PlnZEt797o';

$tags = array(
  array("icon"=> "<i class='fa fa-circle' aria-hidden='true'></i> ","letter"=> null, "badge"=>"aovivo", "name"=> "Ao Vivo"), 
  array("icon"=> null,"letter"=> "E", "badge"=>"evento", "name"=>"Evento"), 
  array("icon"=> null,"letter"=> "N", "badge"=>"noticia", "name"=>"Notícia"), 
  array("icon"=> null,"letter"=> "D", "badge"=>"destaque", "name"=>"Destaque"), 
  array("icon"=> null,"letter"=> "S", "badge"=>"servico", "name"=>"Serviço"), 
  array("icon"=> null,"letter"=> "C", "badge"=>"comunicado", "name"=>"Comunicado"), 
  array("icon"=> null,"letter"=> "V", "badge"=>"video", "name"=>"Vídeo"), 
  array("icon"=> "<i class='fa fa-microphone' aria-hidden='true'></i> ","letter"=> null, "badge"=>"radio", "name"=>"Rádio"), 
  array("icon"=> null,"letter"=> "N", "badge"=>"noticia", "name"=>"Notícia"), 
  array("icon"=> null,"letter"=> "M", "badge"=>"noticia", "name"=>"MulheresPolitica"),
  array("icon"=> null,"letter"=> "N", "badge"=>"noticia", "name"=>"Notícia"));

include BASE_URL . '/includes/header.inc.php';
include BASE_URL.'/includes/noticias/navegacao-data.inc.php';
?>
<div id="news-list" class="news-list">
  <?php
  
    foreach ($outrasNoticias as $key => $noticia) {    
      $tag = $tags[$key];
      list($data, $horas) = explode(' ', $noticia->date_modify);
      list($dia, $mes, $ano) = explode('/', $data);
      list($hora, $min, $segundos) = explode(':', $horas);

      $data_final = $dia.'.'.$mes.'.'.$ano; 
      $hora_final = ' | '.$hora.':'.$min;    
      
  ?>
  <article class="news-list-card">
    <div class="news-list-row">
      <?php
      if ($noticia->image_preview  || $noticia->video_image) :
      ?>
      <div class="news-list-col-4">
        <span
          class="badge-<?= $tag['badge'] ?> news-list-badge news-list-badge__limited"><?php $tag["icon"] !== null ? print $tag['icon'] :  print substr($tag['name'], 0, 1) ?><span>
            <?php $tag["icon"] !== null ? print $tag['name']: print substr($tag['name'], 1) ?></span></span>
        <?php if(!$noticia->video_image): ?>
        <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
          <?php else: ?>
          <a title="<?= $noticia->title; ?>" data-fancybox data-caption="<?= $noticia->title; ?>"
            href="<?= $noticia->video_url?>">
            <?php endif; ?>
            <figure
              class="news-list-media <?php $noticia->video_image && print 'je-icone je-icone-5x je-icone-youtube'?>">
              <img src="<?php $noticia->image_preview ? print $noticia->image_large: print $noticia->video_image; ?>"
                class="news-list-img img-responsive" alt="<?= $noticia->title; ?>" />
            </figure>
            <?php if(!$noticia->video_image): ?>
          </a>
          <?php endif; ?>
      </div>
      <?php endif; ?>
      <div class="news-list-col-<?php $noticia->image_preview || $noticia->video_image ? print '8': print '12';?>">
        <div class="news-list-content">
          <?php 
          !$noticia->image_preview &&
          !$noticia->video_image &&
          print '<span class="badge-'.$tag['badge'].' news-list-badge news-list-badge__expanded">'.$tag['name'].'</span>'; ?>
          <h3 class="news-list-title">
            <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
              <?= $noticia->title; ?>
            </a>
          </h3>
          <p class="news-list-description">
            <?= $noticia->description; ?>
          </p>
        </div>        
        <footer class="news-list-footer">          
          <button class="news-list-sharing" type="button">
            <img src="assets/imagens/noticias/share.svg" alt="share icon">
          </button>
          <time class="time"
            datetime="<?= "{$ano}-{$mes}-{$dia} {$hora}:{$min}" ?>"><?= $data_final; ?><?= $hora_final?></time>
        </footer>
        <div
          class="news-list-sharing-overlay news-list-sharing-overlay__active news-list-sharing-overlay_color-<?= $tag['badge']; ?>">
          <button class="news-list-sharing-overlay__close">X</button>
          <span
            class="news-list-sharing-overlay__tag news-list-sharing-overlay_color-<?= $tag['badge']; ?>__tag"><?= $tag['name']; ?></span>
          <span class="news-list-sharing-overlay__title"><?= $noticia->title; ?></span>
          <span class="news-list-sharing-overlay__content">
            <div class="header">
              COMPARTILHAR:
              <div class="icons news-list-sharing-overlay__content_color-<?= $tag['badge']; ?>_icons">
                <?php include BASE_URL . '/includes/share.inc.php';?>
              </div>
            </div>
            <button aria-label="COPIAR LINK DA MATÉRIA" data-clipboard-text="<?= $noticia->url; ?>"
              class="btn btn-link footer news-list-sharing-clipboard news-list-sharing-overlay__content_color-<?= $tag['badge']; ?>__footer">
              COPIAR LINK DA MATÉRIA
            </button>
          </span>

        </div>
      </div>
    </div>
  </article>

  <?php
}
?>
  <footer class="news-list-read-more">
    <button id="news-list-read-more-button" class="btn btn-primary btn-lg btn-block">Veja outras notícias</button>
  </footer>
  <?php
$paginacao && include BASE_URL . '/includes/paginacao.inc.php';
?>
</div>
<?php
include BASE_URL . '/includes/footer.inc.php';
?>