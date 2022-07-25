<?php
include 'config.inc.php';
$titulo = '';
$asideinterna = false;
$compartilhar = false;
$maisvisitados = false;
include BASE_URL . '/includes/header.inc.php';
// include BASE_URL .'/includes/imagem-topo.inc.php'; 
?>
<main id="desincompatibilizacao" class="">
  <h2>Desincompatibilização e afastamentos</h2>
  <div class="main__conteudo">
    <div class="main__linha">
      <section class="conteudo">
        <div class="imagem-principal">
          <img src="assets/imagens/paginas/desincompatibilizacao/desincompatibilizacao-e-afastamentos.png"
            alt="Desincompatibilização e afastamentos">
        </div>
        <p>Sed non urna elit. Duis dapibus lobortis fringilla. Sed nec turpis id lacus tempor faucibus. Pellentesque
          habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed scelerisque ante id
          malesuada rutrum. Nunc lobortis condimentum turpis a ultrices. Phasellus accumsan, eros eu ultrices volutpat,
          nibh magna aliquet sem, ut vehicula metus odio eget nibh. Quisque gravida, magna non facilisis vestibulum,
          enim sem auctor mi, sit amet eleifend est nulla sit amet enim.</p>
        <div class="cargos">
          <form>
            <div class="main__conteudo">
              <div class="main__linha">
                <div class="form-group cargo-ocupado">
                  <label for="cargo-ocupado" class="label">Cargo ocupado</label>
                  <select class="form-control" id="cargo-ocupado">
                    <option>Cargo ocupado</option>
                    <option>Presidente/Vice-presidente</option>
                    <option>Governador/Vice-governador</option>
                    <option>Senador</option>
                    <option>Deputado federal</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="main__conteudo">
              <div class="main__linha">
                <div class="form-group cargo-pretendido">
                  <label for="cargo-pretendido" class="label">Cargo pretendido</label>
                  <select class="form-control" id="cargo-pretendido">
                     <option>Cargo pretendido</option>
                     <option>Presidente/Vice-presidente</option>
                     <option>Governador/Vice-governador</option>
                     <option>Senador</option>
                     <option>Deputado federal</option>
                  </select>
                </div>
                <div class="form-group buscar">
                  <button type="submit" class="btn"><span class="esconder">Submit</span></button>
                </div>
              </div>
            </div>
          </form>

          <div class="card painel-cargos">
            <div class="card-header">
              <div class="titulo-painel">Cargo ocupado</div>
              <div class="atualizacao">Atualizado em: 1/2/2022</div>
            </div>
            <div class="card-body">
              <div class="main__linha">
                <div class="main">
                  <h3 class="card-title">Procurador</h3>
                  <p class="card-text">Descrição do cargo pretendido...Descrição do cargo pretendido... do cargo
                    pretendido...Descrição do cargo pretendido...Descrição do cargo pretendido...Descrição do cargo
                    pretendido...</p>

                  <div class="card painel-interno">
                    <div class="card-header">
                      <div class="titulo-painel">Cargo pretendido</div>
                      <div class="atualizacao">Atualizado em: 1/2/2022</div>
                    </div>
                    <div class="card-body">
                      <p>Tipo de eleição: <span class="tipo-eleicao">Eleições gerais</span></p>
                      <h3 class="card-title">Governador/Vice-governador</h3>
                      <p class="card-text">Descrição do cargo pretendido...</p>

                      <div class="info">
                        <div class="prazo box">
                          <span class="rotulo">Prazo de afastamento: </span>
                          <span class="valor">6 meses</span>
                        </div>
                        <div class="tipo-afastamento box">
                          <span class="rotulo">Tipo afastamento: </span>
                          <span class="valor">
                            <ul class="lista">
                              <li class="item">definitivo</li>
                              <li class="item">definitivo</li>
                              <li class="item">definitivo</li>
                            </ul>
                          </span>
                        </div>
                        <div class="remuneracao box">
                          <span class="rotulo">Remuneração: </span>
                          <span class="valor">Sem anotação</span>
                        </div>
                        <div class="legislacao box">
                          <span class="rotulo">Legislação: </span>
                          <span class="valor">6 meses</span>
                        </div>
                        <div class="precedentes box">
                          <span class="rotulo">Precedentes: </span>
                          <span class="valor">6 meses</span>
                        </div>
                        <div class="observacoes-precedentes box">
                          <span class="rotulo">Observações dos precedentes: </span>
                          <span class="valor">6 meses</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="links">
                  <h4 class="titulo-links">Links</h4>
                  <ul class="lista">
                    <li class="item"><a href="#" class="link">Pesquisa de jurisprudência</a></li>
                    <li class="item"><a href="#" class="link">Jurisprudência por assunto</a></li>
                    <li class="item"><a href="#" class="link">Jurisprudência por assunto (Pesquisa)</a></li>
                  </ul>

                  <h4 class="titulo-links">Ver também</h4>
                  <ul class="lista">
                    <li class="item"><a href="#" class="link">Consultor jurídico</a></li>
                    <li class="item"><a href="#" class="link">Defensor público</a></li>
                    <li class="item"><a href="#" class="link">Promotor de justiça</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>
      <aside class="aside-links">
        <div class="faq">
          <h3 class="titulo">FAQ</h3>
          <ul class="lista">
            <li class="item"><a href="#" class="link">O que é desincompatibilização?</a></li>
            <li class="item"><a href="#" class="link">Por que devo me desincompatibilizar?</a></li>
            <li class="item"><a href="#" class="link">Candidatura em outra cidade: preciso me desincompatibilizar?</a>
            </li>
            <li class="item"><a href="#" class="link">Como posso provar meu afastamento?</a></li>
            <li class="item"><a href="#" class="link">Quais documentos serverm de prova?</a></li>
            <li class="item"><a href="#" class="link">O que é o afastamento de fato?</a></li>
          </ul>
        </div>
        <div class="botao-pesquisa">
          <a href="#" class="btn link">Solicite uma pesquisa de jurisprudência</a>
        </div>
        <div class="ultimas-atualizacoes">
          <h3 class="titulo">Últimas atualizações</h3>
          <ul class="lista">
            <li class="item"><a href="#" class="link">Log 001</a></li>
            <li class="item"><a href="#" class="link">Log 001</a></li>
            <li class="item"><a href="#" class="link">Log 001</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</main>
<?php include BASE_URL . '/includes/footer.inc.php';?>