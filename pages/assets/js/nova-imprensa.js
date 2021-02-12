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

  function settings_carousel_faixa() {

    $owl.children().each(function (index) {
      $(this).attr('data-position', index);
    });


    $('.carousel-faixa-tv').owlCarousel({
      loop: true,
      merge: true,
      center: true,
      responsiveClass: true,
      nav: true,
      margin: 10,
      navText: ["", ""],
      responsive: {
        0: {
          items: 1,
          autoHeight: true,
          mergeFit: true
        },
        576: {
          items: 2,
          autoHeight: true,
          mergeFit: true
        },
        768: {
          items: 3,
          autoHeight: true,
          mergeFit: true
        },
        992: {
          items: 4,
          autoHeight: true,
          mergeFit: true
        },
        1200: {
          items: 5,
          autoHeight: true,
          mergeFit: false
        }
      }
    });
  }

  function click_abrir_cards(posicao) {

    var item_carousel = $(".carousel-faixa-tv .item");

    $(".control-cft .posicao").text(posicao);
    var posicao_guardada = $(".control-cft .posicao").text();
    $owl.trigger('destroy.owl.carousel');
    $(".carousel-faixa-tv .item").attr("data-merge", "1");
    $(".carousel-faixa-tv .item").removeClass("item-aberto");
    $(".carousel-faixa-tv .item").eq(posicao_guardada).attr("data-merge", "3");
    $(".carousel-faixa-tv .item").eq(posicao_guardada).addClass("item-aberto");
    $(".carousel-faixa-tv .item").eq(posicao_guardada).prependTo('.carousel-faixa-tv');

    $(".carousel-faixa-tv .item").each(function (index, e) {
      $(this).attr("data-position", index);
    });

    $owl.addClass("item-aberto");

    settings_carousel_faixa();
  }

  function click_fechar_card() {
    $owl.trigger('destroy.owl.carousel');
    $(".carousel-faixa-tv .item").attr("data-merge", "1");
    $(".carousel-faixa-tv .item").each(function (index, e) {
      $(this).attr("data-position", index);
    });
    
    settings_carousel_faixa();
    // $(".carousel-faixa-tv .owl-item.center .item").removeClass("item-aberto");
  }
  
  settings_carousel_faixa();
  
  
  $(document).on('click', '.owl-item > div', function (e) {
    
    var posicao_click = $(this).attr("data-position");
    var situacao_item = $(this).hasClass("item-aberto");
    
    if (!situacao_item) {
      
      var $speed = 300;
      $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      
      setTimeout(function () {
        click_abrir_cards(posicao_click);
      }, 700);
      
      return false;
    }
  });
  
  $(".carousel-faixa-tv .item .fechar").on('click', function () {
    
    $(this).closest(".item").removeClass("item-aberto");
    
    setTimeout(function () {
      click_fechar_card();
    }, 100);

    return false;
  });



});
