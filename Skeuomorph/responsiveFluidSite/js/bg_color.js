//function to display the background color depending on the time of day; blues
$(document).ready(function() {
	//backgroundColor();
	setInterval(backgroundColor, 1000);

	function backgroundColor(){
		var skyColor,
			
			t = new Date().getHours();
			
			
		switch(t){
			case 0:
				skyColor = '0F1425';
				break;
			case 1:
				skyColor = '141B2E';
				break;
			case 2:
				skyColor = '12223C';
				break;
			case 3:
				skyColor = '223560';
				break;
			case 4:
				skyColor = '2D4C8B';
				break;
			case 5:
				skyColor = '4570B4';
				break;
			case 6:
				skyColor = '629DD4';
				break;
			case 7:
				skyColor = '5E95CE';
				break;
			case 8:
				skyColor = 'B7E1F7';
				break;
			case 9:
				skyColor = 'A8D4EF';
				break;
			case 10:
				skyColor = 'A1C7EB';
				break;
			case 11:
				skyColor = '96BFE3';
				break;
			case 12:
				skyColor = '7ec0ee';
				break;
			case 13:
				skyColor = '779CC9';
				break;
			case 14:
				skyColor = '6E93C0';
				break;
			case 15:
				skyColor = '6E7DB8';
				break;
			case 16:
				skyColor = '374493';
				break;
			case 17:
				skyColor = '262D63';
				break;
			case 18:
				skyColor = '272E64';
				break;
			case 19:
				skyColor = '151A3D';
				break;	
			case 20:
				skyColor = '14142C';
				break;	
			case 21:
				skyColor = '111423';
				break;
			case 22:
				skyColor = '100F17';
				break;
			case 23:
				skyColor = '060709';
				break;
			default:
				skyColor = '000000';
				break;
		}
		
		//convertColor = parseInt(skyColor, 16) + 25;
		convertColor = parseInt(skyColor, 16);
		skyColorDark = '#'+convertColor.toString(16);
		//console.log(skyColorDark);
		skyColor = '#'+skyColor;
		//console.log(skyColor);
		
		$('body').animate({backgroundColor: '#'+skyColor});
		//$('body').css({background: 'linear-gradient('+skyColor+', '+(skyColorDark)+') repeat-x '+skyColorDark});
	}
});

