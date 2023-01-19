<div class="news-card <?php !$card->image && print(' no-img');?>">
  <?php 
  $card->image &&
  printf(
    '<a href="%s" %s>
      <img src="%s" class="news-img-top" alt="%s">
    </a>',    
    $card->video ? $card->video : $card->url,
    $card->video ? 'class="fancybox-action icone-play" data-type=""': null,
    $card->image, 
    $card->title
  );
  ?>
  
  <div class="news-body">
    <?php 
    $card->image &&     
      printf('<span class="news-badge badge-%s news-badge__limited">%s%s%s</span>', 
        $card->type->badge, 
        $card->type->icon, 
        $card->type->icon ?
        '<span>'.$card->type->label.'</span>':
        substr((string) $card->type->label, 0,1), 
        $card->type->icon ?
        null:
        '<span>'.substr((string) $card->type->label, 1).'</span>'
      );
    ?>        
    <time class="news-time">07.08.2019 - 14:16</time>
    <h5 class="news-title"><a href="<?= $card->url; ?>"><?=$card->title;?></a></h5>    
    <?php 
    !$card->image && 
    !$card->audio &&
    printf('<span class="news-badge badge badge-%s news-badge__limited">%s%s%s</span>',     
    $card->type->badge, 
    $card->type->icon,
    $card->type->icon ?
      '<span>'.$card->type->label.'</span>':
      substr($card->type->label, 0,1),
    '<span>'.substr($card->type->label, 1).'</span>'
    );?>
    <p class="news-text"><?=$card->description;?></p> 
    <?php 
      $card->type->badge === 'radio' &&
      include(BASE_URL.'/includes/components/player-radio.inc.php');      
    ?>    
  </div>
  <div class="news-sharing">
    <?php   
      $noticia = new StdClass() ;
      $noticia->title = $card->title;
      $noticia->url   = $card->url; 
      $noticia->badge   = $card->type->badge; 
      include(BASE_URL.'/includes/components/overlay-sharing.inc.php');
    ?>
  </div>
  <div class="news-footer">
    <?php $card->type->badge === 'radio' ? print('<div><button type="button" class="btn btn-link news-audio-download" data-toggle="tooltip" data-placement="bottom" title="Baixar '.rand(1, 99).'MB"><img src="assets/imagens/noticias/icon_baixar_audio.svg" alt="icone àudio download"/></button><button type="button" class="btn btn-link news-transcricao-download" data-toggle="tooltip" data-placement="bottom" title="Transcrição de audio"><img src="assets/imagens/noticias/icon_transquicao.svg" alt="icone transcrição download"/></button></div>'): print '<p class="news-text"><small class="text-muted">'.$card->time. ' min de leitura</small></p>';?>   
     <button class="news-btn-sharing news-list-sharing" type="button">
      <img src="assets/imagens/noticias/share.svg" alt="compartihamento">
    </button>    
  </div>  
</div>  