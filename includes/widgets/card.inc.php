<div class="news-card">
  <?php 
  $card['image'] &&
  printf('<img src="%s" class="news-img-top" alt="%s">', $card['image'], $card['title']);
  ?>
  <div class="news-body">
    <h5 class="news-title<?php $card['image'] && print(' has-img');?>"><?=$card['title'];?></h5>
    <?php 
      $card['type'] === 'video' ?
      include(BASE_URL.'/includes/widgets/player-radio.inc.php') :
      printf('<p class="news-text">%s</p>', $card['description'])
    ?>            
  </div>
  <div class="news-footer">
    <p class="news-text"><small class="text-muted"><?php $card['type'] === 'video' ? print('baixar audio'): print $card['time'];?></small></p>
    <p class="news-text"><small class="text-muted">compartilhar</small></p>
  </div>
</div>  