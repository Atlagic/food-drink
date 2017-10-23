function mail2()
			{
				var UserName = document.getElementById('tbUsername').value;

				var Password = document.getElementById('tbPassword').value;

				var userName = /^[A-Z]{1}[a-z]{3,14}$/;

				var password = /^[a-zA-Z]\w{3,14}$/;

				if(!UserName.match(userName))
				{
					// alert("Name is in wrong format!");
					document.getElementById('tbUsername').style.border="2px solid red";
					document.getElementById('rezu').innerHTML = "Username in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbUsername').style.border="2px solid green";
				}

				if(!Password.match(password))
				{

					document.getElementById('tbPassword').style.border="2px solid red";
					document.getElementById('rezu1').innerHTML = "Password in wrong format!";
					// return;
				}
				else
				{
					document.getElementById('tbPassword').style.border="2px solid green";
				}

				// var forma = document.getElementById("form");

				// forma.action="data.php?btnSubmit=1"
				// forma.submit();
			}
