<?php
	function getMenuData(){
		$menuName = ('home', 'about', 'gallery', 'links', 'downloads', 'reviews');
		$menuName = urfirst($menuName);
		
		$html = "<ul>";
		
		foreach($menuName as $string){
			$html .= '<li>'.$string.'</li>';
		}
		
		$html .= "</ul>";
		
		return $html;
	}
?>