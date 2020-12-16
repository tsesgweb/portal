<?php 
$radioCards = new StdClass();
$radioCards = [
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'TSE pauta a continuidade de julgamento do tema sobre uso de assinaturas digitais em apoiamento na criação de partidos',
    'description'=> null,
    'type'=> [
      'badge' => 'radio',
      'icon'=> null,
      'label'=> null,
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'audio'=> 'assets/files/5-dicas-para-uma-carreira-solida-como-programador.mp3',    
    'url'=> '#',
  ],    
  [
    'image'=> 'https://picsum.photos/294/198?random=1',
    'title'=> 'TSE encerra Teste Público de Segurança 2019 do Sistema Eletrônico de Votação',
    'description'=> null,
    'type'=> [
      'badge'=> 'radio',
      'icon'=> null,
      'label'=> null,
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'audio'=> 'assets/files/5-dicas-para-uma-carreira-solida-como-programador.mp3',    
    'url'=> '#',
  ],    
  [
    'image'=> null,
    'title'=> 'Equipe de apoio do TPS 2019 auxilia e estimula investigadores a quebrar barreiras de segurança do sistema de votação',
    'description'=> null,
    'type'=> [
      'badge' => 'radio',
      'icon'=> null,
      'label'=> null,
      
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'audio'=> 'assets/files/5-dicas-para-uma-carreira-solida-como-programador.mp3',    
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/animals',
    'title'=> 'Abradep e Mackenzie serão parceiros do TSE no combate às notícias falsas',
    'description'=> null,
    'type'=> [
      'badge'=> 'radio',
      'icon'=> null,
      'label'=> null,
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'audio'=> 'assets/files/5-dicas-para-uma-carreira-solida-como-programador.mp3',   
    'url'=> '#',
  ],    
  
];
$radioCards = json_decode(json_encode((object) $radioCards), FALSE);
?>

<div id="radio">
  <div class="radio__conteudo">
  <h2>Radio</h2>
    <div class="radio__linha">  
      <div class="item">
      <div class="news">
      <?php
      foreach ($radioCards as $key => $card):
        include BASE_URL . '/includes/components/card.inc.php';    
      endforeach;
      ?>
    </div>
      </div>
    </div>
  </div>
</div>