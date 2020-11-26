<?php
include('config.inc.php');
$titulo = 'Topo Reduzido';
$asideinterna = false;
$titulo = 'Conteúdo com topo reduzido';
$nivel = 'Topo reduzido';
$tags = false;
$gestor = false;
$maisvisitados = false;
$breadcrumb = false;
$ocultartitulo = true;
$toporeduzido = true;
//    $maisacessados = false;
$feedback = false;
$compartilhar = false;
include BASE_URL. '/includes/header.inc.php';
?>
<section>
    <style>
        iframe {
            width: 1px;
            min-width: 100%;
        }
    </style>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-info"></i> Ajuda</h4>
                </div>
                <div class="modal-body">
                    <div id="conteudoModalAqui"></div>
                    <iframe src="" id="estatisticasModal" frameborder="0" height="500" width="100%"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="iframe-full">
        <iframe id="iframe-content" src="http://inter04.tse.jus.br/ords/hmg_gargamel/f?p=176:10" id="iframe-content"
            data-scrolling-top="true" data-check-origin="allje"></iframe>
    </div>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>