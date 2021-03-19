<?php require('conteudo.php'); ?>
<!-- <section id="panel" class="panel">
  <div class="panel__conteudo_full" data-bg-color="azul">
  <div class="panel__conteudo">
    <div class="panel__linha">
      <div class="panel__content">
          <div class="panel__control-navigation panel__control-navigation_one" data-color="branco">
            <div class="panel__carousel">
              <div class="panel__rich-text-container">
                <div class="panel__rich-text panel__intro">
                  <h6 class="panel__section">Núcleo 2</h6>
                  <h6 class="panel__sub-title">o Código de 1932</h6>
                  <h2 class="panel__title">Criação da Justiça Eleitoral</h2>
                  <p>O Governo Provisório que assumia o país após a Revolução de 1930 trazia consigo a promessa de profundas reformas nacionais em diversas áreas. Ainda em dezembro de 1930, o chefe do Governo Provisório institui uma comissão legislativa que seria responsável por elaborar os projetos de reforma.1 Para dar conta da imensa tarefa, a comissão foi dividida em dezenove subcomissões temáticas, compostas cada uma por três membros.2 Dentre elas, estava a de “legislação eleitoral (lei e processo)”, integrada pelos senhores Assis Brasil, João Chrysostomo da Rocha Cabral e Mario Pinto Serva. Os três escolhidos detinham notório conhecimento em matéria eleitoral, tendo anteriormente publicado livros que tratavam da democracia representativa ao voto secreto.</p>
                </div> 
                <div class="panel__rich-text">
                  <p>O Governo Provisório que assumia o país após a Revolução de 1930 trazia consigo a promessa de profundas reformas nacionais em diversas áreas. Ainda em dezembro de 1930, o chefe do Governo Provisório institui uma comissão legislativa que seria responsável por elaborar os projetos de reforma.1 Para dar conta da imensa tarefa, a comissão foi dividida em dezenove subcomissões temáticas, compostas cada uma por três membros.2 Dentre elas, estava a de “legislação eleitoral (lei e processo)”, integrada pelos senhores Assis Brasil, João Chrysostomo da Rocha Cabral e Mario Pinto Serva. Os três escolhidos detinham notório conhecimento em matéria eleitoral, tendo anteriormente publicado livros que tratavam da democracia representativa ao voto secreto.</p>                  
                </div>
              </div>
              <div class="panel__rich-text-container">
                <div class="panel__rich-text">
                  <p>O Governo Provisório que assumia o país após a Revolução de 1930 trazia consigo a promessa de profundas reformas nacionais em diversas áreas. Ainda em dezembro de 1930, o chefe do Governo Provisório institui uma comissão legislativa que seria responsável por elaborar os projetos de reforma.1 Para dar conta da imensa tarefa, a comissão foi dividida em dezenove subcomissões temáticas, compostas cada uma por três membros.2 Dentre elas, estava a de “legislação eleitoral (lei e processo)”, integrada pelos senhores Assis Brasil, João Chrysostomo da Rocha Cabral e Mario Pinto Serva. Os três escolhidos detinham notório conhecimento em matéria eleitoral, tendo anteriormente publicado livros que tratavam da democracia representativa ao voto secreto.</p>                                   
                </div>
                <div class="panel__rich-text">
                  <p>O Governo Provisório que assumia o país após a Revolução de 1930 trazia consigo a promessa de profundas reformas nacionais em diversas áreas. Ainda em dezembro de 1930, o chefe do Governo Provisório institui uma comissão legislativa que seria responsável por elaborar os projetos de reforma.1 Para dar conta da imensa tarefa, a comissão foi dividida em dezenove subcomissões temáticas, compostas cada uma por três membros.2 Dentre elas, estava a de “legislação eleitoral (lei e processo)”, integrada pelos senhores Assis Brasil, João Chrysostomo da Rocha Cabral e Mario Pinto Serva. Os três escolhidos detinham notório conhecimento em matéria eleitoral, tendo anteriormente publicado livros que tratavam da democracia representativa ao voto secreto.</p>                                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section> -->
<?php
// print('<pre>');
// print_r($config[0]['content']['repeat']);
// print('</pre>');
$count = 1;
foreach ($config as $key => $value) :
  $bgColor = $value['bg'];
  $theme = $value['theme'];
  switch ($theme) {
    case 'azul':
      $color = $value['bg'] === 'azul' ? 'branco': 'azul';      
      $action = 'amarelo';      
      break;
    case 'amarelo':
    case   'verde':
      $color = $value['bg'] === 'amarelo' || 'verde' ? 'azul': 'branco';      
      $action = 'azul';
      break;      
    default:
      $color = 'azul';      
      $action = 'azul';
      break;
  }  
?>
<section 
  id="panel-<?=$key+1;?>"
  tabindex="<?=$key;?>"
  class="panel <?php $value['align'] && printf('panel_align-%s', $value['align']);?>" <?php 
  $value['img'] && printf("data-bg-img='%s'", $value['img']);
  $value['full'] && printf("data-bg-color='%s'", $value['theme']);  
  ?>
  >
  <div class="panel__conteudo_full">    
    <div class="panel__conteudo" <?php !$value['full'] && !$value['img'] && $value['bg'] && printf("data-bg-color='%s'", $value['theme']);?>>    
      <div class="panel__linha">              
        <div class="panel__content">
          <?php $value['align'] === 'right' && $value['media'] && include BASE_URL .'/includes/exposicao/media.inc.php'; ?>
          <div 
          class="panel__control-navigation<?php $value['one'] && print(' panel__control-navigation_one');?>" 
          data-color="<?=$value['text']?>" 
          data-bg-color="<?=$value['bg'];?>">
            <div class="panel__carousel">                                        
              <?php                
              if(!$value['media'] && !$value['align']):
                if($value['content']['repeat'] > 1):              
                  print('<div class="panel__rich-text-container">');
                  include BASE_URL .'/includes/exposicao/intro.inc.php';
                  for ($i=0; $i < $value['content']['repeat']; $i++):                    
                      include BASE_URL.'/includes/exposicao/bloco-text.inc.php';                    
                      if(++$count % 2 === 0 && count($config) >= $count): print('</div><div class="panel__rich-text-container panel__rich-text-container_line">'); endif;
                  endfor;
                  print('</div>');
                endif;
              else:
                include BASE_URL .'/includes/exposicao/intro.inc.php';
                for ($i=0; $i < $value['content']['repeat']; $i++):                    
                  include BASE_URL.'/includes/exposicao/bloco-text.inc.php';                                      
              endfor;
              endif;
              ?>              
            </div>
            <?php $value['content']['repeat'] > 1 && include BASE_URL.'/includes/exposicao/navigation.inc.php';?>
          </div>          
          <?php $value['align'] === 'left' && $value['media'] && include BASE_URL .'/includes/exposicao/media.inc.php'; ?>
        </div>
      </div>    
    </div>
  </div>
</section>
<?php endforeach;?>