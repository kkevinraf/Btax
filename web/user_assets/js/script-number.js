var numbers = document.getElementById('number-count-c');
var nbr = 1;
for(i=1; i<10; i++)
{
	var span = document.createElement('span');
	span.textContent = i;
	numbers.appendChild(span);
}

var num = numbers.getElementsByTagName('span'); 
num[0].style.display = 'initial';
	var index = 0;
	function nextNum()
	{
		num[index].style.display = 'none';
		index = (index + 1) % num. length;
		num[index].style.display = 'initial';

		nbr++;
		if(nbr >= 10)
		{
			nbr = 1;
		}
		$('#nbrPlace').val(nbr);
	}

	function prevNum()
	{
		num[index].style.display = 'none';
		index = (index - 1 + num. length) % num. length;
		num[index].style.display = 'initial';

		nbr--;
		if(nbr <= 0)
		{
			nbr = 9;
		}
		$('#nbrPlace').val(nbr);
	}