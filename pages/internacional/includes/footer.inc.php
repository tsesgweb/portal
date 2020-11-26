<!-- end:Conteudo página interna -->
<?php $paginacao && include __DIR__ . '/paginacao.inc.php';?>
</main>
<?php $maisvisitados && include __DIR__ . './mais-visitado.inc.php';?>
</div>
<?php $asidenoticia && include __DIR__ . '/aside-noticias.inc.php';?>
<!-- Tags e Gestor reponsável-->
<?php
    if ($tags or $gestor) {
        print '<div id="coluna-lateral" class="nao-imprimir">';
        $tags && include __DIR__ . '/tags.inc.php';
        $gestor && include __DIR__ . '/gestor.inc.php';
        print '</div>';
    }
?>
</div>
<footer id="rodape" class="nao-imprimir" role="contentinfo">
   <div class="faixa-rodape">
   </div>
   <div class="rodape">
      <div class="centralizar">
         <section class="endereco">
            <h2 class="sr-only">Adress and contacts of TSE.</h2>
            <address class="text-right">
               <strong>Setor de Administração Federal Sul (
               <abbr title="Setor de Administração Federal Sul">SAFS</abbr>), Quadra 7, Lotes 1/2,</strong>
               <br> Brasília/
               <abbr title="Distrito Federal">DF</abbr> - 700070-600 -
               <abbr title="telefone">Phone:</abbr> (61) 3030-7000
               <br>
               <a href="http://www.tse.jus.br/eleitor/disque-eleitor/ouvidoria">Ouvidoria</a> - 0800 648 0005
               <br> Protocolo Administrativo: sala V-101, fax: (61) 3030-9951 -
               <a href="http://www.tse.jus.br/institucional/o-tse/comunicados/regras-para-envio-de-documentos-ao-tse">regras de envio</a>
               <br> Horário de funcionamento dos protocolos: das 11h às 19h
            </address>
         </section>
         <div class="icones-e-links">
            <section class="redes-sociais">
               <h2 class="sr-only">Social Media</h2>
               <div class="text-center">
                  <a href="#" aria-label="link para youtube" title="Watch us on You Tube">
                  <i class="fa fa-2x fa-youtube" aria-hidden="true">
                  <span class="sr-only">YouTube TSE</span>
                  </i>
                  </a>
                  <a href="#" aria-label="link para twitter" title="Follow us on Twitter">
                  <i class="fa fa-2x fa-twitter" aria-hidden="true">
                  <span class="sr-only">Twitter TSE</span>
                  </i>
                  </a>
                  <a href="#" aria-label="link para facebook" title="Follow us on Facebook">
                  <i class="fa fa-2x fa-facebook" aria-hidden="true">
                  <span class="sr-only">Facebook TSE</span>
                  </i>
                  </a>
                  <a href="#" aria-label="link para flickr" title="Follow us on Flickr">
                  <i class="fa fa-2x fa-flickr" aria-hidden="true">
                  <span class="sr-only">Flickr TSE</span>
                  </i>
                  </a>
                  <a href="#" aria-label="link para rss" title="Subscribe to our RSS feeds">
                  <i class="fa fa-2x fa-rss" aria-hidden="true">
                  <span class="sr-only">RSS TSE</span>
                  </i>
                  </a>
               </div>
            </section>
            <!-- <section class="links-gerais text-center">
               <div class="text-center espaco-imagem">
                  <h2 class="sr-only">Ouvidoria do tribunal</h2>
                  <a href="#" class="btn btn-block btn-outline-default">
                  <img src="../assets/imagens/call-center-icon.png" alt="Icone do Fale conosco" />Contact us</a>
               </div>
            </section> -->
         </div>
      </div>
   </div>
   <div id="mapa-site" class="mapa-site-abrir">
      <div class="centralizar">
         <div class="mapa-site-link text-center ">
            <span class="acao banner-left banner-right label label-action label-arrow">Site map
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
         </div>
      </div>
   </div>
   <nav class="mapa-site-conteudo">
      <div class="centralizar">
         <div class="titulo-personalizado">
            <h2 class="titulo-padrao h4">Site map</h2>
         </div>
         <div class="coluna-mapa">
            <h3 class="h5">
               <strong>SUPERIOR ELECTORAL COURT</strong>
            </h3>
            <ul class="list-unstyled">
               <li>
                  <a href="#" title="Composition of the Court">Composition of the Court</a>
               </li>
               <li>
                  <a href="#" title="Legislation">Legislation</a>
               </li>
               <li>
                  <a href="#" title="Superior Electoral Court">Superior Electoral Court</a>
               </li>
            </ul>
         </div>
         <div class="coluna-mapa">
            <h3 class="h5">
               <strong>ELECTIONS</strong>
            </h3>
            <ul class="list-unstyled lista-links">
               <li>
                  <a href="#" title="Accountability">Accountability</a>
               </li>
               <li>
                  <a href="#" title="Elections">Elections</a>
               </li>
               <li>
                  <a href="#" title="Funding">Funding</a>
               </li>
               <li>
                  <a href="#" title="Political Parties">Political Parties</a>
               </li>
               <li>
                  <a href="#" title="Statistics">Statistics</a>
               </li>
            </ul>
         </div>
         <div class="coluna-mapa">
            <h3 class="h5">
               <strong>ELETRONIC VOTING</strong>
            </h3>
            <ul class="list-unstyled lista-links">
               <li>
                  <a href="#" title="Contas partidárias">Videos</a>
               </li>
               <li>
                  <a href="#" title="Biometric system">Biometric system</a>
               </li>
               <li>
                  <a href="#" title="The History of Voting">The History of Voting</a>
               </li>
            </ul>
         </div>
         <div class="coluna-mapa">
            <h3 class="h5">
               <strong>INTERNACIONAL AFFAIRS</strong>
            </h3>
            <ul class="list-unstyled lista-links">
               <li>
                  <a href="#" title="Cooperation with Internacional Organizations">Cooperation with Internacional Organizations</a>
               </li>
               <li>
                  <a href="#" title="Internacional Advisory">Internacional Advisory</a>
               </li>
               <li>
                  <a href="#" title="Voting abroad">Voting abroad</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</footer>
<!-- build:jquery -->
<script src="../assets/js/jquery/jquery-1.12.4.min.js"></script>
<!-- endbuild -->
<!-- build:plugins -->
<script src="../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/transition.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/alert.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/button.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/carousel.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/collapse.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/modal.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/tab.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js"></script>
<script src="../node_modules/bootstrap-sass/assets/javascripts/bootstrap/popover.js"></script>
<script src="../node_modules/bootstrap-accessibility-plugin/plugins/js/bootstrap-accessibility.js"></script>
<script src="../node_modules/responsive-toolkit/dist/bootstrap-toolkit.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/responsive-toolkit/dist/bootstrap-toolkit.min.js"></script>
<script src="../node_modules/what-input/dist/what-input.min.js"></script>
<script src="../node_modules/js-cookie/src/js.cookie.js"></script>
<script src="../node_modules/jquery-placeholder/jquery.placeholder.js"></script>
<script src="../assets/js/vendor/affix-custom.js"></script>
<!-- endbuild -->
<!-- build:vendor -->
<script src="../assets/js/vendor/jquery.bootstrap-responsive-tabs-custom.js"></script>
<script src="../assets/js/vendor/jquery.mask.min.js"></script>
<!-- endbuild -->
<!-- build:portal -->
<script src="../assets/js/portal.js"></script>
<!-- endbuild -->
<?php $datepicker && print "<!-- build:datepicker --><script src='../assets/js/vendor/bootstrap-datepicker.js'></script><!-- endbuild -->"?>
<?php $home && print "<!-- build:home --><script src='../assets/js/home-en.js'></script><!-- endbuild -->"?>
<?php $interna && print "<!-- build:internas --><script src='../assets/js/internas.js'></script><!-- endbuild -->"?>
</body>
</html>