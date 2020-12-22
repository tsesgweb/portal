<?php
include 'config.inc.php';
$subnivel = 'Busca';
$titulo = 'Busca avançada';
$asideinterna = false;
$compartilhar = false;
$coluna = false;
$tags = false;
$gestor = false;
$feedback = false;
$maisvisitados = false;
$datepicker = true;
include BASE_URL . '/includes/header.inc.php';
?>
<section id="texto-conteudo">
    <form method="get" name="searchform" class="searchingPage" id="form-pesquisa-pag-adv" action="http://www.tse.jus.br/busca">
        <div class="form-pesquisa-pag-adv__conteudo">
            <div class="form-pesquisa-pag-adv__linha">
                <div class="campos-busca-avancada">
                    <div class="je-blocos-ba">
                        <div class="je-subtitulos-ba">Procurar resultados</div>
                        <div class="inputs-resultds">
                            <div class="form-group">
                                <label for="busca-todas-palavras">com TODAS as palavras</label>
                                <input id="busca-todas-palavras" class="form-control" name="searchable_text" type="text">
                            </div>
                            <div class="form-group">
                                <label for="busca-expressao">com a EXPRESSÃO</label>
                                <input id="busca-expressao" class="form-control" name="as_epq" type="text">
                            </div>
                            <div class="form-group">
                                <label for="busca-qualquer-palavra">com QUALQUER UMA das palavras</label>
                                <input id="busca-qualquer-palavra" class="form-control" name="as_oq" type="text">
                            </div>
                            <div class="form-group">
                                <label for="busca-sem-palavras">SEM as palavras</label>
                                <input id="busca-sem-palavras" class="form-control" name="as_eq" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="je-blocos-ba">
                        <div class="je-subtitulos-ba">Formato do arquivo</div>
                        <div class="procurar-resultds form-inline">
                            <select name="as_ft" class="form-control">
                    <option value="i">Apenas</option>
                    <option value="e">Não</option>
                </select> exibir resultados com o formato de arquivo
                            <select name="as_filetype" class="form-control">
                    <option value="">qualquer formato</option>
                    <option value="file">Arquivos</option>
                    <option value="zip">Arquivo comprimido (.zip)</option>
                    <option value="pdf">Adobe Acrobat PDF (.pdf)</option>
                    <option value="mp3">Áudio</option>
                    <option value="foto">Foto</option>
                    <option value="img">Imagem</option>
                    <option value="mp4">Vídeo</option>
                </select>
                        </div>
                    </div>
                    <div class="je-blocos-ba">
                        <div class="je-subtitulos-ba">Ocorrências</div>
                        <div class="procurar-resultds form-inline">
                            <p>
                                Exibir resultados nos quais meus termos aparecem
                                <select name="as_occt" class="form-control">
                        <option value="any">em qualquer lugar da página</option>
                        <option value="title">no título da página</option>
                        <option value="url">no endereço da página</option>
                    </select>
                            </p>
                        </div>
                    </div>
                    <div class="je-blocos-ba">
                        <div class="je-subtitulos-ba">Classificar</div>
                        <div class="procurar-resultds form-inline">
                            <p>
                                <select name="sort" class="form-control">
                        <option value="date:D:L:d1">Classificar por relevância</option>
                        <option value="date:D:S:d1">Classificar por data</option>
                    </select>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pesquisar-busca-avancada form-inline">
                    <select name="num" id="num-results" class="form-control">
            <option value="10">10 resultados</option>
            <option value="20">20 resultados</option>
            <option value="30">30 resultados</option>
            <option value="50">50 resultados</option>
            <option value="100">100 resultados</option>
        </select>
                    <select name="tribunal" id="tribunal" class="form-control">
            <option value="JE">JE</option>
            <option value="TRE-AC">TRE-AC</option>
            <option value="TRE-AL">TRE-AL</option>
            <option value="TRE-AM">TRE-AM</option>
            <option value="TRE-AP">TRE-AP</option>
            <option value="TRE-BA">TRE-BA</option>
            <option value="TRE-CE">TRE-CE</option>
            <option value="TRE-DF">TRE-DF</option>
            <option value="TRE-ES">TRE-ES</option>
            <option value="TRE-GO">TRE-GO</option>
            <option value="TRE-MA">TRE-MA</option>
            <option value="TRE-MG">TRE-MG</option>
            <option value="TRE-MS">TRE-MS</option>
            <option value="TRE-MT">TRE-MT</option>
            <option value="TRE-PA">TRE-PA</option>
            <option value="TRE-PB">TRE-PB</option>
            <option value="TRE-PE">TRE-PE</option>
            <option value="TRE-PI">TRE-PI</option>
            <option value="TRE-PR">TRE-PR</option>
            <option value="TRE-RN">TRE-RN</option>
            <option value="TRE-RO">TRE-RO</option>
            <option value="TRE-RR">TRE-RR</option>
            <option value="TRE-SE">TRE-SE</option>
            <option value="TRE-SP">TRE-SP</option>
            <option value="TRE-TO">TRE-TO</option>
            <option value="TSE" selected="">TSE</option>
        </select>
                    <button class="icone icone-pesquisa btn btn-primary searchPage searchButton-avanc allowMultiSubmit" name="btnG" type="submit">
            <span class="hidden-xs">Pesquisar</span>
            <span class="fa fa-search visible-xs" aria-hidden="true"></span>
        </button>
                </div>
            </div>
        </div>
    </form>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>