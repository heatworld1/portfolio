<?php
	// Inialize session
	session_start();
	$inactive = 300;
	if(isset($_SESSION['timeout']) ) {
		$session_life = time() - $_SESSION['timeout'];
		if($session_life > $inactive)
			{ session_destroy(); header("Location: loginfail.php"); }
	}

	$_SESSION['timeout'] = time();

	// Check, if user is already login, then jump to secured page
	if (isset($_SESSION['myusername'])) {
		header('Location: loggedin.php');
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
		<meta name="description" content="This is a portfolio of Loveson Joseph."/>
		<meta name="keywords" content="Loveson Joseph heatworld1 facebook myspace html xml xhtml css3 php mysql jquery javascript resume about me"/>
		<base href="index.php" />
		<title>Loveson Joseph - Login Failed </title>
		<link rel="shortcut icon" href="loginlogo.png" type="image/x-icon" />
		<!--  ########## START CSS Files ##########-->
			<link rel="stylesheet" href="reset.css"  type="text/css"/>	
			<link rel="stylesheet" href="handheld.css" media="handheld" type="text/css"/> 
			<link rel="stylesheet" href="../ipad.css" media="only screen and (max-device-width: 1024px)"  type="text/css" />
			<link rel="stylesheet" href="../iphone4.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css"  />
			<link rel="stylesheet" href="../iphone.css" media="only screen and (max-device-width: 480px)"  type="text/css" />
			<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile&amp;v1"  type="text/css" />
			<link rel="stylesheet" href="ljs.css" type="text/css"/>		
			<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
			<link rel="stylesheet" href="demo.csss" type="text/css" media="all" />
			<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css"/>
		<!--  ########## END CSS Files ##########-->		
		
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
			<script src="http://jquery.bassistance.de/validate/jquery.validate.js" type="text/javascript"></script>
			<script src="https://raw.github.com/razorjack/quicksand/master/jquery.quicksand.js" type="text/javascript"></script>
			<script src="http://razorjack.net/quicksand/scripts/main.js" type="text/javascript"></script>
			<script src="fadeinpage.js" type="text/javascript"></script>	
			<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
			<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" >
				jQuery(document).ready(function(){
					// binds form submission and fields to the validation engine
					jQuery("#form").validationEngine();          
				});
			</script>
		<!--  ########## END JS Files ##########-->	
	</head>
	<body>	
		<div id="logfailform">
			<form action='verify.php' method='post' id='form'>
				<fieldset>
					<label for='signup'>Username:</label>
					<input class='field required validate[required] text-input' type='text' name='ljsuname' id='signup' value='' size='18' />
					<br/>
					<label  for='email'>Password:</label>
					<input class='field required validate[required] text-input' type='password' name='ljspword' id='email' size='18' />
					<br/>
						<?php
							if ($_SESSION == '') {
								echo"<span class='show'>*Login failed, incorrect username or password.</span>	";
							}
							else{
								echo"  <span class='loginfail'>*Login failed, incorrect username or password.</span>";
							}
						?> 
					<input type='submit' id='submit' name='submit' value='Login' class='formbutton fade' />
					<a href="index.php" class="fade return">return</a>
				</fieldset>		
			</form>
		</div>
	</body>
</html>