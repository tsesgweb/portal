<?php
$count = 1;
foreach ($config as $key => $panel) :
?>
<section 
  id="panel-<?=$key+1;?>"  
  class="panel <?php $panel['align'] && printf('panel_align-%s', $panel['align']);?>" <?php 
  $panel['img'] && printf('data-bg-img="%s"', $panel['img']);
  $panel['full'] && printf('data-bg-color="%s"', $panel['theme']);  
  printf('data-color="%s"', $panel['text']);  
  ?>
  >
  <div class="panel__conteudo_full">    
    <div class="panel__conteudo" <?php !$panel['full'] && !$panel['img'] && printf("data-bg-color='%s'", $panel['theme']);?>>    
      <div class="panel__linha">              
        <div class="panel__content">
          <?php $panel['align'] === 'right' && $panel['media'] && include BASE_URL .'/includes/exposicao/media.inc.php'; ?>
          <?php !$panel['media'] && $panel['header'] && include BASE_URL .'/includes/exposicao/header.inc.php'; ?>
          <div 
          class="panel__control-navigation          
          <?php $panel['one'] && print(' panel__control-navigation_one ');?>
          <?php $panel['bg'] && print(' panel__control-navigation_bg');?>
          panel__theme-<?=$theme;?>">          
            <div class="panel__carousel">                                        
              <?php                
              if(!$panel['media'] && !$panel['align']):
                if($panel['content']['repeat'] >= 1):              
                  print('<div class="panel__rich-text-container">');
                  include BASE_URL .'/includes/exposicao/intro.inc.php';
                  for ($i=0; $i < $panel['content']['repeat']; $i++):                    
                      include BASE_URL.'/includes/exposicao/bloco-text.inc.php';                    
                      if(++$count % 2 === 0 && count($panel['content']) >= $count): print('</div><div class="panel__rich-text-container panel__rich-text-container_line">'); endif;
                  endfor;
                  print('</div>');
                endif;
              else:
                include BASE_URL .'/includes/exposicao/intro.inc.php';
                for ($i=0; $i < $panel['content']['repeat']; $i++):                    
                  include BASE_URL.'/includes/exposicao/bloco-text.inc.php';                                      
              endfor;
              endif;
              ?>              
            </div>
            <?php $panel['content']['repeat'] >= 1 && include BASE_URL.'/includes/exposicao/navigation.inc.php';?>
          </div>              
          <?php $panel['align'] === 'left' && $panel['media'] && include BASE_URL .'/includes/exposicao/media.inc.php'; ?>
        </div>
      </div>    
    </div>
  </div>
</section>
<?php endforeach;?>