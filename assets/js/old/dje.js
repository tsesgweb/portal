// //   jq('body[class*="site-"]').each( function() {
// //     var classID = null;
// //     var classes = jq(this).attr('class').split( ' ' );
// //     for (var i = 0; i < classes.length < i; ++i) {
// //         var classS = classes[i];
// //         if (classS.match( /^site-/ )) {
// //             classID = classS.replace("site-",'');
// //             break;
// //         }
// //     }
// //     if (classID) {
// //     }
// // });
// jq(document).ready(function() {
//     var dominio = 'http://inter03.tse.jus.br/sadJudDiarioDeJusticaConsulta/';
//     var tribunal = 'TSE';
//     var validacao = true;
//     var qtd = 3;
//     var action = 'diario.do?action=';
//     var download = action + 'downloadDiario&tribunal=' + tribunal + '&captchaValidacao=' + validacao + '';
//     var busca = action + 'buscarDiarios&voDiarioSearch.listState.itensPerPage=' + qtd + '&voDiarioSearch.tribunal=' + tribunal + '&page=diarioPageLastList.jsp?t=' + new Date().getTime();
//     var regex = new RegExp(/\d+/g);
//     jQuery.ajax({
//         url: dominio + busca,
//         type: 'GET',
//         cache: true,
//         beforeSend: function() {
//             jQuery('.djecarregando').text('Carregando...').show();
//         },
//         success: function(res, status) {
//             jQuery.each(res, function(index, el) {
//                 var tabela = jQuery(el).find('tr');
//                 // var src = jQuery(el).find('a img');
//                 for (var i = 0; i < tabela.length; i++) {
//                     var numeroEdicao = tabela.find('td:nth-child(1)');
//                     var dataPublicacao = tabela.find('td:nth-child(2)');
//                     var downloadDiario = tabela.find('td:nth-child(3) a');
//                     // var downloadDiario = downloadDiario.find('a');
//                     // console.error(downloadDiario);
//                     // var downloadImage = downloadDiario.find('img');
//                     jQuery("#djeaqui").append("<li><a target='_blank' href='" + dominio + download + "&id=" + downloadDiario[i].href.match(regex) + "' title='" + downloadDiario[i].title + "'>" + numeroEdicao[i].innerText + " " + dataPublicacao[i].innerText + "</a></li>").fadeIn(1000);
//                     // jQuery("#djeaqui").append("<li><a href='#"+ downloadDiario[i].href.match(regex)+" '>" + numeroEdicao[i].innerText + " " + dataPublicacao[i].innerText + "</a></li>").fadeIn(1000);         
//                     jQuery('.djecarregando').fadeOut('500').hide().remove();
//                     // jQuery('#djeaqui .g-recaptcha').hide();
//                 }
//             });
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             console.log(jqXHR);
//             console.log(textStatus);
//             console.log(errorThrown);
//         },
//         complete: function() {
//             jQuery('.djecarregando').text('Nao Carregado!').show();
//             // jQuery(this).die();
//         }
//     });
// });