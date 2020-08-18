<?php
$home           = false;
$interna        = true;
$recaptcha      = false;
$asideinterna   = false;
$asidenoticia   = false;
$asideagenda    = false;
$toporeduzido   = false;
$compartilhar   = true;
$tags           = true;
$gestor         = true;
$feedback       = true;
$ferramentas    = true;
$maisvisitados  = false;
$paginacao      = false;
$breadcrumb     = true;
$maisacessados  = true;
$rybena         = true;
$biblioteca     = false;
$legislacao     = false;
$datepicker     = false;
$subnivel       = 'sub página';
$nivel          =  'Template';
$titulo         = 'Página';
$ocultartitulo  = false;
$paginaeleicoes = false;
$candidaturas   = false;
$paginafull     = false;
$aviso          = true;
$selos          = false;
$destaquenoticia = false;
$asidenoticialistagem = false;
$asidenoticiaradio = false;
$arrayTags = ['Partidos políticos', 'Prestação de contas partidárias', 'Partidos registrados no TSE', 'Filiação', 'Cassação','Eleições (2016)','Tribunal Superior Eleitoral','Justiça Eleitoral'];
$siglas =['tse'=>'Tribunal Superior Eleitoral','tre-ac'=>'Tribunal Regional do estado de Acre','tre-al'=>'Tribunal Regional do estado de Alagoas','tre-ap'=>'Tribunal Regional do estado de Amapá','tre-am'=>'Tribunal Regional do estado de Amazonas','tre-ba'=>'Tribunal Regional do estado de Bahia','tre-ce'=>'Tribunal Regional do estado de Ceará','tre-df'=>'Tribunal Regional do estado de Distrito Federal','tre-es'=>'Tribunal Regional do estado de Espírito Santo','tre-go'=>'Tribunal Regional do estado de Goiás','tre-ma'=>'Tribunal Regional do estado de Maranhão','tre-mt'=>'Tribunal Regional do estado de Mato Grosso','tre-ms'=>'Tribunal Regional do estado de Mato Grosso do Sul','tre-mg'=>'Tribunal Regional do estado de Minas Gerais','tre-pa'=>'Tribunal Regional do estado de Pará','tre-pb'=>'Tribunal Regional do estado de Paraíba','tre-pr'=>'Tribunal Regional do estado de Paraná','tre-pe'=>'Tribunal Regional do estado de Pernambuco','tre-pi'=>'Tribunal Regional do estado de Piauí','tre-rj'=>'Tribunal Regional do estado de Rio de Janeiro','tre-rn'=>'Tribunal Regional do estado de Rio Grande do Norte','tre-rs'=>'Tribunal Regional do estado de Rio Grande do Sul','tre-ro'=>'Tribunal Regional do estado de Rondônia','tre-rr'=>'Tribunal Regional do estado de Roraima','tre-sc'=>'Tribunal Regional do estado de Santa Catarina','tre-sp'=>'Tribunal Regional do estado de São Paulo','tre-se'=>'Tribunal Regional do estado de Sergipe','tre-to'=>'Tribunal Regional do estado de Tocantins'];
function array_random_assoc($arr, $num = 1) {
$keys = array_keys($arr);
shuffle($keys);

$r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[$keys[$i]] = $arr[$keys[$i]];
    }
return $r;
}               
$logos = array_random_assoc($siglas);  
