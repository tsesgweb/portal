<?php
$full   = true;
$bg     = "verde";
?>
<section id="panel" class="panel" <?php $full && printf('data-bg-color="%s"', $bg);?>>
  <div class="panel__conteudo_full">
    <div class="panel__conteudo"> 
      <div class="panel__linha">
        <?php printf('<div class="panel__content" data-bg-color="%s">', $bg);?>
          <div class="iframe-expo">
            <iframe class="iframe-expo-item" src="https://www.tse.jus.br/" frameborder="0" width="100%" height="100%"></iframe>
          </div>
        </div>        
      </div>
    <?php print('</div>');?>
  </div>
</section>