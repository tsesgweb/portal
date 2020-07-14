<?php
function autoIncludeFiles($location, $type) {  
    $arquivoJSON = file_get_contents('portal-config.json');
    $arquivoJSON = utf8_encode($arquivoJSON); 
    $config = json_decode($arquivoJSON);       
    foreach ($config->$location->$type as $origen => $cssorjs) {    
        $origen === 'external' ? $path = "": $path = "./";          
        if(!is_array($cssorjs)){             
            foreach ($cssorjs as $chave => $chamada) {
                print("\n<!-- build:{$type}{$chave}-->");
                if($origen == "ie"){
                    print("<!--[if lt IE ${chave}]>");
                }
                if($type == "css"){
                    foreach ($chamada as $css) {
                        printf('<link href="%s%s" rel="stylesheet">', $path, $css);                    
                    }
                }
                if($type == "js"){
                    foreach ($chamada as $js) {
                        printf('<script src="%s%s"></script>', $path, $js);
                    }
                }
                if($origen == "ie"){
                    print("<![endif]-->");
                }
                print("<!-- endbuild-->");
            }
        }else{           
            
            if($type == "css"){
                print "\n<!-- build:{$origen} -->";
                foreach ($cssorjs as $key => $css) {                                    
                    printf('<link href="%s%s" rel="stylesheet">', $path, $css);
                }
            }
            if($type == "js"){
                print "\n<!-- build:js{$origen} -->";
                 foreach ($cssorjs as $js) {
                    printf('<script src="%s%s"></script>', $path, $js);
                }
            }
            print("<!-- endbuild -->");
        }              
       
    } 
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php print $titulo;?> — Tribunal Superior Eleitoral</title>
    <meta name="description" content="">
    <?php
    autoIncludeFiles('head','css');
    
    autoIncludeFiles('head','js');
    ?>    
    
</head>

<body class="site-tse">    
    <?php $ferramentas && include __DIR__ . '/ferramentas.inc.php';?>
    <?php include __DIR__ . '/topo-acessibilidade.inc.php';?>
    <?php include __DIR__ . '/menu.inc.php';?>
    <!-- start: global module -->    
    <?php 
    !$home && $breadcrumb && include __DIR__ . '/breadcrumb.inc.php';
    if(!$home){
        $aside = '';
        $paginafull ? $full='_full' : $full='';                
        $asidenoticia   && $aside='conteudo_coluna conteudo_coluna_direita';                
        $asideagenda    && $aside='conteudo_coluna conteudo_coluna_direita';                
        $asideinterna   && $aside='conteudo_coluna conteudo_coluna_esquerda'; 
        print '<!-- start:conteudo > linha --><main class="main__conteudo'.$full.'"><div class="main__linha">'; 
        $asideinterna && include __DIR__ . '/aside-internas.inc.php';
        print '<!-- start:conteudo?coluna--><div id="conteudo" class="conteudo '.$aside.'">';
        !$ocultartitulo && print "<h2>{$titulo}</h2>";
        $compartilhar && include __DIR__ . '/share.inc.php';    
    }       
    ?>
    

    