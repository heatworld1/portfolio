$(document).ready(function () {
		$("#ask_form").hide();

		$("#ask_form").dialog({
			modal: true ,
			opacity: 0.5, 
			show:"blind",
			hide:"explode",
			autoResize:false,
			height: 550,
			width: 500,
			zIndex: 10000,
			autoOpen:false
		});
		
		$( "#cancel" )
			.click(function() {
				$( "#ask_form").dialog( "close" );
			});
		
		$(".ui-widget-overlay")
		.live("click", function() { 
		$("#ask_form").dialog("close"); 
		
		$(".ui-widget-overlay").fadeOut("slow");} );
		
		$("#ask").mousedown(function () {
			$("#ask_form").show().dialog("open");
		});
		
		
		});
			