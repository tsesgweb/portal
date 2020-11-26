jq(document).ready(function() {
    //Adicionar sobra para mobile
    jq(".mais-acessados-item").wrapInner('<div class="sombra-mobile"/>');
    //ativar abas responsivas necessita do plugins bootstrap-responsive-tabs
    if (typeof jq.fn.responsiveTabs == "function") {
        jq('.abas-responsivas').responsiveTabs({
            accordionOn: ['xs', 'sm'] // xs, sm, md, lg 
        });
        //Adicionar mais abas alterar o index dos :eq(5), :eq(6) no arquivo jquery.bootstrap-responsivo-tabs-custom.js
        jq("#bt-debitos-do-eleitor a, #bt-todos-os-servicos a").clone().appendTo('.abas-servicos-conteudo').addClass('accordion-link');
    } else {
        console.log(' responsiveTabs not found');
    }
    //Ajuste noticias home
    (function() {
        // Bloco para notícias mobile 
        jq("#quick-access")
            .closest(".centralizar")
            .prepend("<div id='home-bloco-noticias-mobile' class='visible-xs'><div class='noticias-home'></div></div>");
        // Bloco carousel para notícias mobile 
        jq(".noticias-home")
            .prepend("<div id='carousel-noticias' class='visible-xs'></div>");


        jq("#carousel-noticias")
            .append("<ol class='carousel-indicators paginacao-noticias'></ol>");

        jq("#carousel-noticias")
            .append("<div class='carousel-inner' role='listbox'></div>");
        // jq("#home-noticias").addClass('hidden-xs');
        // Rodapé bloco notícias mobile 
        var $conteudo_rodape = jq("#home-noticias").find(".noticias-rodape").html();
        jq("#home-bloco-noticias-mobile .noticias-home")
            .append("<footer class='noticias-rodape'>" + $conteudo_rodape + "</footer>");
        jq("#home-noticias article").each(function(index) {
            var $conteudo = jq(this).html();
            if (index < 1) {
                jq(".carousel-indicators")
                    .append("<li data-target='#carousel-noticias' data-slide-to='" + index + "' class='active'></li>");
                jq(".carousel-inner")
                    .append("<div class='item active noticia-principal'><div class='carousel-caption'>" + $conteudo + "</div></div>");
            } else {
                jq(".carousel-indicators")
                    .append("<li data-target='#carousel-noticias' data-slide-to='" + index + "'></li>");
                jq(".carousel-inner")
                    .append("<div class='item'><div class='carousel-caption'>" + $conteudo + "</div></div>");
            }
        });

        // Colocar class sem imagem 
        jq(".carousel-inner .item").each(function() {
            var $procurar_imagem = jq(this).find("img").length;
            if ($procurar_imagem < 1) {
                jq(this).addClass("sem-imagem");
            } else if ($procurar_imagem > 0) {
                jq(this).addClass("com-imagem");
            }
        });
        //Colocar imagens auxiliares no carousel dinamicamente
        jq('#carousel-noticias').on('slid.bs.carousel', function(e) {
            var procurarImg = jq(e.relatedTarget).find('img');
            if (procurarImg.attr('data-src') !== undefined) {
                procurarImg.attr('src', procurarImg.attr('data-src')).removeAttr('data-src');
            }
        });

        // Adicionando as classes que fazer o carousel funcionar
        jq('#carousel-noticias').addClass("carousel slide");
    })();
    //  Adicionando suporte ao touch nas notícias 
    jq(".carousel").on("touchstart", function(event) {
        var xClick = event.originalEvent.touches[0].pageX;
        jq(this).one("touchmove", function(event) {
            var xMove = event.originalEvent.touches[0].pageX;
            if (Math.floor(xClick - xMove) > 5) {
                jq(".carousel").carousel('next');
            } else if (Math.floor(xClick - xMove) < -5) {
                jq(".carousel").carousel('prev');
            }
        });
        jq(".carousel").on("touchend", function() {
            jq(this).off("touchmove");
        });
    });
});


//Funções para o responsivo
//Adicionar accordionToggle nas abas selecionas
//Necessita do plugin ResponsiveBootstrapToolkit
if (typeof ResponsiveBootstrapToolkit == 'object') {
    (function(jq, document, window, viewport) {
        //Adicionar abas responsivas por item unico ou grupo.
        var $todasAbas = [],
            $tituloPersonalizado = ".titulo-personalizado",
            $servicos = new Array("#quick-access"),
            $destaques = new Array("#home-destaques"),
            $consultas = new Array("#electoral-clipping");

        $iniciaAccordion = jq($todasAbas.concat($servicos, $destaques, $consultas).join(','));
        $iniciaAccordion.find($tituloPersonalizado).append(jq("<span class='fa-stack fa-pull-right'><i class='fa'></i></span>"));
        var accordionToggle = function(status, seletor, container, selected) {
            var $self,
                $conteudo,
                $target,
                $storage = localStorage,
                $accordion = seletor.find(container),
                $icone = $accordion.find('.fa-stack');
            if (status) {
                $icone.show();
                $accordion.each(function(index, value) {
                    var $link = jq(this).find($tituloPersonalizado),
                        $conteudo = jq(this).find('.conter-conteudo'),
                        $idParent = $accordion.parent().length == 1 ? $accordion.parent().prop('id') : $accordion.closest('.centralizar').parent().prop('id'),
                        $createId = $idParent + '-' + index;

                    //Adicionar icone .fa-angle-up/down
                    $iniciaAccordion.on('shown.bs.collapse', function(e) {
                        $self = jq(document).find("[data-target='#" + jq(e.target).attr('id') + "']");
                        $target = jq(e.target).attr('id');
                        jq($self).find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
                        $storage.setItem('open_' + $target, true);
                    }).on('hidden.bs.collapse', function(e) {
                        $self = jq(document).find("[data-target='#" + jq(e.target).attr('id') + "']");
                        $target = jq(e.target).attr('id');
                        jq($self).find('.fa').removeClass('fa-angle-down').addClass('fa-angle-up');
                        $storage.removeItem('open_' + $target);
                    });

                    $link
                        .attr({
                            'role': 'button',
                            'data-toggle': 'collapse',
                            'data-target': '#' + $createId,
                            'data-parent': '#' + $idParent,
                            'aria-controls': $createId
                        })
                        // .addClass('accordion-toggle')
                        .find('.fa').addClass('fa-angle-up');

                    $conteudo.attr({
                        'id': $createId,
                        'role': 'tabpanel'
                    }).addClass('collapse');

                    $pegarId = jq(this).find('.collapse').attr('id');
                    $storaged = $storage.getItem('open_' + $pegarId);

                    if ($storaged === 'true' ||
                        $storaged === true ||
                        selected === true) {
                        $conteudo.collapse('show');
                    } else if (typeof value[index] !== undefined &&
                        jq.isNumeric(selected)) {
                        if (Math.floor(selected) == index) {
                            $conteudo.collapse('toggle');
                        }
                    } else {
                        $conteudo.collapse('hide');
                    }
                }).addClass('panel');
            } else {
                $icone.hide();
                $accordion.closest().removeClass('panel');
                $accordion.removeClass('panel-group')
                    .find($tituloPersonalizado + ', .conter-conteudo')
                    .removeClass('accordion-toggle collapse in')
                    .removeAttr('collapsed role data-toggle data-target data-parent aria-controls aria-expanded aria-selected id role');
            }
        };

        var enableAccordions = function() {
            if (viewport.is("<md")) {
                accordionToggle(true, jq($servicos.join(',')), '.quick-access-item');
                accordionToggle(true, jq($destaques.join(',')), '.destaques-itens', 0);
                if (viewport.is("xs")) {
                    accordionToggle(true, jq($consultas.join(',')), '.electoral-clipping-item');
                } else {
                    accordionToggle(false, jq($consultas.join(',')), $iniciaAccordion.children());
                }
            }
            if (viewport.is(">=md")) {
                accordionToggle(false, $iniciaAccordion, $iniciaAccordion.children());
                // if (viewport.is('>=sm')) {
                //     accordionToggle(false, $iniciaAccordion, $iniciaAccordion.children());
                // }
            }
        };
        jq(document).ready(function() {
            enableAccordions();
        });
        jq(window).resize(viewport.changed(function() {
            enableAccordions();
        }));
    })(jQuery, document, window, ResponsiveBootstrapToolkit);

} else {
    console.error('ResponsiveBootstrapToolkit not found.');
}
jq(document).on('click', '.accordion-toggle', function(event) {
    event.stopPropagation();
    var $this = jq(this);
    var parent = $this.data('parent');
    var actives = parent && jq(parent).find('.collapse.in');
    // From bootstrap itself
    if (actives &&
        actives.length) {
        hasData = actives.data('collapse');
        if (hasData &&
            hasData.transitioning) return;
        actives.collapse('hide');
    }
    var target = $this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); //strip for ie7
    jq(target).collapse('toggle');
});