<?php
include __DIR__ . './includes/config.inc.php';
$asideinternas  = false;
$maisvisitados  = false;
$gestor = false;
$tags = false;
$compartilhar = false;
$titulo = "Advanced Search";
include __DIR__ . './includes/header.inc.php';
?>
<form method="get" name="searchform" class="searchingPage" id="as" action="http://portalhomologa.tse.jus.br/tse/@@GSASearch">
    <div class="campos-busca-avancada">
        <div class="je-blocos-ba">
            <div class="je-subtitulos-ba">Search for results</div>
            <div class="inputs-resultds">
                <div class="form-group">
                    <label for="busca-todas-palavras">With all pages</label>
                    <input type="text" class="form-control" name="SearchableText" id="busca-todas-palavras">
                </div>
                <div class="form-group">
                    <label for="busca-expressao">With the expression</label>
                    <input type="text" class="form-control" id="busca-expressao" name="as_epq">
                </div>
                <div class="form-group">
                    <label for="busca-qualquer-palavra">With any of the words</label>
                    <input type="text" class="form-control" id="busca-qualquer-palavra" name="as_oq">
                </div>
                <div class="form-group">
                    <label for="busca-sem-palavras">No words</label>
                    <input type="text" class="form-control" id="busca-sem-palavras" name="as_eq">
                </div>
            </div>
        </div>
        <div class="je-blocos-ba">
            <div class="je-subtitulos-ba">File format</div>
            <div class="procurar-resultds form-inline">
                <select name="as_ft" class="form-control">
                <option value="i">Only</option>
                <option value="e">Not</option>
                </select> – display results with the file format
                <select name="as_filetype" class="form-control">
                <option value="" selected="">any format</option>
                <option value="file">Files</option>
                <option value="zip">Files compressed (.zip)</option>
                <option value="pdf">Adobe Acrobat PDF (.pdf)</option>
                <option value="mp3">Voice</option>
                <option value="foto">Photo</option>
                <option value="img">Image</option>
                <option value="mp4">Video</option>
                </select>
            </div>
        </div>
        <div class="je-blocos-ba">
            <div class="je-subtitulos-ba">Incidences</div>
            <div class="procurar-resultds form-inline">
                <p>
                    Display results in which my terms appear
                    <select name="as_occt" class="form-control">
                    <option value="any">anywhere in the page </option>
                    <option value="title">in the page title</option>
                    <option value="url">in the page address</option>
                </select>
                </p>
            </div>
        </div>
        <div class="je-blocos-ba">
            <div class="je-subtitulos-ba">Classify</div>
            <div class="procurar-resultds form-inline">
                <p>
                    <select name="sort" class="form-control">
                    <option value="date:d:l:d1">Classify by relevance</option>
                    <option value="date:d:s:d1">Classify by date</option>
                </select>
                </p>
            </div>
        </div>
    </div>
    <div class="pesquisar-busca-avancada form-inline">
        <select class="form-control" name="num" id="num-results">
            <option value="10">10 results</option>
            <option value="20">20 results</option>
            <option value="30">30 results</option>
            <option value="50">50 results</option>
            <option value="100">100 results</option>
        </select>
        <select class="form-control" name="site" id="tribunal">
            <option value="je">JE</option>
            <option value="tre-ac">TRE-AC</option>
            <option value="tre-al">TRE-AL</option>
            <option value="tre-am">TRE-AM</option>
            <option value="tre-ap">TRE-AP</option>
            <option value="tre-ba">TRE-BA</option>
            <option value="tre-ce">TRE-CE</option>
            <option value="tre-df">TRE-DF</option>
            <option value="tre-es">TRE-ES</option>
            <option value="tre-go">TRE-GO</option>
            <option value="tre-ma">TRE-MA</option>
            <option value="tre-mg">TRE-MG</option>
            <option value="tre-ms">TRE-MS</option>
            <option value="tre-mt">TRE-MT</option>
            <option value="tre-pa">TRE-PA</option>
            <option value="tre-pb">TRE-PB</option>
            <option value="tre-pe">TRE-PE</option>
            <option value="tre-pi">TRE-PI</option>
            <option value="tre-pr">TRE-PR</option>
            <option value="tre-rn">TRE-RN</option>
            <option value="tre-ro">TRE-RO</option>
            <option value="tre-rr">TRE-RR</option>
            <option value="tre-se">TRE-SE</option>
            <option value="tre-sp">TRE-SP</option>
            <option value="tre-to">TRE-TO</option>
            <option value="tse" selected="">TSE</option>
        </select>
        <button class="icone icone-pesquisa btn btn-primary searchPage searchButton-avanc allowMultiSubmit" name="btnG" type="submit">
        <span class="hidden-xs">Search</span>
        <span class="fa fa-search visible-xs" aria-hidden="true"></span>
        </button>
    </div>
</form>
<?php include __DIR__ . './includes/footer.inc.php';?>