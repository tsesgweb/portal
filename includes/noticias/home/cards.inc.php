<?php 
$cards = new StdClass();
$cards = [
  [
    'image'=> 'https://placeimg.com/294/198/any',
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> 'Norma prevê uso do meio eletrônico para análise de agravos regimentais e de embargos de declaração em processos a serem definidos ...',      
    'type'=> [
      'icon' => null,
      'label' => 'Notícia',
      'badge' => 'noticia',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://picsum.photos/294/198?random=1',
    'title'=> 'Candidatos e partidos devem entregar prestação de contas até 15 de dezembro',
    'description'=> 'TSE recomenda não deixar para o último momento a apresentação dos documentos, via SPCE',      
    'type'=> [
      'icon' => '<i class="fa fa-microphone"></i>',
      'label'=> 'Rádio',
      'badge'=> 'radio',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/arch',
    'title'=> 'Confira a pauta de julgamento da sessão do TSE desta quinta-feira (10)',
    'description'=> 'Sessão será transmitida a partir das 9h pelo canal da JE no YouTube e pela TV Justiça',      
    'type'=> [
      'icon' => null,
      'label'=> 'Destaque',
      'badge'=> 'destaque',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/animals',
    'title'=> 'Redes sociais do TSE exibem vídeos produzidos por jovens para campanha “Eu na Prefeitura, Eu na Câmara”',
    'description'=> 'Ao longo do mês, 14 gravações serão compartilhadas nos perfis oficiais do Tribunal no Instagram, Facebook e Twitter',      
    'type'=> [
      'icon' => null,
      'label'=> 'Evento',
      'badge'=> 'evento',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/people',
    'title'=> 'Glossário esclarece o que é mandato eletivo',
    'description'=> 'Serviço é fonte de consulta para interessados em conhecer as expressões utilizadas pelos operadores do Direito Eleitoral',      
    'type'=> [
      'icon' => '<i class="fa fa-circle" aria-hidden="true"></i>',
      'label'=> 'Ao Vivo',
      'badge'=> 'aovivo',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/cats',
    'title'=> 'Cadastro eleitoral está reaberto a partir desta quarta-feira (9)',
    'description'=> 'Serviços podem ser solicitados pela internet em todo o país',      
    'type'=> [
      'icon' => null,
      'label'=> 'Comunicado',
      'badge'=> 'comunicado',
    ],    
    'time'=> rand(1, 15),
    'video'=> 'https://www.youtube.com/watch?v=zBek718CM2U',
    'url'=> '#',
  ],    
  [
    'image'=> null,
    'title'=> 'Decisões do Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder político',
    'description'=> 'Sessão plenária será transmitida, ao vivo, pelo canal oficial do TSE no YouTube, a partir das 19h ...',      
    'type'=> [
      'icon' => null,
      'label'=> 'Serviço',
      'badge'=> 'servico',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
  [
    'image'=> 'https://placeimg.com/294/198/dogs',
    'title'=> 'TSE realiza sessão eletrônica de julgamento extraordinária a partir desta quarta (9)',
    'description'=> 'Divulgação dos processos a serem julgados será feita no Portal do TSE, na página “Pautas de Julgamento”',      
    'type'=> [
      'icon' => null,
      'label'=> 'Vídeo',
      'badge'=> 'video',
    ],    
    'time'=> rand(1, 15),
    'video'=> null,
    'url'=> '#',
  ],    
];
$cards = json_decode(json_encode((object) $cards), FALSE);
?>
<div class="noticias__conteudo">
  <div class="noticias__linha">
    <div class="news">
      <?php
      foreach ($cards as $key => $card):
        include BASE_URL . '/includes/components/card.inc.php';    
      endforeach;
      ?>
    </div>
    <a class="btn btn-azul btn-block news-btn">Veja outras notícias</a>
  </div>
</div>
