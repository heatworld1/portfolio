<?php
	session_start();
	//Battleship Project - DIG 3134 - Fall 2011 - Moshell
	
	/*
	$turn = $_SESSION[turn];
	$turn = 0;
	$_SESSION[turn] = $turn;
	*/
	
	$Gridsize = 7;
	$Cellwidth = 500/$Gridsize;
	$Blue = '#0000FF';
	$LightBlue = '#AAAAFF';
	$Black = '#000000';
	$Gold = '#AAAA33';
	$White = '#FFFFFF';
	define('WHITE','#FFFFFF');
	define('BLUE','#0000FF');

	function makeheader(){
		global $Cellwidth;
		print'<!DOCTYPE HTML ><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		print'<title>Battleship - Fall 2011 - Loveson joseph</title>';
		print"<script type='text/javascript'>";
		//print" onclick submit form to self";
		print"</script>";
		print "	<style type='text/css'>
				body{
					background:black;
				}
				.mtable td {
					width:$Cellwidth"."px; height:$Cellwidth"."px;
					color:WHITE;
				}
				table{
					border:10px solid black;
					font-size:3em;
					color:red;
				}
				#wrap{
					padding:70px 10px 10px 10px;
					background:grey;
					min-height:500px;
					width:575px;
					margin-left:auto;
					margin-right:auto;
					border-radius:10px;
				}
				fieldset{
					width:40%;
					margin-left:auto;
					margin-right:auto;
					padding:10px;
					border:none;
				}
				td:hover{
					background:#0000FF !important;
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
				#clear{
					height:50px;
					width:100px;
				}
				td, input{
					cursor:pointer;
				}
			</style>";
		print '</head><body><div id="wrap">';
	}

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
				// fill the dude with white!
				else	
					$Grid[$x][$y]=WHITE;	
			} # x loop
		} # y loop
	} # preparegrid
	
	function countcolor ($color) {
		global $Grid, $Gridsize; 	
		$colorcount=0; 	
		for ($y=1; $y<=$Gridsize; $y++) { 		
			for ($x=1; $x<=$Gridsize; $x++){ 			
				if ($Grid[$x][$y]==$color) 
					$colorcount++; 		
			} # x loop 	
		} # y loop 	 	
		return $colorcount; 
	} #countcolor

	function prepareships(){
		global $Ships, $Gridsize, $LightBlue, $Black, $Gold;
		for ($y=1; $y<=$Gridsize; $y++){
			for ($x=1; $x<=$Gridsize; $x++){
				$Ships[$x][$y]=$LightBlue;
			} # x loop
		} # y loop
		
		// Plant the Black Ship
		$y=1;
		for ($x=1; $x<=5; $x++)
			$Ships[$x][$y]=$Black;
			
		// Plant the Black Ship
		$y=2;
		for ($x=1; $x<=5; $x++)
			$Ships[$x][$y]=$Black;
			
		// Plant the Black Ship
		$y=4;
		for ($x=1; $x<=5; $x++)
			$Ships[$x][$y]=$Black;
			
		
		// Plant the Gold Ship
		$y=1;
		for ($x=6; $x<=10; $x++)
			$Ships[$x][$y]=$Gold;
		
		// Plant the Gold Ship
		$y=3;
		for ($x=6; $x<=10; $x++)
			$Ships[$x][$y]=$Gold;
			
		// Plant the Gold Ship
		$y=7;
		for ($x=6; $x<=10; $x++)
			$Ships[$x][$y]=$Gold;
			
	} # prepareships

	function drawgrid(){
		global $Grid,$Gridsize;
		$result='<table class="mtable">';
		for ($y=0; $y<=$Gridsize+1; $y++){
			$result.="<tr>";
			for ($x=0; $x<=$Gridsize+1; $x++){
				if ($x==0) $char=$y; // numbers down the left (Y) axis
				else if ($y==0){
					$char=$x;  // numbers across the top (X) axis
					$char = numtochar($x);
				}
				else $char="<input type='radio' onclick='submit();' />";	   // nonblank space everywhere else
				$color=$Grid[$x][$y];
				$result.="<td align='center' style='background-color:$color'>$char</td>";
			} # x loop
			$result.="</tr>";
		} # y loop
		$result.="</table>";
		print $result;
	} #drawgrid

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

	
	function drawinputs(){
		global $Gridsize;
		print "<form action='' method='post'><fieldset> X position:";
		print "<select id='xinput' name='xinput'>";
		print"<option value=''></option>";
		for($n = 1; $n <= $Gridsize; $n++){
			$temp = $n;
			$tempnum = numtochar($temp);
			print"<option value='$tempnum'>$tempnum</option>";
		}
		print"</select>	";
		print"<br/>Y position:";
		print "<select id='yinput' name='yinput'>";
		print"<option value=''></option>";
		for($m = 1; $m <= $Gridsize; $m++)
			print"<option value='$m'>$m</option>";
		print"</select>	";
		print"<br/><label>fused</label>";
		print"<input type='text' maxlength='3' name='fusion' />";
		print"<br /><input type='submit' id='bomb' name='action' value='Bomb'>";
		
		/*
		if($turn == '0'){
			print"<br /><input type='submit' id='bomb' name='action' value='Black Bomb Drop'>";
			$turn = 1;
		}
		else{	
			print "<br /><input type='submit' id='bomb' name='action' value='Gold Bomb Drop'>";
			$turn = 0;
		}
		*/
		
		print"<input type='submit' id='clear' name='action' value='Clear'>
		</fieldset></form>";
	}
	
	
	function chartonum($charin) {
		$numa=ord('A'); 		//	we want charin='A' to produce 1, so 
		$numin=ord($charin); 	//	we want num=1 to produce A, so: 
		$numout=$numin-$numa+1; //  now if numin=1, numout = chr('A') 	
		return $numout; 
	} 

	function divide($v){
		$v = strtoupper($v);
		$len = strlen($v);
		global $fir;
		global $sec;
		$fir = substr($v,0,1);
		$sec = substr($v,1,$len);
		//validation X cant be more then value of alpha, Y cant be gridsize+1
		//print"1st: $fir, 2nd: $sec";
		
	}

	##########################################
	##########################################
	/////////// MAIN PROGRAM /////////////////
	##########################################
	##########################################
	
	makeheader();
	
	
	/*
	do you want to add the ships, do you have a text file?, or random?

	
	*/
	$blackcount=countcolor($Black); 	
	print "I see $blackcount black squares.";
	$Black0="#000000";
	$Black1="#010101";

	
	$action = $_POST['action'];
	if ((!$action)||($action=='Clear')){
		preparegrid();
		prepareships();
	}
	else if ($action=='Bomb'){
		$Grid = $_SESSION['Grid'];
		$Ships = $_SESSION['Ships'];
		//print "fusion value:".$_POST[fusion]."<br/>";
		
		$beg = divide($_POST[fusion]);
		print"1st: $fir, 2nd: $sec";
		$x = $_POST['xinput'];
		$x = chartonum($x);
		$y = $_POST['yinput'];
		//print"this is x:$x , this is y:$y";
		
		/*
		if(ship all displayed)
			print"black ship is sunk’ ";
		else
			print"gold ship is sunk’ ";
		*/
		$Grid[$x][$y]=$Ships[$x][$y];
	}
	else
		print "Unknown action:$action";
	print"<h1>WELCOME TO BATTLESHIP</h1>";	
	// No matter what happens above, we always draw the grid and the
	// input controls.
	drawgrid();
	drawinputs();
	$_SESSION['Grid']=$Grid;
	$_SESSION['Ships']=$Ships;
	print"</div></body></html>";
?>