$(window).on('load', function () {
  // inicia o plugin de copia do link da matéria  
  var clipboard = new ClipboardJS('.news-list-sharing-clipboard');

  var noticiaListaCardImgOverlay = $('.noticia-listagem_card-img-overlay')

  noticiaListaCardImgOverlay.each(function () {
    var $self = $(this);
    var noticiaListaDescricao = $self.find('.noticia-listagem_description');

    $self
      .on('mouseover', function () {
        noticiaListaDescricao.addClass('exibir');
      })
      .on('mouseleave', function () {
        noticiaListaDescricao.removeClass('exibir');
      });
  });

  // inicializa novo carousel  do bloco de mais lidas
  $('.lateral__mais-lidas-body').owlCarousel({
    loop: true,
    autoHeight: true,
    items: 1
  });

  // mostra painel de compartilhamento
  $('.news-list-sharing').on('click focusin', function () {
    $(this)
      .closest('div')
      .find('.news-list-sharing-overlay')
      .addClass('news-list-sharing-overlay_active')
  });

  $('.news-list-sharing-overlay').on('mouseleave focusout', function () {
    $(this).removeClass('news-list-sharing-overlay_active')
  });

  $('.news-list-sharing-overlay__close').on('click', function () {
    $(this)
      .closest('div')
      .removeClass('news-list-sharing-overlay_active');

    clipboard.destroy();
  });

  // difinir cor do portlets 
  // $('.portletWrapper').eq(1).find('.portlet-card-header').addClass('portlet-card-header_amarelo');
  // $('.portletWrapper').eq(2).find('.portlet-card-header').addClass('portlet-card-header_verde');
  // $('.portletWrapper').eq(3).find('.portlet-card-header').addClass('portlet-card-header_azul');
})



