<?php 
include __DIR__ . './includes/config.inc.php';
$breadcrumb = true;
$asideinterna  = false;
$titulo  = 'Search List';
$compartilhar  = false;
$tags  = false;
$gestor  = false;
$paginacao  = true;
$datepicker  = true;
include __DIR__ . './includes/header.inc.php';
?>
<div id="pesquisa-da-pagina">
	<form name="searchform" id="form-pesquisa-pag" action="http://www.tse.jus.br/@@GSASearch">
		<fieldset>
			<legend class="sr-only">Search</legend>
			<div class="input-group input-group-md">
				<label for="busca-2" class="sr-only">Search</label>
				<input id="busca-2" class="form-control" placeholder="Search" type="search" autocomplete="off">
				<div class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="hidden-xs">Search</span>
						<span class="fa fa-search visible-xs" aria-hidden="true"></span>
					</button>
				</div>
				
			</div>
		</fieldset>
	</form>
	<div class="estatistica-resultados">Results 241 - 250 of approximately 3880 to content eleitor.</div>
</div>
<h2>Results for "Eleitor"</h2>
<div id="opcoes-pesquisa-pagina">
	<form action="#" id="form-opcoes-pesquisa" class="form-inline text-center">
		<label class="checkbox-inline" for="opcao-omitir-arquivos" title="omitir arquivos no resultado">
			<input type="checkbox" id="opcao-omitir-arquivos" value="omitir arquivos no resultado"> Omit files in result 
		</label>
		<label class="checkbox-inline" for="opcao-pe-da-letra" title="pesquisar ao pé da letra">
			<input type="checkbox" id="opcao-pe-da-letra" value="pesquisar ao pé da letra"> Search to the letter  
		</label>
		<div class="input-daterange input-group">
			<span class="input-group-addon">Interval:</span>
			<label for="comeco-data" class="input-group-addon" title="Data de início">from</label>
			<input type="text" id="comeco-data" class="input-sm form-control">
			<label for="final-data" class="input-group-addon" title="Data final">to</label>
			<input type="text" id="final-data" class="input-sm form-control">
		</div>
		<button class="btn btn-primary sr-only" type="submit">
			<span>Search</span>
		</button>
	</form>
</div>
<div id="resultado-busca" class="lista-resultados lr-borda">
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
	<article class="lr-container">
		<h3 class="lr-titulo"><a href="#">PUBLISHED IN THE DJE THE RESOLUTIONS ON THE MUNICIPAL ELECTIONS OF 2016</a></h3>
		
		<p class="lr-link"><a href="#">www.tse.jus.br</a></p>
	</article>
</div>
<?php include __DIR__ . './includes/footer.inc.php'?>