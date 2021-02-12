(function ($) {
  // botoes de compartilhamento
  var $url = window.location.href;

  var $titulopagina = $("title").text();

  var $tamanhoTela = "width=800, height=600, top=100, left=110, scrollbars=no";

  $isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        $isMobile.Android() ||
        $isMobile.BlackBerry() ||
        $isMobile.iOS() ||
        $isMobile.Opera() ||
        $isMobile.Windows()
      );
    },
  };

  // Compartilhar whatsapp
  $(document).on("click", ".compartilhar_whatsapp", function (e) {
    var text, url, message, whatsapp_url;
    text = $titulopagina;
    url = $url;
    message = encodeURIComponent(text) + " - " + url;
    whatsapp_url = $isMobile.any() ?
      "whatsapp://send?text=" + message :
      "https://web.whatsapp.com/send?text=" + message;
    window.location.href = whatsapp_url;
    e.preventDefault();
  });

  // Compartilhar facebook
  $(".compartilhar_facebook").on('click', function (e) {
    window.open(
      "http://www.facebook.com/share.php?u=" +
      $url +
      "&t=" +
      $titulopagina +
      "",
      "Compartilhar via facebook",
      $tamanhoTela
    );
    e.preventDefault();
    e.stopPropagation();
  });
  // abas bs3 to bs4
  var abas = $(".tab-content");
  if (abas.has(".tab-pane.fade.in").length > 1) {
    abas.find(".tab-pane").removeClass("fade in");
  }

  // ancora
  $('a[href*="#"], area[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    // .not('[href="#atalho-busca"]')
    .not('[id="ui-collapse-*"]')
    .not('.abas-personalizadas a[href*="#"]')
    .not('.nav-tabs a[href*="#"]')
    .not('[data-toggle="collapse"]')
    .not("a.mapa-acesso-botao")
    .not("a.sr-only-focusable")
    .click(function (event) {
      if (
        location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length ?
          target :
          $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          event.preventDefault();
          $("html, body").animate({
              scrollTop: target.offset().top,
            },
            1000,
            function () {
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                return false;
              } else {
                $target.attr("tabindex", "-1");
                $target.focus();
              }
            }
          );
        }
      }
    });
  // datepicker requer gijgo.js e messages.pt-br.js
  if (typeof $.fn.datepicker === "function") {
    $(".abrir-datepicker").on("load click", function (e) {
      var $self = $(this);
      $self.mask("99/99/9999").datepicker({
        calendarWeeks: true,
        uiLibrary: "bootstrap4",
        locale: "pt-br",
        format: "dd/mm/yyyy",
      });
      $self.trigger("focus");
    });

    $(".abrir-timepicker").load("load click", function (e) {
      var optionsHora = {
        uiLibrary: "bootstrap4",
        locale: "pt-br",
        modal: true,
      };
      var $self = $(this);
      $self.mask("99:99").timepicker(optionsHora);
      $self.trigger("focus");
    });
  } else {
    if (typeof $.fn.mask === "function") {
      $(".input-daterange input, .data-para-input input").attr(
        "placeholder",
        "dd/mm/yyyy"
      );
      $(".input-daterange input, .data-para-input input").mask("99/99/9999");
    } else {
      $(".input-daterange input, .data-para-input input").attr(
        "placeholder",
        "dd/mm/yyyy"
      );
    }
  }
  // Adicionando bloco nos anos e meses da agenda
  function adicionarBlocosContencao(idAgenda, classeAgenda) {
    var botoes = $(idAgenda);

    var getOnlyID = idAgenda
      .replace(/.agenda-link-calendario__item/, "")
      .trim();
    var getClassName = classeAgenda.replace(/.dropdown-/, "");

    if (botoes.length >= 8) {
      botoes.each(function (index) {
        // Verifico se o elemento já possui um contain
        // verifico se o numero é par, se for ele cria a div e adiciona a class container
        if (index % 3 == 0) {
          $(classeAgenda).append(
            $("<div></div>").addClass("agenda-link-calendario").append($(this))
          );
        } else {
          // se não for par só apendo no ultimo .container que não vai estar completo com 2
          $(classeAgenda).addClass("agenda-" + getClassName + "-responsivo-xs");
          $(classeAgenda + " .agenda-link-calendario:last").append($(this));
        }
      });
      console.log(getOnlyID, getClassName);
      $(classeAgenda + " .agenda-link-calendario").wrapAll(
        '<div id="agenda-' + getClassName + '"/>'
      );

      $(".agenda-link-calendario" + getOnlyID)
        .removeAttr("id")
        .removeClass(".agenda-link-calendario__item")
        .remove();
    }
  }
  if (Breakpoints.is("xs")) {
    adicionarBlocosContencao(
      "#agenda-meses .agenda-link-calendario__item",
      ".dropdown-meses"
    );
    adicionarBlocosContencao(
      "#agenda-anos .agenda-link-calendario__item",
      ".dropdown-anos"
    );
  }

  //Galeria dentro do conteúdo

  (function () {

    $('.carousel-galeria-conteudo .item').each(function (index, value) {
      $(this).attr("posicao", index + 1);
    });

    var owl = $('.carousel-galeria-conteudo');
    owl.owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      items: 1,
      dots: false,
      navText: ["", ""]
    });

    $('.owl-item:not(.cloned) [data-fancybox="galeria_imagem_conteudo"]').fancybox({
      loop: true,
    });

    $('.ampliar-imagem-atual a').on('click', function () {
      var imagem_ativa_galeria = $(".owl-item.active img").attr("src");
      var legenda_ativa_galeria = $(".owl-item.active img").attr("alt");

      $.fancybox.open({
        src: imagem_ativa_galeria,
        opts: {
          caption: legenda_ativa_galeria,
        }

      });

    });

    var total_itens = $('.owl-item:not(.cloned)').length;
    $(".barra-galeria .quantidade-img .contagem .total").html(total_itens);

    owl.on('change.owl.carousel', function (e) {

      setTimeout(function () {
        var posicao = $(".owl-item.active .item").attr("posicao");
        $(".barra-galeria .quantidade-img .contagem .atual").html(posicao);
      }, 500);

    });
  })();
})(jQuery);
