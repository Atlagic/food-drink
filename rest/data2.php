<!DOCTYPE html>
<html>
	<head>
		<title>THE PUB | HOME</title>
		<meta type="description" content=" "/>
		<meta http-equiv="Content-type" content="text/hmtl" charset="utf-8"/>
		<meta name="keywords" content=" "/>
		<meta name="author" content="Aleksandar Atlagić">
		<link rel="shortcut icon" href="#" alt="shortcut">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script type="text/javascript" language="JavaScript" src="dropdown.js"></script>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="register">
					<div class="reg">
					
					</div>
					<div class="reg">
					
					</div>
				</div>
				<div id="menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a>
							<ul class="fallback">
								<li><a href='menu.php'>Food</a></li>
								<li><a href='menu2.php'>Drink</a></li>
							</ul>
						</li>
						<li><a href="#">Order online</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="gallery.php">Gallery</a></li>
					</ul>
				</div>
				<div id="search">
					<form method="get" action="">
						<input type="text" id="df" value=""/> 
						<input type="submit" value="Search" />
					</form>
				</div>
			</div>
			<div id="central">
					<?php
						if(isset($_REQUEST['btnSubmit2']))
						{
							$UserName = $_REQUEST['tbUsername'];
							
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
							}
						}
					?>
			</div>
				<div id="informations">
					<div class="inform">
						<h4>OPENING HOURS</h4>
						<p>Monday - Friday<br/>
						   11am - 11pm<br/>
						   Saturday - Sunday<br/>
						   10am - 12am</p>
					</div>
					<div class="inform">
						<h4>ADDRESS</h4>
						<p>500 Terry Francois Street<br/>
						   San Francisco, CA  94158<br/>
						   Info@mysite.com<br/>
						   T  /  123-456-7890<br/>
	​                       F  /  123-456-7890</p>
					</div>
					<div class="inform">
						<h4>FIND​ US</h4>
						<div id="map">
							<script>
								function initMap() {
									var mapDiv = document.getElementById('map');
									var map = new google.maps.Map(mapDiv, {
										center: {lat: 44.8145809, lng: 20.4839015},
										zoom: 19
									});
								}
							</script>
							<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"async defer></script>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="clear"></div>
			<div id="footer">
				<p>&copy; 2016 by Pilemoj. All rights reserved.</p>
				<div id="fumenu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="#">Order online</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="#">Documentation</a></li>
					</ul>
				</div>
				<div id="social">
					<ul>
						<li>
							<a href="https://facebook.com"><img src="pictures/facebook.png" alt="facebook"/></a>
						</li>
						<li>
							<a href="https://instagram.com"><img src="pictures/instagram.png" alt="instagram"/></a>
						</li>
						<li>
							<a href="https://linkedin.com"><img src="pictures/linkedin.png" alt="linkedin"/></a>
						</li>
						<li>
							<a href="https://googleplus.com"><img src="pictures/googleplus.png" alt="googleplus"/></a>
						</li>
					</ul>
				</div>
			</div>
	</body>
</html>