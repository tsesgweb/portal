/**
 * Script do principais eventos
 * Copyright 2017 SGWeb
 */
// if (typeof BrowserDetect !== 'undefined' || typeof BrowserDetect === 'function') {
//     console.log(BrowserDetect.browser + ' ' + BrowserDetect.version);
// }
// jq(document).ready(function() {
//Cria modal para os seguintes blocos
/* guardando o conteúdo da aba para inserir no modal */
// var contModalSituacao = jq('#situacao-eleitoral'),
//     contModalLocal = jq('#local-votacao'),
//     contModalSituacaoCode = contModalSituacao.html(),
//     contModalSituacaoTitle = jq('#bt-situacao-eleitoral').find('a'),
//     contModalLocalCode = contModalLocal.html(),
//     contModalLocalTitle = jq('#bt-local-votacao').find('a');

// /* adicionando o conteúdo capturado da aba no modal */
// contModalSituacao.append('<div class="modal fade" id="situacaoEleitoralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content text-center"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="titulo-personalizado"><h4 class="modal-title titulo-padrao" id="myModalLabel">' + contModalSituacaoTitle.text() + '</h4></div><div class="modal-body-situacao"></div></div></div></div>');

// jq('<div></div>', {
//     html: contModalSituacaoCode
// }).appendTo('.modal-body-situacao');

// contModalLocal.append('<div class="modal fade" id="localVotacaoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content text-center"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="titulo-personalizado"><h4 class="modal-title titulo-padrao" id="myModalLabel">' + contModalLocalTitle.text() + '</h4></div><div class="modal-body-local"></div></div></div></div>');

// jq('<div></div>', {
//     html: contModalLocalCode
// }).appendTo('.modal-body-local');
// });
//=======ATENÇÃO====ATENÇÃO===============ATENÇÃO============ATENÇÃO================
//Desativado para até saber o funcionamento
// jq(document).on('click', '.accordion-toggle', function(event) {
//     event.stopPropagation();
//     var $this = jq(this);
//     var parent = $this.data('parent');
//     var actives = parent && jq(parent).find('.collapse.in');
//     // From bootstrap itself
//     if (actives && actives.length) {
//         hasData = actives.data('collapse');
//         //if (hasData && hasData.transitioning) return;
//         actives.collapse('hide');
//     }
//     var target = $this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); //strip for ie7
//     jq(target).collapse('toggle');
// });




/*jq(function (jq) {
    jq("#formulario-feed").submit(function (e) {
        var postData = jq(this).serializeArray();
        var formURL = jq(this).attr("action");
        jq('#myStateButton').button('loading');
        jq.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            success: function (data, textStatus, jqXHR) {
                jq("#modal-sugestao-pagina").removeClass("fade").modal("hide");
                jq("#modalResposta").modal('show');
                jq(".modal-body #resp").empty().append('<div class="alert alert-success"><p>Enviado com sucesso</p></div>');
                jq("#myStateButton").button("reset");
                jq("#seu-feedback .tab-content .tab-pane").each(function () {
                    if (jq(this).find("textarea").val() == "") {
                        jq(this).find("textarea").prop('disabled', true);
                    }
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                jq("#modal-sugestao-pagina").removeClass("fade").modal("hide");
                jq("#modalResposta").modal("show");
                jq("#resp").append("<p>Não foi possível submeter o feedback. Tente novamente mais tarde</p>");
                jq("#myStateButton").button("reset");
            }
        });
        e.preventDefault();
    });
});*/