<?php		

?>
		<script type="text/javascript">
			function mail()
			{
				var UserName = document.getElementById('tbUsername').value;
				
				var Password = document.getElementById('tbPassword').value;
				
				var userName = /^[A-Z]{1}[a-z]{3,14}$/;
				
				var password = /^[a-zA-Z]\w{3,14}$/;
				
				if(!UserName.match(userName))
				{
					alert("Username is in wrong format!");
					document.getElementById('tbUsername').style.border="2px solid red";
					return;
				}
				
				if(!Password.match(password))
				{
					alert("Password is in wrong format!");
					document.getElementById('tbPassword').style.border="2px solid red";
					return;
				}
			
				var forma = document.getElementById("forma");
				
				forma.action="inlog.php?btnSubmitLog=1"
				forma.submit();
			}
		
	</script>	
				
				<div id="login">
					<form method="POST" action="inlog.php" id="forma">
						 <table style="width:500px; padding-top:40px;">
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
								   <input type="password" class="styled" id="tbPassword" name="tbPassword" placeholder="Password"/>
								</td>
							 </tr>
							 <tr>
								<td >
									<input type="button" value="Log in" class="button" name="btnSubmitLog" onClick="mail();"/>
								</td>
							 </tr>
						 </table>
					</form>
				</div>
				