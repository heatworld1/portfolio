<?php flush(); ?>
<?php
	if (isset($_GET['p'])) {
	///////////////////////////////////////////
		if ($_GET['p']=='about') {						
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
		}

		///////////////////
		if ($_GET['p']=='projects'){
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
		}

		////////////////////////
		if ($_GET['p']=='askme'){
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
		}

		//////////////////
		if ($_GET['p']=='downloads'){
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
		}
		
		//////////////////
		if ($_GET['p']=='discussions'){
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
		}

		//////////////////////////
		if ($_GET['p']=='resources'){
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
			</div>	";
			
			echo"	
			<div style='' id='sidesocial'>
				<div id='innersocial'>
					<div class='facebook icon' ><a href='http://www.facebook.com/ljoseph7'><img src='facebook.png' alt='' /></a></div><br/>
						<div class='twitter icon' ><a href='https://twitter.com/#!/heatworld1'><img src='twitter.png' alt='' /></a></div><br/>
						<div class='linkedin icon' ><a href='http://www.linkedin.com/in/ljoseph7'><img src='linkedin.png' alt='' /></a></div><br/>
						<div class='google icon' ><a href='https://profiles.google.com/118291245846144961064/about'><img src='google.png' alt='' /></a>
					</div>
				</div>
			</div>";
		}
	}

	//////////////////////////////////////
	else {
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