<?php
function getFileList($dirListType){
	switch($dirListType){
		case 'images':
			$dir = '/images';
			break;
		case 'javascript':
			$dir = '/js';
			break;
		case 'css':
			$dir = '/css';
			break;
	}
	
	$files = scandir($dir, 0);
	return $files;
}
?>