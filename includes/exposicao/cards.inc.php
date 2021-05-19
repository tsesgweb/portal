<section id="panel" class="panel" <?php $full && printf('data-bg-color="%s"', $bg);?>>
  <div class="panel__conteudo_full">
    <div class="panel__conteudo">
      <div class="panel__linha">
        <div class="panel__content" <?php !$full && printf('data-bg-color="%s"', $bg);?>>            
          <div class="cards card-theme-<?=$theme?>" <?php $type === 'carousel' && print('data-padding="10"');?>>
            <?php                      
            printf('<div class="card-%s" data-columns="%s">', $type, $columns);   
            foreach ($cards as $key => $card): ?>
              <div class="card">
                <div class="card-top">
                <a href="https://placeimg.com/<?=$card['media']['size']['x']*3?>/<?php $type ==='carousel' ? print($card['media']['size']['x']*3): print($card['media']['size']['y']*3); ?>/<?=$card['media']['cat']?>" data-fancybox>
                  <img class="card-img-top" src="https://placeimg.com/<?=$card['media']['size']['x']?>/<?php $type ==='carousel' ? print($card['media']['size']['x']): print($card['media']['size']['y']); ?>/<?=$card['media']['cat']?>" alt="<?=$card['title'];?>">
                  <svg class="panel-icone panel-icone-photo" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.5" cx="25" cy="25" r="25"/>
                    <circle cx="25" cy="25" r="19.7115"/>
                    <path class="not-fill" d="M24.9936 33.9795C29.9606 33.9795 33.9872 29.9546 33.9872 24.9897C33.9872 20.0248 29.9606 16 24.9936 16C20.0266 16 16 20.0248 16 24.9897C16 29.9546 20.0266 33.9795 24.9936 33.9795Z" stroke-width="2.13" stroke-miterlimit="10"/>
                    <path d="M24.9695 28.6365V21.3854" stroke-width="2.13" stroke-miterlimit="10"/>
                    <path d="M28.5967 25.011H21.3424" stroke-width="2.13" stroke-miterlimit="10"/>
                  </svg>
                </a>
                </div>
                <?php !$desc && printf('<div class="card-header">%s</div>', $card['data']); ?> 
                <div class="card-body">
                  <?php $mozaic ? printf('<h4 class="card-title"><a href="#%s">%s</a></h4>', $key, $card['title']) : printf('<p class="card-subtitle"><a href="#%s">%s</a></p>',$key, $card['title']);?>                                
                  <?php $desc && printf('<div class="card-descricao">%s</div>', $card['desc']); ?>               
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

