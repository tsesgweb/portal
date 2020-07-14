// Avoid `console` errors in browsers that lack a console.
// (function() {
//     var method;
//     var noop = function() {};
//     var methods = [
//         'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
//         'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
//         'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
//         'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
//     ];
//     var length = methods.length;
//     var console = (window.console = window.console || {});

//     while (length--) {
//         method = methods[length];

//         // Only stub undefined methods.
//         if (!console[method]) {
//             console[method] = noop;
//         }
//     }
// }());
// jq.fn.extend({
//     animateCss: function(animationName) {
//         var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
//         this.addClass('animated ' + animationName).one(animationEnd, function() {
//             jq(this).removeClass('animated ' + animationName);
//             jq('*[class=""]').removeAttr('class');
//         });
//     }
// });

// //Sugestão página
// jq("#captura-tela-feed").change(function() {
//     var valor = jq(this).val();
//     jq("#add-arquivo-texto").html(valor);
//     jq(".remover-img-feed").remove();
//     jq(".captura-feed").append("<i class='fa fa-1x fa-times remover-img-feed' aria-hidden='true'><span class='sr-only'>Remover imagem</span></i>");
// });
// jq(".captura-feed").on("click", ".remover-img-feed", function() {
//     jq("#captura-tela-feed").val("");
//     jq("#add-arquivo-texto").text("adicione uma captura de tela ao seu feedback");
//     jq(this).remove();
// });
//Datepicker
// jq(function() {

// });