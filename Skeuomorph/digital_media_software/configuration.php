<?php
	$host="localhost"; // Host name 
	$username="ljoseph_ljoseph"; // Mysql username 
	$password="Flames1988"; // Mysql password 
	$dbname="ljoseph_digital_media_software"; // Database name 

	$link = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	//$exe = "use $db_name";
	//mysql_query($exe);
	//echo "$db_name";
	//mysql_select_db("$dbname")or die("cannot select DB");
	$dbselected = mysql_select_db($dbname, $link);
if (!$dbselected) {
    die ('Can\'t use foo : ' . mysql_error());
} 
?>