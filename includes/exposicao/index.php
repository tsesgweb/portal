<?php require('conteudo.php');
include BASE_URL."/includes/exposicao/menu.inc.php";
$theme = 'default';
$header = [
    "section"     => "<h4>Núcleo</h4>",
    "title"       => "<h2>Eleição de 1933</h2>",
    "subtitle"    => "<h3>início de uma nova era</h3>",
    "description" => "<p>Aqui estou, Senhores, em obediência a um preceito do vosso Regimento e, ainda, para corresponder à gentileza da homenagem que o ilustre Sr. Ministro da Justiça quis prestar ao Tribunal Superior de Justiça Eleitoral, que tenho a honra de presidir. [...] Minha missão aqui é muito simples. Consiste, apenas, em receber os diplomas, dar-lhes o destino conveniente e presidir a eleição do vosso Presidente efetivo. Srs. Representantes do Povo na Assembleia Nacional Constituinte, tenho a honra de apresentar-vos as minhas atenciosas saudações.</p>",      
];

$conteudo = [
    "section"     => "<h4>Núcleo</h4>",
    "title"       => "<h2>Eleição de 1933</h2>",
    "subtitle"    => "<h3>início de uma nova era</h3>",
    "description" => "<p>Aqui estou <a href='#link' title='Senhores'>Senhores</a>, em obediência a um preceito do vosso Regimento e, ainda, para corresponder à gentileza da homenagem que o ilustre Sr. Ministro da Justiça quis prestar ao Tribunal Superior de Justiça Eleitoral, que tenho a honra de presidir. [...] Minha missão aqui é muito simples. Consiste, apenas, em receber os diplomas, dar-lhes o destino conveniente e presidir a eleição do vosso Presidente efetivo. Srs. Representantes do Povo na Assembleia Nacional Constituinte, tenho a honra de apresentar-vos as minhas atenciosas saudações.</p>",
    "text"        => "<p>Quarta-feira, 3 de maio de 1933. Assim, no meio de uma semana ordinária, ocorreu o primeiro ensaio democrático do país. Nesta data foi realizada a primeira eleição organizada pela Justiça Eleitoral – ramo especializado do Poder Judiciário criado com a função precípua de administrar os pleitos em todos os seus níveis, do alistamento à apuração. O sufrágio, pela primeira vez na história nacional, ocorria sem o cabresto do voto a descoberto. E, ineditamente, as mulheres participaram da eleição votando e sendo votadas.</p>",
    "repeat"      => 7,    
];

$config = [
  [
    "img"     => "/assets/imagens/bg-fachada-tse.png", 
    "one"     => false,
    "media"   => false,
    "header"  => $header,
    "theme"   => "amarelo",
    "text"    => 'azul',
    "bg"      => true,
    "align"   => 'left',
    "full"    => false,
    "content" => $conteudo,
  ],
  [
    "img"     => null, 
    "one"     => false,
    "media"   => null,
    "header"  => $header,
    "theme"   => 'azul',
    "text"    => 'default',
    "bg"      => false,
    "align"   => 'left',
    "full"    => false,
    "content" => $conteudo,
  ],  
];
$config[0]['content']['description'] = 'Quarta-feira, 3 de maio de 1933. Assim, no meio de uma semana ordinária, ocorreu o primeiro ensaio democrático do país. Nesta data foi realizada a primeira eleição organizada pela Justiça Eleitoral – ramo especializado do Poder Judiciário criado com a função precípua de administrar os pleitos em todos os seus níveis, do alistamento à apuração. O sufrágio, pela primeira vez na história nacional, ocorria sem o cabresto do voto a descoberto. E, ineditamente, as mulheres participaram da eleição votando e sendo votadas.<br/> Não obstante emprega-se a palavra ensaio, pois este foi um de poucos pleitos realizados sob a égide da Justiça Eleitoral em sua breve primeira fase (1932-1937). Ensaio porque, apesar da importante inclusão feminina, menos de 4% da população votou em 1933. Por fim, o termo é justificado pela ocorrência ainda de fraudes eleitorais (apesar de se ter, pela primeira vez, o Estado de fato as combatendo).<br />Portanto, entre a exaltação ufanista ou a sobrevaloração dos problemas, fica-se com os fatos: a primeira eleição realizada pela recém-criada Justiça Eleitoral foi um marco na democracia do país e, ao mesmo tempo, enfrentou percalços diversos, em todas as fases do processo. O marco histórico jamais é perfeito, insuscetível a críticas. Ao contrário, é necessário ';
$config[0]['content']['repeat'] = 6;
$config[1]['content']['repeat'] = 6;
include BASE_URL."/includes/exposicao/panel.inc.php";

$type     = 'carousel';
$mozaic   = false;
$desc     = false;
$columns  = 4;
$full     = true;
$theme    = 'verde';
$bg       = 'default';

include BASE_URL."/includes/exposicao/cards.inc.php";
$type     = 'mosaico';
$mozaic   = true;
$desc     = true;
$columns  = 4;
$full     = true;
$theme    = 'verde';
include BASE_URL."/includes/exposicao/cards.inc.php";
$type     = 'galeria';
$mozaic   = false;
$desc     = false;
$columns  = 4;
$full     = true;
$theme    = 'default';
$bg       = 'amarelo';
include BASE_URL."/includes/exposicao/cards.inc.php";
include BASE_URL."/includes/exposicao/timeline.inc.php";
include BASE_URL."/includes/exposicao/accordion.inc.php";
include BASE_URL."/includes/exposicao/iframe.inc.php";
include BASE_URL."/includes/exposicao/gestor.inc.php";

