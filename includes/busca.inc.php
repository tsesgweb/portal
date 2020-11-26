<div id="search" class="pesquisa" data-spy="affix" data-offset-top="100">
    <form id="searchform" name="searchform" action="lista-busca.php">
        <div class="form-group">
            <fieldset>
                <legend class="sr-only">Pesquisar</legend>
                <label for="busca" class="sr-only">Pesquisar</label>
                <div class="input-group input-group-md">
                    <input id="busca" class="form-control" placeholder="Buscar..." type="search" autocomplete="off">
                    <div class="input-group-btn">
                        <button class="icone icone-pesquisa btn btn-primary" type="submit">
                                                <span class="hidden-xs">Buscar</span>
                                                <span class="fa fa-search visible-xs" aria-hidden="true"></span>
                                            </button>
                    </div>
                </div>
                <div class="opcao-pesquisa exibir_secao hidden-xs">
                    <input type="checkbox" id="opcao-pesquisa" disabled aria-label="Apenas nesta seção" title="Apenas nesta seção">
                    <label for="opcao-pesquisa">Apenas nesta seção</label>
                </div>
                <div class="busca-avancada text-right">
                    <a href="busca-avancada.php" class="btn btn-link btn-xs">busca avançada
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                </div>
            </fieldset>
        </div>
    </form>
</div>