$(window).on("load", function () {
  // inicia o plugin de copia do link da matéria
  new ClipboardJS(".news-list-sharing-clipboard");
  new ClipboardJS(".radio-list-sharing-clipboard");

  var noticiaListaCardImgOverlay = $(".noticia-listagem_card-img-overlay");

  noticiaListaCardImgOverlay.each(function () {
    var $self = $(this);
    var noticiaListaDescricao = $self.find(".noticia-listagem_description");

    $self
      .on("mouseover", function () {
        noticiaListaDescricao.addClass("exibir");
      })
      .on("mouseleave", function () {
        noticiaListaDescricao.removeClass("exibir");
      });
  });

  // inicializa novo carousel  do bloco de mais lidas
  $(".lateral__mais-lidas-body").owlCarousel({
    loop: true,
    autoHeight: true,
    items: 1,
  });

  // mostra painel de compartilhamento
  function sharingOverlay($btn, $klass, $find) {
    $($btn).on("click focusin", function () {
      $(this)
        .closest($find)
        .find("." + $klass + "-overlay")
        .addClass($klass + "-overlay_active");
    });

    $("." + $klass + "-overlay").on("mouseleave focusout", function () {
      $(this).removeClass($klass + "-overlay_active");
    });

    $("." + $klass + "-overlay__close").on("click", function () {
      $(this)
        .closest($find)
        .removeClass($klass + "-overlay_active");
    });
  }

  sharingOverlay(".news-list-sharing", "news-list-sharing", "div");
  sharingOverlay(".news-list-sharing", "news-list-sharing", ".news-list-col-8");
  sharingOverlay(".news-btn-sharing", "news-list-sharing", ".news-card");
  sharingOverlay(".radio-list-sharing", "radio-list-sharing", "div");

  //habilita o tooltip

  $(".news-footer button").tooltip({
    container: "body",
  });



  //Carousel TV

  var $owl = $(".carousel-faixa-tv");
  var $owl_item = $(".carousel-faixa-tv .item");

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
 
  $(document).on('click', ['.fechar'], function (e) {
    closeCarousel();
  });

  function closeCarousel() {
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
  }

  // Adicionar class na coluna lateral quando não tiver conteúdo na página
  // Ordena os elementos
  // Coloca os banners dentro de uma div
  
  (function() {
    const ancora = $("#ancora-1");
    if(ancora) {
      const conteudo = ancora.html();
      if (conteudo == "") {

        $("#conteudo #coluna-lateral-noticias").addClass("ancora-sem-conteudo");
        $("#conteudo .noticia__linha").attr("id","ordernar-elementos");
        $(".portletWrapper > .radio-lista").wrapAll("<div class='mini-banners'></div>")

      }
    }
  }());

});

(function() {
  var playlistCarousel = $('.playlist__linha');

  if(playlistCarousel.find('.playlist-item').length > 4) {  
  playlistCarousel
    .find('.playlist-item')
    .css({'min-width': '100%'});

  playlistCarousel
  .find('.btn-outline')
  .insertAfter('.playlist__linha')
  .wrap('<div class="playlist__linha"/>');

  playlistCarousel.addClass('owl-carousel owl-theme')
  
  playlistCarousel.owlCarousel({   
    items: 4,     
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
  }
})();


(function () {
  var miniBanners = $('.mini-banners');
  
  if(miniBanners.find('.radio-lista').length > 4) {

    miniBanners.addClass('owl-carousel owl-theme');
    
    miniBanners.find('.radio-lista').css({'min-width': '100%'});
    
    miniBanners.owlCarousel({
      items: 4,    
      margin: 15,         
      dots: true,
      autoplay: true,
      loop: false,
      nav: true,
    });
  }

})(jQuery);