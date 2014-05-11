<?php
	session_start();
	
	if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	//master activity check
		if(isset($_POST['black'])) $_SESSION['black'] = $_POST['black'];
		if(isset($_POST['gold'])) $_SESSION['gold'] = $_POST['gold'];
		if(isset($_POST['switch'])) $_SESSION['switch'] = $_POST['switch'];
	}

	//////////////////////get:set
	$black = isset($_SESSION['black']) ? $_SESSION['black'] : 1000; // store session data
	$gold = isset($_SESSION['gold']) ? $_SESSION['gold'] : 1000; // store session data
	$switch = isset($_SESSION['switch']) ? $_SESSION['switch'] : 0; // store session data
?>
<!DOCTYPE HTML> 
	<html>
		<head>
			<title>Project 1 - Acey-Deucy</title>		
			<style type="text/css">			
				#wrapper{
					height:400px;
					width:700px;
					background:#880;
					margin-left:auto;
					margin-right:auto;
					margin-top:23px;
					padding:10px;
					border-radius:10px;
					border:4px solid #992;
				}
				
				#high{
					height:150px;
					width:30%;
					background:green;
					float:right;
					padding:5px;
					text-align:center;
					margin-left:10px;
				}
				
				#middle{
					height:150px;
					width:33%;
					background:yellow;
					float:right;
					margin-bottom:7px;
					padding:5px;
					text-align:center;
				}
				
				#low{
					height:150px;
					width:30%;
					background:orange;
					float:left;
					padding:5px;
					text-align:center;
				}
				
				aform, afieldset{
					width:100%;
					margin-left:auto;
					margin-right:auto;
					border:none;
				}
				
				.btn{
					height:70px;
					width:50%;
					cursor:pointer;
				}
				
				.draw{
					height:70px;
					width:100%;
					cursor:pointer;
				}
				
				table{
					background:blue;
					text-align:center;
					margin-left:auto;
					margin-right:auto;
					height:150px;
					width:100%;
					margin-bottom:7px;
					color:gold;
					font-size:3em;
					font-weight:bold;
				}
				
				.result{
					color:red;
					font-weight:bolder;
					font-size:2em;
					text-align:center;
					margin-left:auto;
					margin-right:auto;
					display:block;
					width:150px;
				}
				
				<?PHP
					if(isset($bet)){				
						if ( $switch == 0){
							print"body {background:gold;}";
						}
						else{
							print"body {background:black;}";
						}
					}
					
					else{
						if ( $switch == 0){
							print"body {background:black;}";
						}
						else{
							print"body {background:gold;}";
						}
					}
				?>
			</style>
		</head>

		<body>
			<?php
				#lj's part
				print"<div id='wrapper'>";
				print"<h1>Acey-Deucy</h1>"; 
				$pass = $_POST['pass'];
				$highold = $_POST['high'];
				$lowold = $_POST['low'];
				$draw = $_POST['draw'];
				$bet = $_POST[bet];

				if(isset($bet)){	
					
					if ($switch == 0){		
						$switch = 0;
					}
					else{	
						$switch = 1;
					}
				
					function thirdcard($x, $y){
						$third = rand($x, $y);
						return $third;
					}
					
					$middle = thirdcard(1, 14);
				
					print "<div id='high'>HIGH: ".$highold."<br/>";
						switch($highold){
								case 1:
									print"<img src='cards/3.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/51.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/47.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/43.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/39.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/35.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/31.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/27.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/23.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/19.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/15.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/11.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/7.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/3.png' alt='' />";
									break;
							}
					print "</div><div id='low'>LOW: ".$lowold."<br/>";
						switch($lowold){
								case 1:
									print"<img src='cards/3.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/51.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/47.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/43.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/39.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/35.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/31.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/27.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/23.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/19.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/15.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/11.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/7.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/3.png' alt='' />";
									break;
							}
					print "</div><div id='middle'>MIDDLE: ".$middle."<BR/>";
						switch($middle){
								case 1:
									print"<img src='cards/3.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/51.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/47.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/43.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/39.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/35.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/31.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/27.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/23.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/19.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/15.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/11.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/7.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/3.png' alt='' />";
									break;
							}
							print"</div>";
					if ($middle < $highold && $middle > $lowold){
						if($switch == 0){
							print"<span class='result'>GOLD YOU WIN!</span>";
						}
						else{
							print"<span class='result'>BLACK YOU WIN!</span>";
						}	
					}
					
					else{
						if($switch == 0){
							print"<span class='result'>GOLD YOU LOSE!</span>";
						}
						else{
							print"<span class='result'>BLACK YOU LOSE!</span>";
						}
					}

					print"<br/><form action='prj1.php' method='post'><fieldset>";
					print"<input type='submit' class='draw' value='NEXT DRAW' name='draw' />";
					print"<input type='hidden' name='switch' value='$switch' />";
					print"<input type='hidden' name='low' value='$l'/>";
					print"</fieldset></form>";		
				}

				else{
					if ($switch == 1){		
						$switch = 0;
					}
					else{	
						$switch = 1;
					}
				
					$stop = 0;
					while($stop != 1){
						$h = highcard(1, 14);
						$l = lowcard(1, 14);
						if ($h >= $l && $h != ($l+1) && $h != $l){
							print "<div id='high'>High: ".$h."<br/>";
							switch($h){
								case 1:
									print"<img src='cards/3.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/51.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/47.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/43.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/39.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/35.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/31.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/27.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/23.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/19.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/15.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/11.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/7.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/3.png' alt='' />";
									break;
							}
							print "</div>";
							print"<div id='middle'>Middle:<br/> ?</div>";
							print "<div id='low'>Low: ".$l."<br/>";
							switch($l){
								case 1:
									print"<img src='cards/3.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/51.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/47.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/43.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/39.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/35.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/31.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/27.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/23.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/19.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/15.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/11.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/7.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/3.png' alt='' />";
									break;
							}
							$stop = 1;
						}
						
						else{
							$stop = 0;
						}
					}
					
					print"</div>";
					print"<br/><form action='' method='post'><fieldset>";
					print"<input type='submit' class='btn' value='PASS' name='pass' />"; 
					print'<input type="submit" class="btn" value="BET" name="bet" />';
					print"<input type='hidden' name='switch' value='$switch' />";
					print"<input type='hidden' name='new' value='isnew' />";
					print"<input type='hidden' name='high' value='$h' />";
					print"<input type='hidden' name='low' value='$l'/>";
					print"</fieldset></form>";		
				}				

				function lowcard($x, $y){
					$low = rand($x, $y);
					return $low;
				}

				function highcard($x, $y){
					$high = rand($x, $y);
					return $high;
				}
			?>
		</body>
	</html>