<?php $maisvisitados && include __DIR__ . '/mais-visitado.inc.php'; ?>
<?php !$home && $asideinterna || $asidenoticia || $asideagenda ? print '</div><!-- end:conteudo?coluna-->' : ''; ?>
<?php $asidenoticia && include __DIR__ . '/noticias/aside-noticias.inc.php'; ?>
<?php $asideagenda && include __DIR__ . '/aside-agenda.inc.php'; ?>
<?php $feedback && include __DIR__ . '/feedback.inc.php'; ?>
<?php !$home && print '</div></main><!-- end:linha < conteudo-->'; ?>
<!-- end: global module -->
<!-- start:rodape -->
<div class="rodape">
    <div class="rodape__topo rodape__topo-bg-azul">
        <div class="rodape__conteudo">
            <div class="rodape__linha">
                <div class="rodape__logo">
                    <a href="/" title="Tribunal Superior Eleitoral">
                        <img src="assets/imagens/logos/tse-inverse.png" alt="logo Tribunal Superior Eleitoral">
                    </a>
                </div>
                <div class="rodape__links">
                    <ul class="rodape__lista">
                        <li class="list-inline-item">
                            <a class="rodape_link btn-azul" href="#">Portal internacional</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rodape_link btn-azul" href="#">Espaço do servidor</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rodape_link btn-azul" href="#">Sei - Usuário externo</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rodape_link btn-azul" href="#">Carta de serviços ao eleitor</a>
                        </li>
                    </ul>
                </div>
                <?php $selos && include __DIR__ . './selos.inc .php'; ?>
            </div>
        </div>
    </div>
    <div class="rodape__informacoes">
        <div class="rodape__conteudo">
            <div class="rodape__linha">
                <div class="endereco">
                    <div class="endereco__media">
                        <a href="#" data-toggle="modal" data-target="#mapaModal">
                            <img data-toggle="tooltip" data-placement="top" title="Clique para ver o mapa" class="endereco__media__img" src="assets/imagens/footer/icon-mapa.png" alt="icone mapa">
                        </a>
                        <div class="endereco__media_body">
                            <address>Setor de Administração Federal Sul (SAFS) <br>
                                Quadra 7, Lotes 1/2, Brasília/DF - 70070-600, <br>
                                <span itemscope itemtype="http://schema.org/LocalBusiness">
                                    <span itemprop="name" class="telefone_oculto">Tribunal Superior Eleitoral</span>
                                    <abbr title="Telefone">Tel</abbr>.:<a itemprop="telephone" href="tel:+55-61-3030-7000"> (61) 3030-7000</a></span>
                            </address>
                        </div>
                    </div>
                    <div class="endereco__media">
                        <img class="endereco__media__img" src="assets/imagens/footer/icon-protocolo.png" alt="Icone Protocolo Administrativo">
                        <div class="endereco__media_body">
                            <p><strong>Protocolo Administrativo:</strong> sala V 101, <br>
                                <span itemscope itemtype="http://schema.org/LocalBusiness">
                                    <span itemprop="name" class="telefone_oculto">Protocolo Judiciário</span>
                                    <abbr title="Fax">Fax</abbr>.:<a itemprop="fax" href="tel:+55-61-3030-9850"> (61)
                                        3030-9850</a></span> <a href="#">regras de
                                    envio.</a> <br>
                                <strong>Protocolo Judiciário:</strong> sala V 504, fax: (61) 3030-9951 </p>
                        </div>
                    </div>
                    <div class="endereco__media">
                        <img class="endereco__media__img" src="assets/imagens/footer/icon-horario.png" alt="Icone horário de funcionamento dos <br />
                                protocolos">
                        <div class="endereco__media_body">
                            <p>Horário de funcionamento dos <br /> protocolos: das 11h as 19h</p>
                        </div>
                    </div>
                </div>
                <div class="botoes">
                    <div class="botoes__redes-sociais">
                        <div class="redes-sociais">
                            <ul class="nav nav-fill justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link icon icon-twitter" data-toggle="tooltip" data-placement="top" title="Acessar o Twitter" href="https://twitter.com/tsejusbr" target="_blank" rel="nofollow"><span class="sr-only">Twitter</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon icon-facebook" data-toggle="tooltip" data-placement="top" title="Acessar o Facebook" href="https://www.facebook.com/TSEJus" target="_blank" rel="nofollow"><span class="sr-only">Facebook</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon icon-flickr" data-toggle="tooltip" data-placement="top" title="Acessar o Flickr" href="https://www.flickr.com/photos/144801833@N06/" target="_blank" rel="nofollow"><span class="sr-only">Flickr</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon icon-instagram" data-toggle="tooltip" data-placement="top" title="Acessar o Instagram" href="https://www.instagram.com/tsejus" target="_blank" rel="nofollow"><span class="sr-only">Instagram</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon icon-youtube" data-toggle="tooltip" data-placement="top" title="Acessar o Youtube" href="https://www.youtube.com/user/justicaeleitoral" target="_blank" rel="nofollow"><span class="sr-only">Youtube</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comunicacao-interna">
                        <div class="comunicacao-interna__botoes">
                            <div class="comunicacao-interna__item">
                                <a href="http://www.tse.jus.br/eleitor/servicos/ouvidoria" class="btn btn-block btn-azul rounded-lg"><img src="assets/imagens/footer/icon-contato.png" alt="Fale conosco"> Fale conosco
                                </a>

                            </div>
                            <div class="comunicacao-interna__item">
                                <a href="http://www.tse.jus.br/transparencia/politica-de-privacidade-e-termos-de-uso" class="btn btn-block btn-azul rounded-lg">
                                    <img src="assets/imagens/footer/icon-privacidade.png" alt="Termos de uso e privacidade."> Termos de uso e privacidade.</a>
                            </div>
                            <div class="comunicacao-interna__item">
                                <a href="#" class="btn btn-block btn-azul rounded-lg" data-toggle="modal" data-target="#modal-sugestao-pagina"><img src="assets/imagens/footer/icon-feedback.png" alt="Como foi sua
                                navegação?"> Como foi sua navegação?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:rodape -->
<?php $aviso && include __DIR__ . '/aviso.inc.php'; ?>
<?php include __DIR__ . '/mapa-site.inc.php'; ?>
<!-- start:modal -->
<div class="modal fade" id="mapaModal" tabindex="-1" role="dialog" aria-labelledby="mapaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="mapaModalLabel">Visualizar mapa do site</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe title="Mapa com a localização do Tribunal" class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4565.135705760026!2d-47.873987820373266!3d-15.814166990783106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b323d0068df%3A0x140d35bc3ea0bd5b!2sTribunal+Superior+Eleitoral!5e0!3m2!1spt-BR!2sbr!4v1554211659136!5m2!1spt-BR!2sbr" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start:scripts -->
<?php autoIncludeFiles('footer', 'js'); ?>
<!-- end:scripts -->
<!-- end:global module -->
</body>

</html>