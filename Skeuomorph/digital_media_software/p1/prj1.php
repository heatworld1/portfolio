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
			<link rel="stylesheet" href="http://www.lovesonjoseph.com/reset.css" type="text/stylesheet" />
			<script src="http://code.jquery.com/jquery-1.6.3.min.js" type="text/javascript"> </script >
			<script src="jquery-blink.js" type="text/javascript" /></script >
			<!--<script type="text/javascript" language="javascript">
				$(document).ready(function(){
					$('.blink').blink();
					$('.blink').blink(10);
					$('.win').blink(); // default is 500ms blink interval.
					$('.win').blink(100); // causes a 100ms blink interval.
					$('.blink').blink(); // default is 500ms blink interval.
					$('.blink').blink(100); // causes a 100ms blink interval.
				});
			</script>-->

			<script type="text/javascript" language="javascript">
				$(document).ready(function()
				{
					$('.win').blink(1);
				});
			</script>

			<style type="text/css">			
				#wrapper{
					height:700px;
					width:700px;
					background:url('http://www.customtablefelt.com/images/suited-poker-felt/suited-poker-table-felt-400x300.jpg');
					/*background:url('http://www.timscustompokertables.com/uploads/US_Speed_Cloth_Poker_Felt_Casino_Green.jpg');*/
					margin-left:auto;
					margin-right:auto;
					margin-top:23px;
					padding:10px;
					border-radius:125px;
					border:7px solid #964514;
					color:white;
					font-size:1.25em;
				}
				
				#high{
					height:150px;
					width:30%;	
					float:right;
					padding:5px;
					text-align:center;
					margin-left:10px;
				}
				
				#middle{
					height:150px;
					width:33%;
					
					float:right;
					margin-bottom:7px;
					padding:5px;
					text-align:center;
				}
				
				#low{
					height:150px;
					width:30%;
					
					float:left;
					padding:5px;
					text-align:center;
				}
				
				form{
					width:80%;
					clear:both;
					margin-left:auto;
					margin-right:auto;
					
				}
				
				fieldset{
					border:none;
				}
				
				.gold{
					color:#ffc904;
				}
				
				.black{
					color:black;
				}
				
				.btn{
					height:70px;
					width:50%;
					cursor:pointer;
					font-weight:bolder;
					font-size:1.5em;
					background:white;
					border-radius:125px;
				}
				
				.btn:hover{
					background:red;
				}
				
				.btn:active{
					background:url('http://www.customtablefelt.com/images/suited-poker-felt/suited-poker-table-felt-400x300.jpg');
					margin-top:1px;
				}
				
				.draw{
					height:70px;
					width:100%;
					cursor:pointer;
					text-align:center;
					margin-left:auto;
					margin-right:auto;
				}
				
				table{
					background:blue;
					text-align:center;
					margin-left:auto;
					margin-right:auto;
					height:150px;
					width:100%;
					margin-bottom:7px;
					color:#ffc904;
					font-size:3em;
					font-weight:bold;
				}
				
				.result{
					font-weight:bolder;
					font-size:3em;
					margin-left:auto;
					margin-right:auto;
					width:80%;
					text-align:center;
				}
				
				.win{
					color:#7CFC00;
					text-align:center;
				}
				
				.lose{
					color:red;
				}
				
				h1{
					text-align:center;
					font-weight:bolder;
					font-size:2em;
				}
				
				h2{
					text-align:center;
					font-weight:bolder;
					font-size:1.5em;
				}
				
				.turn{
					text-align:center;
					font-size:2em;
				}
				
				img{
					background:green;
					border-right:3px solid black;
					border-bottom:3px solid black;
				}
				
				#extra{
					margin-top:75px;
					text-align:center;
					bottom:0px;
					font-size:.75em;
					font-style:italic;
				}
				<?php
					if(isset($bet)){				
						if ( $switch == 0){
							print"body {background:#ffc904;}";
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
							print"body {background:#ffc904;}";
						}
					}
				?>
			</style>
		</head>

		<body>
		
			<?php
				#lj's part
				
				print"<div id='wrapper'>";
				print"<h1>-Acey-Deucy-</h1>"; 
					
				if ($switch == 1){		
					print"<h2 class='black turn'>Black It's Your Turn!</h2>";
				}
				else{	
					print"<h2 class='gold turn'>Gold It's Your Turn!</h2>";
				}
				
				$pass = $_POST['pass'];
				$highold = $_POST['high'];
				$lowold = $_POST['low'];
				$highfolder = $_POST['highpick'];
				$lowfolder = $_POST['lowpick'];
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
				
					print "<div id='high'>High: ".$highold."<br/>";
						switch($highold){
								case 1:
									print"<img src='cards/$highfolder/1.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/$highfolder/2.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/$highfolder/3.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/$highfolder/4.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/$highfolder/5.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/$highfolder/6.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/$highfolder/7.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/$highfolder/8.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/$highfolder/9.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/$highfolder/10.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/$highfolder/11.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/$highfolder/12.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/$highfolder/13.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/$highfolder/1.png' alt='' />";
									break;
							}
					print "</div><div id='low'>Low: ".$lowold."<br/>";
						switch($lowold){
								case 1:
									print"<img src='cards/$lowfolder/1.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/$lowfolder/2.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/$lowfolder/3.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/$lowfolder/4.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/$lowfolder/5.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/$lowfolder/6.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/$lowfolder/7.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/$lowfolder/8.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/$lowfolder/9.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/$lowfolder/10.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/$lowfolder/11.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/$lowfolder/12.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/$lowfolder/13.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/$lowfolder/1.png' alt='' />";
									break;
							}
					print "</div><div id='middle'>Middle: ".$middle."<BR/>";
					
						$thirdsuite = rand(1, 4);
						switch($thirdsuite){
							case 1:
								$thirdpick = "hearts";
								break;
							case 2:
								$thirdpick = "clubs";
								break;
							case 3:
								$thirdpick = "diamonds";
								break;
							case 4:
								$thirdpick = "spades";
								break;
						}
						
						switch($middle){
								case 1:
									print"<img src='cards/$thirdpick/1.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/$thirdpick/2.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/$thirdpick/3.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/$thirdpick/4.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/$thirdpick/5.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/$thirdpick/6.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/$thirdpick/7.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/$thirdpick/8.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/$thirdpick/9.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/$thirdpick/10.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/$thirdpick/11.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/$thirdpick/12.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/$thirdpick/13.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/$thirdpick/1.png' alt='' />";
									break;
							}
							print"</div>";
					if ($middle < $highold && $middle > $lowold){
						if($switch == 0){
							print"<p class='result win'><span class='gold'>GOLD</span> YOU WIN!</p>";
						}
						else{
							print"<p class='result win'><span class='black'>BLACK</span> YOU WIN!</p>";
						}	
					}
					
					else{
						if($switch == 0){
							print"<p class='result lose'><span class='gold'>GOLD</span> YOU LOSE!</p>";
						}
						else{
							print"<p class='result lose'><span class='black'>BLACK</span> YOU LOSE!</p>";
						}
					}

					print"<br/><form action='prj1.php' method='post'><fieldset>";
					if ($switch == 1){
						print"<input type='submit' class='draw btn black' value='NEXT DRAW' name='draw' />";
					}
					else{
						print"<input type='submit' class='draw btn gold' value='NEXT DRAW' name='draw' />";
					}
					
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
						$highsuite = rand(1 ,4);
						switch($highsuite){
							case 1:
								$highpick = "hearts";
								break;
							case 2:
								$highpick = "clubs";
								break;
							case 3:
								$highpick = "diamonds";
								break;
							case 4:
								$highpick = "spades";
								break;
						}
						if ($h >= $l && $h != ($l+1) && $h != $l){
							print "<div id='high'>High: ".$h."<br/>";
							switch($h){
								case 1:
									print"<img src='cards/$highpick/1.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/$highpick/2.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/$highpick/3.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/$highpick/4.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/$highpick/5.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/$highpick/6.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/$highpick/7.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/$highpick/8.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/$highpick/9.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/$highpick/10.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/$highpick/11.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/$highpick/12.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/$highpick/13.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/$highpick/1.png' alt='' />";
									break;
							}
							print "</div>";
							print"<div id='middle'>Middle:<br/><img src='cards/b2fv.png' alt='' /></div>";
							print "<div id='low'>Low: ".$l."<br/>";
							$lowsuite = rand(1 ,4);
						switch($lowsuite){
							case 1:
								$lowpick = "hearts";
								break;
							case 2:
								$lowpick = "clubs";
								break;
							case 3:
								$lowpick = "diamonds";
								break;
							case 4:
								$lowpick = "spades";
								break;
						}
							switch($l){
								case 1:
									print"<img src='cards/$lowpick/1.png' alt='' />";
									break;
								case 2;
									print"<img src='cards/$lowpick/2.png' alt='' />";
									break;
								case 3;
									print"<img src='cards/$lowpick/3.png' alt='' />";
									break;
								case 4;	
									print"<img src='cards/$lowpick/4.png' alt='' />";
									break;
								case 5;
									print"<img src='cards/$lowpick/5.png' alt='' />";
									break;
								case 6;
									print"<img src='cards/$lowpick/6.png' alt='' />";
									break;
								case 7;
									print"<img src='cards/$lowpick/7.png' alt='' />";
									break;
								case 8;
									print"<img src='cards/$lowpick/8.png' alt='' />";
									break;
								case 9;
									print"<img src='cards/$lowpick/9.png' alt='' />";
									break;
								case 10;
									print"<img src='cards/$lowpick/10.png' alt='' />";
									break;
								case 11;
									print"<img src='cards/$lowpick/11.png' alt='' />";
									break;
								case 12;
									print"<img src='cards/$lowpick/12.png' alt='' />";
									break;
								case 13;
									print"<img src='cards/$lowpick/13.png' alt='' />";
									break;
								case 14;
									print"<img src='cards/$lowpick/1.png' alt='' />";
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
					if ($switch == 1){
						print"<input type='submit' class='btn black' value='PASS' name='pass' title='Pick Me!' />"; 
						print'<input type="submit" class="btn black" value="BET" name="bet" title="Pick Me!" />';
					}
					else{
						print"<input type='submit' class='btn gold' value='PASS' name='pass' title='Pick Me!' />"; 
						print'<input type="submit" class="btn gold" value="BET" name="bet" title="Pick Me!" />';
					}
					
					print"<input type='hidden' name='switch' value='$switch' />";
					print"<input type='hidden' name='new' value='isnew' />";
					print"<input type='hidden' name='highpick' value='$highpick' />";
					print"<input type='hidden' name='lowpick' value='$lowpick' />";
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
				
				
				print"<div id='extra'><b>*Extra Features include:</b><ul>";
				print"<li>-Use of jquery for announcing the winner.</li>";
				print"<li>-Graphical cards, using all four suites</li>";
				print"</ul>";
				
				print"</div>";
			?>
		</body>
	</html>