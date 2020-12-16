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
        .find('.'+$klass+'-overlay')
        .addClass($klass+'-overlay_active')
    })

    $('.'+$klass+'-overlay').on('mouseleave focusout', function () {
      $(this).removeClass($klass+'-overlay_active')
    })

    $('.'+$klass+'-overlay__close').on('click', function () {
      $(this)
        .closest($find)
        .removeClass($klass+'-overlay_active')

      clipboard.destroy()
    })
  }

  sharingOverlay('.news-btn-sharing', 'news-list-sharing', '.news-card');
  sharingOverlay('.radio-list-sharing','radio-list-sharing', 'div');   

  //habilita o tooltip

  $('.news-footer button').tooltip({
    container: 'body'
  });
})
