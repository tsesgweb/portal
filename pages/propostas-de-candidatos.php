<?php
include 'config.inc.php';
$titulo = 'Propostas de governo dos candidatos ao cargo de Presidente da República';
$asideinterna = true;
$tags = true;
$candidaturas = true;
include BASE_URL . '/includes/header.inc.php';
?>
<section id="texto-conteudo">
    <p>As propostas constantes da tabela abaixo foram retiradas do <a href="http://www.tse.jus.br/eleicoes/eleicoes-2018/divulgacandcontas#/">Sistema
        DivulgaCandContas</a>, que pode ser acessado por qualquer cidadão. Nesse Sistema, também estão disponíveis para consulta informações sobre prestação de contas dos candidatos, estatísticas de candidaturas, doadores e fornecedores de campanhas,
        além de outros dados eleitorais.</p>
    <div class="table-responsive">
        <table class="table table-hover grid listing" id="candidatos">
            <thead>
                <tr>
                    <th>Nome da urna</th>
                    <th>Nº</th>
                    <th>Situação</th>
                    <th>Sigla</th>
                    <th>Partido/Coligação</th>
                    <th>Proposta de Governo</th>
                </tr>
            </thead>
        </table>
    </div>
</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>