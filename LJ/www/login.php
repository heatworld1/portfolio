<?php
	echo"
		<div id='toppanel'>
			<!-- login -->	
			<div id='panel'>
				<div>
					<div id='outerform' >			
						<form action='verify.php' method='post' id='form'>
							<fieldset>
								<label for='signup'>Username:</label>
								<input class='field required validate[required] text-input' type='text' name='ljsuname' id='signup' value='' size='18' />
								<br/>
								<label  for='email'>Password:</label>
								<input class='field required validate[required] text-input' type='password' name='ljspword' id='email' size='18' />
								<br/>
								<input type='submit' id='submit' name='submit' value='Login' class='formbutton' />
							</fieldset>		
						</form>
					</div>
				</div>
			</div> 
			<!-- /login -->	
			<span id='toggle'>
				<img class='loginlogo' src='loginlogo.png' alt=''/>
				<a id='open' class='open' href='#'>Login</a>
				<a id='close' class='close' href='#'>Close</a>		
			</span>
			<span class='right'>&nbsp;</span>	
		</div> 
	";
?>