<?php 
	ob_start("ob_gzhandler");
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="keywords" content="main about me Loveson JosepH html css" />
		<?php
			if (isset($_GET['p'])) {
				switch($_GET['p']) {
					case 'about':	
						echo"<meta name='description' content='This section is about me. I was born in fort pierce florida. I make creating  websites in a process. I have used html, css, xml, php, and mysql.'/>";
						$page = 'About Me';
						break;						
					case 'projects':		
						echo"<meta name='description' content='Here is a complete listing of my projects. Some of these projects are templates for display. The others were class projects, and projects for friends. Click the pictures to see other website images.'/>";
						$page = 'Projects';
						break;						
					case 'askme':
						echo"<meta name='description' content='I made it easy to contact me or better yet ask me questions. Please do not ask questions that have no real reason for being asked. So ask away carefully.'/>";
						$page = 'Ask Me';
						break;						
					case 'downloads':		
						echo"<meta name='description' content='This page has my downloads for everyone to share. The versions here are the current up to date as of 6/29/2011. Everytime there is a new update I will try to update these files.'/>";
						$page = 'Downloads';
						break;					
					case 'resources':
						echo"<meta name='description' content='Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
						$page = 'Resources';
						break;						
					case 'discussions':		
						echo"<meta name='description' content='Topic #1 coming soon! Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
						$page = 'Discussions';
						break;
					default:
						$page = 'Main';
						break;
				}
			} else {
				echo"<meta name='description' content='This is a portfolio website for Loveson Joseph. This site is uses XHTML, JAVASCRIPT, and CSS. There are JQUERY implementations as well as life story about Loveson Joseph.'/>";
				$page = 'Main';
			}
		?>
		<base href="index.php" />
		<title>Loveson Joseph - <?php echo $page;?></title>
		<link rel="shortcut icon" href="loginlogo.ico" type="image/x-icon" />
		
		<!--  ########## START CSS Files ##########-->
		<link rel="stylesheet" href="css/resets.css" type="text/css" />	
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/ljs.css" type="text/css" />		
		<link rel="stylesheet" href="css/validationEngine.jquery.css" />
		<link rel="stylesheet" href="css/template.css" type="text/css" />
		<link rel="stylesheet" href="engine1/style.css" type="text/css"  />
	
		<!--  ########## END CSS Files ##########-->	

		<!--  ########## START JS Files ##########-->	
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
		<script type="text/javascript">var _siteRoot='index.php',_root='index.php';</script>
		<script type="text/javascript" src="js/scripts.js"></script>	
		<script type="text/javascript" src="js/navigationmagic.js"></script>
		<script type="text/javascript" src="js/scroll.js"></script>
		<script type="text/javascript" src="js/jqueryvalidate.js"></script>
		
        <script type="text/javascript" >
			//google analytics
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-24486076-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>

	 
		<link href="css/jquery.fs.shifter.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.fs.shifter.js"></script>
		<style>
			.shifter .shifter-navigation a { color: #666; display: block; font-size: 18px; margin: 0 0 15px; }
		</style>
		
		<script type="text/javascript" >
		$(document).ready(function() {
				$.shifter({
					maxWidth: Infinity
				});
			});
		</script>
		
		<!--  ########## END JS Files ##########-->	
	</head>
	
	<?php 
		flush(); 
		ob_start();
		ob_implicit_flush(0);
	?>
	
	<body class='shifter'>
	
		<!--  ########## START HIDDEN LOGIN ##########-->	
		<nav class="shifter-navigation">
			<a href="#1">Link One</a>
			<a href="#2">Link Two</a>
			<a href="#3">Link Three</a>
			<a href="#4">Link Four</a>
			<a href="#5">Link Five</a>
		</nav>
		<!--  ########## END HIDDEN LOGIN ##########-->	
		
		
		<!--  ########## START LOGIN ##########-->	
		<div id='toppanel'>
			<!-- login -->	
			<div id='panel'>
				<div>
					<div id='outerform'>			
						<form action='verify.php' method='post' id='form'>
							<fieldset>
								<label for='signup'>Username:</label>
								<input class='field required validate[required] text-input' type='text' name='ljsuname' id='signup' value='' size='18' />
								<br/>
								<label  for='email'>Password:</label>
								<input class='field required validate[required] text-input' type='password' name='ljspword' id='email' size='18' />
								<br/>
								<input type='submit' id='submit' name='submit' value='Login' class='formbutton' />
							</fieldset>		
						</form>
					</div>
				</div>
			</div> 
			<!-- /login -->	
			<span id='toggle' class='login shifter-handle'>Login</span>
			<span class='shifter-handle'>MENU</span>
		</div> 
		<!--  ########## END LOGIN ##########-->	
		<!--  ########## START WRAPPER ##########-->	
		<div id="wrapped" class="wrapped shifter-page">	
			<!--  ########## START SLIDER ##########-->	
			<div id="slider"> 
				<div class="boxplus">
					
					<div id="fb-root"></div>
					<script type="text/javascript">
						(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=190404351014990&version=v2.0";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
					<div class="fb-like" data-href="https://lovesonjoseph.com" data-width="899px" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
					
					<div class="g-plusone" data-size="small" data-annotation="none"></div>
					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
					  (function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/platform.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</div> 
				<div id="header">
					<div class="wrap">
						<div id="wowslider-container1">
							<div class="ws_images">
								<ul>
									<li><img src="data1/images/five.jpg" alt="five" title="five" id="wows1_0"/></li>
									<li><img src="data1/images/four.jpg" alt="four" title="four" id="wows1_1"/></li>
									<li><img src="data1/images/one.jpg" alt="one" title="one" id="wows1_2"/></li>
									<li><img src="data1/images/seven.jpg" alt="seven" title="seven" id="wows1_3"/></li>
									<li><img src="data1/images/six.jpg" alt="six" title="six" id="wows1_4"/></li>
									<li><img src="data1/images/three.jpg" alt="three" title="three" id="wows1_5"/></li>
									<li><img src="data1/images/two.jpg" alt="two" title="two" id="wows1_6"/></li>
								</ul>
							</div>
						</div>
						<script type="text/javascript" src="engine1/wowslider.js"></script>
						<script type="text/javascript" src="engine1/script.js"></script>
						
					</div>
				</div>
			</div>	
			<!-- ##### END SLIDER ######-->
			<p id="slogan" class="fade">
				"Working on the small things to make a big picture."
			</p>
			<!-- #### START NAVIGATION #### -->
			<div id="navigation">
				<?php
					if (isset($_GET['p'])) {
						switch($_GET['p']){
							case 'about':						
								echo "			
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li><a href='index.php'>home</a></li>
										<li><a class='selected' href='about'>about me</a></li>
										<li><a href='projects'>projects</a></li>
										<li><a href='askme'>ask me</a></li>
										<li><a href='discussions'>discussions</a></li>
										<li><a href='downloads'>downloads</a></li>
										<li><a href='resources'>resources</a></li>
									</ul>
								</div>";
								break;

							case 'projects':
								echo" 
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li class='home'><a href='index.php'>home</a></li>
										<li><a href='about'>about me</a></li>
										<li><a class='selected' href='projects'>projects</a></li>
										<li><a href='askme'>ask me</a></li>
										<li><a href='discussions'>discussions</a></li>
										<li><a href='downloads'>downloads</a></li>
										<li><a href='resources'>resources</a></li>
									</ul>
								</div>";
								break;

							case 'askme':
								echo"
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li class='home'><a href='index.php'>home</a></li>
										<li><a href='about'>about me</a></li>
										<li><a href='projects'>projects</a></li>
										<li><a class='selected' href='askme'>ask me</a></li>
										<li><a href='discussions'>discussions</a></li>
										<li><a href='downloads'>downloads</a></li>
										<li><a href='resources'>resources</a></li>
									</ul>
								</div>	";
								break;

							case 'downloads':
								echo"
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li class='home'><a href='index.php'>home</a></li>
										<li><a href='about'>about me</a></li>
										<li><a href='projects'>projects</a></li>
										<li><a href='askme'>ask me</a></li>
										<li><a href='discussions'>discussions</a></li>
										<li><a class='selected' href='downloads'>downloads</a></li>
										<li><a href='resources'>resources</a></li>
									</ul>
								</div>";
								break;
					
							case 'discussions':
								echo"
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li class='home'><a href='index.php'>home</a></li>
										<li><a href='about'>about me</a></li>
										<li><a href='projects'>projects</a></li>
										<li><a href='askme'>ask me</a></li>
										<li><a class='selected' href='discussions'>discussions</a></li>
										<li><a  href='downloads'>downloads</a></li>
										<li><a href='resources'>resources</a></li>
									</ul>
								</div>";
								break;

							case 'resources':
								echo"
								<div id='innavigation'>
									<ul id='topnavigation'>
										<li class='home'><a href='index.php'>home</a></li>
										<li><a href='about'>about me</a></li>
										<li><a href='projects'>projects</a></li>
										<li><a href='askme'>ask me</a></li>
										<li><a href='discussions'>discussions</a></li>
										<li><a href='downloads'>downloads</a></li>
										<li><a class='selected' href='resources'>resources</a></li>
									</ul>
								</div>
								
								<div style='' id='sidesocial'>
									<div id='innersocial'>
										<div class='facebook icon' ><a href='http://www.facebook.com/ljoseph7'><img src='facebook.png' alt='' /></a></div><br/>
											<div class='twitter icon' ><a href='https://twitter.com/#!/heatworld1'><img src='twitter.png' alt='' /></a></div><br/>
											<div class='linkedin icon' ><a href='http://www.linkedin.com/in/ljoseph7'><img src='linkedin.png' alt='' /></a></div><br/>
											<div class='google icon' ><a href='https://profiles.google.com/118291245846144961064/about'><img src='google.png' alt='' /></a>
										</div>
									</div>
								</div>";
								break;
						}
					} else {
						echo"	
							<div id='innavigation'>
								<ul id='topnavigation'>
									<li><a class='selected' href='index.php'>home </a></li>
									<li><a href='about'>about me </a></li>
									<li><a href='projects'>projects </a></li>
									<li><a href='askme'>ask me </a></li>
									<li><a href='discussions'>discussions </a></li>
									<li><a href='downloads'>downloads </a></li>
									<li><a href='resources'>resources </a></li>
								</ul>
							</div>";
					} 
				?>
			</div>	
			<!-- #### END NAVIGATION ##### -->	 
			<div id="content">						
				<div id="white">
				<div id='askContent'> 
					<p>I know there are question or comments your want to suggest so I decided to create this page. Please don't hesitate to say what you feel and constructive criticism is welcomed. I will do my best to get back with you.</p>
				</div>
				<form action="submitq.php" method="post" id="askingform">
					<fieldset id="fieldset" class="fieldset">					
						<span>
						<input type="text" name="uname" id="uname" class="required" maxlength="28" value="Username" />
						<input type="text" name="email" id="email" class="required email" maxlength="28" value="Email" />
						</span>
						
						<span>
						<label for="view">Public Question</label>
						<input type="radio" name="view" value="public" checked="checked" />
						</span>
						
						<span>
						<label for="view">Private Question</label>
						<input type="radio" name="view" value="private" />
						</span>
						
						<span>
						<label>Question:</label>
						<span>
						
						<span>
						<textarea cols="37" rows="7" name="question" id="question" class="required" value=""></textarea>
						<input type="hidden" name="time" id="time" value="NOW()" />
						</span>
						
						<span>
						<img class="security" src="CaptchaSecurityImages.php?width=210&amp;height=40&amp;characters=7" />
						</span>
						
						<span>
						<input id="security_code" name="security_code" type="text" class="required" maxlength="7" value="Security Code" />
						</span>
						
						<span>
						<input type="submit" class="submit" value="Submit">
						</span>
					</fieldset>
				</form>
				<div class='resources'>
					<div class='resource-head'>
						<p>RESOURCES</p>
					</div>
					<?php						
						$files = glob("images/resourceImages/*.*");
						
						echo '<div class="row">';
						$nextRow = 0;
						for($j = 0 ; $j < count($files); $j++){
							if($nextRow !=3){				
								echo "<div class='innerRow'>";
								echo "<img alt='' height='110px' width='150px' src='$files[$j]' />";
								echo "</div>";
								$nextRow++;
							} else {
								echo '</div><div class="row">';
								echo "<div class='innerRow'>";
								echo "<img alt='' height='110px' width='150px' src='$files[$j]' />";
								echo "</div>";
								$nextRow = 1;
							}
						}
						echo '</div>';
					?>					
					 				
				</div>
				<div class='downloads'>
					<div class='downloads-head'>
						<p>DOWNLOADS</p>
					</div>
					<?php						
						$files = glob("images/downloadImages/*.*");
						
						echo '<div class="row">';
						$nextRow = 0;
						for($j = 0 ; $j < count($files); $j++){
							if($nextRow !=3){				
								echo "<div class='innerRow'>";
								echo "<img alt='' height='110px' width='150px' src='$files[$j]' />";
								echo "</div>";
								$nextRow++;
							} else {
								echo '</div><div class="row">';
								echo "<div class='innerRow'>";
								echo "<img alt='' height='110px' width='150px' src='$files[$j]' />";
								echo "</div>";
								$nextRow = 1;
							}
						}
						echo '</div>';
					?>					
					 				
				</div>
				
				<!--<div class='downloads'>
					<div class='row'>
						<p>DOWNLOADS</p>
					</div>				
					<div class='row'>
						<div class='innerRow'>1</div>
						<div class='innerRow'>2</div>
						<div class='innerRow'>3</div>
					</div>				
					<div class='row'>
						<div class='innerRow'>4</div>
						<div class='innerRow'>5</div>
						<div class='innerRow'>6</div>
					</div>				
					<div class='row'>
						<div class='innerRow'>7</div>
						<div class='innerRow'>8</div>
						<div class='innerRow'>9</div>
					</div>					
				</div>-->
					<?php 
						//if (isset($_GET['p'])) {
						if (1 ==3) {
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
						   //include("main.php");
						   //include("about.php");
						   //include("askme.php");
							//include("downloads.php");
							//include("resources.php");
						   //include("projects.php");
						} 
					?>				
				</div>
			</div>
		</div>
		<!--  ########## END WRAPPER ##########-->	
		<div class="clearfooter" id="clearfooter"></div>
		<!-- ##### START FOOTER ###### -->
		<div id='footer'>
			<p class='footer-text'>LJSites 2011</p>
			<?php	
				// Change to the name of the file 
				echo  "<p class='footer-text'>Last modified " . date("F d, Y", filemtime("index.php")).'</p>';
			?>				

			<div id='valid'>
				<div id='xhtml'>
					<a href='http://validator.w3.org/check?uri=referer'  onclick='window.open(this.href); return false;'>
						<img src='images/xhtml.png' alt='' height='51' width='127' />
					</a>
				</div>
				<div id='css'>
					<a href='http://jigsaw.w3.org/css-validator/check/referer'  onclick='window.open(this.href); return false;'>
						<img src='images/css.png' alt='' height='51' width='127' />
					</a>
				</div>
			</div>
				
			<?php	
				echo "
					<div id='footsectholder'>
						<div  class='footersect'>
							Navigation<hr/>
							<ul>
								<li><a href='index.php'>home</a></li>
								<li><a href='about'>about me</a></li>
								<li><a href='projects'>projects</a></li>
								<li><a href='askme'>ask me</a></li>
								<li><a href='discussions'>disscussions</a></li>
								<li><a href='downloads'>downloads</a></li>
								<li><a href='resources'>resources</a></li>
							</ul> 
						</div>
						<div class='footersect2'>
							Loveson Joseph<hr/>
							<ul>
							<li>(772).924.5948</li>
							<li>ljdesign1@lovesonjoseph.com</li>
							<li><a href='http://www.ucf.edu/'>U.C.F.</a></li>
							<li>Orlando FL,</li>
							<li><a href='resume.pdf' class='resumelink'>RESUME</a></li>
							</ul> 
						</div>
						<div class='footersect3'>
							Skills<hr/>
							<ul>
							<li>XHTML 1.0</li>
							<li>CSS3</li>
							<li>XML</li>
							<li>PHP 5</li>
							<li>MYSQL 5</li>
							<li>PHOTOSHOP CS5</li>
							</ul> 
						</div>
					</div>";
			?>
		</div>
		<!-- #### END FOOTER ###### -->
	</body>
</html>