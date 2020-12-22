<?php
include 'config.inc.php';
$titulo        = 'Conteúdos da categoria "Eleitor"';
$asideinterna  = false;
$paginacao     = true;
$tags          = false;
$gestor        = false;
include BASE_URL . '/includes/header.inc.php';
?>
<div id="conteudos-categoria" class="lista-resultados lr-borda">
   <?php for ($i = 0; $i < 5; $i++) {
    ?>
       <article class="lr-container">
      <h3 class="lr-titulo">
         <a href="#">Publicadas no DJE as resoluções sobre as eleições municipais de 2016</a>
      </h3>
      <p class="lr-descricao lr-icone">O ministro Gilmar mendes, definiu, em 16 de maio, quatro sessões plenárias exclusivas - nos dias 6, 7 e 8 de junho - destinadas ao julgamento da ação. O ministro Gilmar mendes, definiu, em 16 de maio, quatro sessões plenárias exclusivas
         - nos dias 6, 7 e 8 de junho - destinadas ao julgamento da ação.
      </p>
      <p class="lr-link">
         <a href="#">www.tse.jus.br</a>
      </p>
      <ul class="lr-tags list-inline">
         <li>Tags:</li>
         <?php
foreach ($arrayTags as $tag) {
        echo "<li><a href='#'>$tag</a></li>";
    }
    ?>
      </ul>
   </article><?php
}?>
</div>
<?php include BASE_URL . '/includes/footer.inc.php';?>