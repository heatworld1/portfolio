<?php 
	
	session_start();
	
	if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
		//master activity check
		if(isset($_POST['lives'])) $_SESSION['lives'] = $_POST['lives'];
		if(isset($_POST['step'])) $_SESSION['step'] = $_POST['step'];
		if(isset($_POST['line'])) $_SESSION['line'] = $_POST['line'];
		if(isset($_POST['views'])) $_SESSION['views'] = $_POST['views'];
		if(isset($_POST['word'])) $_SESSION['word'] = $_POST['word'];
	}

	//////////////////////get:set ///master activity set
	$lives = isset($_SESSION['lives']) ? $_SESSION['lives'] : 3; // store session data
	$step = isset($_SESSION['step']) ? $_SESSION['step'] : 0; // store session data
	$line = isset($_SESSION['line']) ? $_SESSION['line'] : 0; // store session data
	$views = isset($_SESSION['views']) ? $_SESSION['views'] : ''; // store session data
	$word = isset($_SESSION['word']) ? $_SESSION['word'] : ''; // store session data
	
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
		//print"body{background:url(bg.png)#0b620d;}";
		print"body{background:url('/bg.png') repeat-x black;}";
		print".wrap{background:silver; border-radius:4px; margin-left:auto; margin-right:auto; min-height:700px; width:570px; padding:10px;}\n";
		print".board{ margin-left:auto; margin-right:auto;}\n";
		print"img{margin:3px;}\n";
		print"td{ height:70px !important; width:70px !important; text-align:center; padding:0px; }\n";
		print"td:hover {background:url('/sq_hover.png') no-repeat; cursor:pointer;}";
		print".green { background:url('/sq.png') no-repeat;}\n";
		print".white {  background:url('/white.png') no-repeat;}\n";
		print"table {color:black; font-size:1.05em; font-weight:bolder;  margin-left:auto; margin-right:auto; border-collapse:collapse; border:1px double darkblue; background:url('sq.png');} \n";
		print".vanna{height:757px; width:484px; float:left; position:absolute; z-index:-1; margin-left:-400px; margin-top:70px;} \n";
		print".pat{height:829px; width:348px; float:right; position:absolute; z-index:-2; margin-left:550px; } \n";
		print".wheel{width:700px; height:189px; position:absolute; z-index:9; margin-top:100px;}";
		print" form{margin-left:auto; margin-right:auto; width:459px; height:150px;}";
		print" fieldset{width:459px; height:150px; margin-left:auto; margin-right:auto; margin:3px; border:none; display:block; padding-top:3px;}";
		print".black:hover{background:url('/black_hover.png') no-repeat; cursor:pointer;}";
		print".gold:hover{background:url('/gold_hover.png') no-repeat; cursor:pointer;}";
		print".guess, .reveal, .next{height:70px; width:150px; font-weight:bolder; cursor:pointer;}";
		print".guess_value{height:70px; width:455px; text-align:center; font-size:3em; font-weight:bolder; margin-bottom:5px; text-transform:uppercase;}";
		print"b {text-align:center !important;}";
		print"</style>\n";
		
		print"<SCRIPT language=Javascript>
		   function isNumberKey(evt){
			 var charCode = (evt.which) ? evt.which : event.keyCode
			 if (charCode < 65 && (charCode < 65 || charCode > 90) && charCode != 13)
				return false;

			 return true;
		  }";
		print"</SCRIPT>";
		
		print"</head>\n";
		print"<body onLoad='document.textbox.guess_value.focus()' >\n";
		print"<body  >\n";
		print"<div class='wrap'>\n";
	}
	
	function tail(){
		print"</div>";
		print"\n</body>\n";
		print"</html>\n";
	}

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
				print"No more phrases are available.";
				$step = 0;
			}
			else{
				return strtoupper($textarray[$step]);
			}
		}
		$_SESSION['step'] = $step;
	}

	function textdisplay($intextarray, $line){	
		// each item in the $textarray is one line of text.
		$linecount = count($intextarray);
		
		if ($intextarray[$line] == '')
			print"No more!!!";
		else
			return $intextarray[$line]."$pick";
			//print $intextarray[$line]."$pick";
			
		/*for ($i=0; $i<$linecount; $i++)
			print $intextarray[$i]."<br />";	*/	
	} 
	
	//$word = array('I','N','F','O','R','M','S');
	//$views = array(1,1,1,1,0,1,0);
	//$lives=$_SESSION['lives'];
	//$views=$_SESSION['views'];
	
	
	
	function board($word, $views){
		$word = array('B','O','B','O','B','O','B');
		print $word[2];
		$amount = strlen($word);
		print "Word array $amount";
		
		$view = array('1','0','1','0','1','0','1');
		print $view[2];
		$letterlength = strlen($word)-1;
		print "<table class='board'>";
		print"<tr>";
		for($s = 0; $s<7; $s++)
			print"<td class='green'></td>";
		print"</tr>";
		
		print"<tr>";
		for ($i=0; $i<$letterlength; $i++){
			if ($views[$i])
				print "<td class='white'>".$word[$i]."</td>";
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
		
		print"<tr>";
		for($s = 0; $s<7; $s++)
			print"<td class='green'></td>";
		print"</tr>";

		print "</table>";
	}

	function input(){
	//buttons
	print"<form action='' method='post' name='textbox'>
			<fieldset>
				<input type='text' class='guess_value' name='guess_value' value='' onkeypress='return isNumberKey(event)' maxlength='1' />
				<input type='submit' class='guess' name='guess' value='GUESS' />
				<input type='submit' class='reveal 'name='reveal' value='REVEAL' />
				<input type='submit' class='next' name='next' value='NEXT PHRASE' />
			</fieldset>
		</form>";
	}
	
	function newline(){
		$textarray = getword();
		$len = count($textarray);
		echo "Step is: ".$step;
		echo "<br/>Line is: ".$line;	
		print"<form action='' method='post'>
				<fieldset>
					<input type='submit' name='step' value='New Guess' />
				</fieldset>
			</form>";
		
		if(isset($step)){
			$line = $line+1;
			if($textarray[$line] == ""){
				//print "There is nothing left";
			}
			else
				print $textarray[$line]."<br/>";
		}
		else{
			if($textarray[$line] == "")
				print "There is nothing left";
			else
				print $textarray[$line]."<br/>";
		}

		$string = $textarray[$line];
		$string = str_split($string);
		$len = count($string);
		for($i = 0; $i<= $len; $i++){
			print $string[$i]."<br/>";
			$views[$i] = 0;
		}
	}
	
	#######################################################
	#######################################################
	///////////////////**MAIN PROGRAM**\\\\\\\\\\\\\\\\\\\\
	#######################################################
	#######################################################
	
	head();
	
	print "<img src='/pat.png' class='pat' alt='' />";
	print "<img src='/vanna.png' class='vanna' alt='' />";

	$guess_value = $_POST['guess_value'];
	$guess = $_POST['guess'];
	$reveal = $_POST['reveal'];
	$next = $_POST['next'];
	
	$word = getword();
	print"<b style='text-align:center; font-size:3em;'>WELCOME TO <br/>WHEEL OF FORTUNE</b><br/>";
	//input();
	
	print"print crap<br/>";
	//$views[3] ='1';
	print "<br/> views:".$views;
	print "<br/>views:".$views[3];
	print "<br/>word".$word;
	
	print_r($views[3]);
	print_r($views[3]);
	print_r($views[3]);
	print"<br/>";
	print_r($word[3]);
	print_r($word[3]);
	print_r($word[3]);
	print_r($word[3]);
	
	//guessing option
	if(isset($guess) && isset($guess_value)){
		if(is_numeric($guess_value)== true || $guess_value == NULL){
			print"<br/><b style='color:red'>Please, input a value and make sure that it only contains letters please.</b><br/>";
			board($word, $views);
			input();
		}
		else{
			print"You want to guess: $guess_value";	
			$letterlength = strlen($word);
			for ($i = 0; $i<$letterlength-1; $i++){
				if ($guess_value == strtoupper($word[$i])){
					print "<br/>Guess $guess_value == Word $word[$i]<br/>";
					//print $word[$i];
					//$views[$i]='1';
					print $views[$i];
				}
				//else{
					//$lives = $lives - 1;
				//}
			}
			board($word, $views);
			input();
		}
	}
	
	//reveal the word and give up
	elseif(isset($reveal)){
		print"You give up and want to reveal the word.";
		$letterlength = strlen($word);
		for ($i = 0; $i<$letterlength-1; $i++){
			$views[$i]=1;
		}
		board($word, $views);
		input();
		$lives = 3;
		$step++;
		getword();
		$letterlength = strlen($word);
		for ($i = 0; $i<$letterlength-1; $i++)
			$views[$i] = 0;
		board($word, $views);
		input();
	}
	
	//go to next word
	elseif(isset($next)){
		print"You want an new word.";
		$lives = 3;
		$step++;
		getword();
		$wordlen = strlen($word);
		for($v = 0; $v < $wordlen-1; $v++)
			$views[$v] = 0;
		board($word, $views);
		input();
	}
	
	//display the board
	else{
		print"Print the board.";
		board($word, $views);
		input();
	}
	
	print"<br/>";
	print"You have $lives lives<br/>";
	print"ABCDEFGHIJKLMNOPQRSTUVWXYZ<br/>";
	print"<img src='/black.png' class='black' alt='' /><br/>";
	print"<img src='/gold.png' class='gold' alt='' /><br/>";
	print "<img src='/wheel.png' class='wheel' alt='' />";

	$_SESSION['step'] = $step;
	$_SESSION['line'] = $line;
	$_SESSION['views'] = $views;
	$_SESSION['word'] = $word;
	$_SESSION['lives'] = $lives;
	
	tail();
 ?>