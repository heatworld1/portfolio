<?php
	print"HOMEWORK PART 2 - 2 DIMENSIONAL ARRAY<BR/><hr/>";
	for ($i=2; $i<=3; $i++){
		 if($i == 2){
			 for($j = 1; $j <= 6; $j++){
				$mtable[$i][$j] = $j;
				print $j."<br/>";
			}
		 }
		 else{
			 for($j = 2; $j <= 12; $j = $j+2){
				$mtable[$i][$j] = $j;
				print $j."<br/>";
			}
		 } 
	}
?>

<?php
print"<br/>HOMEWORK PART 2 - 2 DIMENSIONAL ARRAY<BR/><hr/>";
for ($i=1; $i<=6; $i++)
{
    for ($j=1; $j<=6; $j++)
    {
        $mtable[$i][$j]=$i*$j;
    }
}

//print_r(array_values($mtable));
print_r($mtable);

/*
$len = sizeof($mtable);

for ($l = 0; $l <= $mtable; $l++){
	print

}
*/

?>