<section id="panel" class="panel" <?php $full && printf('data-bg-color="%s"', $bg);?>>
  <div class="panel__conteudo_full">
    <div class="panel__conteudo" <?php !$full && printf('data-bg-color="%s"', $bg);?>>
      <div class="panel__linha">
        <div class="panel__content">            
          <div class="cards card-theme-<?=$theme?>" <?php $type === 'carousel' && print('data-padding="10"');?>>
            <?php                      
            printf('<div class="card-%s" data-columns="%s">', $type, $columns);   
            foreach ($cards as $key => $card): ?>
              <div class="card">
                <div class="card-top">
                  <img class="card-img-top" src="https://placeimg.com/<?=$card['media']['size']['x']?>/<?php $type ==='carousel' ? print($card['media']['size']['x']): print($card['media']['size']['y']); ?>/<?=$card['media']['cat']?>" alt="<?=$card['title'];?>">
                </div>
                <?php !$desc && printf('<div class="card-header">%s</div>', $card['data']); ?> 
                <div class="card-body">
                  <?php $mozaic ? printf('<h4 class="card-title"><a href="#%s">%s</a></h4>', $key, $card['title']) : printf('<p class="card-subtitle"><a href="#%s">%s</a></p>',$key, $card['title']);?>                                
                  <?php $desc && printf('<p>%s</p>', $card['desc']); ?>               
                </div>                
              </div>
              <?php endforeach; ?>
            </div>
          </div>          
        </div>        
      </div>
    </div>
  </div>
</section>

