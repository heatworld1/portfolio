<?php flush(); ?>
<?php echo"<div id='footer'>";?>
<div id="grassy"></div>
	 
		<!--<br/>LJSites  2011-->
		<br/>LJSites 2011<br/>
	<?php	
	
			// Change to the name of the file 
		$last_modified = filemtime("index.php"); 

		// Display the results 
		// eg. Last modified Monday, 27th October, 2003 @ 02:59pm 
		//print "Last modified " . date("l, dS F, Y @ h:ia", $last_modified); 
		print "Last modified " . date("F dS, Y", $last_modified); 

	
		if (isset($_GET['p'])){
			if($_GET['p']=='askme' || $_GET['p']=='projects') {
				echo"<div id='notvalid'>";
			} else {
				echo "<div id='valid'><div id='xhtml'><a href='http://validator.w3.org/check?uri=referer' onclick='window.open(this.href); return false;' ><img src='images/xhtml.png' alt='' height='51' width='127' /></a></div>";
			}
		} else {
			echo "<div id='valid'><div id='xhtml'><a href='http://validator.w3.org/check?uri=referer'  onclick='window.open(this.href); return false;'><img src='images/xhtml.png' alt='' height='51' width='127' /></a></div>";
		}
					
		echo"<div id='css'><a href='http://jigsaw.w3.org/css-validator/check/referer'  onclick='window.open(this.href); return false;' ><img src='images/css.png' alt='' height='51' width='127' /></a></div></div>";
		echo "
			<br/><div id='footsectholder'>
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
			</div>
		</div>
		";
	?>