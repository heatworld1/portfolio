<?php

echo"ih";
print "hi";



print "<table border=1>";
$n = 1;

while($n<100){
print"<tr><td>".$n."</td></tr>";
$n = 2 * $n;
}

print"</table>";


//////////////////////////
print"<hr/>";



print "<table border=1><tr>";
$n = 5;

while($n<26){
print"<td>".$n."</td>";
$n = 5 + $n;
}

print"</tr></table>";


//////////////////////////
print"<hr/>";

print "<table border=1>";
$n = 1;

print"<tr>";
while($n<=5){
print"<td>".$n."</td>";
$n ++;
}
print"</tr>";

print"<tr>";
while($n<=10){
print"<td>".$n."</td>";
$n ++;
}
print"</tr>";
print"</table>";

//////////////////////////
print"<hr/>";



print "<table border=1><tr>";
$n = 5;

while($n<26){
if($n >=16){print"<td>**</td>";}
else
print"<td>".$n."</td>";
$n = 5 + $n;
}

print"</tr></table>";

////////


print "<h1>Guess</h1><br/><form action='softwaredesign.php' method='post'>";
print "<input type='text' name='guess' /><br/>";
print "<input type='submit' value='Guess!' />";
print "<input type='submit' value='New Game!' />";
print "</form>";
$N = rand(1, 100);

if(isset($_POST['guess'])){
$guess = $_POST['guess'];
//print $N;
$correct = true;

$try = 0;
while( $correct != true){
	if ($guess < $N) 
		{print "too low!";
		$try++;}
	
	elseif ($guess > $N)
		{print "too low!";
		$try++;}
	
	else
		{print "You got it!"; 
		$correct = true; }

}


print "random:".$N."<br/>";
print "Tries:".$try;
}
?>