<?php @session_start();

 if(!isset($_SESSION['role'])){
	exit(header('Location: index.php?page=login'));
}
/*
if(!isset($_REQUEST['page']))
	$page = 'home_panel';
*/
 ?>

<!DOCTYPE html>
<html>
	 <?php include "setup.php";
	?>
	<head>
		<title>Admin panel</title>
		<meta type="description" content=" "/>
		<meta http-equiv="Content-type" content="text/hmtl" charset="utf-8"/>
		<meta name="keywords" content=" "/>
		<meta name="author" content="Aleksandar Atlagić">
		<link rel="shortcut icon" href="#" alt="shortcut">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script language="JavaScript">
			$(document).ready(function(){
				$('.all').change(function(){
					if($(this).is(':checked'))
						$('.rest').prop("checked", true);
					else
						$('.rest').prop("checked", false);
					});
				});
		</script>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="register">
						 <form method="POST" action="logout.php">
							<input type="submit" id="submitLogout" name="submitLogout" value="Logout"/>
						 </form>
				</div>
				<div>
					<p style="font-size:60px;color:white;margin-left:380px;float:left;">WELCOME TO ADMIN PANEL</p>
				</div>
				<div id="back" style="margin-left:206px;">
						 <input type="button" id="bsck" name="bsck" value="<< Back to site" onclick="location.href='index.php';"/>
				</div>
			</div>
		<div id="central">
		<div class="wrap">
      <?php
      if(isset($_REQUEST['page'])){
          $page =  $_REQUEST['page'];

          include $page.".php";
        }
        else {

      ?>
			<div id="admin">
							<div class="ad">
								<a href="?page=admin">HOME</a>
							</div>
							<div class="ad">
								<a href="?page=food_pan">FOOD</a>
							</div>
							<div class="ad">
								<a href="?page=drinks_pan">DRINKS</a>
							</div>
							<div class="ad">
								<a href="?page=events_pan">EVENTS</a>
							</div>
              <div class="ad">
								<a href="?page=poll_pan">POLL</a>
							</div>

			</div>
      <?php
    }
  ?>
			<div class="clear"></div>
		</div>
		</div>
	</body>
</html>
