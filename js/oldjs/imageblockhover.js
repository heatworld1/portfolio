	$(function() {
			$('div.hover_block div').hover(function(){
				$(this).find('img').animate({top:'182px'},{queue:false,duration:500});
			}, function(){
				$(this).find('img').animate({top:'0px'},{queue:false,duration:500});
			});
			$('div.hover_block2 div').hover(function(){
				$(this).find('img').animate({left:'300px'},{queue:false,duration:500});
			}, function(){
				$(this).find('img').animate({left:'0px'},{queue:false,duration:500});
			});
		});