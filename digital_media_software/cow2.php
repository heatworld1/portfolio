<?php session_start();  include("configuration.php");?>
	<!DOCTYPE HTML>
	<html>
		<head>
			<title>Project 4: Cowpies </title>
			<link rel='stylesheet' type='text/css' href='http://lovesonjoseph.com/reset.css' />
			<script type='javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js'></script>
			<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
			<!--<script type="text/javascript" src="jquery.checkbox.min.js"></script>
			<script>
				$(document).ready(function() {
					$('input:checkbox:not([safari])').checkbox();
				});	
			</script>-->
			<link rel="stylesheet" href="jquery.checkbox.css" />
		<link rel="stylesheet" href="jquery.safari-checkbox.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.checkbox.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('input:checkbox:not([safari])').checkbox();
				$('input[safari]:checkbox').checkbox({cls:'jquery-safari-checkbox'});
				$('input:radio').checkbox();
			});

			displayForm = function (elementId)
			{
				var content = [];
				$('#' + elementId + ' input').each(function(){
					var el = $(this);
					if ( (el.attr('type').toLowerCase() == 'radio'))
					{
						if ( this.checked )
							content.push([
								'"', el.attr('name'), '": ',
								'value="', ( this.value ), '"',
								( this.disabled ? ', disabled' : '' )
							].join(''));
					}
					else
						content.push([
							'"', el.attr('name'), '": ',
							( this.checked ? 'checked' : 'not checked' ), 
							( this.disabled ? ', disabled' : '' )
						].join(''));
				});
				alert(content.join('\n'));
			}
			
			changeStyle = function(skin)
			{
				jQuery('#myform :checkbox').checkbox((skin ? {cls: skin} : {}));
			}
			
		</script>
			<!--
			<script type='javascript' src='okshadow-1.0.js'></script>
			<script type='javascript'>
				$(function(){
					$('#wrap, #image_out, hr').okshadow({
						color: '#FCC01D',
						xMax: 3,
						yMax: 3
					});
				});
			</script>
			-->
			<script >
				function validate(){
					var ang = document.getElementById('angle');
					var val = document.getElementById('velocity');
					if(ang.value == "" && val.value == ""){
						alert("Please select both a angle, and velocity!");
						return false;
					}
					if(ang.value == ""){
						alert("Please select a angle!");
						return false;
					}
					if(val.value == ""){
						alert("Please select both a velocity!");
						return false;
					}
				}
			
				function sure(){
					var c = confirm("Are you sure you want to erase the history?");					
					if (c == false)
						return false;
				}
			</script>
			<style text='text/css'>
				#wrap{
					background:url('angry_bg.jpg');
					font-weight:bold;
					min-height:400px;
					padding:10px;
					width:960px;
					margin-left:auto !important;
					margin-right:auto !important;
					border-radius:10px;
					border:7px solid #fcc01d;
					margin-top:23px;
					margin-bottom:23px;
					color: #fcc01d;
					font-weight:bolder;
					text-align:center;
					z-index:4;
				}
				h1{
					font-size:2em;
				}
				hr{
					background:#fcc01d;
					height:3px;
					width:75%;
				}
				#image_out{
					margin:auto;
					display:block;
					border:solid 7px #ffbd31;
					border-radius:10px;
					z-index:9;
					position:absolute;
					margin-top:-597px;
					margin-left:80px;
				}
				fieldset{
					border:none;
				}
				#angle{
					font-size:3em;
					margin-top:5px;
				}
				#velocity{
					font-size:3em;
				}
				body{
					background:url(angry_back.jpg) repeat-x #738f68;
				}
				#title{
					background:url(title.png);
					height:88px;
					width:358px;
					z-index;
					margin-left:301px;
					margin-right:auto;
					margin-top:-30px;
				}
				@font-face{
					font-family: FEASFBRG;
					src:url('FEASFBRG.TTF');
				}
				
				.btn{
					font-family: FEASFBRG;
					background:#ffbd31;
					border-radius:10px;
					height:50px;
					min-width:100px;
					color:white;
					font-weight:bolder;
					font-size:2em;
					border:4px solid #fffedb;
					padding-left:25px;
					padding-right:25px;
					cursor:pointer;
					margin-left:auto;
					margin-right:auto;
					margin-bottom:1.5px;
					margin-top:1.5px;
					dislplay:block;
					height:50px;
					width:345px;
					padding:7px;
				}
				.btn:hover{
					background:white;
					color:#ffbd31;
					border:4px solid #ffbd31;
				}
				#angle, #velocity{
					color:white;
					font-family: FEASFBRG !important;
					border-radius:10px;
					padding:7px;
					background:#ffbd31;
					border:4px solid white;
					cursor:pointer;
				}
				#angle:hover, #velocity:hover{
					font-family: FEASFBRG !important;
					color:#FCC01D !important;
					background:white;
					color:#ffbd31;
					border:4px solid #ffbd31;
				}
				#extras{
					margin-top:-1280px;
					margin-left:-149px;
					background:url('sign.png') no-repeat;
					height:130px;
					position:absolute;
					z-index:20;
					width:232px;
					text-align:left;
					padding-left:18px;
					padding-top:12px;
				}
				#stick{
					height:200px;
					width:200px;
					margin-top:-1090px;
					margin-left:-665px;
					position:absolute;
					z-index:-999;
				}
				table{
					margin-left:auto;
					margin-right:auto;
					font-size:2em;
					background:#738f67;
					border-radius:10px;
					border:5px solid #FCC01D;
					padding:3px;
					text-align:center !important;
					color:#FFFEDB;
				
					z-index:33;
					
				}
			</style>
			<link rel="stylesheet" href="jquery.checkbox.css" />
		<link rel="stylesheet" href="jquery.safari-checkbox.css" />
		</head>
		<body>
			<div id='wrap'>
				<div id='title'></div><hr/>
				<h1>Project 4</h1>
				<form method='post' action='cow2.php'><fieldset>
					<?php
							$show = '';
							print"<a href='../index.html'><--Return TO MAIN PAGE</a><br/>";
							
							// The object of this game is to toss a cowpie (by specifying angle and velocity)
							// So as to come close to an intended target.
							// Angle in degrees 1 to 89; velocity in meters/sec, 1 to 100.

							function drawtrajectory($image, $angle,$velocity,$color){
								global $Imagewidth, $Imageheight;
								$vmax = 500;
								
								if (!$velocity) 
									$velocity=0; // so we can see a zero in the error message
								if (!$angle)
									$angle=0;		// ditto.
								if ($angle<0 && $angle>89){
									print "<h2>Angle $angle won't work for this simulation.</h2>";
									return;
								}
								else if ($velocity<1 || $velocity>$vmax){
									print "<h2>velocity $velocity won't work for this simulation.</h2>";
									return;
								}
								
								$colorGrey = imagecolorallocate($image, 100, 100, 100);
								$colorLightGreen = imagecolorallocate($image, 115, 143, 104);
								$colorBlue = imagecolorallocate($image, 0, 0, 255);
								$colorGold = imagecolorallocate($image, 200, 200, 50);
								$colorGold = imagecolorallocate($image, 255, 255, 255);
								$colorPink = imagecolorallocate($image, 200, 100, 100);
								
								$icecolor = imagecolorallocate($image, 111, 203, 250);
								$woodcolor = imagecolorallocate($image, 198, 101, 4);
								$stonecolor = imagecolorallocate($image, 169, 169, 169);
								
								$fontpath = $Corepath."/fonts";
								$font = "$fontpath/FEASFBRG.TTF";
								$graphwidth = $Imagewidth;
								$Imageheight = $Imageheight;
								$xspace = 25; // for the grid lines
								$yspace = 25;
								imagesetthickness($image, 3);

							   //imageline($image, x1, 			y1, 		x2, 			y2, 		  	$colorGrey);
								imageline($image, 1, 			1, 			1, 				$Imageheight, 	$colorGrey); 
								imageline($image, 1, 		$Imageheight, 	$Imagewidth, 	$Imageheight, 	$colorGrey); 
								imageline($image, $Imagewidth,$Imageheight,  $Imagewidth,	1, 				$colorGrey); 
								imageline($image, $Imagewidth, 	  1,		1,				1,			 	$colorGrey);
								imagesetthickness($image, 1);

								// Create grid: ///////////////////
								// vertical lines: constant x
								//$vlinecount = ($graphwidth/$xspace)+1;
								//for ($i = 0; $i<$vlinecount-1; $i++){
									//imageline($image, $i*$xspace+$leftmargin, 0, $i*$xspace+$leftmargin, $Imageheight, $colorGold);
								//} # for
									
								///////////////////////////////////
								// horizontal lines: constant y
								//$hlinecount = ($Imageheight/$yspace)+1;
								//for ($i = 0; $i <= $hlinecount-2; $i++){
									//$y = $i*$yspace+$topmargin;
									//imageline($image, $leftmargin, $y, $leftmargin+$graphwidth, $y, $colorGold);	
								//}
								
								// Now a horizon...
								$grass = $_SESSION['grass'];
								if($grass != '1'){
									imagesetthickness($image, 50);	
									imageline($image, 3, 575, 	$graphwidth-2, 575, 	$colorLightGreen); 
									imagesetthickness($image, 2);
								}
								else
									print"";
								$_SESSION['grass'] = $grass;
								
								
								// AND an obstacle. Change the 0 to a 1 to see the obstacle
								$obstacle = $_SESSION['obstacle'];
								if ($obstacle == '1'){
									//$num = rand(0, 2);
									//$num = rand(0, 2);
									$num = 1;
								
									if( $num == 2){
										imagesetthickness($image, 50);	
										imageline($image, 300, 200, 300, 550, $stonecolor); 
										imageline($image, 700, 200, 700, 550, $stonecolor); 
										imageline($image, 325, 225, 675, 225, $stonecolor); 
										imageline($image, 325, 525, 675, 525, $stonecolor);
										imageline($image, 250, 175, 500, 100, $stonecolor); 
										imageline($image, 500, 100, 750, 175, $stonecolor); 
										imagesetthickness($image, 2);
									}
									elseif( $num == 1){
										imagesetthickness($image, 100);	
										imageline($image, 300, 300, 300, 550, $woodcolor); 
										imageline($image, 700, 300, 700, 550, $woodcolor); 
										imageline($image, 200, 250, 800, 250, $woodcolor); 
										imagesetthickness($image, 2);
									}
									else{
										imagesetthickness($image, 25);	
										imageline($image, 250, 550, 500, 100, $icecolor); 
										imageline($image, 500, 100, 750, 550, $icecolor); 
										imagesetthickness($image, 2);
									}
								}
								else
									print"";
								$obstacle = $_SESSION['obstacle'];
								
								// special case: if angle=1 and velocity=1, just return
								// without drawing anything. 
								if ($angle == 1 && $velocity == 1)
									return $image;
									
								//// AND NOW FOR THE MECHANICS OF IT
								// x ranges from 0 to 800, and y ranges from 0 to 600. We create y = yup-600 so
								// as to have an (x,yup) coordinate axis in lower left corner of the screen.
								$oldx = $x + 0; 
								$oldyup = $yup + 50; // let's make our "ground" at 50 units up from bottom of screen.

								// NOW to get the x and y components of the velocity:
								$radians = $angle*pi()/180; // so 90 degrees is pi/2
								$xvel = $velocity*cos($radians);
								$yvel = $velocity*sin($radians);		
								//logprint("xv=$xvel,yvel=$yvel",1);
												
								$yacceleration = -5; // meters per second per second, acceleration downward
													// Real world is -9.8, but this is MY world and I like -5.
													
								while ($x < $graphwidth && $yup >= 0){			
									$y = $Imageheight-$yup;
									$oldy = $Imageheight-$oldyup;	
									imageline($image, $oldx, $oldy, $x, $y, $color); 
									$oldx = $x;
									$oldyup = $yup;
									$yvel = $yvel + $yacceleration;	
									$yup+=$yvel;
									$x+=$xvel;
								}
								
								// Now we want to put a SPLAT at the end. For now we just use a big X.
								$font = 'Arial';
								$fontpath = "fonts";
								$font = "$fontpath/FEASFBRG.TTF";
								$y = $Imageheight-$oldyup;
								$charwidth = 25; // char is about ten pixels wide
								$x = $oldx-$charwidth/2;
								//logprint("text x=$x,y=$y,font=$font",2);
								
								$pie = $_SESSION['pie'];			
								if($pie == '1'){
									$pwidth = 50; 
									$pheight = 50;
									//$pfilename='poo.jpeg';
									$pfilename = 'poo.png';
									//$pimage = imagecreatefromjpeg ($pfilename);
									$pimage = imagecreatefrompng ($pfilename);
								}
								else{
									//print twice, offset, to achieve Bold effect
									imagettftext ($image , 24 , 0 , $x, $y, $colorGrey , $font , 'X');
									imagettftext ($image , 24 , 0 , $x+2, $y, $colorGrey , $font , 'X');
								}
								$_SESSION['pie'] = $pie;		
								
								imagecopy ( $image , $pimage, $x , $y-30, 0, 0 , $pwidth, $pheight);
								return $image;
							} #drawtrajectory

							/*
							#obstacle detection
							function obstacle(){	
								print"HELLO";
								// now you are in the horizontal danger zone
								If(x>xo && x<x1){
									// and you are below the top of the obstacle
									print"<BR/>AREA ONE GOT HIT!<BR/>";
									If (y<y0)  {
										//show collision and stop drawing the green line
										print"<BR/>AREA TWO GOT HIT<BR/>";
									} # Y if
								} # X if
							} #obstacle detection
							*/
							
							
							/*
							#putpie:
							function putpie($image, $x, $y){
								return $image;
							} #putpie
							*/
							
							#drawinputs:
							function drawinputs($pie, $obstacle, $grass){
								// Let's get some input, too
								print "<br />";
								//print"<input type='text' size=2 name='angle'>Angle, 1 to 89 degrees <br />";
								print"<select id='angle' name='angle'>";
									print"<option value=''>Angle</option>";
									for($a=1; $a<90; $a++)
										print"<option value='$a'>$a</option>";
								print"</select>";
								
								//print"<input type='text' size=2 name='velocity'>Velocity, 1 to 100 meters/sec <br />";
								print"<select id='velocity' name='velocity'>";
									print"<option value=''>Velocity</option>";
									for($v=1; $v<101; $v++)
										print"<option value='$v'>$v</option>";
								print"</select>";
								print"<br/><input type='submit' class='btn' name='action' value='Launch Cowpie!' onclick='validate()'> <br />
									<input type='submit' class='btn' name='action' value='Show History'> <br />
									<input type='submit' class='btn' name='action' onclick='sure()' value='Erase History'> <br />";
								
								$obstacle = $_SESSION['obstacle'];
								$pie = $_SESSION['pie'];
								$grass = $_SESSION['grass'];
								
								if ($obstacle == '1')
									$obcheck='checked="checked"';
								else
									$obcheck='';
									
								if ($pie == '1')
									$pcheck='checked="checked"';
								else
									$pcheck='';
									
								if ($grass == '1')
									$gcheck='checked="checked"';
								else
									$gcheck='';

								$_SESSION['obstacle'] = $obstacle;
								$_SESSION['pie'] = $pie;
								$_SESSION['grass'] = $grass;
								
								$jstuff = "var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)";
					
								print "<label><input onclick=$jstuff type='checkbox' class='checkbox' name='grass' value='1' $gcheck />Remove Grass</label><br/>";
								print "<label><input type='checkbox' class='checkbox' name='obstacle' value='1' $obcheck />Show Obstacles</label><br/>";
								print "<label><input type='checkbox' class='checkbox' name='pie' value='1' $pcheck />Show the pie</label><br/><br/>";
							} # drawinputs
									
							#storehistory: 
							function storehistory($angle,$velocity,$time){
								$tbl = 'project4_trajectory';
								$angle = mysql_real_escape_string($angle);
								$uname = stripslashes($angle);
								$velocity = mysql_real_escape_string($velocity);
								$velocity = stripslashes($velocity);
								$time = mysql_real_escape_string($time);
								$time = stripslashes($time);
								
								if($angle != null || $velocity!= null)
									$added = "INSERT INTO $tbl (angle, velocity, time) VALUES ('$angle', '$velocity', NOW())";
								$result = mysql_query($added);	
								print"<br/>$added<br/>";
							}
							
							#showhistory: 
							function showhistory($image,$color){
								$show = $_SESSION['show'];
								
								$show = true;
								$_SESSION['show'] = $show;
								
								//$image = drawtrajectory($image, 70, 70, $color);
								//$image = drawtrajectory($image, 45, 45, $color);
								//return $image;
							}#showhistory

							#erasehistory: 
							function erasehistory(){
								print "<h3>Trajectories are now erased!</h3>";
								$tbl = 'project4_trajectory';
								$deleted="DELETE FROM $tbl";
								$result = mysql_query($deleted);	
							} # erasehistory

							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\
							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\
							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\
							////////////////////////////////////////// MAIN! //////////////////////////////////////
							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\
							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\
							/////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\\\\\

							// FIRST we gotta prepare the Image
							// Basic shape of the graph:
								$Imagewidth = 800;
								$Imageheight = 600;
								
								// NOW we can do things with it
								$action = $_POST['action'];
								$obstacle = $_POST['obstacle'];
								$grass = $_POST['grass'];
								$pie = $_POST['pie'];
								$x = $_POST['x'];
								$y = $_POST['y'];
													
								$image = imagecreate($Imagewidth+5, $Imageheight+5);
								// we allow 5 extra pixels on bottom and right, to show border cleanly
								// The FIRST image color that you allocate will be the background color.

								$colorWhite = imagecolorallocate($image, 193, 231, 240);
								$colorGreen = imagecolorallocate($image, 0, 200, 0);
								$colorGreen = imagecolorallocate($image, 61, 44, 0);
								$colorBlack = imagecolorallocate($image, 0, 0, 0);
								
								print"<img src='back.jpg' style='height:500px; width:800px; margin-left:36px; margin-top:40px; z-index:5; margin-bottom:30px;' class='fill'/>";
								
								
								
								//Check to see whose turn it is
								$turn = $_SESSION['turn'];
								if($turn == 'black'){
									print"<br/>Black Turn<br/>";
									$turn = 'gold';
								}
								else{	
									print "<br/>Gold Turn<br/>";
									$turn = 'black';
								}
								$_SESSION['turn'] = $turn;
								
								/*$st = rand(1, 3);
								$sta = "star_".$st.".png";
								print"<br/><br/><img src='$sta' alt='' /><br/><br/>";*/
								
								$angle = $_POST['angle'];
								$velocity = $_POST['velocity'];
								$time = $_POST['time'];
								if ($action == 'Show History')
									showhistory($image,$colorGreen);
									//$image = showhistory($image,$colorGreen);
								//elseif($action=='Put Pie')
									//$image=putpie($image,$x,$y);
								else if ($action == 'Launch Cowpie!'){
									$image = drawtrajectory($image,$angle,$velocity,$colorGreen);
									print' <input type="hidden" name="time" id="time" value="NOW()" />';
									storehistory($angle, $velocity, $time);
								}
								else if ($action == 'Erase History'){
									erasehistory();
									$image = drawtrajectory($image,1,1,$colorGreen);
									// see 'drawtrajectory' to figure why (1,1) produces an empty screen.
								}
								
								//obstacle();
								imagepng($image, 'graphout.png');
								//imagepng($image);
								imagedestroy($image);
								
								print '<img id="image_out" src="graphout.png?lastmod=1">'; 
					
								drawinputs($pie, $obstacle, $grass);
								
								$show = $_SESSION['show'];
								if($show == true){
									print"<table><tr><th>Angle</th><th>Velocity</th><th>Time</th><tr/>";
									$tbl = "project4_trajectory";
									$sql = "SELECT * FROM $tbl";
									$resources = mysql_query($sql);	
									while($row = mysql_fetch_array($resources)){
										echo"<tr>";
										echo "<td>{$row['angle']}</td>";
										echo "<td>{$row['velocity']}</td>";
										echo "<td>{$row['time']}</td>";
										echo"</tr>";
									}
									print"</table>";
									$show = '';
								}
								
								else
									print"";
								$_SESSION['show'] = $show;
								
								print '<a href="http://www.rovio.com/"><img id="" src="logo_rovio.png"></a>'; 
								print "<div id='extras' ><ul>
								<li><b>Extras:</b></li>
								<li>1. Notifies whose turn is it</li>
								<li>2. Added javascript and jquery</li>
								<li>3. Added images and used css</li>
								<li>4. Used custom font </li>
								<li>5. Randomly created obstacles</li>
								</ul></div>";
								print"<img src='stick.png' id='stick' alt='' />";
							?>
						</div>
					</fieldset>
					<input type="hidden" name="time" id="time" value="NOW()" />
				</form>				
			</body>
		</html>	