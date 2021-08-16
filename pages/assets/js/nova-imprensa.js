$(window).on('load', function () {
  // inicia o plugin de copia do link da matéria
  var clipboard = new ClipboardJS('.news-list-sharing-clipboard')

  var noticiaListaCardImgOverlay = $('.noticia-listagem_card-img-overlay')

  noticiaListaCardImgOverlay.each(function () {
    var $self = $(this)
    var noticiaListaDescricao = $self.find('.noticia-listagem_description')

    $self
      .on('mouseover', function () {
        noticiaListaDescricao.addClass('exibir')
      })
      .on('mouseleave', function () {
        noticiaListaDescricao.removeClass('exibir')
      })
  })

  // inicializa novo carousel  do bloco de mais lidas
  $('.lateral__mais-lidas-body').owlCarousel({
    loop: true,
    autoHeight: true,
    items: 1
  })

  // mostra painel de compartilhamento
  function sharingOverlay($btn, $klass, $find) {
    $($btn).on('click focusin', function () {
      $(this)
        .closest($find)
        .find('.' + $klass + '-overlay')
        .addClass($klass + '-overlay_active')
    })

    $('.' + $klass + '-overlay').on('mouseleave focusout', function () {
      $(this).removeClass($klass + '-overlay_active')
    })

    $('.' + $klass + '-overlay__close').on('click', function () {
      $(this)
        .closest($find)
        .removeClass($klass + '-overlay_active')

      clipboard.destroy()
    })
  }

  sharingOverlay('.news-list-sharing', 'news-list-sharing', '.news-list-col-8');
  sharingOverlay('.news-btn-sharing', 'news-list-sharing', '.news-card');
  sharingOverlay('.radio-list-sharing', 'radio-list-sharing', 'div');

  //habilita o tooltip

  $('.news-footer button').tooltip({
    container: 'body'
  });



  //Carousel TV

  var $owl = $('.carousel-faixa-tv');
  var $owl_item = $('.carousel-faixa-tv .item');

  var tamanho_cards;

  var xs = window.matchMedia("(min-width: 0px) and (max-width: 576px)");
  var sm = window.matchMedia("(min-width: 577px) and (max-width: 768px)");
  var md = window.matchMedia("(min-width: 769px) and (max-width: 992px)");
  var lg = window.matchMedia("(min-width: 993px) and (max-width: 1199px)");
  var xl = window.matchMedia("(min-width: 1200px)");

  $owl.children().each(function (index) {
    $(this).attr('data-position', index);
  });

  var margin_blocos = 10;

  $owl.owlCarousel({
    center: true,
    loop: true,
    items: 5,
    margin: margin_blocos,
    autoWidth:true,
    responsive: {
      0: {
        items: 1,
        autoHeight: true,
        mergeFit: true
      },
      576: {
        items: 2,
        autoHeight: true,
      },
      768: {
        items: 3,
        autoHeight: true,
      },
      992: {
        items: 4,
        autoHeight: true,
      },
      1200: {
        items: 4,
        autoHeight: true,
      }
    }
  });

  if (xs.matches) {
    var tamanho_cards = 300;
  } else if (sm.matches) {
    var tamanho_cards = 310;
  } else if (md.matches) {
    var tamanho_cards = 330;
  } else if (lg.matches) {
    var tamanho_cards = 350;
  } else if (xl.matches) {
    var tamanho_cards = 370;
  }

  var tamanho_cards_px = tamanho_cards + "px";

  $owl_item.each(function () {
    $(this).css("width", tamanho_cards_px);
  });

  // Centraliza o box

  jQuery.fn.center = function (parent) {
    if (parent) {
      parent = this.parent();
    } else {
      parent = window;
    }
    this.css({
      "position": "absolute",
      "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
    });
    return this;
  }


  function criar_div_conteudo(width, height, nome_div, conteudo) {

    //Procurar se já existe a div.carousel-faixa-tv
    var procurar_div = $(".carousel-faixa-tv").find(".overlay-conteudo").length;

    if (procurar_div == 0) {
      $(".carousel-faixa-tv").append("<div class='overlay-conteudo'><div class='" + nome_div + "'></div><span class='overlay'></span></div>");
    } else {
      $(".overlay-conteudo").html("<div class='" + nome_div + "'></div><span class='overlay'></span>");
    }

    var largura_tela = $("body").width();
    var largura_final_box;
    var left_final_box;

    if (xs.matches || sm.matches) {
      largura_final_box = largura_tela - 20;
      $("." + nome_div).css("height", "auto");

      setTimeout(function () {
        var novo_heigth = $("." + nome_div).height();
        $(".owl-stage-outer.owl-height").css({
          height: novo_heigth
        });
      }, 500);

    } else if (sm.matches) {
      largura_final_box = largura_tela - 50;
    } else if (md.matches) {
      largura_final_box = largura_tela - 100;
    } else if (lg.matches) {
      largura_final_box = largura_tela - 150;
    } else if (xl.matches) {
      largura_final_box = largura_tela - 200;
    }

    left_final_box = (largura_tela - largura_final_box) / 2;

    $("." + nome_div).css({
      "width": width,
      height: height
    });
    $("." + nome_div).center(true);
    $("." + nome_div).animate({
      width: largura_final_box,
      left: left_final_box
    });

    $("." + nome_div).html(conteudo);

    $(".owl-nav button").prop("disabled", true);
  }

  $(document).on('click', '.owl-item>div', function () {
    var $speed = 300;
    $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);

    var conteudo = $(this).html();
    var width = $(this).width();
    width = width + margin_blocos;
    var height;
    var div_conteudo = "conteudo-carousel";

    

    setTimeout(function () {
      criar_div_conteudo(width, height, div_conteudo, conteudo);
    }, 1000);

  });

  $(document).on('click', '.fechar', function () {
    $(".owl-nav button").prop("disabled", false);
    $(".owl-stage-outer.owl-height").css({
      height: "auto"
    });
    $(".overlay-conteudo").animate({
      opacity: "0"
    });
    setTimeout(function () {
      $(".overlay-conteudo").remove();
    }, 300);
  });


  //    
  // var $owl_item = $('.carousel-faixa-tv .item');

  // var tamanho_cards_fechado;
  // var tamanho_cards_aberto;

  // var xs = window.matchMedia("(min-width: 0px) and (max-width: 576px)");
  // var sm = window.matchMedia("(min-width: 577px) and (max-width: 768px)");
  // var md = window.matchMedia("(min-width: 769px) and (max-width: 992px)");
  // var lg = window.matchMedia("(min-width: 993px) and (max-width: 1199px)");
  // var xl = window.matchMedia("(min-width: 1200px)");

  // if (xs.matches) {
  //   // console.log("xs");
  //   var tamanho_cards_fechado = 300;
  //   var tamanho_cards_aberto = 300;
  // } else if (sm.matches) {
  //   // console.log("sm");
  //   var tamanho_cards_fechado = 310;
  //   var tamanho_cards_aberto = 500;
  // } else if (md.matches) {
  //   // console.log("md");
  //   var tamanho_cards_fechado = 330;
  //   var tamanho_cards_aberto = 700;
  // } else if (lg.matches) {
  //   // console.log("lg");
  //   var tamanho_cards_fechado = 350;
  //   var tamanho_cards_aberto = 900;
  // } else if (xl.matches) {
  //   // console.log("xl");
  //   var tamanho_cards_fechado = 370;
  //   var tamanho_cards_aberto = tamanho_cards_fechado * 3;
  // }

  // var tamanho_cards_fechado_px = tamanho_cards_fechado + "px";
  // var tamanho_cards_aberto_px = tamanho_cards_aberto + "px";

  // $owl_item.each(function () {
  //   $(this).css("width", tamanho_cards_fechado_px);
  // });

  // function settings_carousel_faixa() {

  //   $owl.children().each(function (index) {
  //     $(this).attr('data-position', index);
  //   });

  //   $('.carousel-faixa-tv').owlCarousel({
  //     loop: true,
  //     merge: true,
  //     center: true,
  //     responsiveClass: true,
  //     nav: true,
  //     margin: 10,
  //     navText: ["", ""],
  //     autoWidth: true,
  //     responsive: {
  //       0: {
  //         items: 1,
  //         autoHeight: true,
  //         mergeFit: true
  //       },
  //       576: {
  //         items: 2,
  //         autoHeight: true,
  //         mergeFit: true
  //       },
  //       768: {
  //         items: 3,
  //         autoHeight: true,
  //         mergeFit: true
  //       },
  //       992: {
  //         items: 4,
  //         autoHeight: true,
  //         mergeFit: true
  //       },
  //       1200: {
  //         items: 5,
  //         autoHeight: true,
  //         mergeFit: false
  //       }
  //     }
  //   });
  // }

  // function click_abrir_cards(posicao) {

  //   $(".control-cft .posicao").text(posicao);
  //   var posicao_guardada = $(".control-cft .posicao").text();
  //   $owl.trigger('destroy.owl.carousel');
  //   $owl_item.css("width", tamanho_cards_fechado_px);
  //   $owl_item.removeClass("item-aberto");
  //   $owl_item.addClass("fechado");
  //   $owl_item.eq(posicao_guardada).css("width", tamanho_cards_aberto_px);
  //   $owl_item.eq(posicao_guardada).addClass("item-aberto");
  //   $owl_item.eq(posicao_guardada).removeClass("fechado");
  //   $owl_item.eq(posicao_guardada).prependTo('.carousel-faixa-tv');

  //   $owl_item.each(function (index, e) {
  //     $(this).attr("data-position", index);
  //   });

  //   $owl.addClass("item-aberto");

  //   settings_carousel_faixa();
  // }

  // function click_fechar_card() {
  //   $owl.trigger('destroy.owl.carousel');
  //   $owl_item.css("width", "350px");
  //   $owl_item.each(function (index, e) {
  //     $(this).attr("data-position", index);
  //   });

  //   settings_carousel_faixa();
  // }

  // settings_carousel_faixa();

  // $(document).on('click', '.owl-item > div', function (e) {

  //   var posicao_click = $(this).attr("data-position");
  //   var situacao_item = $(this).hasClass("item-aberto");

  //   $this = $(this);

  //   if (!situacao_item) {

  //     var $speed = 300;
  //     $owl.trigger('to.owl.carousel', [$this.data('position'), $speed]);

  //     setTimeout(function () {
  //       click_abrir_cards(posicao_click);
  //     }, 700);

  //     return false;
  //   }
  // });

  // $(".carousel-faixa-tv .item .fechar").on('click', function () {

  //   $(this).closest(".item").removeClass("item-aberto");
  //   $(this).closest(".item").addClass("fechado");

  //   setTimeout(function () {
  //     click_fechar_card();
  //   }, 100);

  //   return false;
  // });



});
