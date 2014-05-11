$('#site').delay(800)
  .queue( function(next){ 
    $(this).css('background','red'); 
    next(); 
  }).delay(800)
  .queue( function(next){ 
    $(this).css('background','orange'); 
    next(); 
  }).delay(800)
  .queue( function(next){ 
    $(this).css('background','yellow'); 
    next(); 
  });
  
  
var duration = 1000;
var colors = ['white',
'silver',
'Gray',
'Black',
'Red',
'Maroon',
'Yellow',
'Olive',
'Lime',
'Green',
'Aqua',
'Teal',
'Blue',
'Navy',
'Fuchsia',
'Purple'];
  
$.each(colors, function(index, value){
	$('#site').animate({backgroundColor: value}, duration);
});
  