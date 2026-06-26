$(document).ready(function(){
	$('.tab-content>div').hide();
	$('.tab-content>div').first().slideDown();
	$('.tab-buttons span').click(function(){
		var thisclass=$(this).attr('class');
		$('#lamp').removeClass().addClass('#lamp').addClass(thisclass);
		$('.tab-content>div').each(function(){
			if($(this).hasClass(thisclass)){
			$(this).fadeIn(800);
	}
	else{
		$(this).hide();
			}
		});
	});
});
$(document).ready(function(){
    $("#topBtn").hide();
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
            $("#topBtn").fadeIn("fast");
        } else {
            $("#topBtn").fadeOut("fast");
        }
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("#footer").innerHeight(); //footer縺ｮ鬮倥＆�茨ｼ晄ｭ｢繧√◆縺�ｽ咲ｽｮ��
        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $("#topBtn").css({
                "position":"absolute", 
                "bottom": footHeight
            });
        } else { 
            $("#topBtn").css({
                "position":"fixed",
                "bottom": "0" 
            });
        }
    });
    $('#topBtn').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 400);
        return false;
    });
});

$(function(){
  $('.mTrigger').on('click',function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $('.mNaviBox').slideUp();
		$('html').removeClass('scroll-prevent');
    } else {
      $(this).addClass('active');
      $('.mNaviBox').slideDown();
		$('html').toggleClass('scroll-prevent');
    }
  });

});


$(document).ready(function(){
	$(function() {
				$("#mm-menu")
					.mmenu({
		extensions 	: [ "theme-dark", "effect-listitems-slide" ],
		iconPanels	: {
			add 		: true,
			visible		: 1
		},
		navbar		: {
			add 		: false
		},
		"offCanvas": {
                  "position": "right"
               },
		counters	: true
					}).on( 'click',
						'a[href^="#/"]',
						function() {
							alert( "Thank you for clicking, but that's a demo link." );
							return false;
						}
					);
					$('a.close').click(function() {
    $(this).closest( '.mm-menu' ).trigger( 'close' ); //髢峨§繧九�繧ｿ繝ｳ
  });
});

});

$(document).ready(function(){
  $('.bxslider').bxSlider({
		touchEnabled: false,
		infiniteLoop: false,
		controls: false,
		pager:false
		}
	);
});

$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});