<?php
$conteudo = [
    "section"     => "Núcleo",
    "title"       => "Eleição de 1933:",
    "subtitle"    => "início de uma nova era",
    "description" => "Aqui estou, Senhores, em obediência a um preceito do vosso Regimento e, ainda, para corresponder à gentileza da homenagem que o ilustre Sr. Ministro da Justiça quis prestar ao Tribunal Superior de Justiça Eleitoral, que tenho a honra de presidir. [...] Minha missão aqui é muito simples. Consiste, apenas, em receber os diplomas, dar-lhes o destino conveniente e presidir a eleição do vosso Presidente efetivo. Srs. Representantes do Povo na Assembleia Nacional Constituinte, tenho a honra de apresentar-vos as minhas atenciosas saudações.",
    "text"        => "Quarta-feira, 3 de maio de 1933. Assim, no meio de uma semana ordinária, ocorreu o primeiro ensaio democrático do país. Nesta data foi realizada a primeira eleição organizada pela Justiça Eleitoral – ramo especializado do Poder Judiciário criado com a função precípua de administrar os pleitos em todos os seus níveis, do alistamento à apuração. O sufrágio, pela primeira vez na história nacional, ocorria sem o cabresto do voto a descoberto. E, ineditamente, as mulheres participaram da eleição votando e sendo votadas.",
    "repeat"      => 7,    
];

$config = [
  [
    "img"     => "/assets/imagens/bg-fachada-tse.png", 
    "one"     => true,
    "media"   => false,
    "theme"   => "amarelo",
    "text"    => 'azul',
    "bg"      => null,
    "align"   => 'center',
    "full"    => true,
    "content" => $conteudo
  ],
  [
    "img"     => null, 
    "one"     => true,
    "media"   => false,
    "theme"   => 'azul',
    "text"    => 'branco',
    "bg"      => null,
    "align"   => 'center',
    "full"    => true,
    "content" => $conteudo
  ],
  [
    "img"     => false, 
    "one"     => false,
    "media"   => 'https://placeimg.com/590/590/tech',
    "theme"   => "azul",
    "text"    => 'azul',
    "bg"      => 'branco',
    "align"   => 'right',
    "full"    => true,
    "content" => $conteudo       
  ],
  [
    "img"     => false, 
    "one"     => false,
    "media"   => 'https://placeimg.com/590/590/tech',
    "theme"   => "amarelo",
    "text"    => 'azul',
    "bg"      => null,
    "align"   => 'left',
    "full"    => true,
    "content" => $conteudo
  ],
  [
    "img"     => false, 
    "one"     => false,
    "media"   => 'https://placeimg.com/590/590/tech',
    "theme"   => "verde",
    "text"    => 'azul',
    "bg"      => null,
    "align"   => 'right',
    "full"    => true,
    "content" => $conteudo
  ],
  [
    "img"     => null, 
    "one"     => false,
    "media"   => 'https://placeimg.com/590/590/people',
    "theme"   => "azul",
    "text"    => 'azul',
    "bg"      => 'amarelo',
    "align"   => 'right',
    "full"    => true,
    "content" => $conteudo
  ],
  [
    "img"     => null, 
    "one"     => true,
    "media"   => null,
    "theme"   => "azul",
    "text"    => 'branco',
    "bg"      => null,
    "align"   => null,
    "full"    => true,
    "content" => $conteudo
  ],
];

$config[0]['content']['repeat'] = 1;
$config[1]['content']['repeat'] = 1;