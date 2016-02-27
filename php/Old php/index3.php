<?php //ob_start("ob_gzhandler"); ?>
<?php
	//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
		<!--<meta name="LovesonJoseph" content="PortfolioWebsite"/>
		<meta name="y_key" content="c35e08c53148b913" />-->
		<?php
		if (isset($_GET['p'])) {
					if ($_GET['p']=='about') {		
						echo"<meta name='description' content='This section is about me. I was born in fort pierce florida. I make creating  websites in a process. I have used html, css, xml, php, and mysql.'/>";
					}
					
					if ($_GET['p']=='projects') {		
						echo"<meta name='description' content='Here is a complete listing of my projects. Some of these projects are templates for display. The others were class projects, and projects for friends. Click the pictures to see other website images.'/>";
					}
					
					if ($_GET['p']=='askme') {		
						echo"<meta name='description' content='I made it easy to contact me or better yet ask me questions. Please do not ask questions that have no real reason for being asked. So ask away carefully.'/>";
					}
					
					if ($_GET['p']=='downloads') {		
						echo"<meta name='description' content='This page has my downloads for everyone to share. The versions here are the current up to date as of 6/29/2011. Everytime there is a new update I will try to update these files.'/>";
					}
					
					if ($_GET['p']=='resources') {		
						echo"<meta name='description' content='Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
					}
					
					if ($_GET['p']=='disscussions') {		
						echo"<meta name='description' content='Topic #1 coming soon! Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
					}
				}
				
				else{
					echo"<meta name='description' content='This is a portfolio website for Loveson Joseph. This site is uses xhtml, javascript, and css. There are jquery implementations as well as life story about Loveson Joseph.'/>";
				}
		
		?>
		<meta name="keywords" content="main about me ask me error Loveson Joseph heatworld1 html css"/>
		<base href="index.php" />
		<title>Loveson Joseph - 
			<?php
				if (isset($_GET['p'])) {
					if ($_GET['p']=='about') {		
						echo"About Me";
					}
					
					if ($_GET['p']=='projects') {		
						echo"Projects";
					}
					
					if ($_GET['p']=='askme') {		
						echo"Ask Me";
					}
					
					if ($_GET['p']=='downloads') {		
						echo"Downloads";
					}
					
					if ($_GET['p']=='resources') {		
						echo"Resources";
					}
				}
				
				else{
					echo"Main";
				}
			?>
		</title>
		<!--<link rel="shortcut icon" href="loginlogo.png" type="image/x-icon" />-->
		<link rel="shortcut icon" href="loginlogo.ico" type="image/x-icon" />
		<!--  ########## START CSS Files ##########-->
		<style type="text/css">
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
				padding: 0;
				margin: 0;
			}
				
			table {
				border-collapse: collapse;
				border-spacing: 0;
			}
				
			fieldset,img { 
				border: 0;
			}
				
			address,caption,cite,code,dfn,em,strong,th,var {
				font-weight: normal;
				font-style: normal;
			}
				
			ol,ul {
				list-style: none;
			}
				
			caption,th {
				text-align: left;
			}
				
			h1,h2,h3,h4,h5,h6 {
				font-weight: normal;
				font-size: 100%;
			}
				
			q:before,q:after {
				content:'';
			}
				
			abbr,acronym { 
				border: 0;
			}
		</style>
		<!--<link rel="stylesheet" href="mobile.css"  type="text/css"/>	
		<link rel="stylesheet" href="handheld.css" media="handheld" type="text/css"/> 
		<link rel="stylesheet" href="../ipad.css" media="only screen and (max-device-width: 1024px)"  type="text/css" />
		<link rel="stylesheet" href="../iphone4.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css"  />-->
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="ljs.css" type="text/css" />		
		<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css" />
		 <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
		<link rel="stylesheet" href="css/template.css" type="text/css" />
		<!--  ########## END CSS Files ##########-->	
		<?php 
			/*	
				function iCheck() {
					if(navigator.userAgent.match(/iPad/i)) {
						document.write("<link rel='stylesheet' type='text/css' href='../misc/iphone.css' />");
					}
					else if(navigator.userAgent.match(/iPhone/i)) {
						document.write("<link rel='stylesheet' type='text/css' href='../misc/iphone.css' />");
					}
				}
			*/
		?>	
		<!--  ########## START JS Files ##########-->	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" ></script> 
		<script type="text/javaScript" src="needed.js"></script>
		<script type="text/javascript">
			var _siteRoot='index.php',_root='index.php';
		</script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript">
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
		</script>	
		<script type="text/javascript" src="navigationmagic.js"></script>
		<script type="text/javascript" src="shadedborder.js" ></script> 
		<script type="text/javascript" src="scroll.js"></script>
		<script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({
				pageLanguage: 'en',
				autoDisplay: false,
				floatPosition: google.translate.TranslateElement.FloatPosition.TOP_RIGHT
			  });
			}
		</script>	
		<script type="text/javascript" src="element.js"></script>
		<script type="text/javascript">
			function resizeText(multiplier) {
				if (document.body.style.fontSize == "") {
					document.body.style.fontSize = "1.0em";
				}
				document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
			}
			
			function defaulted() {
				document.body.style.fontSize = "1.0em";
			}
		</script>	
		<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" ></script>
		<!--<script type="text/javascript" src="cloudmagic.js" ></script>	-->
		<script type="text/javascript" src="http://www.bitstorm.org/jquery/color-animation/jquery.animate-colors.js" ></script>
		<script type="text/javascript" src="energy.js" ></script>
		<script type="text/javascript">
			$(document).ready(function() {	
				$.energysaver({ delay: 70000 });
			});
		</script>
		<!--<script type="text/javascript" src="fly.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {	
				$.firefly(); 
			});
		</script>-->
		<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>
		<script type="text/javascript">
			$(function(){
				$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
				$('#form').jqTransform({imgPath:'jqtransformplugin/img/'});
			});
		</script>
		<script type="text/javascript" src="shadowbox/shadowbox.js" ></script>
		<script type="text/javascript">
			Shadowbox.init({
				handleOversize: "drag",
				modal: true
			});
		</script>
		<script type="text/javascript" src="corner.js"></script>
		<script type="text/javascript" src="roundthecorners.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#xhtml,#css,.footersect,#back-top,#word,#adobe,#vcf,#up,.normal,.smaller,.larger,.icon,#ask").fadeTo("slow", 0.7); // This sets the opacity of the thumbs to fade down to 60% when the page loads
				$("#xhtml,#css,.footersect,#back-top,#word,#adobe,#vcf,#up,.normal,.smaller,.larger,.icon,#ask").hover(function(){
				$(this).fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
				},function(){
				$(this).fadeTo("slow", 0.7); // This should set the opacity back to 60% on mouseout
				});
			});
		</script>
		<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.6rc6/ui/jquery.ui.all.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#ask_form").hide();

				$("#ask_form").dialog({
					modal: true ,
					opacity: 0.5, 
					show:"blind",
					hide:"explode",
					autoResize:false,
					height: 700,
					width: 500,
					zIndex: 10000,
					autoOpen:false
				});
				
				$( "#cancel" ).click(function() {
					$( "#ask_form").dialog( "close" );
				});
				
				$(".ui-widget-overlay").live("click", function() { 
					$("#ask_form").dialog("close"); 
					$(".ui-widget-overlay").fadeOut("slow");
				});
				
				$("#ask").mousedown(function () {
					$("#ask_form").show().dialog("open");
				});
			});
		</script>
		<script type="text/javascript" src="http://jsbin.com/js/render/edit.js"></script> 
		<script type="text/javascript" src="http://davidwalsh.name/dw-content/jquery.dwFadingLinks.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
				$('.fade').dwFadingLinks({
					color: '#990000',
					duration: 700
				});
			});
		</script>
		<script type="text/javascript">
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
		</script>
		<script type="text/javascript" src="js/jqueryvalidate.js" ></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#askingform").validate();
			});
		</script>
		<script type="text/javascript" src="https://raw.github.com/razorjack/quicksand/master/jquery.quicksand.js" ></script>
		<script type="text/javascript" src="http://razorjack.net/quicksand/scripts/main.js" ></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//$('#wrapped').hide().fadeIn();
				style="display:none;"
				$('body').css('display','none');
				$('#sky').css('display','block');
				$('body').fadeIn(700);
			});	
		</script>
		
		<script type="text/javascript" src="js/jquery.validationEngine-en.js" ></script>
        <script type="text/javascript" src="js/jquery.validationEngine.js" ></script>
        <script type="text/javascript" >
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#form").validationEngine();          
            });
        </script>
		<!--  ########## END JS Files ##########-->	
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-24486076-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<!-- Place this tag in your head or just before your close body tag -->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	</head>
	
	<?php 
		flush(); 
		ob_start();
		ob_implicit_flush(0);
	?>
	<body>
		<?php include"login.php";?>
		<!--  ########## START WRAPPER ##########-->	
		<div id="wrapped" class="wrapped" >	
			<!--<div id="sky">
				<div id="cloud" ></div>
				<div id="cloud2"></div>
				<div id="cloud3" ></div>
			</div>-->
			<?php include"slide.php";?>					
			<p id="slogan" class="fade">
				"Working on the small things to make a big picture."
			</p>
			<div id="navigation">
				<div id="navtopleftbolt"></div>
				<div id="navtoprightbolt"></div>
				<div id="navbottomrightbolt"></div>
				<div id="navbottomleftbolt"></div> 
				<div id="undernav"></div> 
				<?php include"navigation.php";?>
			</div>	
			<div id="shad">&nbsp;</div>			 
			<div id="secondbody"></div>
			<div id="content">		
				<div id="bodylogo">
					<a href="index.php"></a>
				</div>	
				<div id="bodytopleftbolt"></div>
				<div id="bodytoprightbolt"></div>
				<div id="bodybottomrightbolt"></div>
				<div id="bodybottomleftbolt"></div>
				<button type="button" value="bigger" class="larger" title="larger" onclick="resizeText(1)">A</button>
				<button type="button" value="smaller" class="normal" title="normal" onclick="defaulted()">A</button>	
				<button type="button" value="smaller" class="smaller" title="smaller" onclick="resizeText(-1)">A</button>					
				<div id="white">
					<?php 
						if (isset($_GET['p'])) {
						   if (strpos($_GET['p'], "/")) {
							  $dir = substr(str_replace('..', '', $_GET['p']), 0, strpos($_GET['p'], "/")) . "/";
							  $file = substr(strrchr($_GET['p'], "/"), 1);
							  if (file_exists($dir.$file.".php")) {
								 include($dir.$file.".php");
							  } else {
								 include("main.php");
							  }
						   } else {
							  if (file_exists(basename($_GET['p']).".php")) {
								 include(basename($_GET['p']).".php");
							  } else {
								 include("main.php");
							  }
						   }
						} else {
						   include("main.php");
						} 
					?>				
				</div>
			</div>
		</div>
		<!--  ########## END WRAPPER ##########-->	
		<div class="clearfooter" id="clearfooter"></div>
		<?php include "footer.php";?>	
		<script type="text/javascript">
			var myBorder = RUZEE.ShadedBorder.create({ corner:8, shadow:16, border:0});
			myBorder.render('content');
			myBorder.render('slider');
			myBorder.render('panel');
			myBorder.render('logfailform');
		</script>	
	</body>
</html>