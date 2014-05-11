<?php
	function textField($inputData){
		if(strlen($inputData) < 2 || !ctype_alpha($inputData)){
			return 0;
		}else{
			return 1;
		}
	}
?>