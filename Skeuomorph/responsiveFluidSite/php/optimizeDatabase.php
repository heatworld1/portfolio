<?php
	function optimizeDatabase(){
		$tables = mysql_query("SHOW TABLES");  
  
		while ($table = mysql_fetch_assoc($tables)){  
		   foreach ($table as $db => $tablename)  
		   {  
			   mysql_query("OPTIMIZE TABLE '".$tablename."'")  
				   or die(mysql_error());  
		   }  
		}  

	}
?>