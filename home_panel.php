<?php @session_start() ?>
	<div style="width:100%; height:300px; ">
		<?php
			if(isset($_SESSION['role']))
			{
				if($_SESSION['role'] == "admin")
				{
					if (headers_sent()) {
							die("Redirect failed. Please click on this link: <a href='admin.php'>Click here</a>");
						}
						else{
								exit(header("Location: admin.php"));
						}
				}
				else if($_SESSION['role'] == "user")
				{
					if (headers_sent()) {
							die("Redirect failed. Please click on this link: <a href='index.php'>Click here</a>");
						}
						else{
								exit(header("Location: index.php"));
						}
				}
				else
				{
					echo 'Access denied!!!';
				}
			}

		 ?>
	</div>
