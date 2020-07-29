$(window).on("load", function () {
  var sm = Breakpoints.get("sm");
  var destaqueCarregando = $(".destaque__carregando");
  var destaque = $("#destaque-principal");
  destaque.removeClass("oculto");
  destaqueCarregando.addClass("oculto");

  // ajuste automatico do sutiã do destaque pricipal
  function destaqueTituloHandler() {
    var destaqueTitulo = $(".destaque__titulo");
    var sutiaHeight = destaqueTitulo.find(".sutia").innerHeight();
    var iconeVideo = $(".destaque__principal .icone");
    var dots = $(".destaque__principal .owl-dots").innerHeight() / 2;

    destaqueTitulo.css({
      bottom: "-" + sutiaHeight + "px",
    });

    if (dots !== NaN) {
      destaqueTitulo.css({
        bottom: sutiaHeight + dots + "px",
      });
    }

    destaqueTitulo
      .on("mouseover focusin", function () {
        iconeVideo.addClass("transition");
        destaqueTitulo.css({
          bottom: 0,
        });
      })
      .on("mouseleave focusout", function () {
        iconeVideo.removeClass("transition");
        destaqueTitulo.css({
          bottom: "-" + sutiaHeight + "px",
        });
      });
  }
  destaqueTituloHandler();

  window.resizeEvt;
  $(window).bind("resize load", $(this), function () {
    clearTimeout(window.resizeEvt);
    window.resizeEvt = setTimeout(function () {
      // code to do after window is resized
      destaqueTituloHandler();
    }, 250);
  });
  var destaquePrincipal = $(".destaque__principal");

  var img = destaquePrincipal.find(".destaque__imagem > img");
  var topoAcessibilidade = $(".acessibilidade").outerHeight();
  var menu = $(".menu").outerHeight();
  var imgSrc = img.attr("src");
  var imgW = img.attr("width");
  var imgH = img.attr("height");

  if ($(window).width() > sm.max && !destaque.has(".destaque-full").length) {
    destaque.append('<div class="destaque-full"/>');
  }

  var destaqueFull = $(".destaque-full");

  if (!destaqueFull.has(".destaque-full-img").length) {
    destaqueFull.append('<div class="destaque-full-img"/>');
  }

  var destaqueFullImg = $(".destaque-full-img");

  if (destaqueFull.length) {
    destaqueFull.css({
      height: destaquePrincipal.innerHeight(),
      top: topoAcessibilidade + menu,
    });
  }

  function imagemPosition(h) {
    destaqueFullImg.css({
      height: h,
      "background-image": "url(" + imgSrc + ")",
    });
  }

  Breakpoints.on("sm xs", {
    enter: function () {
      imagemPosition(
        destaquePrincipal.parent(".destaque__linha").innerHeight()
      );
    },
    leave: function () {
      imagemPosition(destaquePrincipal.innerHeight());
    },
  });
  // you can do in a chain
  Breakpoints.on("md lg", {
    enter: function () {
      imagemPosition(destaquePrincipal.innerHeight());
      destaqueTituloHandler();
    },
    leave: function () {
      imagemPosition(
        destaquePrincipal.parent(".destaque__linha").innerHeight()
      );
      destaqueTituloHandler();
    },
  });

  $(".fancybox-action").fancybox({
    lang: "pt",
    i18n: {
      pt: {
        CLOSE: "Fechar",
        NEXT: "Próximo",
        PREV: "Anterior",
        ERROR:
          "O conteúdo solicitado não pode ser carregado. <br/> Por favor, tente novamente mais tarde.",
        PLAY_START: "Começar slideshow",
        PLAY_STOP: "Pausar slideshow",
        FULL_SCREEN: "Full screen",
        THUMBS: "Miniaturas",
        DOWNLOAD: "Download",
        SHARE: "Compartilhar",
        ZOOM: "Zoom",
      },
    },
    buttons: ["close"],
    btnTpl: {
      picture:
        '<button id="togglePipButton" class="fancybox-button fancybox-button--picture-in-picture" title="Miniplayer">' +
        '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 7h-8v6h8V7zm2-4H3c-1.1 0-2 .9-2 2v14c0 1.1.9 1.98 2 1.98h18c1.1 0 2-.88 2-1.98V5c0-1.1-.9-2-2-2zm0 16.01H3V4.98h18v14.03z"/></svg>' +
        "</button>",
    },
    youtube: {
      controls: 0,
      showinfo: 0,
    },
  });
});
