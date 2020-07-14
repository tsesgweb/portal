<?php 
include __DIR__ . './inc/config.inc.php';
$breadcrumb = true;
$asideinterna  = false;
$asidenoticia  = false;
$titulo  = 'Notícias';
$compartilhar  = false;
$maisvisitados  = false;
$tags  = false;
$gestor  = false;
include __DIR__ . './inc/header.inc.php';
?>
<div id="navegacao-data-noticias">
    <form class="form-inline" id="form-navagacao-noticias" method="GET" name="navegacao" action="http://www.tse.jus.br/imprensa/artigos-discursos/artigos-discursos">

        <fieldset>
            <div class="form-group">
                <legend class="sr-only">News search</legend>
                <label for="ano-noticias" class="sr-only">Ano</label>
                <select class="form-control" id="ano-noticias" name="ano">
                    <option value="">year</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mes-noticias" class="sr-only">Mês</label>
                <select class="form-control" id="mes-noticias" name="mes">
                    <option value="">month</option>
                    <option value="Janeiro">January</option>
                    <option value="Fevereiro">February</option>
                    <option value="Marco">March</option>
                    <option value="Abril">April</option>
                    <option value="Maio">May</option>
                    <option value="Junho">June</option>
                    <option value="Julho">July</option>
                    <option value="Agosto">August</option>
                    <option value="Setembro">September</option>
                    <option value="Outubro">October</option>
                    <option value="Novembro">November</option>
                    <option value="Dezembro">December</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">
                <span>Search</span>
            </button>
        </fieldset>
    </form>
</div>
<div id="lista-noticias" class="lista-resultados">
    <article class="lr-container media lr-imagem-destaque">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
    <span class="lr-data lr-icone">
        23.11.2017
    </span>
    <article class="lr-container media">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
    <article class="lr-container media">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
    <article class="lr-container media">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
    <article class="lr-container media">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
    <article class="lr-container media">
        <a href="#" title="Learn more about the President and Vice-president of the TSE">
            <figure class="lr-imagem media-left">
                <img src="http://english.tse.jus.br/imagens/fotos/novo-presidente-ministro-luiz-fux/@@images/b5bcbbe2-fa60-4731-a243-92135619dc81.jpeg" class="img-responsive" alt="A ferramenta auxiliará o eleitor">
            </figure>
        </a>
        <div class="media-body">
            <h3 class="lr-titulo">
                <a href="#" title="Learn more about the President and Vice-president of the TSE">
                    Learn more about the President and Vice-president of the TSE
                </a>
            </h3>
            <p class="lr-descricao lr-icone">
                Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.
            </p>
        </div>
    </article>
</div>
<?php include __DIR__ . './inc/footer.inc.php';?>