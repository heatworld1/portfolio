<?php
/*
Loveson Joseph 
PHP CODE
4:40pm - 5:29pm
Write a PHP function that accepts an html string variable, and returns an array of
.png or .jpg filenames matched in the string using regular expressions.
*/
$header ="<!DOCTYPE HTML>\n<html>\n<head><title>Test</title></head>\n<body>\n<h1>PHP CODE</h1>";
$footer = "</body>\n</html>";


//Html string assigned to variable 
$html_string = "
<!DOCTYPE HTML>
<html>
<head><title></title>
<body>
<img src='Joint_Photographic_Experts_Group.jpg' alt='jpg' />
<img src='Portable_Netowrk_Graphics.png' alt='png' />
</body>
</html>
";

//Calling function regex, and passing html string along
$saver = regex($html_string);

//Create header
print $header;

//Print the array 
print_r($saver);

//Create footer
print $footer;

//function to that gets called along with value from html string
function regex($val){
	//Regular expression to find .jpg and .png and also name
	preg_match_all("/([\w\s-.]+\.png|[\w\s-.]+\.jpg)/", $val, $stored, PREG_SET_ORDER);
	
	//Return array with the stored file names
	return $stored;
}

?>