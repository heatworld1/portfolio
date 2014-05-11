<?php

	//This will start the session for session variables
	session_start();
	
	//Battleship Project - DIG 3134 - Fall 2011 - J.Moshell
	#######################################################
	##########################Lovesone Joseph##############
	#######################################################
	
	//Defining constants and variables
	$Gridsize = 7;
	$Cellwidth = 500/$Gridsize;
	$Blue = '#0000FF';
	$LightBlue = '#AAAAFF';
	$Black = '#000000';
	$Gold = '#AAAA33';
	$White = '#FFFFFF';
	define('WHITE','#FFFFFF');
	define('BLUE','#0000FF');

	//Creates the top of the web pages from html til the end of the head
	function makeheader(){
		global $Cellwidth;
		print'<!DOCTYPE HTML ><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		print'<title>Battleship - Fall 2011 - Loveson joseph</title>';
		print'<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
		<link rel="stylesheet" src="http://lovesonjoseph.com/reset.css" type="text/css"/>';
		print"<script type='text/javascript'>";
		print"function submit(){ document.getElementById('radios').submit;}";
		print"</script>";
		print "	<style type='text/css'>
				body{
					background-image:url('water.jpg');
					background-attachment:fixed;
				}
				#radios, #restart{
					margin-left:0px;
					padding:0px;
					z-index:0;
				}
				#turn{
					display:block;
					margin:auto;
					cursor:pointer;
				}
				#turn:hover{
					background:url('bomb.png');
					cursor:pointer;
				}
				#chain{
					position:absolute;
					z-index:0;
					margin-top:219px;
					margin-left:-37px;
				}
				#chain2{
					position:absolute;
					z-index:0;
					margin-top:470px;
					margin-left:-37px;
				}
				#hang_chain{
					position:absolute;
					z-index:0;
					margin-top:-247px;
					margin-left:-19px;
				}
				#hang_chain2{
					position:absolute;
					z-index:0;
					margin-top:-240px;
					margin-left:489px;
				}
				#extras{
					width:280px;
					height:280px;
					background:blue;
					position:absolute;
					z-index:4px;
					margin-top:11px;
					margin-left:-340px;
					border:10px solid black;
					margin-right:auto;
					padding:10px;
					border-radius:10px;
					color:white;
				}
				.mtable td {
					width:$Cellwidth"."px; height:$Cellwidth"."px;
					color:WHITE;
				}
				table{
					border:10px solid black;
					background:black;
					color:red;
					border-radius:10px;
					font-weight:bolder;
					font-size:1em;
					z-index:2;
				}
				#wrap{
					padding:70px 10px 10px 10px;
					background:url('test_3.jpg');
					min-height:500px;
					width:575px;
					margin-left:auto;
					margin-right:auto;
					margin-top:100px;
					border-radius:10px;
					z-index:3;
				}
				fieldset{
					margin-left:auto;
					margin-right:auto;
					padding:10px;
					border:none;
				}
				td:hover{
					background:lightblue !important;	
				}
				td{
					padding:15px;
				}
				#xinput{
					height:60px;
					width:100px;
					margin-left:auto;
					margin-right:auto;
					font-size:3em;
				}
				#yinput{
					height:60px;
					width:100px;
					margin-left:auto;
					margin-right:auto;
					font-size:3em;
				}
				#bomb{
					height:50px;
					width:100px;
				}
				ul{
					list-style:none;
				}
				#clear, #clear2, #clear3, #clear4{
					height:100px;
					width:50%;
					font-weight:bolder;
					color:white;
					background:blue;
					font-size:2em;
					border: solid black 10px;
					border-radius:10px;
					margin-left:auto;
					margin-right:auto;
				}
				#clear:hover, #clear2:hover, #clear3:hover, #clear4:hover{
					background:white;
					color:blue;
				}
				td, input{
					cursor:pointer;
				}
				td, tr{
					height:2px !important;
					width:300px !important;
				}
				#title{
					background:url('battle_title.jpg') no-repeat;
				}
				li:hover{
					cursor:pointer;
					color:black;
					text-decoration:underline;
				}
				#hasbro{
					margin-left:auto;
					margin-right:auto;
					height:64px;
					width:64px;
					display:block;
				}
				#title{
					width:650px; 
					height:150px; 
					z-index:3;
					position:absolute; 
					margin-left:-20px; 
					margin-top:-150px;
				}
			</style>";
		print '</head><body><div id="wrap">';
	}

	//Creates grid colors
	function preparegrid(){
		global $Grid, $Gridsize, $Black, $Gold;
		for ($y=0; $y<=$Gridsize+1; $y++){
			for ($x=0; $x<=$Gridsize+1; $x++){
				// left margin
				if ($x==0){
					$Grid[$x][$y]=BLUE;
				}
				// top margin
				else if ($y==0) {
					$Grid[$x][$y]=BLUE;
				}
				// right margin and bottom margin
				else if (($x==$Gridsize+1)||($y==$Gridsize+1)){	
					$Grid[$x][$y]=BLUE;
				}
				// fill the middle with white!
				else	
					$Grid[$x][$y]=WHITE;	
			} # x loop
		} # y loop
	} # preparegrid

	//creates the ships
	function prepareships(){
		global $Ships, $Gridsize, $LightBlue, $Black, $Gold, $black_amount, $gold_amount;
		for ($y=1; $y<=$Gridsize; $y++){
			for ($x=1; $x<=$Gridsize; $x++){
				$Ships[$x][$y]=$LightBlue;
			} # x loop
		} # y loop
		
		//Ship coordinates #1
		$y = rand(1, $Gridsize-2);
		$temp_y = $y;
		for ($x = 1; $x<=rand(1, 5); $x++)
			$Ships[$x][$y]=$Gold;
		
		//Ship coordinates #2
		$done = 0;
		while($done != 1){
			$y = rand(1, $Gridsize-2);
			if($temp_y != $y && $temp_y != $y+1 && $temp_y != $y-1){
				for ($x = 1; $x<=rand(1, 5); $x++)
					$Ships[$x][$y]=$Black;
				$done = 1;
			}
		}
	} # prepareships

	//Creates the table to hold all of the radio buttons
	function drawgrid(){
		global $Grid,$Gridsize;
		$result='<form action="battleship.php" method="post" id="radios" ><fieldset><table class="mtable">';
		for ($y=0; $y<=$Gridsize+1; $y++){
			$result.="<tr>";
			for ($x=0; $x<=$Gridsize+1; $x++){
				if ($x==0) 
					$char=$y; // numbers down the left (Y) axis
				else if ($y==0){
					$char=$x;  // numbers across the top (X) axis
					$char = numtochar($x);
				}
				else{
					if($x <$Gridsize+1 && $y <$Gridsize+1)
						$char="<input class='radio' type='radio' onclick='submit();' value ='$x.$y' name='fillhere' />";	
					
					else
						$char = null;// nonblank space everywhere else
				}
				$color=$Grid[$x][$y];
				$result.="<td  style='background-color:$color'>$char</td>";
			} # x loop
			$result.="</tr>";
		} # y loop
		$result.="</table>";
		print $result;
		print"</fieldset></form>";
	} #drawgrid

	//Converts the numbers to characters
	function numtochar($numin) {
		if($numin == 0){
			$charout = $numin;
			return $charout; 
		}
		else{
			$numa=ord('A'); 		//	we want numin=1 to produce chr('A'), so 
			$numout=$numin+$numa-1; //  now if numin=1, numout = chr('A') 
			$charout=chr($numout);  //  and if numin=2, numout = chr('B') etc. 	
			return $charout; 
		}
	} 

	//Displays the buttons for the form
	function drawinputs(){
		global $Gridsize, $action;
		print "<form action='battleship.php' id='restart' method='post'><fieldset>";
		print"<input type='submit' id='clear' name='action' value='RESTART!' />";
		if($action == 'RETURN' || $action != 'PEEK'){
			
			print"<input type='submit' id='clear3' name='action' value='PEEK' />";
		}
		else{
			preparegrid();
			print"<input type='submit' id='clear4' name='action' value='RETURN' />";
			print"<input type='submit' id='clear2' style='display:none;' name='action' value='PEEK' />";
		}	

		print"</fieldset></form>";
	}

	//Converst characters to numbers
	function chartonum($charin) {
		$numa=ord('A'); 		//	we want charin='A' to produce 1, so 
		$numin=ord($charin); 	//	we want num=1 to produce A, so: 
		$numout=$numin-$numa+1; //  now if numin=1, numout = chr('A') 	
		return $numout; 
	} 

	//Counts a certain amount of a color in the grid
	function countcolor ($color) {
		global $Grid, $Gridsize; 	
		$colorcount=0; 	
		for ($y=1; $y<=$Gridsize; $y++) { 		
			for ($x=1; $x<=$Gridsize; $x++){ 			
			//if ($Grid[$x][$y]==$color) 	
			//if ($Grid[$x][$y]=='#000000') 	
				//$colorcount++; 
				$colorcount = print_r($Grid, true);
				//$colorcount = $colorcount.$Grid[$x][$y]."|";
			} # x loop 	
		} # y loop 	
		print $colorcount;
		//$colorcount = 7;
		return $colorcount; 
	} #countcolor
	
	//Counts the amount of a ships of a color
	function countshipcolor ($color) {
		global $Grid,$Ships, $Gridsize, $LightBlue, $Black, $Gold, $black_amount, $gold_amount;
		$colorcount=0; 	
		for ($y=1; $y<=$Gridsize; $y++) { 		
			for ($x=1; $x<=$Gridsize; $x++){ 			
			if ($Ships[$x][$y]==$color) 	
				$colorcount++; 		
			} # x loop 	
		} # y loop 	 	
		return $colorcount; 
	} #countcolor
	
	##########################################
	##########################################
	/////////// MAIN PROGRAM /////////////////
	##########################################
	##########################################
	
	//Call the header function 
	makeheader();
	$headed = 'battle_title.jpg';
	print'<div id="title"></div>';
	print"<img alt='' id='chain' src='chains.png'  />";
	print"<img alt='' id='chain2' src='chains.png'  />";
	print"<img alt='' id='hang_chain' src='hang_chain.png'  />";
	print"<img alt='' id='hang_chain2' src='hang_chain.png'  />";
	print"<br/><a href='../index.html'>{RETURN TO MAIN PAGE}</a><br/>";
	//Checke to see whose turn it is
	$turn = $_SESSION['turn'];
	if($turn == 'black'){
		print"<img src='black_bomb.png' id='turn' alt='' /><br/>";
		$turn = 'gold';
	}
	else{	
		print "<img src='gold_bomb.png' id='turn' alt=''/><br/>";
		$turn = 'black';
	}
	$_SESSION['turn'] = $turn;
	
	//Area to show extra work that was done for higher grade.
	print"<div id='extras'>
		<h1>Extra Features:</h1>
		<ul>
			<li>1. Added Images and CSS.</li>
			<li>2. Added Radio buttons.</li>
			<li>3. Added Javascript to submit onclick</li>
			<li>4. Notifies which turn it is for the teams.</li>
			<li>5. Ships Randomly placed, and have random sizes.</li>
			<li>6. Can peek at board.</li>	
			<li>7. Notifies when whole ship is sunk.</li>	
		</ul>
	</div>";
	
	//
	$blackcount = countcolor($Black); 	
	$goldcount = countcolor($Gold); 	
	print "<br/>I see $blackcount black squares, and $goldcount gold squares.<br/>";
	
	//
	$blackshipcount = countshipcolor($Black); 	
	$goldshipcount = countshipcolor($Gold); 
	print"<br/> but only $blackshipcount and $goldshipcount";
	
	$disp = false;
	//if($disp == false){
	print"<br/>This is gold in the grid $goldcount<br/>";
	print"This is black in the grid $blackcount<br/>";
	print"This is gold ships $goldshipcount<br/>";
	print"This is black ships $blackshipcount<br/>";
	if($goldcount == $goldshipcount){
		print"<br/><br/>GOLD SHIP DOWN<br/><br/>";
	}
	
	if($blackcount == $blackshipcount){
		print"<br/><br/>BLACK SHIP DOWN<br/><br/>";
	}
	
	//Gets the radio, and actions just posted
	$f = $_POST['fillhere'];
	$action = $_POST['action'];	
	
	//if else to check if the action is clear or f
	if ($action=='RESTART!'){
		preparegrid();
		prepareships();
	}
	elseif ($f != null){
	//preparegrid();
		$Grid = $_SESSION['Grid'];
		$Ships = $_SESSION['Ships'];
		$fparts = explode('.', $f);
		$x = $fparts[0];
		$y = $fparts[1];	
		$Grid[$x][$y]=$Ships[$x][$y];
		//
	}
	elseif ($action=='PEEK'){
		$Grid = $_SESSION['Grid'];
		$Ships = $_SESSION['Ships'];
		for ($y=1; $y<=$Gridsize; $y++){
			for ($x=1; $x<=$Gridsize; $x++){
				$Grid[$x][$y]=$Ships[$x][$y];
			}
		}
	}
	elseif($action='RETURN'){
		$Grid = $_SESSION['Grid'];
		$Ships = $_SESSION['Ships'];
		preparegrid();
	}
		
	// No matter what happens above, we always draw the grid and the input controls.
	drawgrid();
	drawinputs();
	
	//Take the grid and ships values and store them in the grid and ship variables
	$_SESSION['Grid'] = $Grid;
	$_SESSION['Ships'] = $Ships;
	
	//Footer ending area
	print"<a href='http://www.hasbro.com' style='border:none;'>";
	print"<img id='hasbro' title='Click Me!' style='border:none;' src='hasbro.png' /></a>";
	print"</div></body></html>";
?>