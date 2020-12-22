<?php
include 'config.inc.php';
$subnivel = 'Conteúdo janela';
$titulo = 'Divulgação de Candidaturas e Contas Eleitorais';
$asideinterna = false;
$coluna = false;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
    <section id="texto-conteudo">
        <div class="iframe-full">
            <div id="divulgaCandAqui"></div>
            <script src="http://cdn.tse.jus.br/estatico/js/iframeResizer.min.js"></script>
        </div>
        <script>
            var iframeSource = 'http://divulgacandcontas.tse.jus.br/divulga';
            //Verificar se a hash existe reescreve o iframeSource
            if (window.location.hash !== '') {
                iframeSource = iframeSource + window.location.hash;
            }
            //Cria o iframe
            var iframeDiv = document.getElementById('divulgaCandAqui'),
                iframe = document.createElement('iframe');
            iframe.setAttribute('id', 'divulgaCandIframe');
            iframe.setAttribute('src', iframeSource);
            iframeDiv.appendChild(iframe);

            var isOldIE = (navigator.userAgent.indexOf("MSIE") !== -1); // Detect IE10 and below
            iFrameResize({
                inPageLinks: false,
                checkOrigin: false,
                resizeFrom: 'child',
                heightCalculationMethod: isOldIE ? 'max' : 'documentElementScroll',
                resizedCallback: function(cb) {
                    if (cb.type == 'mutationObserver') {

                    }
                },

            }, '#divulgaCandIframe');
            // Listen to message from child window
            bindEvent(parent, 'message', function(e) {
                if (e.data.url !== undefined) {
                    window.location.hash = e.data.url
                }
            });
            // addEventListener support for IE8
            function bindEvent(element, eventName, eventHandler) {
                if (element.addEventListener) {
                    element.addEventListener(eventName, eventHandler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + eventName, eventHandler);
                }
            }
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