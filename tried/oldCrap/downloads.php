	<p>Here are some personal downloads that I think everyone should have. So please feel free to download</p>
	<br/>
	<p>Click the boxes to download the files.</p>
	<hr/> 
	<br/>
	<?php
		echo "<table><tr><th class='dhead' colspan='4'>DOWNLOADS</th></tr><tr>";
		$count = 0;	
		
		include("configuration.php");
		$tbl = "download";
		$sql = "SELECT * FROM $tbl";
		$resources = mysql_query($sql);
		
		while($row = mysql_fetch_array($resources)){
			if($row['TITLE']=='Notepad++'){
				$alt ='download\notepad.exe';
				$src ='download\notepad.png';
			}
				
			if($row['TITLE']=='WAMP'){
				$alt ='download\wamp.exe';
				$src ='download\wamp.png.';
			}

			if($row['TITLE']=='Filezilla'){
				$alt ='download\filezilla.exe';
				$src ='download\filezilla.png';
			}
			
			if($row['TITLE']=='Paint'){
				$alt ='download\paint.exe';
				$src ='download\paint.png';
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
	</div> 