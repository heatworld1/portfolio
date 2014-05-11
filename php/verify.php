<?php
	// Inialize session
	session_start();

	// Include database connection settings
	ob_start();
	include('configuration.php');
	$tbl_name="login"; // Table name

	// Connect to server and select databse.
	// username and password sent from form 
	$myusername = $_POST['ljsuname']; 
	$mypassword = $_POST['ljspword'];

	// encrypt password 
	$encrypted_mypassword=md5($mypassword);

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$sql="SELECT * FROM $tbl_name WHERE UNAME='$myusername' and PWORD='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count = mysql_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row

	if($count==1){
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("myusername");
	//session_register("mypassword"); 

	$_SESSION['ljsuname'] = $_POST['ljsuname'];
	$hello = mysql_real_escape_string($_POST['ljsuname']);
	$FullName = $_POST['ljsuname'];
	header("location:loggedin.php");
	}
	else {
	echo header("location:loginfail.php");
	}
	ob_end_flush();
?>