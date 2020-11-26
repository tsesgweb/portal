$(function() {
    //Ajusta breadcrumb
    var breadCrumb = $('.je-breadcrumb, #bradcamp_est').find('td.t-Report-cell');
    if (breadCrumb.length != 0) {
        var novo = breadCrumb
            .text()
            .trim()
            .split('|');
        var retorno = [];
        var lista = $('<div class="je-nav je-nav-tags" role="tablist"/>');
        for (var i = 0; i < novo.length; i++) {
            var temp = '<span class="je-list-tags">' + novo[i].replace(/^((?!(Todas|Todos)).)*$/, novo[i].trim().split(':')[0] + ': <b>' + novo[i].trim().split(':')[1] + ' </b>') + ' </span>';
            retorno.push(temp);
        }
        novo = lista.append(retorno);
        breadCrumb.html(novo);
    }

    //Criação da sidebar
    var parametrosPesquisa = $('#parametro_pesquisa_est');
    if (parametrosPesquisa.length != 0) {
        $('.t-Body-contentInner')
            .prepend(parametrosPesquisa);
        parametrosPesquisa
            .wrapAll("<div id='js-jeSideMenu'/>");
        //data de atualização
        $('#js-jeSideMenu .t-Region-title')
            .empty()
            .prepend($('#data_carga_est .t-Report-cell').text())
            .addClass('js-jeTituloSidebar');
        //data de atualização remover conteúdo em branco
        $('#data_carga_est')
            .closest('.row')
            .remove();
        $('.je-btn_limpar, .je-btn_pesquisar')
            .closest('table', $('#parametro_pesquisa_est'))
            .wrap("<div class='js-jeButtonsBottom'/>");
    }
    //Conteúdo main
    var jsContent = $('#je-content');
    if (jsContent.length != 0) {
        jsContent.closest('.container')
            .wrap('<main id="js-jeContent"/>');
    }
    //Botão voltar dentro do content
    var botaoVoltar = $('.je-btn_voltar');
    if (botaoVoltar.length != 0) {
        var carregarVoltar = function() {
            $('.je-btn_voltar')
                .appendTo($('#je-content > .t-Region-bodyWrap > .t-Region-body > .container'))
                .wrap('<div class="js-jeContainerButtons"/>');
        };
        carregarVoltar();
    }

    //Colocar classe no botao de ajuda
    $('.je-btn_ajuda').closest('.col.col-12').addClass('js-jeBotaoAjuda');


    //Colocar classes nos títulos personalizados
    var titulos = $('.t-Region-title');

    function replaceTitulo(titulo) {
        titulo.replaceWith(function() {
            return $('<h2 />', {
                html: this.innerHTML,
                class: this.className + ' js-je-titulo-padrao'
            });
        });
    }
    for (var index = 0; index < titulos.length; index++) {
        var titulo = $(titulos[index]);
        titulo
            .find('br')
            .remove();
        titulo
            .wrap('<span class="je-titulo-personalizado"/>');
        var tituloLink = 'Mais detalhes sobre ' + titulo.text().toLowerCase().replace('mais detalhes', '');
        titulo
            .find('a')
            .addClass('js-je-titulo-link')
            .attr('title', tituloLink)
            .appendTo(titulo.closest('div'));
        // replaceTitulo(titulo);
        titulo.replaceWith(function() {
            return $('<h2 />', {
                html: this.innerHTML,
                class: this.className + ' js-je-titulo-padrao'
            });
        });
    }
});
$(window).ready(function() {
    //Remover release 1.0
    $('.t-Footer').css('display', 'none');
    $("footer:contains('Ativar Modo de Leitor de Tela')").css('display', 'none').hide('fast');
});