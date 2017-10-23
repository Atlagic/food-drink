function mail()
			{
				var Name = document.getElementById("tbName").value;

				var LastName = document.getElementById('tbLastName').value;

				var UserName = document.getElementById('tbUsername').value;

				var Email = document.getElementById("tbEmail").value;

				var Password = document.getElementById('tbPassword').value;

				var PasswordConf = document.getElementById('tbPassword2').value;

				var name = /^[A-Z]{1}[a-z]{3,14}$/;

				var lastName = /^[A-Z]{1}[a-z]{3,14}$/;

				var userName = /^[A-Z]{1}[a-z]{3,20}$/;

				var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

				var userName = /^[A-Z]{1}[a-z]{3,14}$/;

				var password = /^[a-zA-Z]\w{3,14}$/;



				if(!Name.match(name))
				{
					// alert("Name is in wrong format!");
					document.getElementById('tbName').style.border="2px solid red";
					document.getElementById('rez').innerHTML = "Name in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbName').style.border="3px solid green";
				}

				if(!LastName.match(lastName))
				{
				  // alert("Lastname is in wrong format!");
					document.getElementById('tbLastName').style.border="2px solid red";
					document.getElementById('rez1').innerHTML = "Lastame in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbLastName').style.border="3px solid green";
				}

				if(!UserName.match(userName))
				{
					// alert("Name is in wrong format!");
					document.getElementById('tbUsername').style.border="2px solid red";
					document.getElementById('rez3').innerHTML = "Username in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbUsername').style.border="3px solid green";
				}

				if(!Email.match(email))
				{
					document.getElementById('tbEmail').style.border="2px solid red";
					document.getElementById('rez2').innerHTML = "Email in wrong format!";

					// return;
				}
				else
				{
					document.getElementById('tbEmail').style.border="3px solid green";
				}

				if(!Password.match(password))
				{

					document.getElementById('tbPassword').style.border="2px solid red";
					document.getElementById('rez4').innerHTML = "Password in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbPassword').style.border="3px solid green";
				}

				if(Password != PasswordConf || Password == "" || PasswordConf == "")
				{
					document.getElementById('tbPassword2').style.border="2px solid red";
					document.getElementById('rez5').innerHTML = "Passwords does not match!";
				}
				else
			  {
					document.getElementById('tbPassword2').style.border="3px solid green";
				}
				// var forma = document.getElementById("form");

				// forma.action="data.php?btnSubmit=1"
				// forma.submit();
			}
