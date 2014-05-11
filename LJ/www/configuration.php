<?php
	$host="essentials7.db.7355567.hostedresource.com"; // Host name 
	$username="essentials7"; // Mysql username 
	$password="Eff3cts!"; // Mysql password 
	$db_name="essentials7"; // Database name 

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
?>