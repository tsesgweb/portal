// jq(document).ready(function() {
//     var chamarFeedback = jq('#feedback a');
//     chamarFeedback.one('click', function(e) {
//         titulo = '<p>Título modal</p>';
//         html = '<p>Conteudo modal</p>';
//         jq('#sugestao-pagina').append(modal(titulo, html));
//         e.preventDefault();
//         jq('#modalAviso').modal('show');
//     });

// });
// var modal = function(title, content) {
//     var html = '<div class="modal fade" tabindex="-1" role="dialog" id="modalAviso">';
//     html += '<div class="modal-dialog" role="document">';
//     html += '<div class="modal-content">';
//     html += '<div class="modal-header">';
//     html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
//     html += '<h4 class="modal-title">' + title + '</h4>';
//     html += '</div>';
//     html += '<div class="modal-body">';
//     html += content;
//     html += '</div>';
//     html += '<div class="modal-footer">';
//     html += '<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>';
//     html += '<button type="button" class="btn btn-primary">Salvar mudanças</button>';
//     html += '</div>';
//     html += '</div>';
//     html += '</div>';
//     html += '</div>';
//     return html;
// }