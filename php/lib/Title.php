<?php
	class Title {
		public function __construct() {
			
		}

		public static function getTitle() {
			$get = $_GET;
			if (isset($get['p'])) {
				switch($get['p']) {
					case 'about':	
						$dest = "<meta name='description' content='This section is about me. I was born in fort pierce florida. I make creating  websites in a process. I have used html, css, xml, php, and mysql.'/>";
						$page = 'About Me';
						break;						
					case 'projects':		
						$dest = "<meta name='description' content='Here is a complete listing of my projects. Some of these projects are templates for display. The others were class projects, and projects for friends. Click the pictures to see other website images.'/>";
						$page = 'Projects';
						break;						
					case 'askme':
						$dest = "<meta name='description' content='I made it easy to contact me or better yet ask me questions. Please do not ask questions that have no real reason for being asked. So ask away carefully.'/>";
						$page = 'Ask Me';
						break;						
					case 'downloads':		
						$dest = "<meta name='description' content='This page has my downloads for everyone to share. The versions here are the current up to date as of 6/29/2011. Everytime there is a new update I will try to update these files.'/>";
						$page = 'Downloads';
						break;					
					case 'resources':
						$dest = "<meta name='description' content='Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
						$page = 'Resources';
						break;						
					case 'discussions':		
						$dest = "<meta name='description' content='Topic #1 coming soon! Here are my resources, there are links to other sites. Just click the boxes to go there. I will add more links as I see fit.'/>";
						$page = 'Discussions';
						break;
					default:
						$page = 'Main';
						break;
				}
			} else {
				$dest = "<meta name='description' content='This is a portfolio website for Loveson Joseph. This site is uses XHTML, JAVASCRIPT, and CSS. There are JQUERY implementations as well as life story about Loveson Joseph.'/>";
				$page = 'Main';
			}
			return 'Loveson Joseph - '. $page;
		}
	}