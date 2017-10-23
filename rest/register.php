
		<script type="text/javascript">
			function mail()
			{
				var Name = document.getElementById("tbName").value;
				
				var LastName = document.getElementById('tbLastName').value;
				
				var Email = document.getElementById("tbEmail").value;
				
				var UserName = document.getElementById('tbUsername').value;
				
				var Password = document.getElementById('tbPassword').value;
				
				var name = /^[A-Z]{1}[a-z]{3,14}$/;
				
				var lastName = /^[A-Z]{1}[a-z]{3,14}$/;
				
				var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				
				var userName = /^[A-Z]{1}[a-z]{3,14}$/;
				
				var password = /^[a-zA-Z]\w{3,14}$/;
				
				
				
				if(!Name.match(name))
				{
					alert("Name is in wrong format!");
					document.getElementById('tbName').style.border="2px solid red";
					return;
				}
				
				if(!LastName.match(lastName))
				{
					alert("Lastname is in wrong format!");
					document.getElementById('tbLastName').style.border="2px solid red";
					return;
				}
				
				if(!Email.match(email))
				{
					alert("Email is in wrong format!");
					document.getElementById('tbEmail').style.border="2px solid red";
					return;
				}
				
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
			
				var forma = document.getElementById("form");
				
				forma.action="data.php?btnSubmit=1"
				forma.submit();
			}
		
	</script>	
				<div id="registration">
					<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>" id="form">
						 <table style="width:500px; padding-top:40px;">
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
									<input type="button" value="Submit" class="button" name="btnSubmit" onClick="mail();"/>
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
				