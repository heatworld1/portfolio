<?php 
print "hello<br/>";


print"<p>";
for($i=0; $i<=100; $i++){
	if($i<9)
		print"0".$i." ";
	if($i==10 || $i==20 || $i==30 || $i==40 || $i==50 || $i==60 || $i==70 || $i==80 || $i==90 || $i==100)
		print $i."<br/>";
	if($i>10 && $i!= 10 && $i!= 20 && $i!= 30 && $i!= 40 && $i!= 50 && $i!= 60 && $i!= 70 && $i!= 80 && $i!= 90 && $i!= 100)
		print " ".$i." ";
}
print"</p>";


print"<style>";

print"body{background: silver; color:white;}";
print"p:hover{color:red; font-size:2em; cursor:pointer;}";
print"p:active{color:#900; font-weight:bolder;}";
print"</style>";
?>