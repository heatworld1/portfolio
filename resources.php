<?php flush(); ?>
<h1>My Resources</h1>
<p class="finaltitle">Everybody could use some useful links when in the process of designing and developing. So I have listed below, the essentials so that you can get that little extra help when coding. Click the box to go to the site.<br/><b>Note:</b>Click the boxes to download the files.</p>
<br/>
<img src="hr.png" alt="" class="hr" /> 
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
			$src ='resource/browzie.jpg';
		}

		if($row['DESCRIPTION']=='BgPatterns is a tiny web app for making background patterns in a few clicks'){
			$src ='resource/bg-patterns.jpg';
		}
		
		if($row['DESCRIPTION']=='Browsershots makes screenshots of your web design in different browsers'){
			$src ='resource/browsershots.jpg';
		}
		
		if($row['DESCRIPTION']=='Everybody knows about the dummy text that designers use, well here is a link to reproduce that.'){
			$src ='resource/randomtext.jpg';
		}
		
		if($row['DESCRIPTION']=='This site is full instructions on how to use jquery which a type of javascript library.'){
			$src ='resource/jquery.jpg';
		}
		
		if($row['DESCRIPTION']=='This is random site that I came across and it has very good tutorials.'){
			$src ='resource/tizag.jpg';
		}
		
		if($row['DESCRIPTION']=='Yahoo file optimizer, simply upload your file and smush it!'){
			$src ='resource/smushit.jpg';
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

