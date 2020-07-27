$(window).on("load", function () {
  var noticiaListaCardImgOverlay = $(".noticia-listagem_card-img-overlay");

  noticiaListaCardImgOverlay.each(function () {
    var $self = $(this);
    var noticiaListaBadge = $self.find(".noticia-listagem_badge");
    var noticiaListaTitulo = $self.find(".noticia-listagem_title");
    var noticiaListaDescricao = $self.find(".noticia-listagem_description");

    $self.css({
      // bottom: 0,
    });

    $self
      .on("mouseover", function () {
        // $self.css({
        //   bottom: noticiaListaTitulo.innerHeight() + "px",
        // });

        noticiaListaDescricao.addClass("exibir");
      })
      .on("mouseleave", function () {
        // $self.css({
        //   bottom: 0,
        // });

        noticiaListaDescricao.removeClass("exibir");
      });
  });
  $(".lateral__mais-lidas-body").owlCarousel({
    loop: true,
    autoHeight: true,
    items: 1,
  });
});
