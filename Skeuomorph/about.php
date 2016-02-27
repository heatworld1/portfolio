<?php flush(); ?>
<?php
	include("configuration.php");
	$tbl = "about";
	$sql = "SELECT * FROM $tbl";
	$resources = mysql_query($sql);	
	while($row = mysql_fetch_array($resources)){
		echo "{$row['ABOUT']}";
		echo "<br/>";	
		echo "<br/>";	
	}
?>