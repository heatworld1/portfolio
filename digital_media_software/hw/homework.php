<?php
print "<div style='margin-left:auto; margin-right:auto; width:700px; height:700px; padding:10px; margin-top:20px;'>";

//Homework Problem Part #1

$name = "Henry Washington";

if (strlen($name) <20){
		print"$name";
	}
else{
		$space  = strpos($name, ' ');
		print"<p style='text-align:center;'>";
		print(substr($name,0, $space ));
		print"<br/>";
		print(substr($name, $space ));
		print"</p>";
	}

print"<br/><hr/>";
//Homework Problem Part #2

	$password['joesmith']='squiggle';
	$password['snookums']='toocute';
	$password['kittycat']='meowr';
	
	$username = $_POST['user'];
	$userpassword = $_POST['pass'];
	
	if(isset($username, $userpassword)){
		$i = 1;
		
		while($i<=3 && $password[$username] != $userpassword){
			$i++;
		}
	
		if($i<=3 && $userpassword == $password[$username] && $username!= null && $userpassword != null){
			print"ADMIT";
		}
		
		else{
			print"REJECT";
		}
	}
	
	else{
		print"<form action='' method='post'><fieldset>";
		print"<label>Username</label><br/>";
		print"<input type='text' name='user' /><br/>";
		print"<label>Password</label><br/>";
		print"<input type='text' name='pass' /><br/>";
		print"<input type='submit' value='login'>";
		print"</fieldset></form>";
	}

print"<br/><hr/>";
//Homework Problem Part #3

	$price[umbrella] = '59.95';
	$price[raincoat] = '14.95';
	
	$inventory[umbrella] = '3';
	$inventory[raincoat] = '2';
	
	$item = 'raincoat';
	
	if($inventory > 0 ){
		print"The price of raincoats is $".$price[raincoat]." We have ".$inventory[raincoat]."";
	}
	
	if($inventory == 0){
		print"Sorry, we're out of raincoats.";
	}

print"<br/><hr/>";
//Homework Problem Part #4
$mother['Jesus']='Mary';
$mother['Mary']='Ann';
$mother['Jack']='Mary';
$mother['Ann']='Elizabeth';

foreach ($mother as $key=>$value)
{
	print "child=$key & mother=$value<br />";
}


print"<br/><hr/>";
//Homework Problem Part #5

	function grandmother($person){
		$mother['Jesus']='Mary';
		$mother['Mary']='Ann';
		$mother['Jack']='Mary';
		$mother['Ann']='Elizabeth';

		if(count($mother) && isset($mother[$person])){
			print "$mother[$person] 's grandmother is $person";
		}
		
		else{
			print"I don't know who $person 's grandmother is.";
		}
	}
	
	$person = 'Sam';
	grandmother( $person);

print"<br/><hr/>";
//Homework Problem Part #5 extra

	function grandkids($person){
		$mother['Jesus']='Mary';
		$mother['Mary']='Ann';
		$mother['Jack']='Mary';
		$mother['Ann']='Elizabeth';
		
		if(count($mother) && isset($mother[$person])){
			if($person == 'Mary'){
				print"$person 's grandchildren are Sam and Ed";
			}
			else{
				print"$person 's grandchildren are ".$mother[$person];
			}
		}
		
		else{
			print"$person has no grandchildren.";
		}
	}

	$person = 'Mary';
	grandkids( $person);
	
print"</div>";
?>