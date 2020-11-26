<?php
include('config.inc.php');
$home = true;
$interna = false;
$recaptcha = false;
$breadcrumb = false;
$compartilhar = false;
$titulo = 'Eleicoes';
$ocultartitulo = true;
$tags = false;
$gestor = false;
$maisacessados  = false;
$rybena         = false;
$maisvisitados = false;
$feedback = false;
$paginaeleicoes = true;
include BASE_URL . '/includes/header.inc.php'; 
?>
    <div class="centralizar">
        <div class="eleicoes">
            <figure><img class="img-responsive mx-auto d-block mb-5" src="assets/imagens/icones_eleicoes/logo-eleicoes-2018.png" alt="Eleições 2018"></figure>
            <div class="column">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-local-votacao.png" alt="Local de votação">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"> local de votação</h3>
                                    <p><a href="#">Consultar por nome</a></p>
                                    <p><a href="#">Consultar por título</a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-situacao-eleitoral.png" alt="Situação Eleitoral">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"> situaçao eleitoral</h3>
                                    <p><a href="#">Consultar por nome</a></p>
                                    <p><a href="#">Consultar por título</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-justificativa-eleitoral.png" alt="Justiça Eleitoral">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">justiça eleitoral</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim do card -->

                <div class="card-deck">

                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-candidaturas.png" alt="Candidaturas">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">candidaturas</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-aplicativo.png" alt="Aplicativo da Justiça Eleitoral">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">Aplicativo da <br>Justiça Eleitoral</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-mesario.png" alt="Mesário">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">Mesário</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- fim do card -->

                <div class="card-deck">

                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-denuncias.png" alt="Denúncias">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">Denúncias</a></h3>
                                    <p><a href="#">Lorem ipsum dolor sit.</a></p>
                                    <p><a href="#">Lorem ipsum dolor sit dolor sit.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-noticias.png" alt="Notícias, vídeos e rádio">
                                <div class="media-body align-self-center">
                                    <h3>
                                        <a href="#">notícias</a> 
                                        | <a href="#">vídeos</a> 
                                        | <a href="#">rádios</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body d-flex h-100 justify-content-center">
                            <div class="media ">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-outras-informacoes.png" alt="Outras informações">
                                <div class="media-body align-self-center">
                                    <h3 class="mt-0"><a href="#">outras informações</a></h3>
                                    <p><a href="#">Lorem ipsum dolor sit.</a></p>
                                    <p><a href="#">Lorem ipsum dolor sit dolor sit.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="d-flex h-100 justify-content-center">
                                <img class="align-self-center mr-3" src="assets/imagens/icones_eleicoes/icon-outras-informacoes.png" alt="Generic placeholder image">
                                <div class="align-self-center">
                                    <h3><a href="#">Outras informações</a></h3>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- fim do card -->
            </div>

            

        </div> <!-- fimd a div centralizar -->
    </div>
    <div class="faixa-rodape">
        <div class="centralizar">
            <div class="conteudo-faixa">
                <ul class="list-inline">
                    <li class="item-link faixa-item">
                        <a href="/en"><i class="icon-desktop"></i>Versão completa do site</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include BASE_URL . '/includes/footer.inc.php';?>