$(document).ready(function()
{
	$('.vedautrang').hide();
	$(window).scroll(function(){
		if($(this).scrollTop()>100)
	{
		$('.vedautrang').fadeIn();
	}
	else
	{
		$('.vedautrang').fadeOut();
	}});
	$(".vedautrang").click(function()
	{
		$('html,body').animate({scrollTop:0},800);
		return false;
	});
});
		