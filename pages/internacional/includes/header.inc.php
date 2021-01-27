<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php $titulo ? print $titulo: print 'Page' ;?> — Superior Electoral Court</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
     <!-- build:cssfontawesome--><link rel="stylesheet" href="../assets/css/font-awesome.css"><!-- endbuild-->
    <!-- build:cssplugins--><link rel="stylesheet" href="../assets/css/plugins.css"><!-- endbuild-->
    <!-- build:cssmaster--><link rel="stylesheet" href="../assets/css/master.css"><!-- endbuild-->
    <?php $interna && print'<!-- build:cssinternas--><link rel="stylesheet" href="../assets/css/internas.css"><!-- endbuild-->';?>         
    <!-- build:cssprint--><link rel="stylesheet" href="../assets/css/print.css"><!-- endbuild-->
    <?php $biblioteca && print'<!-- build:cssbiblioteca--><link rel="stylesheet" href="../assets/css/biblioteca.css"><!-- endbuild-->';?>
    <?php $legislacao && print'<!-- build:csslegislacao--><link rel="stylesheet" href="../assets/css/legislacao.css"><!-- endbuild-->';?>
    <!-- build:cssplus--><link rel="stylesheet" href="../assets/css/plus.css"><!-- endbuild-->
    <?php $home && print'<!-- build:csshomeinternacional--><link rel="stylesheet" href="../assets/css/internacional-home.css"><!-- endbuild-->';?>
    <!-- build:cssinternacional--><link rel="stylesheet" href="../assets/css/internacional.css"><!-- endbuild-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" href="../assets/css/ie.css" type="text/css">
	<script src="../node_modules/html5shiv/src/html5shiv.js"></script>
	<script src="../node_modules/html5shiv/src/html5shiv-printshiv.js"></script>
	<script src="../node_modules/respondjs/lib/respond.js"></script>
<![endif]-->
    <!--[if lt IE 8]>
<![endif]-->
    <script src="../assets/js/vendor/modernizr.js"></script>
</head>

<body class="site-internacional">
    <header id="topo" class="nao-imprimir" role="banner">
        <!-- Barra de acessibilidade -->
        <div class="centralizar">
            <div class="links-topo">
                <div class="acessibilidade-atalhos">
                    <a href="#content" accesskey="1" class="sr-only sr-only-focusable">
                        <div class="atalhos-item">
                            <span>Main content [1]</span>
                        </div>
                    </a>
                    <a href="#nav-principal" accesskey="2" class="sr-only sr-only-focusable">
                        <div class="atalhos-item">
                            <span>Menu principal [2]</span>
                        </div>
                    </a>
                    <a href="#search" accesskey="3" class="sr-only sr-only-focusable aasd">
                        <div class="atalhos-item">
                            <span>Search [3]</span>
                        </div>
                    </a>
                    <a href="#mapa-site" accesskey="4" class="sr-only sr-only-focusable">
                        <div class="atalhos-item">
                            <span>Site map [4]</span>
                        </div>
                    </a>
                </div>
                <div class="acessibilidade-links">
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="http://english.tse.jus.br/acessibilidades-tse-en" accesskey="0">Acessibility</a>
                        </li>
                        <li>
                            <a href="http://www.tse.jus.br/" title="">Português</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Logo & pesquisa -->
        <div id="acessibilidades">
  <div class="centralizar">
    <div class="topo">
      <div class="logo">
        <h1 class="logo-titulo sr-only">Superior Electoral Court</h1>
        <a class="logo-tribunal" href="index.php" title="Tribunal Superior Eleitoral"><img src="assets/imagens/internacional/logo-tse.png" alt="Logo tribunal">
        
        </a>
        <p class="logo-descricao">The Court of Democracy</p>
      </div>
      <div id="search" class="pesquisa" data-spy="affix" data-offset-top="100">
        <form id="searchform" name="searchform" action="pagina-lista-busca.php">
          <div class="form-group">
            <fieldset>
              <legend class="sr-only">Search</legend>
              <label for="busca" class="sr-only">Search</label>
              <div class="input-group input-group-md">
                <input id="busca" class="form-control" placeholder="Search..." type="search" autocomplete="off">
                <div class="input-group-btn">
                  <button class="icone icone-pesquisa btn btn-primary" type="submit" >
										<span class="hidden-xs">Search</span>
										<span class="fa fa-search visible-xs" aria-hidden="true"></span>
									</button>
                </div>
              </div>
              
              <div class="busca-avancada text-right"><a href="pagina-busca-avancada.php" class="btn btn-link btn-xs">advanced search<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
            </fieldset>
          </div>
        </form>
      </div>
      <div id="campanhas-diversas">
        <div class="campanha-laco">
          <img src="assets/imagens/nov_azul.png" alt="Campanha novembro azul">
        </div>
      </div>
    </div>
  </div>
</div>
    </header>
    <!-- Menu -->
    <nav id="nav-principal" class="navbar navbar-default nao-imprimir" data-spy="affix" data-offset-top="100">
	<h2 class="sr-only">Main menu</h2>
	<div class="centralizar">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand sr-only" href="#">Superior Electoral Court</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="menu-principal">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Superior Electoral Court</a>
					<ul class="dropdown-menu">
						<li><a href="#">Composition of the Court</a></li>
						<li><a href="#">Legislation</a></li>
						<li><a href="#">Superior Electoral Court</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elections</a>
					<ul class="dropdown-menu">
						<li><a href="#">Accountability</a></li>
						<li><a href="#">Elections</a></li>
						<li><a href="#">Funding</a></li>
						<li><a href="#">Political Parties</a></li>
						<li><a href="#">Statistics</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Electronic voting</a>
					<ul class="dropdown-menu">
						<li><a href="#">Videos</a></li>
						<li><a href="#">Biometric system</a></li>
						<li><a href="#">The History of Voting</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">International affairs</a>
					<ul class="dropdown-menu">
						<li><a href="#">Cooperation with International Organizations</a></li>
						<li><a href="#">Advisory for International Affairs</a></li>
						<li><a href="#">Voting abroad</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

    <div class="centralizar">
    <!-- breadcrumb -->
    <?php $breadcrumb && include __DIR__ . './breadcrumb.inc.php'?>
    <!-- Menu lateral -->
    <?php $asideinterna && include __DIR__ . './aside-internas.inc.php'?>
    <div id="conteudo-pagina" class="<?php !!$asideinterna && print 'pull-right pagina-com-coluna';?><?php !!$asidenoticia && print 'pagina-com-coluna';?>">
        <main id="conteudo">
            <?php $titulo && print "<h2>{$titulo}</h2>";?>
            <?php $compartilhar && include __DIR__ . './share.inc.php';?>
            <?php $imagemtopo && include __DIR__ .  './imagem-topo.inc.php';?>
            <!-- start:Conteudo página interna -->