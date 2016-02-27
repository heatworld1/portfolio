<?php
	function checkPhoneNumber($phoneData){
		$filtedNumber = preg_replace('/(\W*)/', '', $phoneData);
		
		//$str = preg_replace('/[^0-9.]+/', '', $str);
		
		if(isset($filtedNumber) || ctype_alpha($filtedNumber)){
			return 0;
		}else{
			return 1;
		}
	}
?>