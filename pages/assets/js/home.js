$(document).ready(function () {
  //Script de consulta
  (function () {
    var $tipo = $('.pesquisa-box');
    $('#acao').on('change', $(this), function (e) {
      e.preventDefault();
      var $selecionada = $('option:selected', this);
      $tipo.hide();
      $('#' + $selecionada.val())
        .hide()
        .show();
    });
  })();

  // Script serviços e juridica
  (function () {
    $('#destaqueServico').addClass('show');
    $('#destaqueJuridica').addClass('show');
    Breakpoints.on('sm xs', {
      enter: function () {
        $('#destaqueServico').removeClass('show');
        $('#destaqueJuridica').removeClass('show');

        $('#destaque-servico').on('click focus', function () {
          $('#destaqueServico').collapse('toggle');
        });
        $('#destaque-juridica').on('click focus', function () {
          $('#destaqueJuridica').collapse('toggle');
        });
      },
      leave: function () {
        $('#destaqueServico').addClass('show');
        $('#destaqueJuridica').addClass('show');
      },
    });
  })();

  (function () {

    setTimeout(function () {
      const servicos = $(".destaque-servico").outerHeight();
      const altura_padrao = 697.8;
      const diferenca = 24;
      
      const linhas_diferentes = (servicos - altura_padrao) / diferenca;
            
      Breakpoints.on('lg xl', {
        enter: function () {
          $(".noticia-secundaria").addClass("linha-" + linhas_diferentes);
        },
        leave: function () {
          $(".noticia-secundaria").removeClass("linha-" + linhas_diferentes);
        }
      });
    }, 3000);
    

    




  })();
});
