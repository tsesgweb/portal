<?php 
$url_mais_lidas         = 'http://www.tse.jus.br/@@get_lista_noticias';
$data_mais_lidas    = file_get_contents($url_mais_lidas);
$mais_lidas     = json_decode($data_mais_lidas);
array_shift($mais_lidas);
?>
<aside id="coluna-lateral-noticias" class="lateral nao-imprimir">
	<h2 class="sr-only">Coluna relacionada a notícias</h2>
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
	<div class="portletWrapper">
		<div class="portlet-card">
			<div class="portlet-card-header ">
				Serie: Ano não eleitoral
			</div>
			<ul class="portlet-list-group">
				<li class="portlet-list-group-item"><a href="#">TSE trabalha na organização das Eleições Municipais de
						2020</a></li>
				<li class="portlet-list-group-item"><a href="#">Compra de novas urnas e teste público de Segurança estão
						no Calendário de trabalho do TSE</a></li>
				<li class="portlet-list-group-item"><a href="#">Grupos de trabalho avaliam e propõem ações para
						modernizar procedimentos das eleições</a></li>
			</ul>
			<div class="portlet-card-footer">
				<a href="#">mais de Serie: Ano não eleitoral
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14">
						<defs>
							<style>
								.a {
									fill: #1b305a;
								}
							</style>
						</defs>
						<path class="a"
							d="M19,7a.986.986,0,0,1-1,.966H3.4l4.525,4.393a.939.939,0,0,1,0,1.376,1,1,0,0,1-.7.266.962.962,0,0,1-.7-.29L.3,7.676a.911.911,0,0,1,0-1.352L6.525.29A1.021,1.021,0,0,1,7.95.29a.939.939,0,0,1,0,1.376L3.4,6.034H18A.986.986,0,0,1,19,7Z"
							transform="translate(19 14) rotate(180)" />
					</svg></a>
			</div>
		</div>
	</div>
	<div class="portletWrapper">
		<div class="portlet-card">
			<div class="portlet-card-header">
				Biometria
			</div>
			<ul class="portlet-list-group">
				<li class="portlet-list-group-item">
					<a href="#">Programa Minuto da Checagem explica o que é “deepfake”</a></li>
				<li class="portlet-list-group-item">
					<a href="#">Compra de novas urnas e teste público de Segurança estão
						no Calendário de trabalho do TSE</a></li>
				<li class="portlet-list-group-item">
					<a href="#">Grupos de trabalho avaliam e propõem ações para
						modernizar procedimentos das eleições</a></li>
			</ul>
			<div class="portlet-card-footer">
				<a href="#">mais de Biometria
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14">
						<defs>
							<style>
								.a {
									fill: #1b305a;
								}
							</style>
						</defs>
						<path class="a"
							d="M19,7a.986.986,0,0,1-1,.966H3.4l4.525,4.393a.939.939,0,0,1,0,1.376,1,1,0,0,1-.7.266.962.962,0,0,1-.7-.29L.3,7.676a.911.911,0,0,1,0-1.352L6.525.29A1.021,1.021,0,0,1,7.95.29a.939.939,0,0,1,0,1.376L3.4,6.034H18A.986.986,0,0,1,19,7Z"
							transform="translate(19 14) rotate(180)" />
					</svg></a>
			</div>
		</div>
	</div>
	<div class="portletWrapper">
		<div class="portlet-card">
			<div class="portlet-card-header">
				TPS 2020
			</div>
			<ul class="portlet-list-group">
				<li class="portlet-list-group-item">
					<a href="#">Saiba tudo sobre a segurança do processo eleitoral no Portal da JE</a>
				</li>
				<li class="portlet-list-group-item">
					<a href="#">Relatório final do TPS 2019 já está disponível para consulta</a>
				</li>
				<li class="portlet-list-group-item">
					<a href="#">TSE recebe visita de cortesia do embaixador da Coreia do Sul no Brasil</a>
				</li>
				<li class="portlet-list-group-item">
					<a href="#">TSE encerra Teste Público de Segurança 2019 do Sistema Eletrônico de Votação</a>
				</li>
			</ul>
			<div class="portlet-card-footer">
				<a href="#">mais de TPS 2020
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14">
						<defs>
							<style>
								.a {
									fill: #1b305a;
								}
							</style>
						</defs>
						<path class="a"
							d="M19,7a.986.986,0,0,1-1,.966H3.4l4.525,4.393a.939.939,0,0,1,0,1.376,1,1,0,0,1-.7.266.962.962,0,0,1-.7-.29L.3,7.676a.911.911,0,0,1,0-1.352L6.525.29A1.021,1.021,0,0,1,7.95.29a.939.939,0,0,1,0,1.376L3.4,6.034H18A.986.986,0,0,1,19,7Z"
							transform="translate(19 14) rotate(180)" />
					</svg></a>
			</div>
		</div>
	</div>
</aside>