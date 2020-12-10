<?php 
$radioCards = [
  ['name'=> 'Conexão Eleitoral', 'color'=> 'verde-escuro', 'link'=> 'http://www.tse.jus.br/imprensa/tv-1/conexao-eleitoral'],
  ['name'=> 'Por dentro da Justiça Eleitoral', 'color'=> 'amarelo', 'link'=> 'http://www.tse.jus.br/justica-eleitoral'],
  ['name'=> 'Notícias', 'color'=> 'verde', 'link'=> 'http://www.tse.jus.br/imprensa/noticias-tse'],
  ['name'=> 'Decisões do Plenário', 'color'=> 'vermelho', 'link'=> 'http://www.tse.jus.br/imprensa/tv-1/decisoes-do-plenario'],
];
?>


<div class="portletWrapper">
      <div class="radio-lista radio-lista-<?= $card['color'] ?>">
          <div class="radio-lista-body"><a href="<?= $card['link']?>" class="btn btn-link stretched-link">
          <?= $card['name'] ?>
          </a>
          </div>
        </div>
     </div>	