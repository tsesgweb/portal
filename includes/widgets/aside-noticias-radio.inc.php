<?php 
$radioCards = [
  ['name'=> 'Conexão Eleitoral', 'color'=> 'verde-escuro', 'link'=> 'http://www.tse.jus.br/imprensa/tv-1/conexao-eleitoral'],
  ['name'=> 'Por dentro da Justiça Eleitoral', 'color'=> 'amarelo', 'link'=> 'http://www.tse.jus.br/justica-eleitoral'],
  ['name'=> 'Notícias', 'color'=> 'verde', 'link'=> 'http://www.tse.jus.br/imprensa/noticias-tse'],
  ['name'=> 'Decisões do Plenário', 'color'=> 'vermelho', 'link'=> 'http://www.tse.jus.br/imprensa/tv-1/decisoes-do-plenario'],
  ['name'=> 'Decisões do Plenário', 'color'=> '', 'link'=> 'http://www.tse.jus.br/imprensa/tv-1/decisoes-do-plenario'],
];
?>
<aside id="aside-noticias"
  class="<?php $destaquenoticia || $destaqueradio ? print 'listagem' :print 'lateral' ;?> nao-imprimir">
  <h2 class="sr-only">Coluna relacionada a rádio</h2>
  <div class="portletWrapper">
    <div class="lateral__ultimas">
      <header class="lateral__ultimas-header">
        <h4 class="lateral__ultimas-title">
          Últimas da rádio
        </h4>
      </header>
      <article class="lateral__ultimas-items">
        <figure class="ultimas-imagem"><img
            src="https://www.tse.jus.br/imagens/fotos/sessao-plenaria-do-tse-em-02-09-2021-1630591181817/@@images/083d35d6-be78-4def-8fdb-472562ed0199.jpeg"
            alt="Titulo expo abertura"></figure>
        <h5 class="ultimas-titulo"><a
            href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Agosto/lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua"
            title="Link: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
          </a></h5>
      </article>
      <article class="lateral__ultimas-items">
        <figure class="ultimas-imagem"><img
            src="https://www.tse.jus.br/imagens/fotos/sessao-plenaria-do-tse-em-02-09-2021-1630591181817/@@images/083d35d6-be78-4def-8fdb-472562ed0199.jpeg">
        </figure>
        <h5 class="ultimas-titulo"><a
            href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Junho/aberta-consulta-publica-sobre-aplicacao-das-resolucoes-do-tse-nas-eleicoes-2020-04-06-2021-12-48-00"
            title="Link: Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020">
            Aberta consulta pública sobre aplicação das resoluções do TSE nas Eleições 2020
          </a></h5>
      </article>
      <article class="lateral__ultimas-items">
        <figure class="ultimas-imagem"><img
            src="https://www.tse.jus.br/imagens/fotos/sessao-plenaria-do-tse-em-02-09-2021-1630591181817/@@images/083d35d6-be78-4def-8fdb-472562ed0199.jpeg"
            alt="Justiça Eleitoral completa 89 anos: uma história de lutas e conquistas "></figure>
        <h5 class="ultimas-titulo"><a
            href="https://portalhomologa.tse.jus.br/tse/imprensa/radio/2021/Junho/tse-decide-em-sessoes-virtuais-37-processos-relativos-as-eleicoes-municipais-2020-04-06-2021-09-44-00"
            title="Link: TSE decide em sessões virtuais 37 processos relativos as eleições municipais 2020">
            TSE decide em sessões virtuais 37 processos relativos as eleições municipais 2020
          </a></h5>
      </article>
    </div>
  </div>
  <?php foreach ($radioCards as $card) : ?>
  <div class="portletWrapper">
    <div class="radio-lista radio-lista-<?= $card['color'] ?>">
      <div class="radio-lista-body"><a href="<?= $card['link']?>" class="btn btn-link stretched-link">
          <?= $card['name'] ?>
        </a>
      </div>
    </div>
  </div>
  <?php  endforeach ?>
  <?php include __DIR__ . '/navegue-por-temas.inc.php';?>
  <?php include __DIR__ . '/gestor-noticia.inc.php';?>
</aside>