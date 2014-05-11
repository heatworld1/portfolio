<?php
	function cleanData($input) {
		$input = trim(htmlentities(strip_tags($input,",")));
	 
		if (get_magic_quotes_gpc())
			$input = stripslashes($input);
	 
		$input = mysql_real_escape_string($input);
	 
		return $input;
	}
?>