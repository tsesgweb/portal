<?php
$temas = array(
  array("tema"=> "Eleições", "icon"=> "partidos.svg", "links"=>
    array(
      array("link"=> "http://www.tse.jus.br/eleicoes/eleicoes-2020/prestacao-de-contas/financiamento-coletivo", "linkname"=> "Financiamento Coletivo"),
      array("link"=> "http://www.tse.jus.br/eleicoes/eleicoes-2020/eleicoes-2020", "linkname"=> "Eleições 2020"),
      array("link"=> "http://www.tse.jus.br/eleicoes/eleicoes-2018/perguntas-frequentes-sobre-as-eleicoes", "linkname"=> "Perguntas frequentes")
    )
    ),
  array("tema"=> "Partidos", "icon"=> "eleicoes.svg", "links"=>
    array(
      array("link"=> "http://www.tse.jus.br/servicos-judiciais/audiencias-publicas/audiencia-publica-resolucao-de-financas-partidarias-e-prestacao-de-contas-anual", "linkname"=> "Audiência pública"),
      array("link"=> "http://www.tse.jus.br/partidos/contas-partidarias", "linkname"=> "Contas Partidárias"),
      array("link"=> "http://www.tse.jus.br/partidos/filiacao-partidaria", "linkname"=> "Filiação Partidária")
      )
    ),
    array("tema"=> "Outros destaques", "icon"=> "outros-destaques.svg", "links"=>
    array(
      array("link"=> "http://www.tse.jus.br/servicos-judiciais/sessoes-de-julgamento/pautas-de-julgamento", "linkname"=> "Pauta"),
      array("link"=> "http://www.tse.jus.br/servicos-judiciais/sessoes-de-julgamento/sessao-plenaria-on-line-1", "linkname"=> "Sessão Plenária ao vivo"),
      array("link"=> "http://www.tse.jus.br/servicos-judiciais/processos/processos-julgados", "linkname"=> "Processos Julgados")
    )
    ),
    array("tema"=> "Agenda do presidente", "icon"=> "agenda-do-presidente.svg", "links"=>
  array(
    array("link"=> "https://www.tse.jus.br/o-tse/ministros/agenda/agenda-do-ministro-alexandre-de-moraes", "linkname"=> "Compromissos")
    )
  )
);
?>
<section id="destaque-tema">
  <div class="destaque-tema__conteudo">
    <div class="destaque-tema__linha">
      <?php foreach ($temas as $tema) :?>     
      <div class="destaque-tema-item">
        <div class="destaque-tema__card">
          <div class="destaque-tema__card-header">
            <img
              src="assets/imagens/home/<?= $tema['icon']?>"
              width="54"
              height="54"
              alt="<?= $tema['tema']?>"
            />
            <span><?= $tema['tema']?></span>
          </div>
          <ul class="destaque-tema__list">
            <?php foreach ($tema['links'] as $link) :?>
              <li class="destaque-tema__list-item">
              <a href="<?= $link['link']?>" class="destaque-temas__lista_link"><?= $link['linkname']?></a>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>