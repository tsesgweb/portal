if (typeof jQuery === 'undefined') {
    throw new Error('Portal\'s JavaScript requires jQuery');
}
var jq = jQuery.noConflict();
//scripts do portal
(function() {
    jq('.centralizar').wrapInner('<div class="row"/>');
    jq('.img-responsive').removeClass('img-responsive').addClass('img-fluid');
    //Devido a permissão 'pode compartilhar' atribuir permissão local de adm é necessário que a class newTags seja ocultada via javascript.
    jq('body').find('.newTagsSection').hide();
    //Menu principal mobile
    jq(".mais-itens-menu").on("click", "> li", function(e) {
        jq(this).find("ul").toggleClass("mostrar-links-menu");
        jq(this).find('.fa').toggleClass('fa-angle-double-down fa-angle-double-up');
        jq(this).closest("li.dropdown").addClass("abrir-submenu");
        jq(".abrir-submenu").addClass("open");
        e.stopPropagation();
    });
    //remove classe abrir submenu
    jq("li.dropdown").on('click', jq(this), function() {
        jq("li.dropdown").removeClass("abrir-submenu");
    });
    
    //Rodape
    jq('.acao').on('click', function(e) {
        jq(this).find('.fa').toggleClass('fa-angle-double-up fa-angle-double-down');
        jq(".mapa-site-conteudo").slideToggle(400, function(e) {
            jq('html, body').animate({
                scrollTop: jq(this).offset().top
            }, 400);
        });
        e.preventDefault();
    });
    //Atalho acessibilidade - abrir mapa do site
    jq("a[href$='#mapa-site']").on('click', function() {
        jq(".acao").trigger("click");
    });

    //Atalho acessibilidade - focar campo de busca
    jq("a[href$='#search']").on('click', function(e) {
        setTimeout(function() {
            jq('#busca').focus();
        }, 10);
    });

    //colunas rodape
    jq('<div/>').insertAfter('.mapa-site-conteudo .coluna-mapa:eq(1)').addClass('clearfix visible-sm');
    jq('<div/>').insertAfter('.mapa-site-conteudo .coluna-mapa:eq(2)').addClass('clearfix visible-md');
    jq('<div/>').insertAfter('.mapa-site-conteudo .coluna-mapa:eq(3)').addClass('clearfix visible-lg visible-sm');
    jq('<div/>').insertAfter('.mapa-site-conteudo .coluna-mapa:eq(5)').addClass('clearfix visible-md visible-sm');

    //Adicionar tag address no rodapé
    if (jq('#rodape').find('section.endereco').hasClass('endereco')) {
        if (jq('.endereco').find('address').length === 0) {
            jq('#rodape').find('.endereco').wrapInner('<address/>');
        }
    }
    jq(function() {
        jq('[data-toggle="popover"]').popover({
            html: true
        });
    });

    //Altera a configuração padrão do fancybox
    jq("[data-fancybox]").fancybox({
        // Enable keyboard navigation
        keyboard: true,
        smallBtn: true,
        buttons: [
            'slideShow',
            'fullScreen',
            'thumbs',
            // 'share',
            //'download',
            //'zoom',
            'close'
        ],
    });
    //Função para voltar ao topo
    jq("body").append("<div id='voltar-topo' style='display:none;'><a href='#topo' title='Voltar ao topo da página'><i class='fa fa-chevron-circle-up fa-3' aria-hidden='true'></i></a></div>");
    jq(window).scroll(function() {
        if (jq(this).scrollTop() > 100) {
            jq('#voltar-topo').fadeIn();
        } else {
            jq('#voltar-topo').fadeOut();
        }
    });
    jq('a[href="#topo"]').click(function() {
        jq('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //Marcar opção de "Pesquisar somente em..."
    var $busca = jq("#busca"),
        $opcao = jq("#opcao-pesquisa"),
        $secao = jq(".exibir_secao"),
        $valor = $busca.val();
    $busca
        .focusin(function() {
            $secao.css({
                "display": "table-cell"
            });
        })
        .focusout(function() {
            if (!jq(this).val()) {
                $secao.hide();
                $opcao.prop("checked", false);
            }
        })
        .keyup(function() {
            if (jq(this).val() !== '') {
                $opcao.removeAttr("disabled");
            } else {
                $opcao.attr("disabled", true).prop("checked", false);
            }
        });

})();
//Contraste do portal
if (typeof Cookies == 'function') {
    (function() {
        //Contraste dos portais ativar/desativar
        //Plugin necessários: jscookies
        //Troca da logo quando ativado o contraste
        var alterarLogo = function() {
            var $com, $sem,
                $logo = jq(".logo-tribunal").find("img"),
                $src = $logo.attr("src");
            if ($src.indexOf("-inverse.png") < 0) {
                $com = $src.replace(".png", "-inverse.png");
            } else {
                $sem = $src.replace("-inverse.png", ".png");
            }
            return "on" == Cookies.get("contraste") ? $logo.attr("src", $com) : $logo.attr("src", $sem);
        };

        var alterarReCaptcha = function() {
            var $com, $sem, $iframe, $corAtual,
                $recaptcha = jq('#captcha-consulta-quitacao,#captcha-consulta-situacao,#captcha-consulta-local,#captcha-consulta-quitacao,#captcha-valida-quitacao,#captcha-feedback');
            $recaptcha.each(function() {
                var $self = jq(this);
                if ($self.find('iframe').length) {
                    $iframe = $self.find('iframe');
                    $corAtual = $self.find('iframe').attr('src').match(/theme=(.*?)&/).pop();
                    if ($corAtual === 'light') {
                        $attr = $self.find('iframe').attr('src').replace(/theme=(.*?)&/, 'theme=dark&');
                    } else {
                        $attr = $self.find('iframe').attr('src').replace(/theme=(.*?)&/, 'theme=light&');
                    }
                    $iframe.attr('src', $attr);
                }
            });
        };

        jq(".contraste > a").on('click', function(e) {
            if (Cookies.get('contraste') === null) {
                Cookies.set('contraste', 'on', {
                    expires: 7
                });
                jq('body').addClass('contraste');
                alterarLogo();
                alterarReCaptcha();
                e.preventDefault();
                // return false;
            } else {
                if (Cookies.get('contraste') == 'on') {
                    Cookies.set('contraste', 'off', {
                        expires: 7
                    });
                    // Cookies.remove('contraste');
                    jq('body').removeClass('contraste');
                    alterarLogo();
                    alterarReCaptcha();

                    e.preventDefault();
                    // return false;
                } else {
                    Cookies.set('contraste', 'on');
                    jq('body').addClass('contraste');
                    alterarLogo();
                    alterarReCaptcha();

                    e.preventDefault();
                    // return false;
                }
            }
        });
        if (Cookies.get('contraste') == 'on') {
            jq('body').addClass('contraste');
            alterarLogo();
            alterarReCaptcha();
            // return false;
        }

    })();
} else {
    console.log('jsCookies not found.');
}
//Função para adicionar a class espaco-topo na body
if (typeof ResponsiveBootstrapToolkit == 'object') {
    (function(jq, document, window, viewport) {
        var $altura_manual = 100;

        //Função para iniciar o affix bootstrap
        if (typeof jq.fn.affix == 'function') {
            jq(function() {
                jq('#nav-principal').affix({
                    offset: {
                        top: $altura_manual
                    }
                });
            });
        }
        jq(this).on('scroll', function() {
            var scroll_pagina = jq(this).scrollTop();
            /*header = jq("#topo").outerHeight(),
            menu = jq("#nav-principal").outerHeight(),
            alturaTopo = header + menu,*/

            if (scroll_pagina > $altura_manual) {
                jq("body").addClass("espaco-topo");
            } else {
                jq("body").removeClass("espaco-topo");
            }
        });

    })(jQuery, document, window, ResponsiveBootstrapToolkit);
}

//Função para troca das classes no responsivo como troca da logo no contraste, classes do rodape
//Plugins necessários ResponsiveBootstrapToolkit, jquery.cookie
if (typeof ResponsiveBootstrapToolkit == 'object') {
    (function(jq, document, window, viewport) {
        var $htmlLogo = jq('.logo-tribunal img').clone().prop('outerHTML'),
            $srcLogo = jq($htmlLogo).attr('src');
        //replace logos
        if ($htmlLogo !== undefined && $srcLogo !== undefined) {
            var logoToggle = function(status) {
                if (status) {
                    $srcLogoResponsive = "on" == Cookies.get("contraste") ? $srcLogo.replace(".png", "-mobile-inverse.png") : $srcLogo.replace(".png", "-mobile.png");
                    jq('.logo-tribunal img').replaceWith(function() {
                        return jq('<img />', {
                            src: $srcLogoResponsive,
                            alt: this.alt,
                        }).append(this.children);
                    });
                } else {
                    var $srcLogoInverse = jq($htmlLogo).attr('src'),
                        $srcLogoDesktop = "on" == Cookies.get("contraste") ? $srcLogo.replace(".png", "-inverse.png") : $srcLogo.replace("-inverse.png", ".png");
                    if (Cookies.get("contraste") == 'on') {

                        if ($srcLogoInverse.indexOf("-inverse.png") < 0) {
                            jq('.logo-tribunal img').replaceWith(function() {
                                return jq('<img />', {
                                    src: $srcLogoDesktop,
                                    alt: this.alt,
                                }).append(this.children);
                            });
                        }

                    } else {
                        jq('.logo-tribunal img').replaceWith(function() {
                            return jq($htmlLogo).append(this.children);
                        });
                    }
                }
            };
        } else {
            logosToggle = function() {
                // console.log($htmlLogo + ' $htmlLogo ' + $srcLogo + ' $srcLogo not found');
                // return null;
            };
        }
        var trocarClassesRodape = function() {
            // jq('.endereco address').removeClass('text-right');
            if (viewport.is("<sm")) {
                textoCentralizado('.endereco address');
            }
            if (viewport.is('>=md')) {
                textoDireita('.endereco address');
            }
        };
        var textoDireita = function(className) {
                jq(className).addClass("text-right").removeClass('text-center');
            },
            textoCentralizado = function(className) {
                jq(className).addClass('text-center').removeClass('text-right');
            };
        var logosToggle = function() {
            if (viewport.is("xs")) {
                logoToggle(true);
            }
            if (viewport.is(">=sm")) {
                logoToggle(false);
            }
        };
        jq(document).ready(function() {
            // logosToggle();
            trocarClassesRodape();
        });
        jq(window).resize(viewport.changed(function() {
            // logosToggle();
            trocarClassesRodape();
        }));
    })(jQuery, document, window, ResponsiveBootstrapToolkit);
}
//checar o número se é numero ou nome
var checkNumber = function(valor) {
    var regra = /^[0-9]+$/;
    if (valor.match(regra)) {
        jq('.campo-data').hide();
    } else {
        jq('.campo-data').show();
    }
};


//Placeholder IE
if (typeof jQuery.fn.placeholder == 'function') {
    (function() {
        if (typeof(Moderniz) === undefined && Modernizr.placeholder === undefined && Modernizr.input.placeholder === false) {
            jQuery('input, textarea').placeholder();
        }
    })();
} else {
    console.log('placeholder plugin not found');
}