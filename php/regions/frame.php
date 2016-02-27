<?php
	//Mini php class loader
	$dir = new RecursiveDirectoryIterator('php/lib');
    $iter = new RecursiveIteratorIterator($dir);
 
	//Include each one
	foreach ($iter as $filename => $file) {
		include $filename;
	}
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
			<meta name="keywords" content="main about me loveson joseph html mysql php css jquery" />
			<base href="index.php" />
			<title><?php Title::getTitle(); ?></title>

			<!--  ########## START CSS Files ##########-->
			<link rel="stylesheet" href="css/reset.css" type="text/css" />	
			<link rel="stylesheet" href="css/lj-main.css" type="text/css" />
			<!--  ########## END CSS Files ##########-->
			<style>
				#head {
					height: 300px;
					margin: 70px auto;
				}
				#nav {
					width: 100%;
					height: 50px; 
					background: #900;
				}
				#body {
					background: #900;
					max-width: 65%;
					height: 550px;
					margin: 0 auto;
					margin-top: 20px;
					margin-bottom: 20px;
					border-radius: 3px;
					padding:10px;
				}
				#inner-body {
					background: #ffffff;
					margin: 0 auto;
					height: 100%;
					width: 100%;
					border-radius: 3px;
				}
				#foot {
					background: #000;
					width: 100%;
					margin: 0 auto;
					height: 300px;
					border-top: 50px solid #900;
				}
				#login {
					background: #fff;
					text-decoration: underline;
					color: #900;
					top: 0;
					left: 20px;
					padding: 5px 20px;
					position: fixed;
					border-left: 3px solid #900;
					border-right: 3px solid #900;
					border-bottom: 3px solid #900;
					cursor: pointer;
					border-radius: 0 0 3px 3px;
				}
				#head img {
					border: 7px solid #900;
					border-radius: 3px;
				}
				
				#back-to-top {
					right: 20px;
					bottom: 20px;
					position: fixed;
					padding: 10px 16px;
					border: 3px solid #900;
					background: #fff;
					color: #900;
					font-size: 36px;
					padding-bottom: 1px;
					cursor: pointer;
					border-radius: 3px;
				}
			</style>

			<!--  ########## START JS Files ##########-->	
			<script type="text/javascript">
				var _siteRoot='index.php', _root='index.php';
			</script>
			<script type="text/javascript" src="js/lj-main.js"></script>
			<!--  ########## END JS Files ##########-->	
		</head>
		<body>
			<!-- login start -->
				<div id="login">Login</div>
			<!-- login end -->
		
			<!-- header start -->
			<div id='head'>
				<div class='slate'>
					<img src="http://lovesonjoseph.com/images/five.jpg" alt="" />
				</div>
			</div>
			<!-- header end -->
			
			<!-- nav start -->
			<div id='nav'>
				<ul>
					<li>home</li>
					<li>about me</li>
					<li>projects</li>
					<li>ask me</li>
					<li>downloads</li>
					<li>Resources</li>
				</ul>
				<?php Navigation::getNav(); ?>
			</div>
			<!-- nav end -->
			
			<!-- content start -->
			<div id='body'>
				<div id='inner-body'>
					<?php Body::getBodyContent();?>
				</div>
			</div>
			<!-- content end -->
			
			<!-- footer start -->
			<div id='foot'></div>
			<!-- footer end -->
			
			<div id='back-to-top'>^</div>
		</body>
	</html>