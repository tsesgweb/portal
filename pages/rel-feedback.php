<?php
include 'config.inc.php';
$titulo = 'Relatório de feedbacks';
$asideinterna = false;
$paginacao = true;
$compartilhar = false;
$tags = false;
$gestor = false;
include BASE_URL . '/includes/header.inc.php';
?>
<div id="filtro-feedback">
<form action="#" id="form-filtro-feedback">
  <div class="form-inline">
      <div class="form-group">
        <label for="feed-experiencia">Experiência</label>
        <input type="text" class="form-control" id="feed-experiencia">
      </div>
      <div class="form-group">
        <label for="feed-horario">Horário</label>
        <input type="text" class="form-control" id="feed-horario">
      </div>
      <div class="form-group">
        <label for="feed-navegador">Navegador</label>
        <input type="text" class="form-control" id="feed-navegador">
      </div>
      <div class="form-group">
        <label for="feed-dispositivo">Dispositivo</label>
        <input type="text" class="form-control" id="feed-dispositivo">
      </div>
  </div>
  <div class="form-inline">
      <div class="form-group">
        <label for="feed-tipo">Tipo de feedback</label>
        <input type="text" class="form-control" id="feed-tipo">
      </div>
      <div class="form-group">
        <label for="feed-data">Data</label>
        <input type="text" class="form-control" id="feed-data">
      </div>
      <div class="form-group">
        <label for="feed-url">URL</label>
        <input type="text" class="form-control" id="feed-url">
      </div>
      <div class="form-group">
        <label for="feed-responsavel">Responsável</label>
        <input type="text" class="form-control" id="feed-responsavel">
      </div>
  </div>
  <button class="btn btn-primary pull-right" type="submit">
  <span>Filtrar</span>
  </button>
</form>
</div>
<div id="tabela-feedbacks" class="table-responsive">
<p class="text-right">
  Baixar:
  <a href="#">PDF</a> |
  <a href="#">XLS</a>
</p>
<table class="table table-bordered">
  <caption class="sr-only">Relatório de feedbacks</caption>
  <thead>
      <tr>
        <th>Titulo</th>
        <th>Titulo</th>
        <th>Titulo</th>
        <th>Titulo</th>
        <th>Titulo</th>
        <th>Titulo</th>
      </tr>
  </thead>
  <tbody>
      <tr>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
      </tr>
      <tr>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
      </tr>
      <tr>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
      </tr>
      <tr>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
      </tr>
      <tr>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
        <td>Texto</td>
      </tr>
  </tbody>
</table>
</div>
<?php include BASE_URL . '/includes/footer.inc.php';?>