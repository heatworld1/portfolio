<?php 
	#################################################
	#################################################
	#################################################
	#################################################
	####################Lovesone Joseph##############
	#################################################
	#################################################
	#################################################
	
	//Begin the session to save and load values
	session_start();
	
	//Check the server for the most recent post
	if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
		//master activity check
		if(isset($_POST['lives'])) $_SESSION['lives'] = $_POST['lives'];
		if(isset($_POST['step'])) $_SESSION['step'] = $_POST['step'];
		if(isset($_POST['line'])) $_SESSION['line'] = $_POST['line'];
		if(isset($_POST['views'])) $_SESSION['views'] = $_POST['views'];
		if(isset($_POST['word'])) $_SESSION['word'] = $_POST['word'];
		if(isset($_POST['turn'])) $_SESSION['turn'] = $_POST['turn'];
		if(isset($_POST['guesshold'])) $_SESSION['guesshold'] = $_POST['guesshold'];
	}

	//Check to see if values are set and if not assign a default value
	$lives = isset($_SESSION['lives']) ? $_SESSION['lives'] : 3; // store session data
	$step = isset($_SESSION['step']) ? $_SESSION['step'] : 0; // store session data
	$line = isset($_SESSION['line']) ? $_SESSION['line'] : 0; // store session data
	$views = isset($_SESSION['views']) ? $_SESSION['views'] : ''; // store session data
	$word = isset($_SESSION['word']) ? $_SESSION['word'] : ''; // store session data
	$turn = isset($_SESSION['turn']) ? $_SESSION['turn'] : 'black'; // store session data
	$guesshold = isset($_SESSION['guesshold']) ? $_SESSION['guesshold'] : ''; // store session data
	
	
	//Displays all the conent within the head html tag
	function head(){	
		print"<!DOCTYPE HTML>\n";
		print"<html>\n";
		print"<head>\n";
		print"<title>Project 2 - Wheel of Fortune</title>\n";
		print'<link href="http://www.wheeloffortunesolutions.com/favicon.ico" type="image/vnd.microsoft.icon" rel="icon" />';
		print'<link href="http://www.wheeloffortunesolutions.com/favicon.ico" type="image/x-icon" rel="shortcut icon" />';
		print '<link href="http://www.wheeloffortunesolutions.com/favicon.gif" type="image/gif" rel="icon" />';
		print"<link rel='stylesheet' src='http://lovesonjoseph.com/reset.css' type='text/css'/>";
		
		print"<style type='text/css'>\n";
		print"body{background:url('/bg.png') repeat-x black;}";
		print".wrap{background:url('http://www.benfolds.com/sites/benfolds/themes/benfolds/images/bg-repeat.jpg') silver; border-radius:4px; margin-left:auto; margin-right:auto; min-height:700px; width:570px; padding:10px; border: 3px solid black;}\n";
		print".board{ margin-left:auto; margin-right:auto;}\n";
		print"img{margin:3px;}\n";
		print"td{ height:70px !important; width:70px !important; text-align:center; padding:0px; }\n";
		print"td:hover {background:url('/sq_hover.png') no-repeat; cursor:pointer;}";
		print".green {background:url('/sq.png') no-repeat;}\n";
		print".white { background:url('/white.png') no-repeat;}\n";
		print" table {color:black; font-size:1.05em; font-weight:bolder;  margin-left:auto; margin-right:auto; border-collapse:collapse; border:3px double darkblue; background:url('/sq.png');} \n";
		print".vanna{height:757px; width:484px; float:left; position:absolute; z-index:-1; margin-left:-400px; margin-top:70px; position: fixed;} \n";
		print".pat{height:829px; width:348px; float:right; position:absolute; z-index:-2; margin-left:550px; position:fixed; } \n";
		print".wheel{backgroung:blue; width:700px; height:189px; position:absolute; z-index:-99; margin-top:100px;}";
		print" form{margin-left:auto; margin-right:auto;}";
		print" fieldset{width:459px; height:150px; margin-left:auto; margin-right:auto; margin-top:3px; margin-bottom:3px; border:none; display:block; padding-top:3px; display:block;}";
		print".black:hover{background:url('/black_hover.png') no-repeat; cursor:pointer; display:block;}";
		print".gold:hover{background:url('/gold_hover.png') no-repeat; cursor:pointer; display:block;}";
		print".guess, .reveal, .next{height:70px; width:150px; font-weight:bolder; cursor:pointer; border-radius:4px;}";
		print".guess:hover, .reveal:hover, .next:hover{background:green; color:white}";
		print".guess_value{height:70px; width:455px; text-align:center; font-size:3em; font-weight:bolder; margin-bottom:5px; text-transform:capitalize; border-radius:4px;}";
		print"b {text-align:center !important;}";
		print"</style>\n";
		
		print"  <SCRIPT language=Javascript>
		   function isNumberKey(evt){
			 var charCode = (evt.which) ? evt.which : event.keyCode
			 if (charCode < 65 && (charCode < 65 || charCode > 90) && charCode != 13 && charCode !=33 && charCode !=39 && charCode !=45 && charCode !=96 && charCode !=126)
				return false;

			 return true;
		  }
		  ";
		  
		  
		print"</SCRIPT>";
		print"</head>\n";
		print"<body onLoad='document.textbox.guess_value.focus()' >\n";
		print"<body  >\n";
		print"<div class='wrap'>\n";
	}
	
	//Function displays all the information at the end of the web page.
	function tail(){
		print"</div>";
		print"\n</body>\n";
		print"</html>\n";
	}

	//Function that reads the text file and moves up and down the text file
	function getword(){
		$step = $_SESSION['step'];
		$filename = "test.txt";
		if (!file_exists($filename)){
			print "Something happened, $filename is missing!!!.";
			exit;
		}
		else{
			$textarray = file($filename);
			if($textarray[$step] <= null){
				print "<h1>There is nothin left.</h1>";
				print "<h1>Press <b>NEXT PHRASE</b> to begin.</h1>";
				$step = 0;
			}
			else{
				return strtoupper($textarray[$step]);
			}
		}
		$_SESSION['step'] = $step;
	}
	
	//Function to diplay the whole board
	function board($word, $views){
		$letterlength = strlen($word)-1;
		print "<table class='board'>";
		print"<tr>";
		for($s = 0; $s<7; $s++)
			print"<td class='green'></td>";
		print"</tr>";

		//Execute this piece of code if the length of the word is larger then the standard 7 letters
		if($letterlength>=6){
			print"<tr>";
			for($g=0; $g<$letterlength; $g++){
				if($word[$g] == ' ')
					print "</tr><tr>";
				else{
					if ($views[$g])
						print "<td class='white'>".$word[$g]."</td>";
					else
						print "<td class='white'>-VOID-</td>";
				}
			}
			print "</tr>";
		}
		
		//Execute segement of code if word or phrase is less then 7 characters. 
		else{
			print"<tr>";
			for ($i=0; $i<$letterlength; $i++){
				if ($views[$i]){
					print "<td class='white'>".$word[$i]."</td>";
				}
				else
					print "<td class='white'>-VOID-</td>";
			}
			
			if($i != 7){
				$r = $i;
				while($r != 7){
					$r++;
					print"<td class='green'></td>";
				}		
			}
			print "</tr>";
		}
		
		print"<tr>";
		for($s = 0; $s<7; $s++)
			print"<td class='green'></td>";
		print"</tr>";
		print "</table>";
	}

	//Displays the input area for the user
	function input(){
		print"<br/><form action='' method='post' name='textbox' autocomplete='off'>
				<fieldset>
					<input type='text' class='guess_value' name='guess_value' value='' onkeypress='return isNumberKey(event)' maxlength='1' />
					<input type='submit' class='guess' name='guess' value='GUESS' />
					<input type='submit' class='reveal 'name='reveal' value='REVEAL' />
					<input type='submit' class='next' name='next' value='NEXT PHRASE' />
				</fieldset>
			</form>";
	}
	
	#######################################################
	#######################################################
	///////////////////**MAIN PROGRAM**\\\\\\\\\\\\\\\\\\\\
	#######################################################
	#######################################################
	
	head();
	$background = 'background:url("/wheel.png") no-repeat';
	print "<img src='/pat.png' class='pat' alt='' style=' background-attachment: scroll; ' />";
	print "<img src='/vanna.png' class='vanna' alt='' />";
	print "<div id='' style='$background; width:1000px; height:400px; z-index:-40; position:absolute; margin-left:-200px; position:fixed;' ></div>";
	
	$guess_value = $_POST['guess_value'];
	$guess = $_POST['guess'];
	$reveal = $_POST['reveal'];
	$next = $_POST['next'];
	
	$word = getword();
	$letterlength = strlen($word)-1;
	for ($i = 0 ; $i <= $letterlength; $i++){
		if ($word[$i] == chr(39) || $word[$i] == chr(33) || $word[$i] == chr(45) || $word[$i] == chr(96) || $word[$i] == chr(126))
			$views[$i] = 1;
	}
	print"<b style='text-align:center; font-size:3em; display:block; color:#0B640D; border:23px solid #0B640D;'>WELCOME TO <br/>WHEEL OF FORTUNE</b>";
	
	$turn = $_SESSION['turn'];
	if($turn == 'black'){
		$turn = 'gold';
		print"<img src='/black.png' class='black' alt='' style='display:block; margin-left:auto; margin-right:auto;' /><br/>";
	}
	else{
		$turn = 'black';
		print"<img src='/gold.png' class='gold' alt='' style='display:block; margin-left:auto; margin-right:auto;' /><br/>";
	}
	$_SESSION['turn'] = $turn;
	
	//guessing option
	if(isset($guess) && isset($guess_value)){
		if(is_numeric($guess_value)== true || $guess_value == NULL){
			print"<b style='color:red; font-size:2em; display:block; margin-left:auto; margin-right:auto;'>Please, input a value and make sure that it only contains letters please!</b><br/>";
			board($word, $views);
			input();
		}	
		else{
			//print"You want to guess: $guess_value";	
			$guesshold[] = array("$guess_value");
			//array_push($guesshold[], $guess_value);
			$letterlength = strlen($word);
			for ($i=0; $i<$letterlength-1; $i++){
				if (strtoupper($guess_value) == strtoupper($word[$i]) || $word[$i] == chr(39) || $word[$i] == chr(33) || $word[$i] == chr(45) || $word[$i] == chr(96) || $word[$i] == chr(126))
					$views[$i] = 1;
			}
			$lives--;
			$_SESSION['lives'] = $lives;
			board($word, $views);
			input();
		}
	}
	
	//reveal the word and give up
	elseif(isset($reveal)){
		//print"You give up and want to reveal the word.";
		$letterlength = strlen($word);
		for ($i=0; $i<$letterlength-1; $i++)
			$views[$i]=1;
		board($word, $views);
		print"<br/>";
		$step++;
		$word = getword();
		$letterlength = strlen($word)-1;
		for ($i = 0 ; $i <= $letterlength; $i++){
			if ($word[$i] == chr(39) || $word[$i] == chr(33) || $word[$i] == chr(45) || $word[$i] == chr(96) || $word[$i] == chr(126))
				$views[$i] = 1;
		}
		$letterlength = strlen($word);
		for ($i=0; $i<$letterlength-1; $i++)
			$views[$i]=0;
		$lives = 3;
		print"<br/><b  style='font-size:3em; text-align:center; display:block;'>New Game</b><br/>";
		board($word, $views);
		input();
	}
	
	//go to next word
	elseif(isset($next)){
		//print"You want an new word.";
		$step++;
		$word = getword();
		$letterlength = strlen($word)-1;
		for ($i = 0 ; $i <= $letterlength; $i++){
			if ($word[$i] == chr(39) || $word[$i] == chr(33) || $word[$i] == chr(45) || $word[$i] == chr(96) || $word[$i] == chr(126))
				$views[$i] = 1;
		}
		$wordlen = strlen($word);
		for($v = 0; $v < $wordlen-1; $v++)
			$views[$v] = 0;
		$lives = 3;
		board($word, $views);
		input();
	}
	
	//display the board
	else{
		//print"Print the board.";
		board($word, $views);
		input();
	}
	
	print"<br/>";

	$_SESSION['step'] = $step;
	$_SESSION['line'] = $line;
	$_SESSION['views'] = $views;
	$_SESSION['word'] = $word;
	
	//print "<br/><img src='/wheel.png' class='wheel' alt='' />";
	//print '<br/><div  style="background:url('/wheel.png'); width:700px; height:189px;" class="wheel">WHEEL</div>';
	tail();
 ?>