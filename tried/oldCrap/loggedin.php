<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
$inactive = 3000;

if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        { session_destroy(); header("Location: index.php"); }
}
$_SESSION['timeout'] = time();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['ljsuname'])) {

header('Location:index.php');
echo"NICE TRY BUDDY!";
}

//+++++++++++++++++++++++++++++++++++++++++
////////////////
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
//master activity check
	if(isset($_POST['activity'])) $_SESSION['activity'] = $_POST['activity'];
	//if(isset($_POST['process'])) $_SESSION['process'] = $_POST['process'];
	if(isset($_POST['userrequestup'])) $_SESSION['userrequestup'] = $_POST['userrequestup'];
	if(isset($_POST['usernamedel'])) $_SESSION['usernamedel'] = $_POST['usernamedel'];
	if(isset($_POST['adduser'])) $_SESSION['adduser'] = $_POST['adduser'];
	if(isset($_POST['userold'])) $_SESSION['userold'] = $_POST['userold'];
	if(isset($_POST['updateuser'])) $_SESSION['updateuser'] = $_POST['updateuser'];
	if(isset($_POST['userold2'])) $_SESSION['userold2'] = $_POST['userold2'];
	if(isset($_POST['updateuser2'])) $_SESSION['updateuser2'] = $_POST['updateuser2'];
	if(isset($_POST['filename'])) $_SESSION['filename'] = $_POST['filename'];


}

//////////////////////get:set
//master activity set
$activity = isset($_SESSION['activity']) ? $_SESSION['activity'] : ''; // store session data
//$process = isset($_SESSION['process']) ? $_SESSION['process'] : ''; // store session data
$userrequestup = isset($_SESSION['userrequestup']) ? $_SESSION['userrequestup'] : ''; // store session data
$usernamedel = isset($_SESSION['usernamedel']) ? $_SESSION['usernamedel'] : ''; // store session data
$adduser = isset($_SESSION['adduser']) ? $_SESSION['adduser'] : ''; // store session data
$userold = isset($_SESSION['userold']) ? $_SESSION['userold'] : ''; // store session data
$updateuser = isset($_SESSION['updateuser']) ? $_SESSION['updateuser'] : ''; // store session data
$userold2 = isset($_SESSION['userold2']) ? $_SESSION['userold2'] : ''; // store session data
$updateuser2 = isset($_SESSION['updateuser2']) ? $_SESSION['updateuser2'] : ''; // store session data
$filename = isset($_SESSION['filename']) ? $_SESSION['filename'] : ''; // store session data

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
		<title>LJ's Admin Console</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link href="reset.css" rel="stylesheet" type="text/css"/>

		<script type="text/javascript" language="javascript">   
			function this.form.submit()  
			{  
			document.post_this_form.submit();  
			}  
		</script> 
		
		<script type="text/javascript" language="javascript">  
			function deleter()  
			{  				
			return confirm("Do you really want to delete that?")
			}  
		</script> 		
		<script type="text/javascript" src="jquery-latest.js"></script> 
		<script type="text/javascript" src="jquery.tablesorter.js"></script> 
		<style type="text/css">		
			TABLE{  BACKGROUND: GREY; margin-top:10px; margin-bottom:10px; width:100%;}
			tr{background: silver; }
			th{background: grey; font-size:15px; font-weight:bolder; border: 1px solid white; padding:3px;}
			td{border: 1px solid white; padding:4px;}
			body{background: #900;}
			#wrap{ min-height:175px; width:700px; background:#fff; margin-left:auto; margin-right:auto; margin-top:7px; padding:10px;}		
			#chooser{ margin-left:auto; margin-right:auto; width:200px;}
		</style>	
	</head>
	
	<body>
	<?php  ?>
		<div id="wrap">
			<div id="login"><a href="logout.php">LOGOUT</a>|<a href="index.php">Back to Front</a></div>
			<div id="contain">				
				<div>
				<h1><b>Hey</b> <?php echo $_SESSION['ljsuname']; ?></h1><br/>
				<div>
					<form action="loggedin.php" method="post" id="chooser">
						<label class="chooser">What do you want to do <?php echo $_SESSION['ljsuname']; ?>?</label>
						<br/>
						<select class="pick" name="activity" onChange="this.form.submit();" style="height:30px; background:rgb(115,111,110); font-weight:bold">
							<option value="<?php echo"$activity";	?>">
							<?php echo"$activity";	?>						
							</option>
							<?php
							
								include("configuration.php");
																		
								//initials activity
								if($activity==null)
								{
								echo"
								<option class='' value='intro'>Edit Intro.</option>
									<option class='' value='about'>Edit About Me</option>
										<option class='' value='ask'>Answer Ask Me</option>
											<option class='' value='download'>Edit Downloads</option>
												<option class='' value='resource'>Edit Resources</option>
								";						
								}
								
								else if($activity=='intro'){
									echo"
									<option class='' value='about'>Edit About Me</option>
										<option class='' value='ask'>Answer Ask Me</option>
											<option class='' value='download'>Edit Downloads</option>
												<option class='' value='resource'>Edit Resources</option>";
								}
								
								else if($activity=='about'){
									echo"
									<option class='' value='intro'>Edit Intro.</option>
										<option class='' value='ask'>Answer Ask Me</option>
											<option class='' value='download'>Edit Downloads</option>
												<option class='' value='resource'>Edit Resources</option>";
								}
								
								else if($activity=='ask'){
									echo"
									<option class='' value='intro'>Edit Intro.</option>
										<option class='' value='about'>Edit About Me</option>
											<option class='' value='download'>Edit Downloads</option>
												<option class='' value='resource'>Edit Resources</option>
												";
								}
								
								else if($activity=='download'){
									echo"
									<option class='' value='intro'>Edit Intro.</option>
										<option class='' value='about'>Edit About Me</option>
											<option class='' value='ask'>Answer Ask Me</option>										
												<option class='' value='resource'>Edit Resources</option>
											";
								}
								
								else if($activity=='resource'){
									echo"
									<option class='' value='intro'>Edit Intro.</option>
										<option class='' value='about'>Edit About Me</option>
											<option class='' value='ask'>Answer Ask Me</option>
												<option class='' value='download'>Edit Downloads</option>						
											";
								}										
								?>
						</select>
					</form>
				</div>
		
				<?php echo $activity;?>
		
				<?php
				//$process = $_POST['process'];
					
					//************NOTHIN CHOOSEN
					
						 if($activity == ''){
						echo"Pick the activity to do.";
					}
						
					//************
					else if($activity == 'intro'){
					$tbl = "Introduction";	
					$process = $_POST['process'];
						
						//$process = $_POST['process'];											
						function display(){					
						$tbl = "Introduction";	
							//creates default table						
							$sql="SELECT * FROM $tbl";
								$result = mysql_query($sql);	
								echo "<table>
								<tr>
									<th>Intro</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>";	
								$c = 0;				
								$count = mysql_num_rows($result);				
								while($row = mysql_fetch_array($result))
								{
									if($c==0){ echo "<tr class='even'>"; $c=1;} else{ echo "<tr class='odd'>"; $c=0;}
									echo "<td '>".$row['INTRO']."</td>";						
									echo "<td><form action='loggedin.php' method='post' onSubmit='return deleter()' >
									<input type='hidden' name='process' value='deletenow' />
									<input type='hidden' name='usernamedel' value='{$row['INTRO']}' />
									<input type='submit' class='adding' value='DELETE'></form></td>";						
									echo "<td><form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='updatepage' />
									<input type='hidden' name='userrequestup' value='{$row['INTRO']}' />
									<input type='submit' class='adding' value='UPDATE'></form></td>";						
									echo "</tr>";								
								}
								echo "</table>";	
								
								if($count==0){
									echo "<form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='addpage'/>
									<input type='submit' class='adding' value='ADD NEW' /></form>";
							}
						}							
							
							if($process==''){
							//if nothing is posted go to function
								display();
							}
							
							else if($process=='addpage'){
								//go to add page if called	
									
									echo"
										<table class='result'>	
											<form action='loggedin.php' method='post'>									
											<tr>
												<th>Intro</th>
												<td><textarea name='adduser' value='' /></textarea></td>
											</tr>									
											<tr>
												<td  colspan=2><input type='hidden' name='process' value='addnow' /><input class='adding' type='submit' value='Add' /></td>
											</tr>
											</form>
										</table>
									";		
									
									echo"
									<form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='' />
									<input class='adding' type='submit' value='RETURN'>
									</form>";
							}
							
							else if($process=='deletenow'){	
								//delete intro content
								echo"You just deleted the intro text";
									$deleted="DELETE FROM $tbl WHERE INTRO = '$usernamedel'";
									$result = mysql_query($deleted);	
									$process=='';
								display();
							}
							
							else if($process=='updatepage'){					
							//update intro content
									$sql="SELECT * FROM $tbl Where INTRO = '$userrequestup'";	
									
									//echo"<br/>this is $userrequestup";
									$result = mysql_query($sql);	
																
										while($row = mysql_fetch_array($result))
										{																					
											echo"
												<form action='loggedin.php' method='post'><table class='result'>												
													<tr>
														<th>Intro</th>
														<td>
														<textarea name='updateuser' rows='22' cols='70'>{$row['INTRO']}</textarea>
														<input type='hidden' name='userold' value='{$row['INTRO']}' />
														</td>
													</tr>						
													<tr>
														<td><input type='hidden' name='process' value='updatenow' /></td>
														<td><input type='submit' class='adding' value='Update User'/></td>
													</tr>
												</table></form>
											";
										}		
											echo"<form action='loggedin.php' method='post'>
											<input type='hidden' name='process' value='' />
											<input type='submit' class='adding' value='RETURN'></form>";									
							}
							
							else if($process=='addnow'){
							//execute add intro content statment
							$added = "INSERT INTO $tbl (Intro) Values ('$adduser')";
							$result = mysql_query($added);		
							$process = NULL;
							display();					
							}
							
							else if($process=='updatenow'){
							//execute update intro content statement
										$userupdated="UPDATE $tbl 
										SET INTRO = '$updateuser'		
										WHERE INTRO = '$userold'	";
										$result = mysql_query($userupdated);																	
										display();
							}								
					}	
					
					//************
					else if($activity == 'about'){
					$process = $_POST['process'];
							$tbl = "About";	
							echo "$process";
						//$process = $_POST['process'];											
						function display(){
							//creates default table	
							$tbl = "About";						
							$sql="SELECT * FROM $tbl";
								$result = mysql_query($sql);					
								echo "<table>
								<tr>
									<th>About</th>
									<th>Resume</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>";	
								$c = 0;				
								$count = mysql_num_rows($result);
								while($row = mysql_fetch_array($result))
								{
									if($c==0){ echo "<tr class='even'>"; $c=1;} else{ echo "<tr class='odd'>"; $c=0;}
									echo "<td '>".$row['ABOUT']."</td>";	
									echo "<td '>".$row['RESUME']."</td>";										
									echo "<td><form action='loggedin.php' method='post' onSubmit='return deleter()' >
									<input type='hidden' name='process' value='deletenow' />
									<input type='hidden' name='usernamedel' value='{$row['ABOUT']}' />
									<input type='submit' class='adding' value='DELETE'></form></td>";						
									echo "<td><form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='updatepage' />
									<input type='hidden' name='userrequestup' value='{$row['ABOUT']}' />
									<input type='submit' class='adding' value='UPDATE'></form></td>";						
									echo "</tr>";
								}
								echo "</table>";	
								
							if($count==0){
									echo "<form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='addpage'/>
									<input type='submit' class='adding' value='ADD NEW' /></form>";
								}
						}
							
										
							if($process==''){
							//if nothing is posted go to function
								display();
							}
							
							else if($process=='addpage'){
								//go to add page if called									
									echo"
										<table class='result'>	
											<form action='loggedin.php' method='post'>									
											<tr>
												<th>About</th>
												<td><textarea name='adduser' value='' /></textarea></td>
											</tr>
											<tr>
												<th>Resume</th>
												<td><input  type='file' name='adduser' value='' /></td>
											</tr>
											<tr>
												<td  colspan=2><input type='hidden' name='process' value='addnow' /><input class='adding' type='submit' value='Add' /></td>
											</tr>
											</form>
										</table>
									";		
									
									echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input class='adding' type='submit' value='RETURN'></form>";
							}
							
							else if($process=='deletenow'){	
								//delete about content
								echo"You just deleted the about text";
									$deleted="DELETE FROM $tbl WHERE ABOUT = '$usernamedel'";
									$result = mysql_query($deleted);								
								display();
							}
							
							else if($process == "updatepage"){					
							//update about content
									$sql="SELECT * FROM $tbl Where About = '$userrequestup'";							
									$result = mysql_query($sql);									
										while($row = mysql_fetch_array($result))
										{																					
											echo"
												<form action='loggedin.php' method='post'><table class='result'>												
													<tr>
														<th>About</th>
														<td>
														<textarea name='updateuser' rows='22' cols='70'>{$row['ABOUT']}</textarea><br/><input type='hidden' name='userold' value='{$row['ABOUT']}' />
														</td>
													</tr>	
													<tr>
														<td><input type='hidden' name='process' value='updatenow' /></td>
														<td><input type='submit' class='adding' value='Update User'/></td>
													</tr>
												</table></form>
											";
										}		
											echo"<br/><form action='loggedin.php' method='post'>
											<input type='hidden' name='process' value='' />
											<input type='submit' class='adding' value='RETURN'>
											</form>";									
							}
							
							else if($process=='addnow'){
							//execute add about content statment
							$added = "INSERT INTO $tbl (ABOUT) Values ('$adduser')";
							$result = mysql_query($added);						
							display();					
							}
							
							else if($process=='updatenow'){
							//execute update about content statement
										$userupdated="UPDATE $tbl 
										SET ABOUT = '$updateuser'		
										WHERE ABOUT = '$userold'";
										$result = mysql_query($userupdated);
										display();
							}								
					}	
					
					//************
					else if($activity == 'ask'){
						$process = $_POST['process'];					
						$tbl = "Ask";	
						//$process = $_POST['process'];											
						function display(){
							//creates default table		
						$tbl = "Ask";							
							$sql="SELECT * FROM $tbl";
								$result = mysql_query($sql);					
								echo "<table>
								<tr>
									<th>Username</th>
									<th>Question</th>
									<th>Answer</th>
									<th>Public/Private</th>
									<th>Date</th>
									<th>Email Address</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>";
								
								$c = 0;				
								
								while($row = mysql_fetch_array($result))
								{
									if($c==0){ echo "<tr class='even'>"; $c=1;} else{ echo "<tr class='odd'>"; $c=0;}
									echo "<td '>".$row['Username']."</td>";	
									echo "<td '>".$row['Question']."</td>";	
									echo "<td '>".$row['Answer']."</td>";	
									echo "<td '>".$row['View']."</td>";	
									echo "<td '>".$row['Time']."</td>";	
									echo "<td '>".$row['Email']."</td>";	
									echo "<td><form action='loggedin.php' method='post' onSubmit='return deleter()' >
									<input type='hidden' name='process' value='deletenow' />
									<input type='hidden' name='usernamedel' value='{$row['Username']}' />
									<input type='submit' class='adding' value='DELETE'></form></td>";						
									echo "<td><form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='updatepage' />
									<input type='hidden' name='userrequestup' value='{$row['Username']}' />
									<input type='submit' class='adding' value='UPDATE'></form></td>";						
									echo "</tr>";
								}
								echo "</table>";	

						}
							
							
							if($process==''){
							//if nothing is posted go to function
								display();
							}
							
							else if($process=='deletenow'){	
								//delete question content
								echo"You just deleted the about text";
									$deleted="DELETE FROM $tbl WHERE Intro = '$usernamedel'";
									$result = mysql_query($deleted);								
								display();
							}
							
							else if($process=='updatepage'){					
							//update question content
									$sql="SELECT * FROM $tbl Where Username = '$userrequestup'";							
									$result = mysql_query($sql);									
										while($row = mysql_fetch_array($result))
										{																					
											echo"
												<form action='loggedin.php' method='post'><table class='result'>												
													<tr>
														<th>Username</th>
														<td>
														<input type='text' disabled='disabled' value='{$row['Username']}' />
													
														<input type='hidden' name='userold' value='{$row['Username']}' />
														</td>
													</tr>
													<tr>
														<th>Question</th>
														<td>
														<input type='text'  disabled='disabled' value='{$row['Question']}' />
													
														
														</td>
													</tr>
													<tr>
														<th>Answer</th>
														<td>
														<input type='text'  name='updateuser' value='{$row['Answer']}' />
													
														
														</td>
													</tr>
													<tr>
														<th>Pub/Pri</th>
														<td>
														<input type='text'  disabled='disabled' value='{$row['Pub/Pri']}' />
													
														
														</td>
													</tr>
													<tr>
														<th>Time</th>
														<td>
														<input type='text'  disabled='disabled' value='{$row['Time']}' />
													
														
														</td>
													</tr>
													
													<tr>
														<th>Email</th>
														<td>
														<input type='text'  disabled='disabled' value='{$row['Email']}' />
													
														
														</td>
													</tr>	
													<tr>
														<th>Avatar</th>
														<td>
														<input type='text' disabled='disabled' value='{$row['Avatar']}' />
													
														
														</td>
													</tr>	
													<tr>
														<td><input type='hidden' name='process' value='updatenow' /></td>
														<td><input type='submit' class='adding' value='Update User'/></td>
													</tr>
												</table></form>
											";
										}		
											echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input type='submit' class='adding' value='RETURN'></form>";									
							}
												
							else if($process=='updatenow'){
							//execute update question content statement
										$userupdated="UPDATE $tbl 
										SET Answer = '$updateuser'		
										WHERE Username = '$userold'	";
										$result = mysql_query($userupdated);												display();
							}								
						}	
					
					//************
					else if($activity == 'download'){
							$process = $_POST['process'];
						$tbl = "Download";	
						//$process = $_POST['process'];		
					//	echo $process;
						function display(){
							//creates default table		
							$tbl = "download";
							$sql="SELECT * FROM $tbl";
								$result = mysql_query($sql);					
								echo "<table>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>";	
								$c = 0;				
								
								while($row = mysql_fetch_array($result))
								{
									if($c==0){ echo "<tr class='even'>"; $c=1;} else{ echo "<tr class='odd'>"; $c=0;}
									echo "<td '>".$row['TITLE']."</td>";
									echo "<td '>".$row['DESCRIPTION']."</td>";									
									echo "<td><form action='loggedin.php' method='post' onSubmit='return deleter()' >
									<input type='hidden' name='process' value='deletenow' />
									<input type='hidden' name='usernamedel' value='{$row['DOWNLOAD']}' />
									<input type='submit' class='adding' value='DELETE'></form></td>";						
									echo "<td><form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='updatepage' />
									<input type='hidden' name='userrequestup' value='{$row['DOWNLOAD']}' />
									<input type='submit' class='adding' value='UPDATE'></form></td>";						
									echo "</tr>";
								}
								echo "</table>";	
								
							//	if($row = mysql_fetch_array($result) = NULL){
									echo "<form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='addpage'/>
									<input type='submit' class='adding' value='ADD NEW' /></form>";
							//	}
						}							
							
							if($process==''){
							//if nothing is posted go to function
								display();
							}
							
							else if($process=='addpage'){
								//go to add page if called	
									echo"
										<table class='result'>	
											<form action='loggedin.php' method='post'>									
											<tr>
												<th>Name</th>
												<td><input type='text' name='filename' /></td>
											</tr>
											<tr>
												<th>Description</th>
												<td><textarea name='adduser' value='' /></textarea></td>
											</tr>
											<tr>
												<th>File</th>
												<td><input type='hidden' /></td>
											</tr>
											<tr>
												<td  colspan=2><input type='hidden' name='process' value='addnow' /><input class='adding' type='submit' value='Add' /></td>
											</tr>
											</form>
										</table>
									";		
									
									echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input class='adding' type='submit' value='RETURN'></form>";
							}
							
							else if($process=='deletenow'){	
								//delete intro content
								echo"You just deleted the intro text";
									$deleted="DELETE FROM $tbl WHERE Intro = '$usernamedel'";
									$result = mysql_query($deleted);								
								display();
							}
							
							else if($process=='updatepage'){					
							//update intro content
									$sql="SELECT * FROM $tbl Where DOWNLOAD = '$userrequestup'";							
									$result = mysql_query($sql);									
										while($row = mysql_fetch_array($result))
										{																					
											echo"
												<form action='loggedin.php' method='post'><table class='result'>												
													<tr>
														<th>Name</th>
														<td>
														<input type='text' name='updateuser' value='{$row['TITLE']}' />
													
														<input type='hidden' name='userold' value='{$row['TITLE']}' />
														</td>
													</tr>	
														<tr>
														<th>Description</th>
														<td>
														<input type='text' name='updateuser2' value='{$row['DESCRIPTION']}' />
													
														<input type='hidden' name='userold2' value='{$row['DESCRIPTION']}' />
														</td>
													</tr>	
												
													<tr>
														<td><input type='hidden' name='process' value='updatenow' /></td>
														<td><input type='submit' class='adding' value='Update User'/></td>
													</tr>
												</table></form>
											";
										}		
											echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input type='submit' class='adding' value='RETURN'></form>";									
							}
							
							else if($process=='addnow'){
							//execute add intro content statment
							$added = "INSERT INTO $tbl (DESCRIPTION, TITLE) Values ('$adduser', '$filename')";
										$result = mysql_query($added);						
							display();					
							}
							
							else if($process=='updatenow'){
							//execute update intro content statement
										$userupdated="UPDATE $tbl 
										SET TITLE = '$updateuser'		
										WHERE TITLE = '$userold'	";
										$result = mysql_query($userupdated);
										
										$userupdated="UPDATE $tbl 
										SET DESCRIPTION = '$updateuser2'		
										WHERE DESCRIPTION = '$userold2'	";
										$result = mysql_query($userupdated);
										display();
							}								
					}	
					
					//************
					else if($activity == 'resource'){
							$process = $_POST['process'];
						$tbl = "Resource";	
						//$process = $_POST['process'];											
						function display(){
							//creates default table		
							$tbl = "Resource";	
							$sql="SELECT * FROM $tbl";
								$result = mysql_query($sql);					
								echo "<table>
								<tr>
									<th>Links</th>
									<th>Description</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>";	
								$c = 0;				
								
								while($row = mysql_fetch_array($result))
								{
									if($c==0){ echo "<tr class='even'>"; $c=1;} else{ echo "<tr class='odd'>"; $c=0;}
									echo "<td '>".$row['LINK']."</td>";
									echo "<td '>".$row['DESCRIPTION']."</td>";									
									echo "<td><form action='loggedin.php' method='post' onSubmit='return deleter()' >
									<input type='hidden' name='process' value='deletenow' />
									<input type='hidden' name='usernamedel' value='{$row['DESCRIPTION']}' />
									<input type='submit' class='adding' value='DELETE'></form></td>";						
									echo "<td><form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='updatepage' />
									<input type='hidden' name='userrequestup' value='{$row['DESCRIPTION']}' />
									<input type='submit' class='adding' value='UPDATE'></form></td>";						
									echo "</tr>";
								}
								echo "</table>";	
								
							//	if($row = mysql_fetch_array($result) = NULL){
									echo "<form action='loggedin.php' method='post'>
									<input type='hidden' name='process' value='addpage'/>
									<input type='submit' class='adding' value='ADD NEW' /></form>";
							//	}
						}							
							
							if($process==''){
							//if nothing is posted go to function
								display();
							}
							
							else if($process=='addpage'){
								//go to add page if called	
									echo"
										<table class='result'>	
											<form action='loggedin.php' method='post'>									
											<tr>
												<th>Name</th>
												<td><input type='text' /></td>
											</tr>
											<tr>
												<th>Description</th>
												<td><textarea name='adduser' value='' /></textarea></td>
											</tr>
											<tr>
												<th>Url</th>
												<td><input type='hidden' /></td>
											</tr>
											<tr>
												<td  colspan=2><input type='hidden' name='process' value='addnow' /><input class='adding' type='submit' value='Add' /></td>
											</tr>
											</form>
										</table>
									";		
									
									echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input class='adding' type='submit' value='RETURN'></form>";
							}
							
							else if($process=='deletenow'){	
								//delete intro content
								echo"You just deleted the intro text";
									$deleted="DELETE FROM $tbl WHERE Intro = '$usernamedel'";
									$result = mysql_query($deleted);								
								display();
							}
							
							else if($process=='updatepage'){					
							//update intro content
									$sql="SELECT * FROM $tbl Where DESCRIPTION = '$userrequestup'";							
									$result = mysql_query($sql);									
										while($row = mysql_fetch_array($result))
										{																					
											echo"
												<form action='loggedin.php' method='post'><table class='result'>												
													<tr>
														<th>Name</th>
														<td>
														<input type='text' name='updateuser' value='{$row['LINK']}' />
													
														<input type='hidden' name='userold' value='{$row['LINK']}' />
														</td>
													</tr>	
														<tr>
														<th>Description</th>
														<td>
														<input type='text' name='updateuser' value='{$row['DESCRIPTION']}' />
													
														<input type='hidden' name='userold' value='{$row['DESCRIPTION']}' />
														</td>
													</tr>		
													<tr>
														<td><input type='hidden' name='process' value='updatenow' /></td>
														<td><input type='submit' class='adding' value='Update User'/></td>
													</tr>
												</table></form>
											";
										}		
											echo"<form action='loggedin.php' method='post'><input type='hidden' name='process' value='' /><input type='submit' class='adding' value='RETURN'></form>";									
							}
							
							else if($process=='addnow'){
							//execute add intro content statment
							$added = "INSERT INTO $tbl (Intro) Values ('$adduser')";
										$result = mysql_query($added);						
							display();					
							}
							
							else if($process=='updatenow'){
							//execute update intro content statement
										$userupdated="UPDATE $tbl 
										SET Intro = '$updateuser'		
										WHERE username = '$userold'	";
										$result = mysql_query($userupdated);																	
										display();
							}								
					}	
					
					//**************
					else if($activity == 'resume'){
							$process = $_POST['process'];
					
					}
		?> 
				</div>		
			</div>	
		</div>		
	</body>
</html>