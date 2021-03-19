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

  // var carouselPanelOne = $('.panel__control-navigation');  

  // carouselPanelOne.each(function(key, value){
  //   var $self = $(this);
  //   $self.children('.panel__rich-text').not(':eq(0)').hide();
  //   $self.children('.panel__rich-text').eq(0).addClass('active');
    
  //   var btn = $self.parent().find('.btn');

  //   btn.on('click', function(){
  //     $self.find('.panel__rich-text').each(function(keyp, valuep){
  //       console.log(valuep, keyp);
  //     })

  //     if($self.find('.panel__rich-text').hasClass('active')){
  //       var $next = $self.find('.panel__rich-text').next();

  //       // console.log($next);
  //     }
  //   })
  // })  
})(jQuery);
(function(){
  var panelCarousel = $('.panel__carousel');
  
  panelCarousel.addClass('owl-carousel owl-theme');

  panelCarousel.each(function(){
    var $panelSelf = $(this);
    var $nextButton = $panelSelf.closest('.panel__control-navigation').find('.btn-next');      
    var $prevButton = $panelSelf.closest('.panel__control-navigation').find('.btn-prev');      
    
    $panelSelf.focus();

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
    // stagePadding: 10,
    // margin: 70,    
    // onInitialize: callbackCarousel,
    onChange: callbackCarousel,
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

  function callbackCarousel(event) {
    // Provided by the core
    var element   = event.target;         // DOM element, in this example .owl-carousel
    var name      = event.type;           // Name of the event, in this example dragged
    var namespace = event.namespace;      // Namespace of the event, in this example owl.carousel
    var items     = event.item.count;     // Number of items
    var item      = event.item.index;     // Position of the current item
    // Provided by the navigation plugin
    var pages     = event.page.count;     // Number of pages
    var page      = event.page.index;     // Position of the current page
    var size      = event.page.size;      // Number of items per page

    // console.log(item, pages);
}
  
})(jQuery)