<?php
include('config.inc.php');
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = 'Rádio interna';
$compartilhar         = false;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
$destaquenoticia      = false;
$asidenoticiaradio    = true;
$internanoticia       = true;
$url                  = 'https://www.tse.jus.br/@@get_lista_noticias_categoria?subject=Elei%C3%A7%C3%B5es%20(2020)&sort=date%3AD%3AL%3Ad1';
$data                 = file_get_contents($url);
$outrasNoticias       = json_decode($data);
$porcentagem = 0;
include BASE_URL . '/includes/header.inc.php';
include BASE_URL.'/includes/noticias/navegacao-data.inc.php';
?>
<div class="conteudo-principal">
  <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum provident
    ducimus corrupti earum asperiores minima, hic, modi quisquam saepe nihil
    nobis, quas fuga assumenda laboriosam expedita quae cumque dolorum minus.
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quis
    voluptates amet culpa eligendi natus, vitae non ratione quidem tempore qui
    corrupti repudiandae exercitationem placeat facere repellat modi blanditiis
    iusto.
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut in temporibus
    quos quibusdam ad veniam non aperiam unde molestiae alias nam accusantium
    voluptate, aliquid distinctio? Id laudantium distinctio voluptatem corporis!
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque perferendis
    molestias accusantium, facilis recusandae ex sequi quis velit, totam minima
    voluptate aut quam nesciunt! Beatae, perferendis. Eligendi sapiente laborum
    maiores.
  </p>
  <footer class="conteudo-principal-aviso" role="alert">
    <div class="aviso-icone"><img src="assets/imagens/noticias/aviso.svg" alt="aviso"></div>
    <div class="aviso-conteudo">
    Este conteúdo é produzido pelo Núcleo de Imprensa da Assessoria de
    Comunicação do TSE. Sua reprodução é permitida mediante a citação da fonte.
    <br />
    Atendimento aos jornalistas: <strong>imprensa@tse.jus.br</strong>.
    </div>
    
  </footer>
</div>
<?php include BASE_URL . '/includes/footer.inc.php'; ?>
