<?php
	@session_start();
	
	if(isset($_REQUEST['page']))
	if(isset($_SESSION['idu']) && ($_REQUEST['page'] = 'login' || $_REQUEST['page']='register')){
			header("Location: admin.php");
		
	}
	 include "setup.php";
	

?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>The Pub | <?php echo $pageinfo['name'];?></title>
		<meta type="description" content=" "/>
		<meta http-equiv="Content-type" content="text/hmtl" charset="utf-8"/>
		<meta name="keywords" content=" "/>
		<meta name="author" content="Aleksandar Atlagić">
		<link rel="shortcut icon" href="#" alt="shortcut">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script type="text/javascript" language="JavaScript" src="dropdown.js"></script>
		<script type="text/javascript" language="JavaScript" src="window.js"></script>
		
		
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="register">
					<div class="reg">
						<a href="?page=register">Register</a>
						<a href="?page=login">Log in</a>
					</div>
					<div class="reg">
					
					</div>
				</div>
				<div id="menu">
					<ul>
					
					    <?php 
							$q="SELECT * FROM pages";
							$r=mysqli_query($conn,$q);
							while($nav = mysqli_fetch_assoc($r)){?>
							
							<li><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['name'] ?></a></li>
						
						<?php } ?>
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
			//preg_match("/^[A-Za-z]$/", $_REQUEST['page'])
			if(!is_numeric($_REQUEST['page']))
					include($_REQUEST['page'].".php");
				  else
					include $pageinfo['title'].".php";?>
			<?php // include "/pages/". $pageinfo['name'].".php";?>
			<div class="clear"></div>
		</div>
		<div id="footer">
			<div id="informations">
				<div class="wrap">
					<div class="inform" >
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
			<div id="fudown">
				<div id="fumenu">
					<ul>
						
					<?php 
						$q="SELECT * FROM pages";
						$r=mysqli_query($conn,$q);
						while($nav = mysqli_fetch_assoc($r)){?>
						
						<li><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['name'] ?></a></li>
						
						<?php } ?>
					
						<li><a href="#">Documentation</a></li>
					</ul>
				</div>
				<p class="cright">&copy; 2016 by Pilemoj. All rights reserved.</p>
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
		</div>
		</div>
	</body>
</html>