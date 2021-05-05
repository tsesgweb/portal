(function($){
  // setar imagem de fundo na section
  
  var panel = $('.panel');

  panel.each(function(){
    var $self = $(this);
    var $bgImage = $self.data('bg-img');    
    if($bgImage !== undefined) {
      $self.css({backgroundImage: 'url('+$bgImage+')'});
    }   
  })  
})(jQuery);
(function(){
  var panelCarousel = $('.panel__carousel');
  
  
  panelCarousel.addClass('owl-carousel owl-theme');
  
  panelCarousel.each(function(){    
    var $panelSelf = $(this);
    var $nextButton = $panelSelf.closest('.panel__control-navigation').find('.btn-next');      
    var $prevButton = $panelSelf.closest('.panel__control-navigation').find('.btn-prev');          
      
    $nextButton.each(function() {      
      var $btnSelf = $(this);
      $btnSelf.on('click', function(){        
        $panelSelf.trigger('next.owl.carousel');        
      })
    });

    $prevButton.each(function() {      
      var $btnSelf = $(this);
      $btnSelf.on('click', function(){        
        $panelSelf.trigger('prev.owl.carousel');        
      })
    })  
    
    $panelSelf.on('changed.owl.carousel', function(event){      
      var $self = $(this);
      var $progress = $(this).closest('.panel__control-navigation').find('.panel__status-bg-color');      
      
      var items     = event.item.count;     // Number of items
      var item      = event.item.index + 1;     // Position of the current item      
      var total     = (item  / items)  * 100;
      
      $progress.css({width: total + '%'})

      if(item === items) {
        $nextButton.hide();        
      } else if (item === 1){        
        $prevButton.hide();
      } else  {
        $prevButton.show();
        $nextButton.show();
      }      

      $self.closest('.panel').focus().one('keyup', function(event){
        if(event.key === undefined) return;
        if(event.key === 'ArrowRight'){          
          $panelSelf.trigger('next.owl.carousel');
        } else if(event.key === 'ArrowLeft') {          
          $panelSelf.trigger('prev.owl.carousel');
        } else {
          $panelSelf.trigger('refresh.owl.carousel')
        }
      })
       
    })
  })  

  panelCarousel.owlCarousel({
    items: $(this).data('carousel-more') ? 2 : 1,
    nav: false,
    dots: false, 
    rtl: false, 
    autoWidth: false,     
    responsive: {
      1140: {
        items:1
      }
    }
  })  

  panelCarousel.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl.carousel');
    } else {
        owl.trigger('prev.owl.carousel');
    }
    e.preventDefault();
  });

  
  
})(jQuery);

(function(){
  var timelineNav = $('.timeline-nav a');

  timelineNav.on('click',function(event){
    event.preventDefault();
    $(this).tab('show');
  });  

})(jQuery);
(function(){
  var cardCarousel  = $('.card-carousel');
  var qtd           = cardCarousel.data('columns');
  var padding       = cardCarousel.closest('.cards').data('padding');
  var totalItems    = qtd !== undefined ? qtd : 4;

  cardCarousel.addClass('owl-carousel owl-theme');
  
  cardCarousel.owlCarousel({    
    items: totalItems,        
    dots: false,
    navText: ['<span class="sr-only">Anterior</span>','<span class="sr-only">Próximo</span>'],    
    nav: true,
    stagePadding: padding ? padding : 0,    
    margin: 15,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      768: {
        items: totalItems / 2,        
      },
      1140: {
        items: totalItems,
      }
    }
  }); 

})(jQuery);
(function(){
  var nav = $('.timeline-nav');
  var navLink = nav.find('.timeline-link');
  var subLink = nav.find('.timeline-link + .timeline-link');
  var content = $('.timeline__content .timeline-pane');
  Breakpoints.on('xs', {
    enter: function() {    
    nav.hide();
    
    content.each(function(index, value){
      var $self = $(this);
      subLink.addClass('timeline-pane__sublink').eq(index);
      var $navs = navLink.clone().addClass('timeline-pane__link').eq(index);
      
      $self.closest('.timeline__content').addClass('timeline__content-link').attr('role', 'tablist');
      $self.before($navs);
    });
    },
    leave: function() {
      $('.timeline__content-link a').remove();
      $('.timeline__content').removeClass('timeline__content-link');
      nav.show();
    }
});
  
    
  
  
})(jQuery);