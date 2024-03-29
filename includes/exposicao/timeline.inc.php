<?php
$theme = 'verde';
$full  = true;
?>
<section id="panel-timeline" class="panel panel__align-left" <?php $full && $theme && printf('data-bg-color="%s"', $theme);?>>
  <div class="panel__conteudo_full">
    <div class="panel__conteudo">
      <div class="panel__linha">            
        <div class="panel__content panel__align-right">
          <div class="panel__edit-button">
            <a href="#" title=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="panel__content" <?php !$full && $theme && printf('data-bg-color="%s"', $theme);?>>          
          <div class="timeline <?php $theme &&  printf('timeline__theme-%s', $theme);?>">    
            <nav class="timeline-nav">
              <ul class="nav" role="tablist">                
                <?php 
                foreach ($timeline as $keytime => $value) :
                  print('<li class="timeline-item">');
                  foreach ($value['menu'] as $key => $menu) :
                    $keytime.'-'.$key === '0-0' ? $active = 'active': $active = '';
                    print('<a class="timeline-link '.$active.'" id="tab-'.$keytime.'-'.$key.'" href="#to-'.$keytime.'-'.$key.'" data-toggle="tab" role="tab" aria-controls="to-'.$keytime.'-'.$key.'">'.$menu.'</a>');
                  endforeach;
                  print('</li>');
                endforeach;
                ?>                 
              </ul>            
            </nav>       
            <div class="timeline__content">
              <?php                                                                              
              foreach ($timeline as $keyContent => $conteudo) : 
                foreach ($conteudo['content'] as $key => $value) : 
                  $value['media'] ? $media = 'has-media': $media = '';
                  $keyContent.'-'.$key === '0-0' ? $active = 'active': $active = '';
                  print('<div class="timeline-pane '.$active.' '.$media.'" id="to-'.$keyContent.'-'.$key.'" role="tabpanel" aria-labelledby="tab-'.$keyContent.'-'.$key.'">');                  
                  $value['media'] && include BASE_URL .'/includes/exposicao/media.inc.php';
                  print('<div class="timeline__rich-text">');
                  printf('%s', $value['title']);
                  printf('%s', $value['description']);
                  print('</div>');                                                        
                  print('</div>');                                                        
                endforeach;
              endforeach;              
              ?>
            </div>  
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>