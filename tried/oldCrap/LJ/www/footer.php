<?php echo"<div id='footer'>";?>
<div id="grassy"></div>
	<?php 
		echo"<br/>LJSites &#169; 2011 ";
		if (isset($_GET['p'])){
			if($_GET['p']=='askme' || $_GET['p']=='projects'){
				echo"<div id='notvalid'>";
			}
			
			else{
				echo "<div id='valid'><div id='xhtml'><a href='http://validator.w3.org/check?uri=referer' ><img src='xhtml2.png' alt='' /></a></div>";
			}
		}
		
		else{
			echo "<div id='valid'><div id='xhtml'><a href='http://validator.w3.org/check?uri=referer' ><img src='xhtml2.png' alt='' /></a></div>";
		}
					
		echo"<div id='css'><a href='http://jigsaw.w3.org/css-validator/check/referer' ><img src='css2.png' alt='' /></a></div></div>";
		echo "
			<br/><div id='footsectholder'>
				<div  class='footersect'>
					Navigation<hr/>
					<ul>
						<li><a href='index.php'>home</a></li>
						<li><a href='index.php?p=about'>about me</a></li>
						<li><a href='index.php?p=projects'>projects</a></li>
						<li><a href='index.php?p=askme'>ask me</a></li>
						<li><a href='index.php?p=discussions'>disscussions</a></li>
						<li><a class='selected' href='index.php?p=downloads'>downloads</a></li>
						<li><a href='index.php?p=resources'>resources</a></li>
					</ul> 
				</div>
				<div class='footersect2'>
					Loveson Joseph<hr/>
					<ul>
					<li>(772).924.5948</li>
					<li>ljsites1@hotmail.com</li>
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