<section id="principais-assuntos">
<div class="principais-assuntos__conteudo">
  <h2>Principais assuntos</h2>
    <div class="principais-assuntos__linha">  
  <ul class="nav nav-tabs" id="abas-principais-assuntos" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="assunto-1-tab" data-toggle="tab" href="#assunto-1" role="tab"
        aria-controls="assunto-1" aria-selected="true">Série: Ano não eleitoral</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="assunto-2-tab" data-toggle="tab" href="#assunto-2" role="tab" aria-controls="assunto-2"
        aria-selected="false">Biometria</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="assunto-3-tab" data-toggle="tab" href="#assunto-3" role="tab" aria-controls="assunto-3"
        aria-selected="false">Teste público de segurança</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="assunto-4-tab" data-toggle="tab" href="#assunto-4" role="tab" aria-controls="assunto-4"
        aria-selected="false">Mulheres na política</a>
    </li>
  </ul>
  <div class="tab-content" id="abas-principais-assuntosContent">
    <div class="tab-pane fade show active" id="assunto-1" role="tabpanel" aria-labelledby="assunto-1-tab">
      <div class="conteudo-assuntos">
        <?php
          include BASE_URL . '/includes/noticias/home/lista-assuntos.inc.php';
          include BASE_URL . '/includes/noticias/home/banner-assuntos.inc.php';
        ?>
      </div>
    </div>
    <div class="tab-pane fade" id="assunto-2" role="tabpanel" aria-labelledby="assunto-2-tab">
      <div class="conteudo-assuntos">
        <?php
          include BASE_URL . '/includes/noticias/home/lista-assuntos.inc.php';
        ?>
      </div>
    </div>
    <div class="tab-pane fade" id="assunto-3" role="tabpanel" aria-labelledby="assunto-3-tab">
      <div class="conteudo-assuntos">
        <?php
          include BASE_URL . '/includes/noticias/home/lista-assuntos.inc.php';
        ?>
      </div>
    </div>
    <div class="tab-pane fade" id="assunto-4" role="tabpanel" aria-labelledby="assunto-4-tab">
      <div class="conteudo-assuntos">
        <?php
          include BASE_URL . '/includes/noticias/home/lista-assuntos.inc.php';
          include BASE_URL . '/includes/noticias/home/banner-assuntos.inc.php';
        ?>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>