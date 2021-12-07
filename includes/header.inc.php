<?php
function autoIncludeFiles($location, $type)
{
  $arquivoJSON = file_get_contents(BASE_URL . '/portal-config.json');
  $config = json_decode($arquivoJSON);
  foreach ($config->$location->$type as $origen => $cssorjs):
    $origen === 'external' ? $path = "" : $path = "/";
    if (!is_array($cssorjs)):
      foreach ($cssorjs as $chave => $chamada):
        print("\n<!-- build:{$type}{$chave}-->");
        if ($origen == "ie"):
          print("<!--[if lt IE ${chave}]>");
        endif;
        if ($type == "css"):
          foreach ($chamada as $css):
            printf("\r\n" . '<link href="%s%s" rel="stylesheet">', $path, $css);
          endforeach;
        endif;
        if ($type == "js"):
          foreach ($chamada as $js):
            printf("\r\n" . '<script src="%s%s"></script>', $path, $js);
          endforeach;
        endif;
        if ($origen == "ie"):
          print("<![endif]-->");
        endif;
        print("\n<!-- endbuild-->");
      endforeach;
    else:
      if ($type == "css"):
        print "\n<!-- build:{$origen} -->";
        foreach ($cssorjs as $key => $css):
          printf("\r\n" . '<link href="%s%s" rel="stylesheet">', $path, $css);
        endforeach;
      endif;
      if ($type == "js"):
        print "\n<!-- build:js{$origen} -->";
        foreach ($cssorjs as $js):
          printf("\r\n" . '<script src="%s%s"></script>', $path, $js);
        endforeach;
      endif;
      print("\n<!-- endbuild -->");
    endif;
  endforeach;

}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $titulo; ?> — Tribunal Superior Eleitoral</title>
  <meta name="description" content="">
  <?php
autoIncludeFiles('head', 'css');
autoIncludeFiles('head', 'js');
?>

  <script src="https://cdn.tse.jus.br/estatico/js/rybena.js"></script>

</head>

<body class="site-tse">
  <?php $ferramentas && include __DIR__ . '/ferramentas.inc.php'; ?>
  <?php include __DIR__ . '/topo-acessibilidade.inc.php'; ?>
  <?php include __DIR__ . '/menu.inc.php'; ?>
  <!-- start: global module -->
  <?php
!$home && $breadcrumb && include __DIR__ . '/breadcrumb.inc.php';
if (!$home) {
  $aside = '';
  $paginafull ? $full = '_full' : $full = '';
  $asidenoticia && $aside = 'conteudo_coluna conteudo_coluna_direita';
  $asideagenda && $aside = 'conteudo_coluna conteudo_coluna_direita';
  $asideinterna && $aside = 'conteudo_coluna conteudo_coluna_esquerda';
  $asidenoticialistagem && $aside = 'conteudo_coluna conteudo_coluna_direita aside-noticias-listagem';
  $asidenoticiaradio && $aside = 'conteudo_coluna conteudo_coluna_direita aside-noticias-listagem';
  print '<!-- start:conteudo > linha --><main class="main__conteudo' . $full . '"><div class="main__linha">';
  $asideinterna && include __DIR__ . '/widgets/internas.inc.php';
  $destaquenoticia && include __DIR__ . '/noticias/destaques.inc.php';
  $internanoticia && include __DIR__ . '/noticias/topo-noticia.inc.php';
  print '<!-- start:conteudo?coluna--><div id="conteudo" class="conteudo ' . $aside . '">';
  !$ocultartitulo && print "<h2>{$titulo}</h2>";
  $compartilhar && include __DIR__ . '/share.inc.php';
}
?>