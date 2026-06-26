$(function(){

	$('a[href^=#]').click(function(){

		var speed = 300;

		var href= $(this).attr("href");

		var target = $(href == "#panahome" || href == "" ? 'html' : href);

		var position = target.offset().top;

		$("html, body").animate({scrollTop:position}, speed, "swing");

		return false;

	});

});



$(function(){

$('.bxslider').bxSlider({

  infiniteLoop: false,

	controls: false,

	pagerCustom: '#bx-pager',

  hideControlOnEnd: true

});

});