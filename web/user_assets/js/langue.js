$(function()
{
	$('#langue-account').change(function()
	{
		var langue = $(this).val();
		if(langue != '')
		{
			$.ajax({
				type: 'get',
				url : Routing.generate('langue_update', {langue: langue,}),
				beforeSend: function()
				{
					//console.log("send");
				},
				success: function(data)
				{
					window.location.href = Routing.generate('book_myaccount');
				}
			});
		}
		else
		{
			alert("Une erreur est survenue");
		}
			
	});
});

$(function()
{
	$('#langue-home').change(function()
	{
		var langue = $(this).val();
		if(langue != '')
		{
			$.ajax({
				type: 'get',
				url : Routing.generate('langue_update_home', {langue: langue,}),
				beforeSend: function()
				{
					//console.log("send");
				},
				success: function(data)
				{
					window.location.href = Routing.generate('book_homepage');
				}
			});
		}
		else
		{
			alert("Une erreur est survenue");
		}
			
	});
});