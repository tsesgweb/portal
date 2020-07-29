<?php
include __DIR__ . '/inc/config.inc.php';
$asideinterna         = false;
$asidenoticia         = false;
$titulo               = 'Notícias';
$compartilhar         = false;
$tags                 = false;
$gestor               = false;
$maisvisitados        = false;
$paginacao            = false;
$destaquenoticia      = true;
$asidenoticialistagem = true;
include __DIR__ . '/inc/header.inc.php';
$url            = 'http://www.tse.jus.br/@@get_lista_noticias_categoria?subject=Tribunal%20Superior%20Eleitoral&sort=date%3AD%3AL%3Ad1';
$data           = file_get_contents($url);
$outrasNoticias = json_decode($data);
$outrasNoticias[5]->image_preview = null;
$outrasNoticias[5]->video_image = null;
$outrasNoticias[6]->image_preview = null;
$outrasNoticias[6]->video_image = 'https://img.youtube.com/vi/1PlnZEt797o/maxresdefault.jpg';
$outrasNoticias[6]->video_url = 'https://www.youtube.com/watch?v=1PlnZEt797o';
// echo '<pre>';
// print_r($outrasNoticias[2]);
// echo '</pre>';
$tags = array(
        array('icon'=> '<i class="fa fa-circle" aria-hidden="true"></i> ','letter'=> null, 'badge'=>'aovivo', 'name'=> 'Ao Vivo'), 
        array('icon'=> null,'letter'=> 'E', 'badge'=>'evento', 'name'=>'Evento'), 
        array('icon'=> null,'letter'=> 'N', 'badge'=>'noticia', 'name'=>'Notícia'), 
        array('icon'=> null,'letter'=> 'D', 'badge'=>'destaque', 'name'=>'Destaque'), 
        array('icon'=> null,'letter'=> 'S', 'badge'=>'servico', 'name'=>'Serviço'), 
        array('icon'=> null,'letter'=> 'C', 'badge'=>'comunicado', 'name'=>'Comunicado'), 
        array('icon'=> null,'letter'=> 'V', 'badge'=>'video', 'name'=>'Vídeo'), 
        array('icon'=> '<i class="fa fa-microphone" aria-hidden="true"></i> ','letter'=> null, 'badge'=>'radio', 'name'=>'Rádio'), 
        array('icon'=> null,'letter'=> 'N', 'badge'=>'noticia', 'name'=>'Notícia'), 
        array('icon'=> null,'letter'=> 'M', 'badge'=>'noticia', 'name'=>'MulheresPolitica'),
        array('icon'=> null,'letter'=> 'N', 'badge'=>'noticia', 'name'=>'Notícia'));


?>
<div id="navegacao-data-noticias">
  <form method="GET" name="navegacao" class="form-inline" id="form-navagacao-noticias"
    action="http://www.tse.jus.br/imprensa">
    <fieldset>
      <legend class="sr-only">Pesquisar</legend>
      <div class="form-group">
        <label for="ano-noticias" class="sr-only">Ano</label><select class="form-control" id="ano-noticias" name="ano">
          <option value="">ano</option>
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
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="mes-noticias" class="sr-only">Mês</label><select class="form-control" id="mes-noticias" name="mes">
          <option value="">mês</option>
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
      <div class="form-group">
        <label for="dias-noticias" class="sr-only">últimos 15 dias</label><select class="form-control"
          id="dias-noticias" name="mes">
          <option value="">últimos 15 dias</option>
          <option>últimos 30 dias</option>
          <option>últimos 45 dias</option>
          <option>últimos 90 dias</option>
          <option>últimos 120 dias</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="formData"><span>Pesquisar</span></button>
    </fieldset>
  </form>
</div>
<div id="news-list" class="news-list">
  <?php
  
    foreach ($outrasNoticias as $key => $noticia) {    
      $tag = $tags[$key];
      list($data, $horas) = explode(' ', $noticia->date_modify);
      list($dia, $mes, $ano) = explode('/', $data);
      list($hora, $min, $segundos) = explode(':', $horas);

      $data_final = $dia.'.'.$mes.'.'.$ano; 
      $hora_final = ' | '.$hora.':'.$min;       
      
  ?>
  <article class="news-list-card">
    <div class="news-list-row">
      <?php
      if ($noticia->image_preview  || $noticia->video_image) :
      ?>
      <div class="news-list-col-4">
        <span
          class="badge-<?= $tag['badge'] ?> news-list-badge news-list-badge__limited"><?php $tag['icon'] !== null ? print $tag[icon] :  print substr($tag['name'], 0, 1) ?><span>
            <?php  $tag['icon'] !== null ? print $tag['name']: print substr($tag['name'], 1) ?></span></span>
        <?php if(!$noticia->video_image): ?>
        <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
          <?php else: ?>
          <a title="<?= $noticia->title; ?>" data-fancybox data-caption="<?= $noticia->title; ?>"
            href="<?= $noticia->video_url?>">
            <?php endif; ?>
            <figure
              class="news-list-media <?php $noticia->video_image && print 'je-icone je-icone-5x je-icone-youtube'?>">
              <img src="<?php $noticia->image_preview ? print $noticia->image_large: print $noticia->video_image; ?>"
                class="news-list-img img-responsive" alt="<?= $noticia->title; ?>" />
            </figure>
            <?php if(!$noticia->video_image): ?>
          </a>
          <?php endif; ?>
      </div>
      <?php endif; ?>
      <div class="news-list-col-<?php $noticia->image_preview || $noticia->video_image ? print '8': print '12';?>">
        <div class="news-list-content">
          <?php 
          !$noticia->image_preview &&
          !$noticia->video_image &&
          print '<span class="badge-'.$tag['badge'].' news-list-badge news-list-badge__expanded">'.$tag['name'].'</span>'; ?>
          <h3 class="news-list-title">
            <a href="<?= $noticia->url; ?>" title="<?= $noticia->title; ?>">
              <?= $noticia->title; ?>
            </a>
          </h3>
          <p class="news-list-description">
            <?= $noticia->description; ?>
          </p>
          <footer class="news-list-footer">
            <time class="time"
              datetime="<?= "{$ano}-{$mes}-{$dia} {$hora}:{$min}" ?>"><?= $data_final; ?><?= $hora_final?></time>
            <button class="sharing" type="button" data-container="body" data-toggle="popover" data-placement="top"
              data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
              <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11.352 12.486">
                <defs>
                  <style>
                    .a {
                      fill: #6B6B6B;
                    }
                  </style>
                </defs>
                <path class="a"
                  d="M9.079,4.453a2.253,2.253,0,0,0,2.273-2.226,2.274,2.274,0,0,0-4.547,0,2.188,2.188,0,0,0,.034.382l-2.9,2.25a2.29,2.29,0,0,0-1.665-.712,2.227,2.227,0,1,0,0,4.453,2.29,2.29,0,0,0,1.67-.717l2.877,2.125a2.2,2.2,0,0,0-.015.253A2.274,2.274,0,1,0,9.079,8.033,2.279,2.279,0,0,0,7,9.364L4.3,7.374a2.182,2.182,0,0,0,0-2.01L7.051,3.231A2.281,2.281,0,0,0,9.079,4.453Z" />
              </svg>
            </button>
          </footer>
        </div>
      </div>
    </div>
  </article>
  <?php
}
?>
  <?php
$paginacao && include __DIR__ . '/inc/paginacao.inc.php';
?>
</div>
<?php
include __DIR__ . '/inc/footer.inc.php';
?>