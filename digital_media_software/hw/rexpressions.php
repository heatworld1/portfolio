<?php
/*
//$input = 22232;
//$input = "22232-3322";
$input = "22232-3322-ssssss";

if(preg_match("/^[0-9]{5}\-[0-9]{4}$/",$input) || preg_match("/^[0-9]{5}$/",$input))
	{print"Good zip code $input"; }
else
	{print"Is that foreign?";}
*/
?>

<?php
function zipCheck($test){

if(preg_match("/^[0-9]{5}\-[0-9]{4}$/",$test) || preg_match("/^[0-9]{5}$/",$test))
return $test;

else
return "invalid";


}


$zip = 1233345;
$answer =  zipCheck($zip);
echo $answer;


?>