<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name='description' content='Loveson Joseph"s site. Html5, javascript, jquery, foundation, mysql, and css3.' />
		<meta name="keywords" content="main about me ask me error Loveson Joseph heatworld1 html5 css3"/>
		<base href="index.php" />
		<link rel="shortcut icon" href="img/siteIcon.ico" type="image/x-icon" />
		<title>LJ | Welcome</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="css/siteCss.css" />
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>		
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="js/vendor/modernizr.js"></script>
		<script src="js/bg_color.js"></script>
		<script src="js/foundation/foundation.js"></script>
		<script src="js/foundation/foundation.topbar.js"></script>
		<script src="js/slippry.min.js"></script>
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/slippry.css">
		<style>
			.there{
				z-index:1;
				position: relative;
			}
			
			.row.full-width{
			width: 100%;
			 max-width: 100%; 
			 }
			 
			 #feet{
				
				bottom: 0;

				width: 100%;

			 }
			 
			 #feets{
				margin-bottom:0;
				position: absolute;
				bottom: 0;
				width: 100%;
			 }
		</style>
		<script>
		 
		$(window).scroll(function(e){
		  parallax();
		});
		
		function parallax(){
		  var scrolled = $(window).scrollTop();
		  $('body').css('top',-(scrolled*0.2)+'px');
		}
		
		$(document).ready(function() {
			$(document).foundation();
			$('.to-top').on('click', function(){
				$("html, body").animate({ scrollTop: 0 }, "slow");
			});
			
			getPage();
			$(window).on('hashchange', getPage);	
		});
			
		function getPage(){
				var pageName;
				if(window.location.hash) {
				  // Call Page
					switch(window.location.hash.substr(1)){
						case 'about': 
						case 'downloads':
						case 'projects':
						case 'reviews':
						case 'test':
						case 'test2':
						pageName =  window.location.hash.substr(1);
						break;
					
						default :
						pageName = 'home';
						break;
					}	
				} else {
				  //Default
				  pageName = 'home';
				}
				
				$.ajax({
					type: 'POST',
					url	: 'php/getPage.php',
					data: {
						handle 		: 'pageData',
						pageTitle	: pageName
					},
					success: function(e){
						//console.log(e);
						$('.midsection').html(e);
					}
				});				
			}
			
			$(function() {
				var demo1 = $("#demo1").slippry({
					transition: 'vertical',
					useCSS: true,
					speed: 1000,
					pause: 3000,
					auto: true,
					preload: 'visible',
					controls: false,
					captions: false,
					pager: false,
					start: 'random'
				});
			});
		</script>
	</head>
	
	<body>
		<div class="sticky">
			<nav class="top-bar" data-topbar data-options="sticky_on:small">
			  <section class="top-bar-section">
				<ul class="right">
				  <li ><a href="#">Sign In</a></li>
				</ul>
				<ul class="left">
					<li class="divider"></li>
					<li><a href="#main">O</a></li>
					<li><a href="#about">me</a></li>
					<li><a href="#projects">projects</a></li>
					<li><a href="#reviews">reviews</a></li>
					<li><a href="#downloads">downloads</a></li>
				</ul>
			  </section>
			</nav>
		</div>

		<div class='row full-width'>
			<div id='face' class="panel">
				<section class="demo_wrapper">
					<article class="demo_block">
						<ul id="demo1">
							<li><a href="#slide1"><img src="img/image-1.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
							<li><a href="#slide2"><img src="img/image-2.jpg"  alt="This is caption 2"></a></li>
							<li><a href="#slide3"><img src="img/image-4.jpg" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
						</ul>
					</article>
				</section>		
			</div>
		</div>
				
		<div class='row full-width'>		
			<div class='midsection'>
				<!-- CONTENT START HERE -->
				<!-- CONTENT END HERE -->
			</div>
		</div>
			
		<div class='row full-width'>
				<footer>
					<div id='feet' class="panel">
						<button class='to-top'>top</button>
						<p>LJSites &copy; 2011</p>
						<hr/>
						<div id='html5'><a href='#'>html valid</a></div>
						<div id='css3'><a href='#'>css valid</a></div>
						<p>(772).924.5948</p>
						<p>ljdesign1@lovesonjoseph.com</p>
						<a href='resume.pdf' class='resume'>RESUME</a>
					</div>
				</footer>
		</div>	
	</body>
</html>