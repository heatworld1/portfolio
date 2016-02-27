<?php
	function getVisitorText(){
	if(isset($_COOKIE['lovesonJosephVisit'])){ 
		$last = $_COOKIE['lovesonJosephVisit'];
	} 
	
	$year = 31536000 + time(); 
	
	//this adds one year to the current time, for the cookie expiration 
	setcookie(lovesonJosephVisit, time (), $year) ; 
	
	if (isset($last)){ 
		$change = time () - $last; 
		if($change > 86400){ 
			$visitorText = "Welcome back! <br> You last visited on ". date("m/d/y",$last); 
			// Tells the user when they last visited if it was over a day ago 
		} else { 
			$visitorText = "Thanks for using our site!"; 
			//Gives the user a message if they are visiting again in the same day 
		} 
	} else { 
		$visitorText = "Welcome to our site!"; 
		//Greets a first time user 
	}
	
		return $visitorText;
	}	
?>