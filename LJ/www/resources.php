	<p class="finaltitle">Here are all the resources that I use.</p>
	<br/>
	<p class="finaltitle">Click the boxes to visit the site.</p>
	<hr/>
	<br/>
	<?php
		echo "<table id='resources'>
				<tr>
					<th class='rhead' colspan='4'>RESOURCES</th>
				</tr>
				<tr>";
		$count = 0;	
		include("configuration.php");
		$tbl = "resource";
		$sql = "SELECT * FROM $tbl";
		$resources = mysql_query($sql);	
		while($row = mysql_fetch_array($resources)){
			if($row['DESCRIPTION']=='The in-browser window resizer'){
				$src ='resource\browzie.jpg';
			}

			if($row['DESCRIPTION']=='BgPatterns is a tiny web app for making background patterns in a few clicks'){
				$src ='resource\bg-patterns.jpg';
			}
			
			if($row['DESCRIPTION']=='Browsershots makes screenshots of your web design in different operating systems and browsers'){
				$src ='resource\browsershots.jpg';
			}

			for ($i=0; $i<1; $i++){
				if($count == 3){
					echo "
						</tr>
						<tr>
							<td>
								<div class='hover_block'>
									<div>
										<a href='{$row['LINK']}'>
										<img src='$src' alt='' class='hoverimg2' /> 
										<span class='rtitle'>Description:</span>{$row['DESCRIPTION']}<br/></a>
									</div>
								</div>
							</td>
					";
					$count = 1;
				}

				else{
					echo "
						<td>
							<div class='hover_block'>
								<div>
									<a href='{$row['LINK']}'>
									<img src='$src' alt='' class='hoverimg2' /> 
									<span class='rtitle'>Description:</span>{$row['DESCRIPTION']}<br/></a>
								</div>
							</div>
						</td>
					";
					$count++;
				}
			}
		}
		echo "</tr></table>";
	?>

