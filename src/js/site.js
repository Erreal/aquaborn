$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            620:{
                items:2,
                nav:false                
            },
            1000:{
                items:3,
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

    $('.popup_form').click(function(){
        $('.popup_back').show(),
        $('.popup_wrapper').show()
     });
     $('.popup_back').click(function () {
         $('.popup_back').hide();
         $('.popup_wrapper').hide();
         $('#erconts').hide();
         $('.callback-form').show();
       });
       $('#close').click(function () {
         $('.popup_back').hide();
         $('.popup_wrapper').hide();
         $('#erconts').hide();
         $('.callback-form').show();
       });
       $(".callback-form").submit(function(event)
         {
                 $("#erconts").fadeIn(500);
                 $.ajax(
                 {
                         type: "POST",
                         url: "mail.php", // Адрес обработчика
                         data: $(this).serialize(),
                         error:function()
                         {
                                 $("#erconts").html("Произошла ошибка!");
                         },
                         beforeSend: function()
                         {
                                 $("#erconts").html("Отправляем данные...");
                         },
                         success: function(result)
                         {
                                 $('.popup_back').show(),
                                 $('.popup_wrapper').fadeIn(500);
                                 $('.callback-form').hide();
                                 $("#erconts").html(result);
                                 $('html, body').stop().animate({scrollTop : 0}, 100);
 
 
                         }
                 });
         return false;
         });
  });
  $(document).keyup(function(e) {
	if (e.key === "Escape" || e.keyCode === 27) {
		$('.popup_back').hide();
        $('.popup_wrapper').hide();
	}
});
  
