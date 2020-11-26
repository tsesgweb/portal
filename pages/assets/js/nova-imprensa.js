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
  $('.news-list-sharing').on('click focusin', function () {
    $(this)
      .closest('div')
      .find('.news-list-sharing-overlay')
      .addClass('news-list-sharing-overlay_active')
  })

  $('.news-list-sharing-overlay').on('mouseleave focusout', function () {
    $(this).removeClass('news-list-sharing-overlay_active')
  })

  $('.news-list-sharing-overlay__close').on('click', function () {
    $(this)
      .closest('div')
      .removeClass('news-list-sharing-overlay_active')

    clipboard.destroy()
  })

  // mostra painel de compartilhamento
  $('.radio-list-sharing').on('click focusin', function () {
    $(this)
      .closest('div')
      .find('.radio-list-sharing-overlay')
      .addClass('radio-list-sharing-overlay_active')
  })

  $('.radio-list-sharing-overlay').on('mouseleave focusout', function () {
    $(this).removeClass('radio-list-sharing-overlay_active')
  })

  $('.radio-list-sharing-overlay__close').on('click', function () {
    $(this)
      .closest('div')
      .removeClass('radio-list-sharing-overlay_active')

    clipboard.destroy()
  })
})
