<?php
	@session_start();
	if(isset($_REQUEST['btnSubmitLog']))
	{
		
						/*	$UserName = $_REQUEST['tbUsername'];
							
							$Password = $_REQUEST['tbPassword'];
							
							//echo $UserName." ".$Password;
							
							$userName = "/^[A-Z]{1}[a-z]{3,14}$/";
							
							$password = "/^[a-zA-Z]\w{3,14}$/";
							
							if(!preg_match($userName, $UserName))
							{
								echo "<div style='color:red'>Username is in wrong format!</div>";
							}
							else if(!preg_match($password, $Password))
							{
								echo "<div style='color:red'>Password is in wrong format!</div>";
							}
							else
							{
								echo("<div style='width:450px;height:100px;color:white;border:1px solid black; margin-top:50px; margin-left:680px; padding-left:100px; padding-top:50px; background-color:black;' text-align:center;"."</br>");
		
								echo "You have successfully loged in! Your informations: <br/>";
								
								echo "Username: ".$UserName."<br/>";
								
								echo "Password: ".$Password;
								
								echo("</div>");
							}*/
							
						
		if($_REQUEST['tbUsername']="Sale" && $_REQUEST['tbPassword'] == "Sale")
		{
			$_SESSION['idu'] = "username";
			echo "Uspesno ste logovani";
			@exit(header('Location: admin.php'));
		}
		else
		{
			echo("Fuck off");
		}
	}
	else
	{
		echo("SADGASDGSDFG");
	}
?>
	











