<?php /*
if(isset($_SESSION['role'])){

	header("Location: admin.php");
}
*/

?>
			<div class="wrap">
				<div id="login">
					<form method="POST" id="forma">
						 <table class="regTab" style="width:500px; padding-top:40px;">
							<tr>
								<td>
									<h1 style="color:#0ba39c;margin-left:-30px;text-align:center;">Sign up</h1>
								</td>
							</tr>
							 <tr>
								<td>
								   <input type="text" class="styled" id="tbUsername" name="tbUsername" placeholder="Username"/>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="password" class="styled" id="tbUsername" name="tbPassword" placeholder="Password"/>
								</td>
							 </tr>
							 <tr>
								<td >
									<input type="submit" value="Log in" class="button" name="btnSubmitLog"/>
								</td>
							 </tr>
						 </table>
					</form>
				</div>
				</div>
				<?php
						$button = @$_POST['btnSubmitLog'];
							if(isset($button))
							{
								$Username = $_POST['tbUsername'];
								$Password = $_POST['tbPassword'];
								$username = "/^[A-Z]{1}[a-z]{3,14}$/";
								$password = "/^[a-zA-Z]\w{3,14}$/";

								if(!preg_match($username, $Username))
								{
										echo "<div id='rezu'>Username in wrong format!</div>";
								}
								else if(!preg_match($password, $Password))
								{
										echo "<div id='rezu'>Password in wrong format!</div>";
								}
								else
								{
									$query = "SELECT role FROM login WHERE username='".$Username."' AND log_password='".$Password."'";
									$res = mysql_query($query, $conn) or die("Query is not executed!".mysql_error());
									if(!mysql_num_rows($res)==0)
									{
										$row = mysql_fetch_array($res);
										$role = $row['role'];
										$_SESSION['role'] = $role;

										if (headers_sent()) {
    										die("Redirect failed. Please click on this link: <a href='home_panel.php'>Click here</a>");
										}
										else{
												exit(header("Location: home_panel.php"));
										}
									}
									else
									{
										echo '<p style="color:red; margin-top:200px;">Notification: There is no user with that username or password.</p>';
									}
								 }
							}
	?>
