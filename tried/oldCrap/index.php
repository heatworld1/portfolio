<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
		<meta name="description" content="This is a portfolio of Loveson Joseph."/>
		<meta name="keywords" content="Loveson Joseph heatworld1 facebook myspace html xml xhtml css3 php mysql jquery javascript resume about me"/>
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
		<link rel="shortcut icon" href="loginlogo.png" type="image/x-icon" />
		<!--  ########## START CSS Files ##########-->
		<link rel="stylesheet" href="reset.css"  type="text/css"/>	
		<!--<link rel="stylesheet" href="mobile.css"  type="text/css"/>
		<link rel="stylesheet" href="handheld.css" media="handheld" type="text/css"/> 
		<link rel="stylesheet" href="../ipad.css" media="only screen and (max-device-width: 1024px)"  type="text/css" />
		<link rel="stylesheet" href="../iphone4.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css"  />
		<link rel="stylesheet" href="../iphone.css" media="only screen and (max-device-width: 480px)"  type="text/css" />	-->
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="ljs.css" type="text/css"/>		
		<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css"/>
		 <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
		<link rel="stylesheet" href="css/template.css" type="text/css"/>
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
		<script type="text/javascript" src="slideroot.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="slide.js" ></script>	
		<script type="text/javascript" src="navigationmagic.js"></script>
		<script type="text/javascript" src="shadedborder.js" ></script> 
		<script type="text/javascript" src="scroll.js"></script>
		<script type="text/javascript" src="googletranslate.js"></script>	
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script type="text/javascript" src="textchanger.js"></script>	
		<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" ></script>
		<script type="text/javascript" src="cloudmagic.js" ></script>	
		<script type="text/javascript" src="http://www.bitstorm.org/jquery/color-animation/jquery.animate-colors.js" ></script>
		<script type="text/javascript" src="energy.js" ></script>
		<script type="text/javascript" src="energysaver.js" ></script>
		<script type="text/javascript" src="fly.js"></script>
		<script type="text/javascript" src="fireflymagic.js.js" ></script>
		<script type="text/javascript" src="requiered/jquery.js" ></script>
		<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>
		<script type="text/javascript" src="formchanger.js" ></script>
		<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
		<script type="text/javascript" src="showthebox.js"></script>
		<script type="text/javascript" src="corner.js"></script>
		<script type="text/javascript" src="roundthecorners.js"></script>
		<script type="text/javascript" src="hoverimagefade.js"></script>
		<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.6rc6/ui/jquery.ui.all.js"></script>
		<script type="text/javascript" src="formpopup.js"></script>
		<script type="text/javascript" src="http://jsbin.com/js/render/edit.js"></script> 
		<script type="text/javascript" src="http://davidwalsh.name/dw-content/jquery.dwFadingLinks.js"></script> 
		<script type="text/javascript" src="fadetextcolor.js"></script>
		<script type="text/javascript" src="imageblockhover.js"></script>
		<script type="text/javascript" src="js/jqueryvalidate.js" ></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#askingform").validate();
			});
		</script>
		<script type="text/javascript" src="https://raw.github.com/razorjack/quicksand/master/jquery.quicksand.js" ></script>
		<script type="text/javascript" src="http://razorjack.net/quicksand/scripts/main.js" ></script>
		<script type="text/javascript" src="fadeinpage.js" ></script>	
		<!--  ########## END JS Files ##########-->	
		<script type="text/javascript" src="js/jquery.validationEngine-en.js" ></script>
        <script type="text/javascript" src="js/jquery.validationEngine.js" ></script>
        <script type="text/javascript" >
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#form").validationEngine();          
            });
        </script>
	</head>
	
	<body>
		<?php include"login.php";?>
		<!--  ########## START WRAPPER ##########-->	
		<div id="wrapped" class="wrapped">	
			<div id="sky">
				<div id="cloud" ></div>
				<div id="cloud2"></div>
				<div id="cloud3" ></div>
			</div>
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
		<script type="text/javascript" src="shadowroundcorners.js"></script>	
	</body>
</html>