jQuery(document).ready(function($) {
  var vitrimenu=$('.header').offset().top;
  $(window).scroll(function(event) {
    var vitribody=$('html,body').scrollTop();

    if(vitribody>vitrimenu){
      $('.header').addClass('fix-area-top');
    }
    else{
      $('.header').removeClass('fix-area-top');
    }

  });

 // BACK-TO-TOP
    

  $('.back-to-top').fadeOut();
  $(window).scroll(function() { 

      if($(window).scrollTop() != 0) { 
        $('.back-to-top').fadeIn();
     }else {
         $('.back-to-top').fadeOut();
     }
    });
  
  $('.back-to-top').on('click', function(event) {
    event.preventDefault();
    $('html,body').animate({scrollTop:0}, 1200);
  });
    
  // END

});



