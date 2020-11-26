<?php
include('config.inc.php');
$subnivel = '';
$titulo = 'Estatísticas 2018';
$ocultartitulo = true;
$asideinterna = false;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
    <section id="texto-conteudo">
        <div class="iframe-full">
            <iframe id="estatisticasIframe" name="estatisticasIframe" src="http://inter04.tse.jus.br/ords/dwtse/f?p=176:10" scrolling="no" height="1000"></iframe>
        </div>
        <script src="http://cdn.tse.jus.br/estatico/js/iframeResizer.min.js"></script>
        <div class="modal fade" id="modal-estatistica">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="modalestatisticasIframe" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #modal-estatistica.modal {
                text-align: center;
                padding: 0 !important;
            }
            #modal-estatistica.modal:before {
                content: '';
                display: inline-block;
                height: 100%;
                vertical-align: middle;
                margin-right: -4px;
            }
            #modal-estatistica>.modal-dialog {
                display: inline-block;
                text-align: left;
                vertical-align: middle;
            }
        </style>
        <script>
            document.getElementById('estatisticasIframe').onload = function() {
                window.scrollTo(0, 320);
            }
            var isOldIE = (navigator.userAgent.indexOf("MSIE") !== -1);
            iFrameResize({
                log: false,
                inPageLinks: false,
                heightCalculationMethod: isOldIE ? 'max' : 'lowestElement', //'bodyOffset' | 'bodyScroll' | 'documentElementOffset' | 'documentElementScroll' | 'max' | 'min' | 'grow' | 'lowestElement' | 'taggedElement'
                // interval: 1000,
                // enablePublicMethods: true,
                checkOrigin: false,
                // autoResize: false,
                resizeFrom: 'child',
                // sizeHeight: window.innerHeight
                // resizedCallback: function(pos) {
                //     console.log(pos);
                // },
                messageCallback: function(msg) {
                    var $id = msg.iframe.id;
                    var $height = msg.message.height === undefined ? 600 : msg.message.height;
                    var $width = msg.message.width === undefined ? 720 : msg.message.width;
                    var $maxWidth = msg.message.maxWidth === undefined ? 900 : msg.message.width;
                    var $open = msg.message.open === undefined ? false : msg.message.open;
                    var $url = msg.message.url === undefined ? false : msg.message.url;

                    if ($open) {
                        //auto redimensionamento
                        iFrameResize({
                            checkOrigin: false,
                        }, '#modal' + $id);
                        var $modalAtivar = jQuery('#modal-estatistica');
                        $modalAtivar.on('shown.bs.modal', function() {
                            var $modal = jQuery(this);

                            var $titulo = msg.message.title === undefined ? '' : msg.message.title;
                            $replaceUrl = jQuery('#' + $id).attr('src').replace(/f\?p=.*$/gm, $url);
                            $modal.find('.modal-title')
                                .text($titulo);
                            $modal.find('iframe').attr({
                                src: $replaceUrl
                            });
                            $modal.find('.modal-body').css({
                                padding: 0
                            });
                        }).css({
                            zIndex: 1060

                        }).modal();
                        $modalAtivar.on('hidden.bs.modal', function() {
                            var $modal = jQuery(this);
                            $modal.find('iframe').attr({
                                'src': '',
                                height: 0,
                            });
                        });
                    }
                },
            }, '#estatisticasIframe');
        </script>
    </section>
    <?php include BASE_URL . '/includes/footer.inc.php';?>