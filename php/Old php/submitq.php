<?php
	session_start();
	include('configuration.php');

	$uname = mysql_real_escape_string($_POST['uname']);
	$uname = stripslashes($uname);

	$email = mysql_real_escape_string($_POST['email']);
	$email = stripslashes($email);

	$question = mysql_real_escape_string($_POST['question']);
	$question = stripslashes($question);

	$security_code = mysql_real_escape_string($_POST['security_code']);
	$security_code = stripslashes($security_code);

	$view = mysql_real_escape_string($_POST['view']);
	$view = stripslashes($view);

	if($uname!=null && $email!=null && $question!=null && $security_code!=null && $_SESSION['security_code'] == $_POST['security_code']){
		$sql="INSERT INTO ask (Username,Question,Time,View,Email) 
		Values ('$uname','$question',NOW(),'$view','$email')";
		mysql_query($sql);
		$message="Your submission was successful.";
		header("Location:http://lovesonjoseph.com/index.php?p=askme");
		echo "$message";
	}

	else{
		$message="Something went wrong, make sure all required fields are filled out and are correct. Please try again <a href='index.php?p=askme'>RETURN</a> ";
	}

	echo"$message";
?>
