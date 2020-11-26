<?php
include('config.inc.php');
$subnivel       = 'iframefull';
$titulo         = 'Certidão de quitação eleitoral';
$ocultartitulo         = false;
$asideinterna   = false;
$tags     = false;  $gestor     = false;
$paginafull = true;
include BASE_URL .'/includes/header.inc.php';
?>
<section id="texto-conteudo">
    <div class="container-fluid iframe-full">
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

        <div id="callback"></div>
        <iframe src="http://inter04.tse.jus.br/ords/hmg_gargamel/f?p=176:10" id="estatisticasIframe" frameborder="0" height="800" width="100%"></iframe>
        <script src="http://cdn.tse.jus.br/estatico/js/iframeResizer.min.js"></script>
        <script>
            iFrameResize({
                messageCallback: function(messageData) { // Callback fn when message is received
                    jQuery('p#callback').html(
                        '<b>Frame ID:</b> ' + messageData.iframe.id +
                        ' <b>Message:</b> ' + messageData.message.url
                    );
                    if (messageData.message.open === true) {
                        var modalAtivar = jQuery('#modal-id');
                        modalAtivar.on('shown.bs.modal', function(event) {
                            var button = jQuery(event.relatedTarget); // Button that triggered the modal
                            var url = messageData.message.url; // Extract info from data-* attributes
                            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                            var modal = jQuery(this);
                            var iframe = jQuery('#estatisticasIframe').attr('src');
                            var replaceUrl = iframe.replace(/(f\?p=.*$)/gm, url);
                            var src = modal.find('iframe').attr('src', replaceUrl);
                        });
                        modalAtivar.css('z-index', '9999').modal();
                    };
                    //     console.log(messageData.message);
                    //     document.getElementsByTagName('iframe')[0].iFrameResizer.sendMessage(
                    //         'Hello back from parent page');
                },
                checkOrigin: false,
                inPageLinks: true,
                log: false,
                // bodyMargin: 0,
                // scrolling: true,
                // scrollCallback: function(){
                //     console.log(x);

                // },
                autoResize: false,
                resizeFrom: 'child',
                // sizeHeight: window.innerHeight,
                // heightCalculationMethod: function() {
                //     return window.innerHeight;
                // },
                heightCalculationMethod: 'bodyScroll', //'bodyOffset' | 'bodyScroll' | 'documentElementOffset' | 'documentElementScroll' | 'max' | 'min' | 'grow' | 'lowestElement' | 'taggedElement'
                autoResize: false
            }, '#estatisticasIframe');
        </script>
    </div>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>