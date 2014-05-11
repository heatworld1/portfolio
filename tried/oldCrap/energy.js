/*
 * jQuery EnergySaver Screen Saver plugin 0.1
 *
 * http://docs.jquery.com/Plugins/EnergySaver
 *
 * Copyright (c) 2010 Dharmveer Motyar
 * http://motyar.blogspot.com
 * http://motyar.com
 *
 * $Id$
 * 
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Creates a energysaver.
 *
 * @example $.energysaver();
 *
 * @name supernova
 * @type jQuery
 * @cat Plugins/supernova
 */
(function($) {
	/*
	 * Plugin defaults 
	 */
	var defaults = {
		delay: 5000,
		events: 'mousemove mousedown keydown'
	};
	
	$.energysaver = function(settings) {
		$.energysaver.settings = $.extend({}, defaults, settings);
		$.energysaver.startCounter($.energysaver.settings.delay);
		bindEvents($.energysaver.settings.events);
		return;
	};
	
	/*
	 * Public Functions
	 */
	$.energysaver.end = function() {
		
		$(document.body).css({'background':'url(fullbody.png) repeat-x #a2a2a2'});
		$("#cloud").css({'background':'url(cloud.png) no-repeat'});
		$("#cloud2").css({'background':'url(cloud.png) no-repeat'});
		$("#cloud3").css({'background':'url(cloud.png) no-repeat'});
		$("#undernav").css({'background':'url(long.png)'});
		$("#clearfooter").css({'background':'#a2a2a2'});
		$.energysaver.resetCounter();
		
	};
	$.energysaver.start = function() {
       /* $(document.body).css({     backgroundColor:'#000'}); */
		$(document.body).css({'background':'url(stars.png) #000 fixed'});			
		$(document.body).animate({backgroundColor:'#000000'}, 700);	
		$("#cloud").css({'background':'url(cloud2.png) no-repeat'});
		$("#cloud2").css({'background':'url(cloud2.png) no-repeat'});
		$("#cloud3").css({'background':'url(cloud2.png) no-repeat'});
		$("#undernav").css({'background':'none'});
		$("#clearfooter").css({'background':'url(stars.png) #000 fixed'});
	};
	$.energysaver.startCounter = function(timeout) {
		$.energysaver.counter = setInterval("$.energysaver.start()", timeout);
	};
	$.energysaver.resetCounter = function() {
		clearInterval($.energysaver.counter);
		$.energysaver.startCounter($.energysaver.settings.delay);
	};
	
	/*
	 * Private functions
	 */
	function bindEvents(events, elmt) {
		$(document).bind(events, $.energysaver.end);
	};
	
})(jQuery);