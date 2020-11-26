<?php
include('config.inc.php');
$subnivel = 'Eleições 2018';
$titulo = 'DivulgaCandContas';
$ocultartitulo = false;
$asideinterna = false;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
<section id="texto-conteudo">
<div class="iframe-full">
            <div id="divulgaCandAqui"></div>
        </div>
        <script src="http://cdn.tse.jus.br/estatico/js/iframeResizer.min.js"></script>
        <script>
            var iframeSource = 'http://divulgacandcontas.tse.jus.br/divulga';
            if (window.location.hash !== '') {
                iframeSource = iframeSource + window.location.hash;
            }
            // Create the iframe
            var iframe = document.createElement('iframe');
            iframe.setAttribute('src', iframeSource);
            iframe.setAttribute('id', 'divulgaCandIframe');
            iframe.setAttribute('data-iframe-height', 800);
            iframe.style.width = 100 + '%';
            iframe.style.height = 800 + 'px';
            var iframeDiv = document.getElementById('divulgaCandAqui');
            iframeDiv.appendChild(iframe);
            // addEventListener support for IE8
            function bindEvent(element, eventName, eventHandler) {
                if (element.addEventListener) {
                    element.addEventListener(eventName, eventHandler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + eventName, eventHandler);
                }
            }
            // Listen to message from child window
            bindEvent(parent, 'message', function(e) {
                if (e.data.url !== undefined) {
                    window.location.hash = e.data.url
                }
            });

            var isOldIE = (navigator.userAgent.indexOf("MSIE") !== -1); // Detect IE10 and below
            iFrameResize({
                    inPageLinks: false,
                    checkOrigin: false,
                    resizeFrom: 'child',
                    heightCalculationMethod: isOldIE ? 'max' : 'documentElementScroll'

                },
                '#divulgaCandIframe');
        </script>
        <style>
            #acessibilidade-rybena {
                display: none;
            }

            .list-inline.pull-right.hidden-xs {
                display: none;
            }

            .noticia-compartilhar {
                text-align: right;
                float: right;
                margin-top: -68px;
            }

            #breadcrumb {
                margin-top: 25px;
            }

            #conteudo-pagina {
                margin-top: -25px;
            }

            #divulgaCandIframe {
                width: 1px;
                min-width: 100%;
            }
        </style>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>