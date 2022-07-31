var places = [];
var tabStep = [];

var placeChosen = 0;

tabStep[1] = ".content-place-choice";
tabStep[2] = ".content-place-content-info";
tabStep[3] = ".form-paiement";


var tabIndicator = [];

tabIndicator[1] = ".link-step-top-first-item";
tabIndicator[2] = ".link-step-top-second-item";
tabIndicator[3] = ".link-step-top-third-item";

var tabLabel = [];

tabLabel[1] = ".label-step-bottom-first";
tabLabel[2] = ".label-step-bottom-second";
tabLabel[3] = ".label-step-bottom-third";

var id = 1;

function select_place(id)
{
	var place_selected = '#place_'+id;
	if(!places[id])
	{
		$(place_selected).removeClass('place-disponible');
		$(place_selected).addClass('place-selectionne');
		places[id] = id;
		placeChosen = placeChosen + 1;
	}
	else
	{
		if(places[id] === 0)
		{
			$(place_selected).removeClass('place-disponible');
			$(place_selected).addClass('place-selectionne');
			places[id] = id;
			placeChosen = placeChosen + 1;
		}
		else
		{
			$(place_selected).removeClass('place-selectionne');
			$(place_selected).addClass('place-disponible');
			places[id] = 0;
			placeChosen = placeChosen - 1;
		}
		
	}

	addForm()

}

function addForm()
{
	html = "";
	$('#script-form').replaceWith('<div id="script-form"></div>');
	for(i=0; i<places.length; i++)
	{

		if(places[i] && places[i] != 0)
		{
			html = '<div class="passager-form-f">';
			html = html+'<div class="passager-form-f-label"> Place n*'+i;
			html = html+'</div><div class="passager-form-f-form">';
			html = html+'<input type="" name="places_'+i+'" id="formplace_'+i+'" class="passager-form-f-form-input">';
			html = html+'</div></div>';
			$('#script-form').append(html);
		}
		
	}
	
	return null;
}

$('#step1-validation').click(function()
{
	if(placeChosen == 0)
	{
		$('#message1').fadeIn('slow').delay(2000);
	}
	else
	{
		var  unit = $('.price_hidden').val();
		setPrice(unit, placeChosen);

		var id2 = id + 1;
		steps(id, id2);
		id++;
		$('#message1').fadeOut('slow').delay(1);
	}
});


$('#step2-validation').click(function()
{
	var j = 0;
	for(i=0; i<places.length; i++)
	{
		if(places[i] && places[i] != 0)
		{
			formselect = "#formplace_"+i;
			valueform = $(formselect).val();
			if(valueform == '')
			{
				j++;
			}
		}
		
	}

	if(j == 0)
	{
		for(i=0; i<places.length; i++)
		{
			if(places[i] && places[i] != 0)
			{
				formselect = "#formplace_"+i;
				name = valueform = $(formselect).val();

				place = i;
				rm = $('#rm').val();
				//set session
				$.ajax({
					type: 'get',
					url : Routing.generate('paiement_set_session', {	id: rm,
																		nom: name,
																		place: place,
																		}),
					beforeSend: function()
					{
						console.log("send");
					},
					success: function(data)
					{
						//console.log("okok");
					}
				});		
				//=======================================================
			}

		}

		var id2 = id + 1;
		steps(id, id2);
		id++;
		$('#message2').fadeOut('slow').delay(2000);
	}
	else
	{
		$('#message2').fadeIn('slow').delay(2000);
	}
});

function steps(hides, actives)
{

	removeClass(tabStep[hides], "selected");
	addClass(tabStep[hides], "hidee");


	removeClass(tabStep[actives], "hidee");
	addClass(tabStep[actives], "selected");


	removeClass(tabIndicator[hides], "item-active");
	addClass(tabIndicator[actives], "item-active");

	removeClass(tabLabel[hides], "label-active");
	addClass(tabLabel[actives], "label-active");	

}


$('.back-link').click(function()
{
	console.log(id);
	if(id == 1)
	{
		window.location.href = Routing.generate('search_log_out');
	}
	else
	{
		var id2 = id - 1;
		steps(id, id2);
		id--;	
	}
});



var pm_card = '.pm-card';
var pm_paypal = '.pm-paypal';
var pm_mobile_money = '.pm-mobile-money';

var cardForm = '.form-paiement-card';
var paypalForm = '.form-paiement-paypal';
var mobileMoneyForm = '.form-paiement-mobile-money';


$('.pm-card').click(function()
{
	removeClass(pm_paypal, "selected");
	removeClass(pm_mobile_money, "selected");
	addClass(pm_card, "selected");

	removeClass(paypalForm, "selected");
	removeClass(mobileMoneyForm, "selected");
	addClass(paypalForm, "hidee");
	addClass(mobileMoneyForm, "hidee");

	removeClass(cardForm, "hidee");
	addClass(cardForm, "selected");

});

$('.pm-paypal').click(function()
{
	removeClass(pm_card, "selected");
	removeClass(pm_mobile_money, "selected");
	addClass(pm_paypal, "selected");

	removeClass(cardForm, "selected");
	removeClass(mobileMoneyForm, "selected");
	addClass(cardForm, "hidee");
	addClass(mobileMoneyForm, "hidee");

	removeClass(paypalForm, "hidee");
	addClass(paypalForm, "selected");
});

$('.pm-mobile-money').click(function()
{
	removeClass(pm_card, "selected");
	removeClass(pm_paypal, "selected");
	addClass(pm_mobile_money, "selected");

	removeClass(cardForm, "selected");
	removeClass(paypalForm, "selected");
	addClass(cardForm, "hidee");
	addClass(paypalForm, "hidee");

	removeClass(mobileMoneyForm, "hidee");
	addClass(mobileMoneyForm, "selected");
});

$('#orange').click(function()
{
	removeClass("#telma", "card-selected");
	removeClass("#airtel", "card-selected");
	addClass("#orange", "card-selected");
});

$('#telma').click(function()
{
	removeClass("#orange", "card-selected");
	removeClass("#airtel", "card-selected");
	addClass("#telma", "card-selected");
});

$('#airtel').click(function()
{
	removeClass("#orange", "card-selected");
	removeClass("#telma", "card-selected");
	addClass("#airtel", "card-selected");
});

$('#visa').click(function()
{
	removeClass("#mastercard", "card-selected");
	removeClass("#bluecard", "card-selected");
	removeClass("#americanexpress", "card-selected");
	addClass("#visa", "card-selected");
});

$('#mastercard').click(function()
{
	removeClass("#visa", "card-selected");
	removeClass("#bluecard", "card-selected");
	removeClass("#americanexpress", "card-selected");
	addClass("#mastercard", "card-selected");
});

$('#bluecard').click(function()
{
	removeClass("#visa", "card-selected");
	removeClass("#mastercard", "card-selected");
	removeClass("#americanexpress", "card-selected");
	addClass("#bluecard", "card-selected");
});

$('#americanexpress').click(function()
{
	removeClass("#visa", "card-selected");
	removeClass("#mastercard", "card-selected");
	removeClass("#bluecard", "card-selected");
	addClass("#americanexpress", "card-selected");
});


function addClass(c_class, name_class)
{
	$(c_class).addClass(name_class);
}

function removeClass(c_class, name_class)
{
	$(c_class).removeClass(name_class);
}


function setPrice(unit, number)
{
	total_price = unit*number;
	$('.total-price').replaceWith(total_price);
}