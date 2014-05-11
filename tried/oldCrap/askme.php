	<div id="contactinfo">
		<p>Loveson Joseph</p>
		<p>ljsites1@hotmail.com</p>
		<p>(772).924.5948</p>
		<p>Resume:</p>
		<div id="word"><a href="resume.doc" title="MSWORD"></a></div>
		<div id="adobe" title="PDF"><a href="resume.pdf"></a></div>
		<div id="vcf" title="VCF"><a href="lovesonjoseph.vcf"></a></div>
	</div>		
	<form><button id="ask">Ask Me Now!</button></form>
	<table id="answered">
		<tr><th>ANSWERED</th></tr>									
		<?php
			include("configuration.php");
			$tbl = "ask";
			$sql = "SELECT * FROM $tbl WHERE View != '1' ORDER BY `ask`.`Time`  DESC";
			$resources = mysql_query($sql);	
			while($row = mysql_fetch_array($resources)){
				echo "<tr><td><div class='user'>";
				echo "<p class='utitle'><b>{$row['Username']}</b> asked:</p><br/>";
				echo "<p>{$row['Time']}</p><br/>";
				echo "<p>{$row['Question']}?</p></div>";
				echo "<br/>";
				if($row['Answer'] != null){
					echo "<div class='lj'><p class='ljtitle'><b>LJ</b> said:</p><br/>";
					echo"<p>{$row['Time']}</p>";
					echo "";
					echo "{$row['Answer']}</div>";
					echo "</td></tr>";
				}
				else{
					echo "<div class='ljnone'></div>";
					echo "</td></tr>";
				}
			}
		?>
	</table>
	<div class="formask" id="ask_form" > 
		<form action="submitq.php" method="post" id="askingform">
			<fieldset>						
				<legend>ASK AWAY!</legend>
				<p class="star">*All fields are required.</p><br/><br/>
				<label for="uname">Username:</label>		
				<input type="text" name="uname" id="uname" class="required" maxlength="28" value=""/>
				<br/><br/>
				<label for="email">Email:</label>		
				<input type="text" name="email" id="email" class="required email" maxlength="28" value=""/>
				<br/><br/>
				<label for="view">Public Question</label>
				<input type="radio" name="view" value="1" checked="checked"/>
				<label for="view">Private Question</label>
				<input type="radio" name="view" value="0" />
				<br/><br/>
				<label for="question">Question:</label>				
				<textarea  cols="37" rows="7" name="question" id="question" class="required" value=""></textarea>
				<input type="hidden" name="time" id="time" value="NOW()" />
				<br/>
				<img class="security" src="CaptchaSecurityImages.php?width=210&height=40&characters=7" />
				<br /><br/>
				<label for="security_code">Security Code:</label>
				<input id="security_code" name="security_code" type="text" class="required" maxlength="7" value=""/>
				<br /><br/>
				<input type="submit" class="submit" value="Submit"/>
				<input type="button" id="cancel" class="cancel" onclick=" $( this ).dialog( 'close' );"value="Cancel"/>
			</fieldset>
		</form>		
	</div>		