<?php 
include './includes/config.inc.php';
$home = true;
$interna = false;
$recaptcha = true;
$breadcrumb = false;
$compartilhar = false;
$titulo = false;
$tags = false;
$gestor = false;
$maisvisitados = false;
$feedback = false;
include BASE_URL . '/includes/header.inc.php';
?>
<main id="conteudo">
    <div class="centralizar">
        <section id="home-servicos">
            <div id="quick-access">
                <div class="quick-access-item">
                    <div class="titulo-personalizado">
                        <h3 class="titulo-padrao">Quick Access</h3>
                    </div>
                    <div class="conter-conteudo icone icone-lista">
                        <ul class="grupo-lista">
                            <li>
                                <a href="#">Superior Electoral Court</a>
                            </li>
                            <li>
                                <a href="#">International Advisory</a>
                            </li>
                            <li>
                                <a href="#">Legislation</a>
                            </li>
                            <li>
                                <a href="#">Titulo Net</a>
                            </li>
                            <li>
                                <a href="#">TSE Website in Portuguese</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="quick-access-item">
                    <div class="titulo-personalizado">
                        <h3 class="titulo-padrao">Videos</h3>
                    </div>
                    <div class="conter-conteudo icone icone-lista">
                        <div class="video-servicos tirar-transicao">
                            <a data-fancybox="galeria-midia" data-type="iframe" href="http://english.tse.jus.br/videos/transporting-the-ballot-boxes/view_popup" title="TESTE">
                                <figure class="je-icone je-icone-3x je-icone-video">
                                    <img src="http://english.tse.jus.br/videos/transporting-the-ballot-boxes/video_imagem_nova_galeria" class="" alt="Transporting the voting machines">
                                </figure>
                            </a>
                            <span>Transporting the voting machines the voting machines and Transporting the voting machines</span>
                        </div>
                        <div class="video-servicos tirar-transicao">
                            <a data-fancybox="galeria-midia" data-type="iframe" href="http://english.tse.jus.br/videos/transporting-the-ballot-boxes/view_popup" title="TESTE">
                                <figure class="je-icone je-icone-3x je-icone-video">
                                    <img src="http://english.tse.jus.br/videos/transporting-the-ballot-boxes/video_imagem_nova_galeria" class="" alt="Transporting the voting machines">
                                </figure>
                            </a>
                            <span>Transporting the voting machines and Transporting the voting machines</span>
                        </div>
                        <a href="#" class="btn btn-sm bt-mais-acessados">More</a>
                    </div>
                </div>
            </div>
            <div id="electoral-clipping">
                <div class="electoral-clipping-item">
                    <div class="titulo-personalizado">
                        <h3 class="titulo-padrao">Electoral Clipping</h3>
                    </div>
                    <div class="conter-conteudo icone icone-lista">
                        <ul class="grupo-lista">
                            <li>
                                <a href="#">Facebook estudiará su impacto em elección de México</a>
                            </li>
                            <li>
                                <a href="#">Everything You Need to Know About Malaysia’s Upcoming Election</a>
                            </li>
                            <li>
                                <a href="#">East Timor Parties Start Campaign for 2nd Election in a Year</a>
                            </li>
                            <li>
                                <a href="#">¿Cómo saber si Cambridge Analytica compartió tu información?</a>
                            </li>
                            <li>
                                <a href="#">Malaysia’s Election Commission sets May 9 as date for elections seen as a referendum on Prime
                                    Minister Najib Razak</a>
                            </li>
                            <li>
                                <a href="#">Court adds 5th candidate to Mexico’s presidential ballot</a>
                            </li>
                            <li>
                                <a href="#">Luego de 28 años, habrá una elección para presidente de la Rural</a>
                            </li>
                            <li>
                                <a href="#">El fraude electoral y el INE</a>
                            </li>
                            <li>
                                <a href="#">Ce que la proportionnelle partielle pourrait changer dans l’élection des deputes</a>
                            </li>
                            <li>
                                <a href="#">What to Watch at Hungary's Elections</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-sm bt-mais-acessados">More</a>
                    </div>
                </div>
            </div>

        </section>
        <div id="home-bloco-noticias">
            <section id="home-noticias" class="hidden-xs">
                <div class="noticias-home">
                    <h2 class="sr-only">News</h2>
                    <div id="noticias" class="noticia-principal">
                        <article id="noticia-1" class="destaque-principal">
                            <!-- Vídeo     -->
                            <a href="https://www.youtube.com/embed/hNJ6Rbtv1gs" data-fancybox>
                                <figure class="je-icone je-icone-youtube je-icone-4x">
                                    <img class="img-responsive" src="http://i.ytimg.com/vi/hNJ6Rbtv1gs/sddefault.jpg" alt="teste noticia 1">
                                </figure>
                            </a>
                            <!-- Foto -->
                            <!-- <a href="https://www.youtube.com/embed/hNJ6Rbtv1gs" data-fancybox>
                                                <figure class="je-icone je-icone-foto je-icone-3x">
                                                    <img class="img-responsive" src="http://www.tse.jus.br/imagens/fotos/urna-eletronica-em-13-05-2016/@@images/c7095c78-85c1-4b90-8daa-ccb06a4091d7.jpeg" alt="teste noticia 1">
                                                </figure>
                                            </a> -->
                            <!-- Audio -->
                            <!-- <a href="https://www.youtube.com/embed/hNJ6Rbtv1gs" data-fancybox>
                                                <figure class="je-icone je-icone-audio je-icone-4x">
                                                    <img class="img-responsive" src="assets/imagens/fundo-audio.png" alt="teste noticia 1">
                                                </figure>
                                            </a> -->
                            <h3>
                                <a href="#">Learn more about the President and Vice-president of the TSE</a>
                            </h3>
                            <p class="sr-only">Installed this Tuesday night as chief of the Superior Electoral Court (TSE) for the next months, Justice Luiz Fux and Justice Rosa Weber took the post of President and Vice-president of the Court, respectively.</p>
                        </article>
                    </div>
                    <div class="noticias-auxiliares">
                        <article id="noticia-2" class="noticia-auxiliar">
                            <a href="#" class="visible-xs">
                                <figure>
                                    <img class="img-responsive" src="assets/imagens/spinner.gif" data-src="http://www.tse.jus.br/imagens/fotos/preparacao-de-ambiente-para-tps-em-27-11-2017-1511786694169/image_large" alt="teste noticia 1">
                                </figure>
                            </a>
                            <h4>
                                <a href="#">Check TSE’s campaign about the application e-Título</a>
                            </h4>
                            <p class="sr-only">The Superior Electoral Court (TSE) has launched, on Thursday (15th), a campaign that explains how the application works. The 1 minute video will be broadcasted in the main TV and radio stations of the country and also at TSE’s
                                social networks - Facebook, Twitter and YouTube -, until the previous day of the General Elections of 2018.</p>
                        </article>
                        <article id="noticia-3" class="noticia-auxiliar">
                            <h4>
                                <a href="#">Electoral Justice improves mobile applications for the 2018 Elections</a>
                            </h4>
                            <p class="sr-only">With more than a year in advance, the Electoral Justice is already working to offer the voters information, which is increasingly more complete, about the candidates and the voting of the 2018 General Elections.</p>
                        </article>
                        <article id="noticia-4" class="noticia-auxiliar">
                            <a href="https://www.youtube.com/embed/hNJ6Rbtv1gs" data-fancybox class="visible-xs">
                                <figure class="je-icone je-icone-audio je-icone-4x">
                                    <img class="img-responsive" src="assets/imagens/spinner.gif" data-src="assets/imagens/fundo-audio.png" alt="teste noticia 1">
                                </figure>
                            </a>
                            <h4>
                                <a href="#">Directors of the Electoral Judiciary Schools discuss good practices in the TSE</a>
                            </h4>
                            <p class="sr-only">This Thursday afternoon (22nd), the first meeting of the year between the directors and coordinators of the Electoral Judiciary Schools (EJEs) of the whole country was held at the Superior Electoral Court (TSE), in Brasilia.</p>
                        </article>

                    </div>
                </div>

                <footer class="noticias-rodape">
                    <div class="noticias-rodape-conter">
                        <div class="btn-group" role="group" aria-label="Outros links">
                            <a class="btn btn-link" href="http://english.tse.jus.br/noticias-tse-en/2018">
                                            MORE
                                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        </a>
                        </div>
                    </div>
                </footer>
            </section>
            <section id="home-destaques">
                <div id="banner-internacional">
                    <a href="http://english.tse.jus.br/electronic-voting/the-biometrical-system-in-brazil" title="Biometric system">
                        <figure>
                            <img class="img-responsive" alt="Biometric system" src="assets/imagens/internacional/banner-biometric-system.png" />
                        </figure>
                    </a>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include __DIR__ .'./includes/footer.inc.php'?>