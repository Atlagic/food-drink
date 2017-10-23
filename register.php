



			<div class="wrap">
				<div id="registration">
					<form method="POST" action="" id="form">
						 <table class="regTab" style="width:500px; padding-top:40px;">
							<tr>
								<td>
									<h1 style="color:#0ba39c; margin-left:100px;">Registration form</h1>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="text" class="styled" id="tbName" name="tbName" placeholder="Name"/>
								</td>
							 </tr>
							 <tr>
								<td>
								   <input type="text" class="styled" id="tbLastName" name="tbLastName"  placeholder="Lastname"/>
								</td>
							 </tr>
							 <tr>
							   <td>
								   <input type="text" class="styled" id="tbEmail" name="tbEmail" placeholder="Email Address"/>
								</td>
							 </tr>
							 <tr>
								<td>
								   <input type="text" class="styled" id="tbUsername" name="tbUsername" placeholder="Username"/>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="password" class="styled" id="tbPassword" name="tbPassword" placeholder="Password"/>
								</td>
							 </tr>
							 <tr>
								<td>
								   <input type="password" class="styled" id="tbPassword2" name="tbPassword2" placeholder="Confirm Password"/>
								</td>
							</tr>
							 <tr>
								<td >
									<input type="submit" value="Submit" class="button" name="btnSubmit"/>
								</td>
							 </tr>
							 <tr>
								<td>
									<a href="?page=login" style="color:#0ba39c; margin-left:124px;">Already have account? Log in.</a>
								</tr>
							 </tr>
						 </table>
					</form>
				</div>
		</div>
		<?php

		if(isset($_POST['btnSubmit']))
		{
				$Name = $_POST['tbName'];

				$LastName = $_POST['tbLastName'];

				$Email = $_POST['tbEmail'];

				$Username = $_POST['tbUsername'];

				$Password = $_POST['tbPassword'];;

				$PasswordConf = $_POST['tbPassword2'];;

				$name = "/^[A-Z]{1}[a-z]{3,14}$/";

				$lastName = "/^[A-Z]{1}[a-z]{3,14}$/";

				$email = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

				$username = "/^[A-Z]{1}[a-z]{3,14}$/";

				$password = "/^[a-zA-Z]\w{3,14}$/";

				if(!preg_match($name, $Name))
				{
						echo "<div id='rez'>Warning: Name in wrong format!</div>";
				}

				else if(!preg_match($lastName, $LastName))
				{
						echo "<div id='rez'>Last name in wrong format!</div>";
				}

				else if(!preg_match($email, $Email))
				{
						echo "<div id='rez'>Email in wrong format!</div>";
				}

				else if(!preg_match($username, $Username))
				{
						echo "<div id='rez'>Username in wrong format!</div>";
				}

				else if(!preg_match($password, $Password))
				{
						echo "<div id='rez'>Password in wrong format!</div>";
				}

				else if($Password != $PasswordConf || $PasswordConf == "")
				{
						echo "<div id='rez'>Passwords does not match!</div>";
				}
				else
				{
					$query = "INSERT INTO registration VALUES('','$Name', '$LastName', '$Email', '$Username', '$Password', '$PasswordConf')";
					$res = mysql_query($query, $conn) or die(" reg Query is not executed!".mysql_error());

				  $q = "INSERT INTO login VALUES('','$Username', '$Password', 'user')";
					$r = mysql_query($q, $conn) or die("Query is not executed!");

					echo "<p style ='color:green; margin-top:100px;'>Successfully registred! Go on login page to access the site.</p>";
				}
			}
		 ?>
