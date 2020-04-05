$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            620:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            if ($('#up-button').is(':hidden')) {
                $('#up-button').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#up-button').stop(true, false).fadeOut('fast'); }
    });
    
    $('#up-button').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
  });

  
