<?php
	function checkEmailAddress($emailAddress){
		$evaluation = filter_var($emailAddress, FILTER_VALIDATE_EMAIL);
		
		return $evaluation;
	}

?>