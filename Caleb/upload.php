	<?php
			//error_reporting(1);
			?>
<!DOCTYPE HTML>
<html>
	<head> 
		<title>Upload and Pick</title> 
		<style type="text/css">
			#wrapper{background:#900; width:700px; min-height:300px; margin-left:auto; margin-right:auto; margin-top:70px; padding:0px 10px 15px 10px; font-size:15px; border-radius:7px; text-align:center
			input{float:left;}
		</style>
	</head> 
	
	<body> 
		<div id="wrapper">
			<?php
		

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');


// Prints something like: Monday
//echo date("l");

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Prints: July 1, 2000 is on a Saturday

?>

<form action="<?php// echo $PHP_SELF; ?>" method="post">
<fieldset>
<input type="text" name="title" /><br/>
<input type="file" name="file" /><br/>
<textarea name="summary"></textarea>
<input type="submit" name="" />
</fieldset>
</form>
<hr/>
<h1>PICTURES</h2>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="Pictures"; // Database name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

	$tbl = "picture";
	$query = "SELECT * FROM $tbl";
$resources = mysql_query($query);	
	
	//echo "$query";
//$row = mysql_fetch_array($resources);
$row = mysql_fetch_assoc($resources);
$content = $row[photo];
header("Content-type: image/png");   
echo $content;
	
	/*
	echo "<table>";
	while($row = mysql_fetch_array($resources)){
			echo "<tr>"; echo"<td>";
			echo "{$row['title']}";
			echo"</td>"; echo "</tr>";
			echo "<tr>"; echo"<td>";
			header('Content-type: image/jpg');
			echo "<img src='{$row['photo']}' />";
			
			echo"</td>"; echo "</tr>";
			echo "<tr>"; echo"<td>";
			echo "{$row['comment']}";
			echo"</td>"; echo "</tr>";
			echo "<tr>"; echo"<td>";
			echo "{$row['vote']}";
			echo"</td>"; echo "</tr>";
			echo "<tr>"; echo"<td>";
			echo "{$row['time']}";
			echo"</td>"; echo "</tr>";
			echo "<tr>"; echo"<td>";
			echo "{$row['visible']}";
			echo"</td>"; echo "</tr>";
		}
	echo "</table>";
	*/
	//
  //  echo $content;
?>


		</div>
	</body> 
</html>