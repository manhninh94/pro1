$(function(){

	$('ul > li.active').parents('ul').css('display', 'block');
	$('ul > li.active').parents('li').find('span:first').addClass('open');
	$('li > span').on('click',function(){
		$(this).toggleClass('open');
	})
});