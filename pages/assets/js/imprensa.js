//Barra progressão
$(function () {
  window.onscroll = function () {
    myFunction();
  };

  function myFunction() {
    var winScroll =
      document.body.scrollTop || document.documentElement.scrollTop;
    var height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    if (document.getElementById('barra-progressao')) {
      document.getElementById('barra-progressao').style.width = scrolled + '%';
    }
  }
});

//Titulo da página dentro da imagem
$(function () {
  var procurar_imagem_pagina = $('.order-elementos-header').find(
    '#imagem-principal-texto'
  ).length;

  if (procurar_imagem_pagina) {
    $('.order-elementos-header').addClass('titulo-mobile-imagem');
    var titulo_pagina = $('.noticia-titulo').text();
    $(
      "<span class='titulo-pagina-img'>" + titulo_pagina + '</span>'
    ).insertAfter('#imagem-principal-texto img');
  }
});

//Abrir e fechar sumário no mobile
$(function () {
  $('.abrir-sumario').on('click', function (e) {
    e.stopPropagation();
    $('#navbarSumario').toggleClass('fechar-mobile');
  });
  var path_sumario_link = $('#navbarSumario .navbar-nav .nav-item .nav-link');
  path_sumario_link.on('click', function () {
    $('#navbarSumario').toggleClass('fechar-mobile');
    path_sumario_link.closest('.nav-link').removeClass('ativo');
    $(this).closest('.nav-link').addClass('ativo');
  });
});
