<?php
	function getVisitorCounter(){
		$counterFile = '/txt/counter.txt';
		
		$handler = fopen($counterfile, 'r+');
		
		$data = fred($handler, 512);
		
		$count = $data + 1;
		
		fseek($handler, 0);
		
		fwrite($handler, $count);
		
		fclose($handler);
		
		return $count;
	}
?>