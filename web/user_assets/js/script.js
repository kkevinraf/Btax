$(".m-right-toggle-list").click(function()
{
	$('.toggle-menu').addClass('is-open');
	$('.toggle-menu').removeClass('is-close');
});


//script ---------------------------- filtre

$(".filter-img").click(function()
{
	$(".filter-img").css('display', "none" );
	$(".filter-form").css('display', "block" );
	$(".filter-img-leave").css('display', "block" );
});


$(".filter-img-leave").click(function()
{
	$(".filter-form").css('display', "none" );
	$(".filter-img-leave").css('display', "none" );
	$(".filter-img").css('display', "block" );
});






//end script ---------------------------- filtre