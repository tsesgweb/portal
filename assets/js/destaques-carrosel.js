(function ($) {
  var containerPrincipal = $('.destaque__principal');
  var destaqueSecundario = $('.destaque-secundario__card');
  var destaqueData = [];

  Breakpoints.on('sm xs', {
    enter: function () {
      destaqueSecundario.each(function (index, card) {
        var template = '';
        var title = $(card).find('.card-title');
        var link = $(card).find('.card-title a');
        var img = $(card).find('img');
        var badge = $(card).find('span');

        badge.removeClass('sr-only');

        template += '<a href="' + link.attr('href') + '" alt="' + link.attr('alt') + '">';
        template += '<div class="destaque__imagem">';
        template += '<img src="' + img.attr('src') + '"/></div>';
        template += '<div class="destaque__titulo">';
        template += '<span class="' + badge.attr('class') + '">' + $(badge).html() + '</span>';
        template += '<h3 class="titulo">' + title.text() + '</h3>'
        template += '</div>'
        template += '</a>';
        destaqueData[index] = template;
      });

      containerPrincipal.append(destaqueData);
      containerPrincipal.addClass('owl-carousel owl-theme');
      containerPrincipal.find('a').wrap('<div class="item"></div>');
      destaqueSecundario.hide();

      containerPrincipal.owlCarousel({
        margin: 0,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });
    },
    leave: function () {
      var items = containerPrincipal.find('.item');
      console.log(items);
      if (items.parent().is('div')) {
        items.unwrap();
        items.eq(1).remove();
        items.eq(2).remove();
      }

      destaqueSecundario.find('span').addClass('sr-only');
      destaqueSecundario.show();
      containerPrincipal.trigger('destroy.owl.carousel');
      containerPrincipal.removeClass('owl-carousel owl-theme');
    }
  });
})(jQuery)