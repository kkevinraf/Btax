$(".see-result").click(function()
{
	$('.search-form').removeClass('is-open');
	$('.search-form').addClass('is-close');

	$('.search-result').removeClass('is-close');
	$('.search-result').addClass('is-open');


	$('.see-result').removeClass('is-open');
	$('.see-result').addClass('is-close');

	$('.run-search').removeClass('is-close');
	$('.run-search').addClass('is-open');
});

$(".run-search").click(function()
{
	$('.search-result').removeClass('is-open');
	$('.search-result').addClass('is-close');

	$('.search-form').removeClass('is-close');
	$('.search-form').addClass('is-open');


	$('.run-search').removeClass('is-open');
	$('.run-search').addClass('is-close');

	$('.see-result').removeClass('is-close');
	$('.see-result').addClass('is-open');

});


$(function()
{
	$('#cooperative-id').change(function()
	{
		var coop = $(this).val();
		if(coop != '')
		{
			$.ajax({
				type: 'get',
				url : Routing.generate('cooperative_getplace', {cooperative: coop,}),
				beforeSend: function()
				{
					//console.log("send");
				},
				success: function(data)
				{
					$("#list-place").html(data.return);
				}
			});
		}
		else
		{
			$("#list-place").html('<option value="">Tous</option>');
		}
			
	});
});
