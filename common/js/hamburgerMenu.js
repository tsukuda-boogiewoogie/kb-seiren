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