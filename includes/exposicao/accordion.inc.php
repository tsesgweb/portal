<?php 
$accordions =  [
  ["title"=> "1", "description"=> "Descrição 1"],
  ["title"=> "2", "description"=> "Descrição 2"],
  ["title"=> "3", "description"=> "Descrição 3"],
  ["title"=> "4", "description"=> "Descrição 4"],
  ["title"=> "5", "description"=> "Descrição 5"],
  ["title"=> "6", "description"=> "Descrição 6"],
  ["title"=> "7", "description"=> "Descrição 7"],
];
$full   = true;
$theme  = "azul";
$bg     = "azul";
?>
<section id="panel" class="panel" <?php $full && printf('data-bg-color="%s"', $bg);?>>
  <div class="panel__conteudo_full">
    <div class="panel__conteudo">
      <div class="panel__linha">
        <div class="panel__content" <?php !$full && printf('data-bg-color="%s"', $bg);?>>            
          <div class="accordion accordion__theme-<?=$theme;?>" id="accordionPanel">
            <?php foreach ($accordions as $key => $accordion) :?>                          
            <div class="accordion__card">
              <div class="accordion__card-header" id="heading-<?=$key;?>">
                <h2 class="accordion__card-title">
                  <button class="accordion__card-btn" type="button" data-toggle="collapse" data-target="#collapse-<?=$key?>" aria-expanded="<?php $key === 0 ? print('true'): print('false');?>" aria-controls="collapse-<?=$key?>">
                    Collapsible Group Item #<?=$key?>
                  </button>
                </h2>
              </div>
              <div id="collapse-<?=$key?>" class="collapse <?php $key === 0 && print('show');?>" aria-labelledby="heading-<?=$key?>" data-parent="#accordionPanel">
                <div class="accordion__card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                </div>
              </div>
            </div> 
            <?php endforeach;?>
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>

