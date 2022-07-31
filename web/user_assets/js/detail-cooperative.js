$(".left-h-c-d-footer").click(function()
{
	$('.right-h-c-d-footer').removeClass('active');
	$('#r-f-l-ft').removeClass('active');

	$('.left-h-c-d-footer').addClass('active');
	$('#l-f-l-ft').addClass('active');



	$('.cp-right-content').removeClass('show');
	$('.cp-right-content').addClass('hide');

	$('.cp-left-content').removeClass('hide');
	$('.cp-left-content').addClass('show');

});

$(".right-h-c-d-footer").click(function()
{
	$('.left-h-c-d-footer').removeClass('active');
	$('#l-f-l-ft').removeClass('active');

	$('.right-h-c-d-footer').addClass('active');
	$('#r-f-l-ft').addClass('active');



	$('.cp-left-content').removeClass('show');
	$('.cp-left-content').addClass('hide');

	$('.cp-right-content').removeClass('hide');
	$('.cp-right-content').addClass('show');
	
	
});




$(".add-avis").click(function()
{
	$('.cp-right-content-formadd').removeClass('hide');
	$('.cp-right-content-formadd').addClass('show');

	$('.cp-right-content-list').removeClass('show');
	$('.cp-right-content-list').addClass('hide');
});

$(".back-avis-link").click(function()
{
	$('.cp-right-content-list').removeClass('hide');
	$('.cp-right-content-list').addClass('show');

	$('.cp-right-content-formadd').removeClass('show');
	$('.cp-right-content-formadd').addClass('hide');
});



$(".add-avis-d").click(function()
{
	$('.list-avis-cooperative-d-add').removeClass('hide');
	$('.list-avis-cooperative-d-add').addClass('show');

	$('.list-avis-cooperative-d-list').removeClass('show');
	$('.list-avis-cooperative-d-list').addClass('hide');
});

$(".back-avis-link").click(function()
{
	$('.list-avis-cooperative-d-list').removeClass('hide');
	$('.list-avis-cooperative-d-list').addClass('show');

	$('.list-avis-cooperative-d-add').removeClass('show');
	$('.list-avis-cooperative-d-add').addClass('hide');
});
