<?php
include 'config.inc.php';
$asideinterna   = false;
$asidenoticia   = false;
$titulo         = 'Conexão Eleitoral: TSE inaugura exposição sobre diplomação na República brasileira';
$compartilhar   = false;
$tags           = false;
$gestor         = false;
$ocultartitulo  = true;
$maisvisitados  = false;
$relacionadas   = false;
$internanoticia = true;
include BASE_URL . '/includes/header.inc.php';
?>
<div class="noticia__conteudo template-audioradio">
  <div class="noticia__linha">
    <section id="texto-conteudo" class="texto-noticias-internas">
      <div class="tab-content sem-galeria">
        <div role="tabpanel" class="tab-pane active" id="ancora-1"></div>
        <div role="tabpanel" class="tab-pane" id="ancora-2"></div>
        <div role="tabpanel" class="tab-pane" id="ancora-3"></div>
        <div role="tabpanel" class="tab-pane" id="ancora-4"></div>
      </div>
      <?php include BASE_URL . '/includes/noticias/paragrafo-importante.inc.php';?>
      <?php include BASE_URL . '/includes/noticias/aviso.inc.php';?>

    </section>
    <aside id="coluna-lateral-noticias" class="lateral nao-imprimir ancora-sem-conteudo">
      <h2 class="sr-only">Coluna relacionada a rádio</h2>
      <div class="portletWrapper"
        data-portlethash="706c6f6e652e7269676874636f6c756d6e0a636f6e746578740a2f706f7274616c6a652f7473652f696d7072656e73612f726164696f0a756c74696d61732d64612d726164696f"
        id="portletwrapper-706c6f6e652e7269676874636f6c756d6e0a636f6e746578740a2f706f7274616c6a652f7473652f696d7072656e73612f726164696f0a756c74696d61732d64612d726164696f">
        <div class="lateral__ultimas">
          <header class="lateral__ultimas-header">
            <h4 class="lateral__ultimas-title">
              Últimas da rádio
            </h4>
          </header>
          <article class="lateral__ultimas-items">
            <figure class="ultimas-imagem"><img src="https://picsum.photos/274/147"
                alt="Sessão plenária do TSE em 16.10.2014"></figure>
            <h5 class="ultimas-titulo"><a
                href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Novembro/audio-de-teste-da-radio"
                title="Link: Áudio de teste da rádio">
                Áudio de teste da rádio
              </a></h5>
          </article>
          <article class="lateral__ultimas-items">
            <figure class="ultimas-imagem"><img src="https://picsum.photos/274/147" alt="Titulo expo abertura"></figure>
            <h5 class="ultimas-titulo"><a
                href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Agosto/lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua"
                title="Link: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
              </a></h5>
          </article>
          <article class="lateral__ultimas-items">
            <figure class="ultimas-imagem"><img src="https://picsum.photos/274/147">
            </figure>
            <h5 class="ultimas-titulo"><a
                href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Junho/aberta-consulta-publica-sobre-aplicacao-das-resolucoes-do-tse-nas-eleicoes-2020-04-06-2021-12-48-00"
                title="Link: Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020">
                Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020
              </a></h5>
          </article>
          <article class="lateral__ultimas-items">
            <figure class="ultimas-imagem"><img src="https://picsum.photos/274/147">
            </figure>
            <h5 class="ultimas-titulo"><a
                href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Junho/aberta-consulta-publica-sobre-aplicacao-das-resolucoes-do-tse-nas-eleicoes-2020-04-06-2021-12-48-00"
                title="Link: Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020">
                Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020
              </a></h5>
          </article>
        </div>
      </div>
      <div class="portletWrapper"
        data-portlethash="706c6f6e652e7269676874636f6c756d6e0a636f6e746578740a2f706f7274616c6a652f7473652f696d7072656e73612f726164696f0a70726f6772616d6173"
        id="portletwrapper-706c6f6e652e7269676874636f6c756d6e0a636f6e746578740a2f706f7274616c6a652f7473652f696d7072656e73612f726164696f0a70726f6772616d6173">
        <div class="portletWrapper">
          <header class="mini-banners__header">
            <h4 class="mini-banners__title">
              Playlist
            </h4>
          </header>
          <div class="mini-banners">
            <div class="radio-lista radio-lista-01">
              <div class="radio-lista-body"><a class="btn btn-link stretched-link"
                  href="https://portalhomologa.tse.jus.br/tse/imprensa/radio?program=diario-das-eleicoes">
                  Diário das Eleições
                </a></div>
            </div>
            <div class="radio-lista radio-lista-02">
              <div class="radio-lista-body"><a class="btn btn-link stretched-link"
                  href="https://portalhomologa.tse.jus.br/tse/imprensa/radio?program=conexao-eleitoral">
                  Conexão eleitoral
                </a></div>
            </div>
            <div class="radio-lista radio-lista-03">
              <div class="radio-lista-body"><a class="btn btn-link stretched-link"
                  href="https://portalhomologa.tse.jus.br/tse/imprensa/radio?program=por-dentro-da-justica-eleitoral">
                  Por dentro da Justiça Eleitoral
                </a></div>
            </div>
            <div class="radio-lista radio-lista-04">
              <div class="radio-lista-body"><a class="btn btn-link stretched-link"
                  href="https://portalhomologa.tse.jus.br/tse/imprensa/radio?program=sessao-plenaria">
                  Sessão Plenária
                </a></div>
            </div>
            <div class="radio-lista radio-lista-05">
              <div class="radio-lista-body"><a class="btn btn-link stretched-link"
                  href="https://portalhomologa.tse.jus.br/tse/imprensa/radio?program=teste-de-programa">
                  Teste de programa
                </a></div>
            </div>
          </div>
        </div>




      </div>
    </aside>
    <?php include BASE_URL . '/includes/noticias/barra-ferramentas-noticias.inc.php';?>
  </div>
</div>

<?php include BASE_URL . '/includes/footer.inc.php';?>