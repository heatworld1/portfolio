<?php 
	//var_dump($_POST);
	$homepage = file_get_contents("../content/".$_POST['pageTitle'].'.txt');
	echo $homepage;

?>