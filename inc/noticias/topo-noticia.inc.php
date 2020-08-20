<?php 
$ocultartitulo = true;
$noticias = [
  [
  "img" =>
'https://placeimg.com/600/310/tech', "tag"=> 'destaque', "title"=> "Conheça a
logo das Eleições Municipais de 2020, diversidade é o tema central",
"description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A
fugiat dolore adipisci repellat consequuntur, voluptate qui nisi. Minus corrupti
eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut, alias.' ], [ "img"
=> 'https://placeimg.com/600/310/any', "tag"=> 'noticia', "title"=> "Decisões do
Plenário: TSE arquiva ação contra Fernando Haddad por suposto abuso de poder
político", "description" => 'Lorem ipsum dolor sit amet consectetur, adipisicing
elit. A fugiat dolore adipisci repellat consequuntur, voluptate qui nisi. Minus
corrupti eveniet sint natus eum fugit dolores, fuga quaerat animi. Ut, alias.'
], ]; ?>
<section id="imprensa" class="imprensa__conteudo">
  <div class="imprensa__linha">
    <header class="noticia-interna-cabecalho">
      <h2 class="noticia-interna-titulo">
        Conexão Eleitoral: TSE inaugura exposição sobre diplomação na República
        brasileira
      </h2>
      <p class="noticia-interna-descricao">
        De cara nova, programa é exibido pela TV Justiça nas segundas-feiras, às
        19h30
      </p>      
      <figure class="noticia-interna-imagem">
        <img
          class="img-responsive"
          src="../../assets/imagens/noticias/foto-destaque.png"
          alt="foto destaque"
        />
      </figure>
      <div class="noticia-interna-autor">
        Por <strong>Sebastian Abreu </strong> e
        <strong>Túlio Maravilha</strong> / Revisão:
        <strong>Keisuke Honda - TSE</strong>
      </div>
      <div class="noticia-interna-barra">
        <div class="noticia-interna-data">
          17/01/2020 13:30 - Atualizado em 19/01/2020 - 18:30
        </div>
        <div class="noticia-interna-compartilhar">
          <?php include __DIR__ .'../../share.inc.php'?>
        </div>
      </div>
    </header>    
  </div>
</section>
