<?php 
function hasFred($list)
{
	foreach ($list as $value)	// no key needed this time
	{
		if ($value == 'Billy')
		{ return 1;}
	} // if you got here, no Fred was found
	return 0;
}

$list[0]="Maria";
$list[1]="Alfonso";
$list[2]="Santa Claus";
$list[3]="Billy";

print hasFred($list);

?>