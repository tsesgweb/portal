<?php
$data_mais_lidas = file_get_contents(BASE_URL."/includes/noticias/conteudo.json");
$mais_lidas = json_decode($data_mais_lidas);
array_shift($mais_lidas);
?>
<div class="portletWrapper">
		<div class="lateral__mais-lidas">
			<div class="lateral__mais-lidas-header">
				<h4 class="lateral__mais-lidas-title">Mais lidas</h4>
			</div>
			<div class="lateral__mais-lidas-body owl-carousel owl-theme">
				<div class="lateral__mais-lidas-item">
					<?php
				$count = 1;
				foreach ($mais_lidas as $key => $noticia): ?>
					<div class="item-carousel">
						<div class="item-count"><span><?= $key+1; ?></span></div>
						<p><a href="<?= $noticia->url; ?>"><?= $noticia->titulo?></a></p>
					</div>
					<?php 
					if($count++ % 3 === 0 && count($mais_lidas) >= $count):?>
				</div>
				<div class="lateral__mais-lidas-item">
					<?php
						endif;
						endforeach;								   
					?>
				</div>
			</div>
		</div>
	</div>