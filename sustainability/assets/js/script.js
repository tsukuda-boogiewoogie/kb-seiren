$(function(){
	/* roll over */
	$(document).on('mouseenter','.imgover',function(){
		$(this).attr('src', $(this).attr('src').replace('_off', '_on'));
	});
	$(document).on('mouseleave','.imgover',function(){
		$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
	});
	
	/* roll over */
	$(document).on('mouseenter','.alpHov',function(){
		$(this).not(":animated").animate({"opacity":"0.5"},"fast");
	});
	$(document).on('mouseleave','.alpHov',function(){
		$(this).animate({"opacity":"1"},"fast");
	});
	/* smooth scroll */
	// $('a[href^="#"]').click(function(){
	// 	var href= $(this).attr("href");
	// 	var target = $(href == "#" || href == "" ? 'html' : href);
	// 	var position = target.offset().top;
	// 	$("html, body").animate({scrollTop:position}, 400,"swing");
	// 	return false;
	// });
});