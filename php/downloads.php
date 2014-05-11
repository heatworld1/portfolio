	<?php flush(); ?>
	<h1>My Downloads</h1>
	<p class="finaltitle">
		Come let's face it everyone likes free stuff. So I have put together a list of downloads that every designer/developer should have. I promise to keep each one of these downloads up to date. Also in case you are unsure just click the box to eh download the file.<br/><b>Note:</b>Click the boxes to download the files.
	</p>
	<br/>
	<img src="hr.png" class="hr"  alt="" /> 
	<br/>
	<?php
		echo "<table id='downloads'><tr><th class='dhead' colspan='4'>DOWNLOADS</th></tr><tr>";
		$count = 0;	
		
		include("configuration.php");
		$tbl = "download";
		$sql = "SELECT * FROM $tbl";
		$resources = mysql_query($sql);
		
		while($row = mysql_fetch_array($resources)){
			if($row['TITLE']=='Notepad++'){
				$alt ='http://download.tuxfamily.org/notepadplus/5.9.2/npp.5.9.2.Installer.exe';
				$src ='download/notepad.png';
			}
				
			if($row['TITLE']=='WAMP'){
				$alt ='http://sourceforge.net/projects/wampserver/files/WampServer%202/WampServer%202.1/WampServer2.1e-x32.exe/download';
				$src ='download/wamp.png';
			}

			if($row['TITLE']=='Filezilla'){
				$alt ='http://downloads.sourceforge.net/filezilla/FileZilla_3.5.0_win32-setup.exe';
				$src ='download/filezilla.png';
			}
			
			if($row['TITLE']=='Paint'){
				$alt ='http://www.dotpdn.com/../files/Paint.NET.3.5.8.Install.zip';
				$src ='download/paint.png';
			}
			
			if($row['TITLE']=='Ccleaner'){
				$alt ='http://www.filehippo.com/download_ccleaner/download/653229ccb81ae1f2efd8598d8028e5fe/';
				$src ='download/ccleaner.jpg';
			}
			if($row['TITLE']=='Dropbox'){
				$alt ='https://www.dropbox.com/downloading?src=index';
				$src ='download/dropbox.jpg';
			}
			if($row['TITLE']=='Winrar'){
				$alt ='http://goo.gl/X5s5i';
				$src ='download/winrar.jpg';
			}
				
			for ($i=0; $i<1; $i++){
			if($count != 3){
					echo "
						<td>
							<div class='hover_block2'>
								<div>
									<a href='$alt'>
									<img src='$src' alt='' class='hoverimg' />
									<span class='dtitle'>Download Name:</span>{$row['TITLE']}<br/>
									<span class='ddescription'>Description:</span>{$row['DESCRIPTION']}
									</a>
								</div>
							</div>
						</td>
					";
					$count++;
				}
				else{
					echo "
						</tr>
						<tr>
							<td>
								<div class='hover_block2'>
									<div>
										<a href='$alt'>
										<img src='$src' alt='' class='hoverimg' /> 
										<span class='dtitle'>Download Name:</span>{$row['TITLE']}<br/>
										<span class='ddescription'>Description:</span>{$row['DESCRIPTION']}</a>
									</div>
								</div>
							</td>
					";
					$count = 1;
				}
			}
	}

		echo "</tr></table>";
	?>