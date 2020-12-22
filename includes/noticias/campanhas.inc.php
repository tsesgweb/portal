<?php
$campanhas = [
  [
    'title' => 'Prazo Final',
    'img'   => 'https://placeimg.com/360/288/tech',
    'description' => 'Campanha destinada ao prazo final para regularizar, débitos com a Justiça Eleitoral.',    
  ],
  [
    'title' => 'Jovem eleitor',
    'img'   => 'https://placeimg.com/360/572/tech',
    'description' => 'Campanha Mesário Voluntário Eu quero ser um voluntário.',    
  ],
  [
    'title' => 'Mulheres na Política 2020',
    'img'   => 'https://placeimg.com/360/288/tech',
    'description' => 'Campanha mulheres na política 2020, mostrando a força da mulher!',    
  ],
  [
    'title' => 'Mesário Voluntário',
    'img'   => 'https://placeimg.com/360/288/people',
    'description' => 'Campanha Mesário Voluntário - Eu quero ser um voluntário.',    
  ],
  [
    'title' => 'Eleições 2020',
    'img'   => 'https://placeimg.com/360/288/people',
    'description' => 'Campanha Eleições 2020, seu voto tem poder!',    
  ],
];
?>
<section id="campaigns" class="campaigns">
  <div class="campaigns__conteudo">
    <div class="campaigns__linha">      
      <div class="campaigns__cards">
        <h2><?=$titulo;?></h2>
        <div class="campaigns__card-columns">
          <?php include BASE_URL.'/includes/components/card-campanhas.inc.php'; ?>
      </div>
      </div>
    </div>     
  </div>
</section>