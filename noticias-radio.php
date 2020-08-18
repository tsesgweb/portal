<?php
include __DIR__ . '/inc/config.inc.php';
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
include __DIR__ . '/inc/header.inc.php';
$url                  = 'http://www.tse.jus.br/@@get_lista_noticias_categoria?subject=Elei%C3%A7%C3%B5es%20(2020)&sort=date%3AD%3AL%3Ad1';
$data                 = file_get_contents($url);
$outrasNoticias       = json_decode($data);

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
?>

<?php __DIR__.'/inc/noticias/navegacao-data.inc.php';?>

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
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11.352 12.486">
              <defs>
                <style>
                  .a {
                    fill: #6B6B6B;
                  }
                </style>
              </defs>
              <path class="a"
                d="M9.079,4.453a2.253,2.253,0,0,0,2.273-2.226,2.274,2.274,0,0,0-4.547,0,2.188,2.188,0,0,0,.034.382l-2.9,2.25a2.29,2.29,0,0,0-1.665-.712,2.227,2.227,0,1,0,0,4.453,2.29,2.29,0,0,0,1.67-.717l2.877,2.125a2.2,2.2,0,0,0-.015.253A2.274,2.274,0,1,0,9.079,8.033,2.279,2.279,0,0,0,7,9.364L4.3,7.374a2.182,2.182,0,0,0,0-2.01L7.051,3.231A2.281,2.281,0,0,0,9.079,4.453Z" />
            </svg>
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
                <?php include __DIR__ . '/inc/share.inc.php';?>
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
$paginacao && include __DIR__ . '/inc/paginacao.inc.php';
?>
</div>
<?php
include __DIR__ . '/inc/footer.inc.php';
?>