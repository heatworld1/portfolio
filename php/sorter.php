<?php
$capitol['Japan'] = 'Tokyo';
$capitol['Yemen'] = 'Saana';
$capitol['France'] = 'Paris';
$capitol['Ireland'] = 'Dublin';

$capone = $capitol;
$captwo = $capitol;

sort($capone);
foreach($capone as $key=> $value)
	print"Part 1: $key -- $value<br/>";
	
ksort($captwo);
foreach($captwo as $key=> $value)
	print"Part 2: $key -- $value<br/>";
	


?>