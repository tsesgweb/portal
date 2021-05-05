<?php require('conteudo.php');?>
<?php
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
    "description" => "<p>Aqui estou, Senhores, em obediência a um preceito do vosso Regimento e, ainda, para corresponder à gentileza da homenagem que o ilustre Sr. Ministro da Justiça quis prestar ao Tribunal Superior de Justiça Eleitoral, que tenho a honra de presidir. [...] Minha missão aqui é muito simples. Consiste, apenas, em receber os diplomas, dar-lhes o destino conveniente e presidir a eleição do vosso Presidente efetivo. Srs. Representantes do Povo na Assembleia Nacional Constituinte, tenho a honra de apresentar-vos as minhas atenciosas saudações.</p>",
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
    "media"   => 'https://placeimg.com/590/590/tech',
    "header"  => null,
    "theme"   => 'azul',
    "text"    => 'branco',
    "bg"      => false,
    "align"   => 'right',
    "full"    => false,
    "content" => $conteudo,
  ],  
];
$config[0]['content']['description'] = 'Quarta-feira, 3 de maio de 1933. Assim, no meio de uma semana ordinária, ocorreu o primeiro ensaio democrático do país. Nesta data foi realizada a primeira eleição organizada pela Justiça Eleitoral – ramo especializado do Poder Judiciário criado com a função precípua de administrar os pleitos em todos os seus níveis, do alistamento à apuração. O sufrágio, pela primeira vez na história nacional, ocorria sem o cabresto do voto a descoberto. E, ineditamente, as mulheres participaram da eleição votando e sendo votadas.<br/> Não obstante emprega-se a palavra ensaio, pois este foi um de poucos pleitos realizados sob a égide da Justiça Eleitoral em sua breve primeira fase (1932-1937). Ensaio porque, apesar da importante inclusão feminina, menos de 4% da população votou em 1933. Por fim, o termo é justificado pela ocorrência ainda de fraudes eleitorais (apesar de se ter, pela primeira vez, o Estado de fato as combatendo).<br />Portanto, entre a exaltação ufanista ou a sobrevaloração dos problemas, fica-se com os fatos: a primeira eleição realizada pela recém-criada Justiça Eleitoral foi um marco na democracia do país e, ao mesmo tempo, enfrentou percalços diversos, em todas as fases do processo. O marco histórico jamais é perfeito, insuscetível a críticas. Ao contrário, é necessário ';
$config[0]['content']['repeat'] = 10;
include BASE_URL."/includes/exposicao/panel.inc.php";

$type     = 'carousel';
$mozaic   = false;
$desc     = false;
$columns  = 4;
$full     = true;
$theme    = 'verde';
$bg       = 'default';
include BASE_URL."/includes/exposicao/cards.inc.php";

$config = [
   [
    "img"     => null, 
    "one"     => true,
    "media"   => null,
    "header"  => null,
    "theme"   => "azul",
    "text"    => 'amarelo',
    "bg"      => false,
    "align"   => null,
    "full"    => true,
    "content" => $conteudo,
  ],   
];
$config[0]['content']['repeat'] = 5;
include BASE_URL."/includes/exposicao/panel.inc.php";

$type     = 'carousel';
$mozaic   = false;
$desc     = false;
$columns  = 5;
$full     = true;
$theme    = 'amarelo';
$bg       = 'azul';
include BASE_URL."/includes/exposicao/cards.inc.php";

$config = [
  [
    "img"     => null, 
    "one"     => true,
    "media"   => null,
    "header"  => null,
    "theme"   => "azul",
    "text"    => 'branco',
    "bg"      => false,
    "align"   => null,
    "full"    => false,
    "content" => $conteudo,
  ],   
];

include BASE_URL."/includes/exposicao/panel.inc.php";
$config = [
  [
    "img"     => null, 
    "one"     => true,
    "media"   => null,
    "header"  => null,
    "theme"   => "verde",
    "text"    => 'azul',
    "bg"      => false,
    "align"   => null,
    "full"    => true,
    "content" => $conteudo,
  ],   
  [
    "img"     => null, 
    "one"     => true,
    "media"   => null,
    "header"  => null,
    "theme"   => "verde",
    "text"    => 'azul',
    "bg"      => false,
    "align"   => 'center',
    "full"    => true,
    "content" => $conteudo,
  ],   
];
$config[0]['content']['section'] = '<h4>Núcleo 4</h4>';
$config[0]['content']['title'] = '<h2>Eleições 1993</h2>';
$config[0]['content']['subtitle'] = '<h3><strong> a primeira realizada pela Justiça Eleitoral</strong></h3>';

$config[1]['content']['section'] = null;
$config[1]['content']['title'] = '<h2>Voto feminino</h2>';
$config[1]['content']['subtitle'] = '<h3><strong>as primeiras candidatas</strong></h3>';
$config[1]['content']['repeat'] = 0;

include BASE_URL."/includes/exposicao/panel.inc.php";

$type     = 'mosaico';
$mozaic   = true;
$desc     = true;
$columns  = 4;
$full     = true;
$theme    = 'verde';
include BASE_URL."/includes/exposicao/cards.inc.php";

$config[1]['content']['section'] = null;
$config[1]['content']['title'] = '<h2>Acervo</h2>';
$config[1]['content']['subtitle'] = '<h3><strong>Um passeio na história</strong></h3>';
$config[1]['content']['description'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas faucibus faucibus tortor nulla lectus tellus egestas vulputate. Phasellus ut purus elit sodales sem amet aliquet aliquet. Ornare quis id id aliquam nibh nibh dictum justo. Quisque commodo erat sit odio.</p>';
$config[1]['content']['repeat'] = 0;
$config[1]['full'] = true;
$config[1]['theme'] = 'amarelo';
include BASE_URL."/includes/exposicao/panel.inc.php";

$type     = 'galeria';
$mozaic   = false;
$desc     = false;
$columns  = 4;
$full     = true;
$theme    = 'default';
$bg       = 'amarelo';
include BASE_URL."/includes/exposicao/cards.inc.php";

$config[1]['content']['section'] = null;
$config[1]['content']['title'] = '<h2>Linha do tempo</h2>';
$config[1]['content']['subtitle'] = '<h3><strong>Um passeio na história</strong></h3>';
$config[1]['content']['description'] = null;
$config[1]['content']['repeat'] = 0;
$config[1]['full'] = true;
$config[1]['theme'] = 'verde';
include BASE_URL."/includes/exposicao/panel.inc.php";

include BASE_URL."/includes/exposicao/timeline.inc.php";
include BASE_URL."/includes/exposicao/accordion.inc.php";
include BASE_URL."/includes/exposicao/iframe.inc.php";
