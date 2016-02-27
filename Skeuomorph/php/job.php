<?php
/*Applicant Testing

Logic Test


Task: Write a program that prints the numbers from 1 to 100 with the following exceptions:
For multiples of three, print your first name instead of the number
For multiples of five, print your last name instead of the number
For numbers that are multiples of both 3 and 5, print your full name instead of the number
*/


print"hello<br/>";

for ($num = 1; $num <= 100; $num++){
	if($num%3 == 0 && $num%5 == 0)
		print "Loveson Joseph<br/>";
	elseif($num % 3 == 0)
		print "Loveson<br/>";
	elseif($num % 5 == 0)
		print "Joseph<br/>";	
	else
		print "$num <br/>";
	}
?>