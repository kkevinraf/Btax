var tab_check = Array;
var nbrplace = 0;

$(function()
{
	$('#colomn-place').change(function()
	{
		//alert($('#colomn-place').val());
		changePlace($('#colomn-place').val(), $('#line-place').val());
	});

});

$(function()
{
	
	$('#line-place').change(function()
	{
		//alert($('#colomn-place').val());
		changePlace($('#colomn-place').val(), $('#line-place').val());
	});
});

function changePlace(colomn, line)
{ 
	var incr = 0;
	var tab = "";
	nbrplace = 0;
	tab_check = Array();

	for(i = 0 ; i < line ; i++)
	{
		tab = tab + '<tr>';
		tab_check[i] = new Array();

		for(j = 0; j < colomn ; j++)
		{
			if(!tab_check [i]) tab_check [i] = new Array();
			if(i==0 && j==0)
			{
				tab = tab + '<td><div class="chauffeur"></div></td>';
				tab_check[i][j] = 0;
			}
			else
			{
				incr++;
				tab = tab + '<td><div id = "place_'+i+'_'+j+'" class="place-disponible" onclick="check('+i+','+j+')">'+incr+'</div></td>';
				tab_check[i][j] = 0;
			}
		}

		tab = tab + '</tr>';
	}

	$('.table-place').html(tab);
	$('#nbplace').val(nbrplace);
	$('#arrayplace').val(tab_check);

}


function check(ligne, colonne)
{
	if(tab_check[ligne][colonne] == 0)
	{
		tab_check[ligne][colonne] = 1;
		$('#place_'+ligne+'_'+colonne).removeClass('place-disponible');
		$('#place_'+ligne+'_'+colonne).addClass('place-selectionne');
		nbrplace++;
	}
	else
	{
		tab_check[ligne][colonne] = 0;
		$('#place_'+ligne+'_'+colonne).removeClass('place-selectionne');
		$('#place_'+ligne+'_'+colonne).addClass('place-disponible');
		nbrplace--;
	}
	
	$('#nbplace').val(nbrplace);
	$('#arrayplace').val(tab_check);
}