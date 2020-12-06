<?php 
$cards = [
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> 'Norma prevê uso do meio eletrônico para análise de agravos regimentais e de embargos de declaração em processos a serem definidos ...',      
    'type'=> 'noticia',
    'video'=> null,
    'time'=> '12min leitura',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/people',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> '',      
    'type'=> 'video',
    'video'=> [
      'size'=> '23MB',
      'time'=> '4:13'
    ],
    'time'=> null,
  ],    
];
?>
<div class="noticias__conteudo">
  <div class="noticias__linha">
    <div class="news">
      <?php
      foreach ($cards as $key => $card):
        include BASE_URL . '/includes/widgets/card.inc.php';    
      endforeach;
      ?>
    </div>
  </div>
</div>
