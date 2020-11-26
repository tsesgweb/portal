<?php
include('config.inc.php');
$subnivel = 'Conteúdo janela';
$titulo = 'iframe';
$asideinterna = false;
$coluna = false;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
<section id="texto-conteudo">
   <h3 class="sr-only">Conteúdo da página.</h3>
   <p>A Certidão de Quitação Eleitoral destina-se a atestar, conforme disciplinado pelo § 7º do art. 11 da
      <a class="external-link" href="http://www.tse.jus.br/hotSites/CatalogoPublicacoes/pdf/codigo_eleitoral_2012/TSE-Codigo-Eleitoral-2012-Web.pdf#page=336" target="_blank"></a>
      <a title="" href="http://www.tse.jus.br/legislacao/codigo-eleitoral/lei-das-eleicoes/lei-das-eleicoes-lei-nb0-9.504-de-30-de-setembro-de-1997" class="internal-link" target="_blank">
      <span class="external-link"></span>
      <span class="external-link">
      <span class="internal-link">
      <span class="internal-link">Lei nº 9.504, de 1997</span>
      </span>
      </span>
      </a>, a existência/inexistência de registro no histórico da inscrição (título) do interessado no cadastro eleitoral de restrição no que se refere à plenitude do gozo dos direitos políticos, ao regular exercício do voto, ao atendimento
      a convocações da Justiça Eleitoral para auxiliar os trabalhos relativos ao pleito, à inexistência de multas aplicadas, em caráter definitivo, pela Justiça Eleitoral e não remitidas, e à apresentação de contas de campanha eleitoral.
   </p>
   <p>
      <a class="external-link" href="http://www.tse.jus.br/institucional/sistemas/monitoramento-de-sistemas" target="_self" title="">Monitoramento do sistema de quitação eleitoral</a>.
   </p>
   <iframe src="http://divulgacandcontas.tse.jus.br/divulga" height="700" title="Monitoramento do sistema de quitação eleitoral"></iframe>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>