<?php
include __DIR__ . '/inc/config.inc.php';
$asideinterna = false;
$asidenoticia = true;
$titulo = 'Notícias';
$compartilhar = false;
$tags = false;
$gestor = false;
$maisvisitados = false;
$paginacao = true;
include __DIR__ . '/inc/header.inc.php';
?>
    <div id="navegacao-data-noticias">
        <form method="GET" name="navegacao" class="form-inline" id="form-navagacao-noticias" action="http://www.tse.jus.br/imprensa">
            <fieldset>
                <legend class="sr-only">Pesquisar</legend>
                <div class="form-group">
                    <label for="ano-noticias" class="sr-only">Ano</label><select class="form-control" id="ano-noticias" name="ano"><option value="">ano</option>
<option selected="" value="2019">
                            2019
                        </option>
<option value="2018">
                            2018
                        </option>
<option value="2017">
                            2017
                        </option>
<option value="2016">
                            2016
                        </option>
<option value="2015">
                            2015
                        </option>
<option value="2014">
                            2014
                        </option>
<option value="2013">
                            2013
                        </option>
<option value="2012">
                            2012
                        </option>
<option value="2011">
                            2011
                        </option></select>
                </div>
                <div class="form-group">
                    <label for="mes-noticias" class="sr-only">Mês</label><select class="form-control" id="mes-noticias" name="mes"><option value="">mês</option>
<option value="Janeiro">Janeiro</option>
<option value="Fevereiro">Fevereiro</option>
<option value="Marco">Março</option>
<option value="Abril">Abril</option>
<option value="Maio">Maio</option>
<option value="Junho">Junho</option>
<option value="Julho">Julho</option>
<option value="Agosto">Agosto</option>
<option value="Setembro">Setembro</option>
<option value="Outubro">Outubro</option>
<option value="Novembro">Novembro</option>
<option value="Dezembro">Dezembro</option>
</select>
                </div>
                <button class="btn btn-primary" type="submit" name="formData"><span>Pesquisar</span></button>
            </fieldset>
        </form>
    </div>
    <div id="lista-noticias" class="lista-resultados">
        <article class="lr-container media lr-imagem-destaque">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/eleitor-deve-ficar-atento-ao-chamado-da-justica-eleitoral-para-o-cadastramento-biometrico" title="Eleitor deve ficar atento ao chamado da Justiça Eleitoral para o cadastramento biométrico">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/imagens/tre-pr-biometria/@@images/75566433-1d75-4578-b815-855e96f9935e.jpeg" class="img-responsive" alt="tre-pr biometria"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/eleitor-deve-ficar-atento-ao-chamado-da-justica-eleitoral-para-o-cadastramento-biometrico" title="Eleitor deve ficar atento ao chamado da Justiça Eleitoral para o cadastramento biométrico">
                                            Eleitor deve ficar atento ao chamado da Justiça Eleitoral para o cadastramento biométrico
                                        </a></h3>
                <p class="lr-descricao lr-icone">
                    Coleta obrigatória das digitais ocorrerá em 1.650 municípios de 15 estados brasileiros até 2020
                </p>
            </div>
        </article><span class="lr-data lr-icone">
                                    16.04.2019
                                </span>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/identidade-digital-confira-as-principais-duvidas-sobre-o-documento-e-o-programa-icn" title="Identidade Digital: confira as principais dúvidas sobre o documento e o programa ICN">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/tre-mt-presitente-dni/@@images/eb9c6f4c-ce92-4877-ba77-22a81bc8afc7.jpeg" class="img-responsive" alt="Presitente DNI"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/identidade-digital-confira-as-principais-duvidas-sobre-o-documento-e-o-programa-icn" title="Identidade Digital: confira as principais dúvidas sobre o documento e o programa ICN">
                                                    Identidade Digital: confira as principais dúvidas sobre o documento e o programa ICN
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Expectativa é que a nova identidade comece a ser emitida no segundo semestre deste ano
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/emissao-de-gru-para-pagamento-de-multa-eleitoral-esta-disponivel-no-portal-do-tse" title="Emissão de GRU para pagamento de multa eleitoral está disponível no Portal do TSE">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/gru/@@images/fa5d9685-e38d-4e4f-8cb8-2c915c2201dd.jpeg" class="img-responsive" alt="gru"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/emissao-de-gru-para-pagamento-de-multa-eleitoral-esta-disponivel-no-portal-do-tse" title="Emissão de GRU para pagamento de multa eleitoral está disponível no Portal do TSE">
                                                    Emissão de GRU para pagamento de multa eleitoral está disponível no Portal do TSE
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Após o pagamento do débito, o eleitor deve apresentar o respectivo comprovante nos cartórios eleitorais para regularizar a situação
                </p>
            </div>
        </article><span class="lr-data lr-icone">
                                    15.04.2019
                                </span>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/servicos-da-justica-eleitoral-sao-gratuitos-e-estao-disponiveis-a-todos-os-cidadaos" title="Serviços da Justiça Eleitoral são gratuitos e estão disponíveis a todos os cidadãos">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/titulo-1551104977835/@@images/51a9dbf5-aa21-4e88-9718-b3437e31b622.jpeg" class="img-responsive" alt="título"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/servicos-da-justica-eleitoral-sao-gratuitos-e-estao-disponiveis-a-todos-os-cidadaos" title="Serviços da Justiça Eleitoral são gratuitos e estão disponíveis a todos os cidadãos">
                                                    Serviços da Justiça Eleitoral são gratuitos e estão disponíveis a todos os cidadãos
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Para emitir o título ou atualizar dados cadastrais, por exemplo, basta comparecer a um cartório eleitoral
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/prazos-processuais-no-tse-ficarao-suspensos-no-feriado-da-semana-santa" title="Prazos processuais no TSE ficarão suspensos no feriado da Semana Santa">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/nova-sede-do-tse-1325094960919/@@images/16488791-e237-4df8-a192-d10c5d1373af.jpeg" class="img-responsive" alt="Fachada da nova sede do TSE."></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/prazos-processuais-no-tse-ficarao-suspensos-no-feriado-da-semana-santa" title="Prazos processuais no TSE ficarão suspensos no feriado da Semana Santa">
                                                    Prazos processuais no TSE ficarão suspensos no feriado da Semana Santa
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Portaria publicada nesta sexta (12) regulamenta o funcionamento do Tribunal no período
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/brasileiros-no-exterior-que-nao-votaram-devem-justificar-ausencia-ao-retornar-ao-pais" title="Brasileiros no exterior que não votaram devem justificar ausência ao retornar ao país">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/imagens/tre-sp-imagem-justificativa-no-exterior/@@images/af17d65a-b98e-453b-98bd-6893a13e2459.jpeg" class="img-responsive" alt="Imagem com formulário de justificativa com passaporte"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/brasileiros-no-exterior-que-nao-votaram-devem-justificar-ausencia-ao-retornar-ao-pais" title="Brasileiros no exterior que não votaram devem justificar ausência ao retornar ao país">
                                                    Brasileiros no exterior que não votaram devem justificar ausência ao retornar ao país
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    O prazo é de 30 dias após a chegada ao Brasil. Processo pode ser iniciado pela Internet
                </p>
            </div>
        </article><span class="lr-data lr-icone">
                                    12.04.2019
                                </span>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/aplicacao-de-sancao-de-inelegibilidade-a-ex-governador-do-rj-e-destaque-do-decisoes-do-plenario" title="Aplicação de sanção de inelegibilidade a ex-governador do RJ é destaque do Decisões do Plenário">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/decisoes-do-plenario/@@images/256ef06f-f7e1-432d-be9b-1adab6a6de71.jpeg" class="img-responsive" alt="Decisões do Plenário"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/aplicacao-de-sancao-de-inelegibilidade-a-ex-governador-do-rj-e-destaque-do-decisoes-do-plenario" title="Aplicação de sanção de inelegibilidade a ex-governador do RJ é destaque do Decisões do Plenário">
                                                    Aplicação de sanção de inelegibilidade a ex-governador do RJ é destaque do Decisões do Plenário
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Programa é exibido pela TV Justiça aos sábados e domingos, às 17h, e também pode ser assistido na página da Justiça Eleitoral no YouTube
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/incorporacao-e-fusao-de-partidos-politicos-voce-conhece-a-diferenca" title="Incorporação e fusão de partidos políticos. Você conhece a diferença?">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/tre-go-filiacao-partidaria/@@images/b7d6672c-9096-4a70-bae5-83abfdfe7919.jpeg" class="img-responsive" alt="TRE-GO Filiação Partidária"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/incorporacao-e-fusao-de-partidos-politicos-voce-conhece-a-diferenca" title="Incorporação e fusão de partidos políticos. Você conhece a diferença?">
                                                    Incorporação e fusão de partidos políticos. Você conhece a diferença?
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Recentemente, o TSE aprovou a incorporação do PRP ao Patri. Agora, 34 partidos contam com registro na Justiça Eleitoral
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/emissao-da-identidade-digital-e-destaque-do-conexao-eleitoral-desta-semana" title="Emissão da Identidade Digital é destaque do Conexão Eleitoral desta semana">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/conexao-eleitoral/@@images/131f3f95-8c45-4a21-b10c-af6c817278a2.jpeg" class="img-responsive" alt="Conexão Eleitoral"></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/emissao-da-identidade-digital-e-destaque-do-conexao-eleitoral-desta-semana" title="Emissão da Identidade Digital é destaque do Conexão Eleitoral desta semana">
                                                    Emissão da Identidade Digital é destaque do Conexão Eleitoral desta semana
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    Programa de TV inédito vai ao ar às 21h desta sexta-feira (12)
                </p>
            </div>
        </article>
        <article class="lr-container media">
            <a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/partidos-tem-ate-30-de-abril-para-entregar-prestacoes-de-contas-de-2018" title="Partidos têm até 30 de abril para entregar prestações de contas de 2018">
                <figure class="lr-imagem media-left"><img src="http://www.tse.jus.br/imagens/fotos/fachada-do-tse-em-26-02-2018/@@images/e4b3da6d-4679-4e67-88ca-04e0157373f8.jpeg" class="img-responsive" alt="Fachada do TSE "></figure>
            </a>
            <div class="media-body">
                <h3 class="lr-titulo"><a href="http://www.tse.jus.br/imprensa/noticias-tse/2019/Abril/partidos-tem-ate-30-de-abril-para-entregar-prestacoes-de-contas-de-2018" title="Partidos têm até 30 de abril para entregar prestações de contas de 2018">
                                                    Partidos têm até 30 de abril para entregar prestações de contas de 2018
                                                </a></h3>
                <p class="lr-descricao lr-icone">
                    A não apresentação dessas informações à Justiça Eleitoral pode acarretar a suspensão de repasses do Fundo Partidário
                </p>
            </div>
        </article> 
        <?php $paginacao && include __DIR__ . '/inc/paginacao.inc.php';?>       
    </div>
<?php include __DIR__ . '/inc/footer.inc.php';?>