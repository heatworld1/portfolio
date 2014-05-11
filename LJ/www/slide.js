$(document).ready(function() {
	
	// Expand Panel
	$("#open").click(function(){
		//$("div#panel").slideright("slow");
		$("div#panel").animate({width:'toggle'},1250);
	
	});	
	
	// Collapse Panel
	$("#close").click(function(){
		//$("div#panel").slideup("slow");	
			$("div#panel").animate({width:'toggle'},1250);
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
		
});