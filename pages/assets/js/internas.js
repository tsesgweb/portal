$(document).ready(function () {
  $('#breadcrumb')
    .wrapInner('<div class="breadcrumb__linha"/>')
    .wrapInner('<div class="breadcrumb__conteudo"/>');
  //Notícias
  //Adiciona a div para envolver noticia-mais-relacionada caso não carregado
  (function () {
    var $selecionarTexto = $('#texto-conteudo'),
      $noticiaMais = $selecionarTexto.find('.noticia-mais');
    if ($noticiaMais.length == 2) {
      $noticiaMais.wrapAll('<div class="noticia-mais-relacionado"/>');
    }
  })();
  /**
   * Adiciona o id manual no portlet da barra lateral de impressa conforme orientação da sedesc4
   */
  (function () {
    var listas = $('#coluna-lateral-noticias').find('.icone.icone-lista'),
      titulo = listas.find('.titulo-personalizado .titulo-padrao');
    listas.each(function (index, value) {
      var titulo = $(value).find('.titulo-personalizado .titulo-padrao');
      if (titulo.text() == 'Contato') {
        $(this).closest('div').attr('id', 'contato-imprensa');
      }
      if (titulo.text() == 'Termos de uso') {
        $(this).closest('div').attr('id', 'termos-uso');
      }
    });
  })();
  //adicionar wrap nas tabelas para deixar responsivo e adicionar a class table-responsive do bootstrap
  (function (ajusteTabelasGeral) {
    ajusteTabelasGeral = $(
      '#texto-conteudo table, #texto-conteudo table.listing.grid, #texto-conteudo table.listing, #texto-conteudo table.grid'
    );
    ajusteTabelasGeral.addClass('table');
    ajusteTabelasGeral.wrap("<div class='table-responsive'></div>");
    return ajusteTabelasGeral;
  })();

  (function () {
    var $url = window.location.href,
      $titulopagina = $('title').text(),
      $tamanhoTela = 'width=600, height=400, top=100, left=110, scrollbars=no';
    //Compartilhar whatsapp
    $('.compartilhar_whatsapp').attr(
      'href',
      'whatsapp://send?text=' + $titulopagina + ' ' + $url + ''
    );
    //Compartilhar facebook
    $('.compartilhar_facebook').click(function (e) {
      window.open(
        'http://www.facebook.com/share.php?u=' +
          $url +
          '&t=' +
          $titulopagina +
          '',
        'Compartilhar via facebook',
        $tamanhoTela
      );
      e.preventDefault();
      e.stopPropagation();
    });
    //Compartilhar G+
    $('.compartilhar-google-plus').click(function (e) {
      window.open(
        'https://plus.google.com/share?url=' + $url + '',
        'Compartilhar via g+',
        $tamanhoTela
      );
      e.preventDefault();
      e.stopPropagation();
    });
  })();
  //datepicker requer bootstrap-datepicker.min.js e bootstrap-datepicker.pt-BR.min.js
  if (typeof jq.fn.datepicker == 'function') {
    $('.input-daterange').datepicker({
      format: 'dd/mm/yyyy',
      language: 'pt-BR',
      orientation: 'bottom right',
      autoclose: true,
    });
    $('.data-para-input input').datepicker({
      format: 'dd/mm/yyyy',
      language: 'pt-BR',
      orientation: 'bottom right',
      autoclose: true,
    });
    //datepicker para serviços ao eleitor
    if (jQuery('.abrir-datetime-picker').length !== 0) {
      jQuery('.abrir-datetime-picker').on('click', function (e) {
        e.preventDefault();
        var target = jQuery(this).closest('div').find('input');
        // target.prop('readonly', true);
        var options = {
          format: 'dd/mm/yyyy',
          language: 'pt-BR',
          autoclose: true,
          orientation: 'top right',
        };
        target.datepicker(options).datepicker('show');
      });
    }
  } else {
    if (typeof jq.fn.mask == 'function') {
      $('.input-daterange input, .data-para-input input').attr(
        'placeholder',
        'dd/mm/yyyy'
      );
      $('.input-daterange input, .data-para-input input').mask('99/99/9999');
    } else {
      $('.input-daterange input, .data-para-input input').attr(
        'placeholder',
        'dd/mm/yyyy'
      );
    }
  }
  if (typeof jq.fn.popover == 'function') {
    $('[data-toggle="popover"]').popover({
      html: true,
    });
    // $('body').on('show.bs.popover', function(e) {
    //     console.log('popover');
    //     // $(e.target.data('bs.popover'));
    // });
    $('body').on('click', function (e) {
      //did not click a popover toggle or popover
      if (
        $(e.target).data('toggle') !== 'popover' &&
        $(e.target).parents('.popover.in').length === 0
      ) {
        $('[data-toggle="popover"]').popover('hide');
      }
    });
  } else {
    var $blocoGestor = $('#gestor-responsavel, .noticia-gestor'),
      $conteudo = $blocoGestor.find('a').data(),
      $blocoNovo = $('<div/>')
        .addClass('gestor-sem-formatacao')
        .appendTo($blocoGestor)
        .hide();
    $blocoNovo.html($conteudo.content);
    $blocoGestor.on('click', 'a', function () {
      $('.gestor-sem-formatacao').toggle();
    });
  }
  //ajuste do template em monocraticas
  (function () {
    var templateMonocraticas = $('body.template-monocraticas-search');
    if (templateMonocraticas.length !== 0) {
      templateMonocraticas.find('input[type="text"]').addClass('form-control');
      templateMonocraticas.find('label').addClass('control-label');
      templateMonocraticas.find('form#form-juris').addClass('form-inline');
      templateMonocraticas.find('#relator').addClass('form-control');
      // templateMonocraticas.find('#tipo_doc, #data_inicial, #data_final').wrapAll("<div class='form-group'/>");
      templateMonocraticas.find('#tipo_doc').addClass('form-control');
      templateMonocraticas.find('#enviar').addClass('btn btn-primary');
      templateMonocraticas.find('.limpar').addClass('btn btn-default');
      templateMonocraticas.find('.botoes').addClass('pull-right');
    }
  })();

  //Adicionar click na imagem de audio
  var embedAudio = $('.embed-responsive-audio'),
    imagem = embedAudio.find('img, .audio-contador, audio'),
    divContador = $('<div class="audio-contador progress"/>');
  imagem.on('click bind', function () {
    audioTracker =
      document.getElementById('audio') ||
      document.getElementsByTagName('audio')[0];

    if (audioTracker.paused) {
      audioTracker.play();
      // embedAudio.prepend(divContador).fadeIn('slow');
      // audioTracker.addEventListener('timeupdate', function() {
      //     $('.audio-contador').html('<time class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="' + ((audioTracker.currentTime / audioTracker.duration) * 100) + '">' + tempoDuracao(audioTracker.currentTime) + '</time>');
      //     $('.progress-bar').css({ 'width': ((audioTracker.currentTime / audioTracker.duration) * 100) + "%" });
      // }, false);
    } else {
      audioTracker.pause();
      // divContador.remove();
    }

    function tempoDuracao(seconds) {
      sec = Math.floor(seconds);
      min = Math.floor(sec / 60);
      min = min >= 10 ? min : '0' + min;
      sec = Math.floor(sec % 60);
      sec = sec >= 10 ? sec : '0' + sec;
      return min + ':' + sec;
    }
  });
  //end
});
(function () {
  var offsetNav,
    menu = $('#nav-principal');
  $('#nav-principal')
    .on('affix-top.bs.affix', function () {
      offsetNav = $(this).trigger('on').outerHeight() + 20;
      // console.log(offsetNav, '3 - affix-top.bs.affix');
    })
    .on('affixed-top.bs.affix', function () {
      offsetNav = $(this).trigger('on').outerHeight() + 20;
      // console.log(offsetNav, '4 - affixed-top.bs.affix');
    })
    .on('affix.bs.affix', function () {
      offsetNav = $(this).trigger('on').outerHeight();
      // console.log(offsetNav, '1 - affix.bs.affix');
    })
    .on('affixed.bs.affix', function () {
      offsetNav = $(this).trigger('on').outerHeight();
      // console.log(offsetNav, '2 - affixed.bs.affix');
    });
  // menu = $('body').find('#nav-principal').outerHeight(),
  //     offsetNav = menu ? menu : 70;
  // Select all links with hashes
  $('a[href*="#"], area[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('[id="ui-collapse-*"]')
    .not('.abas-personalizadas a[href*="#"]')
    .not('.nav-tabs a[href*="#"]')
    .not('[data-toggle="collapse"]')
    .not('a.sr-only-focusable')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate(
            {
              scrollTop: target.offset().top - offsetNav,
            },
            1000,
            function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });
})();

//Funções para o responsivo páginas internas
//Adicionar lrImagemToggle nas abas selecionas
//Necessita do plugin ResponsiveBootstrapToolkit
// if (typeof ResponsiveBootstrapToolkit == 'object') {
//     (function(jq, document, window, viewport) {
//         var lrImagemToggle = function() {
//             var $listaNoticias = $('#lista-noticias');
//             if (viewport.is("<lg")) {
//                 $listaNoticias.find('.lr-imagem').removeClass('media-left').addClass('media-center');
//             } else {
//                 $listaNoticias.find('.lr-imagem').removeClass('media-center').addClass('media-left');
//             }
//         };
//         $(document).ready(function() {
//             lrImagemToggle();
//         });
//         $(window).resize(viewport.changed(function() {
//             lrImagemToggle();
//         }));
//     })(jQuery, document, window, ResponsiveBootstrapToolkit);

// } else {
//     console.error('ResponsiveBootstrapToolkit not found.');
// }

$(function () {
  if ($('#topo-reduzido').length) {
    var linha1 = $('#linha1');
    var linha2 = $('#linha2');
    var bola1 = $('#bola1');
    var bola2 = $('#bola2');
    var bola3 = $('#bola3');
    var socialIcon = $('.social-icon');
    var sharePanelIcons = $('#painel-compartilhamento-icones');

    var tl = new TimelineLite({
      paused: true,
    });

    TweenLite.defaultEase = Back.easeInOut; // Change the default easing

    tl.to(
      [bola1, bola2, bola3],
      0.5,
      {
        transformOrigin: '50% 50%',
        scale: 0,
      },
      0.05
    )
      .to(
        linha1,
        0.5,
        {
          transformOrigin: '50% 50%',
          scale: 2.5,
          rotation: 72,
          y: 82,
          x: 7,
        },
        0.1
      )
      .to(
        linha2,
        0.5,
        {
          transformOrigin: '50% 50%',
          scale: 2.5,
          rotation: -72,
          y: -82,
          x: 7,
        },
        0.1
      )
      .fromTo(
        sharePanelIcons,
        0.5,
        {
          scaleX: 0,
        },
        {
          transformOrigin: '100% 50%',
          scaleX: 1,
          ease: Circ.easeInOut,
        },
        0.1
      )
      .fromTo(
        sharePanelIcons,
        0.4,
        {
          scaleY: 0.8,
          x: -10,
        },
        {
          transformOrigin: '50% 50%',
          scaleY: 1,
          x: 0,
          ease: Circ.easeInOut,
        },
        0.3
      )
      .staggerFromTo(
        socialIcon,
        0.3,
        {
          opacity: 0,
          x: 10,
        },
        {
          opacity: 1,
          x: 0,
        },
        -0.05
      );
  }
  $('#icone-compartilhar').click(function () {
    if ($(this).hasClass('toggled')) {
      tl.reverse();
    } else {
      tl.play();
    }

    $(this).toggleClass('toggled');
  });
});
