<?php
	@session_start();
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" language="JavaScript" src="dropdown.js"></script>
		<script type="text/javascript" language="JavaScript" src="window.js"></script>
		<script type="text/javascript" language="JavaScript" src="register.js"></script>
		<script type="text/javascript" language="JavaScript" src="login.js"></script>

		<script type="text/javascript">

				function setCookie(cname, cvalue, exdays) {
					var d = new Date();
					d.setTime(d.getTime() + (exdays*24*60*60*1000));
					var expires = "expires="+ d.toUTCString();
					document.cookie = cname + "=" + cvalue + "; " + expires;
				}

				function getCookie(cname) {
					var name = cname + "=";
					var ca = document.cookie.split(';');
					for(var i = 0; i < ca.length; i++) {
						var c = ca[i];
						while (c.charAt(0) == ' ') {
							c = c.substring(1);
						}
						if (c.indexOf(name) == 0) {
							return true;
						}
					}
					return false;
				}


		$(document).ready(function(){


				if(getCookie('poll')){
					$('.poll').hide();

				}
			$('.close').click(function(){
				$('.poll').hide();

				setCookie('poll', 'poll', 5);

			});

		});
		</script>
	</head>
	<body>


		<div id="content">
			<div id="header">
				<div id="regi">

					<?php
							if(isset($_SESSION['role'])){
					?>


					<form method="POST" action="logout.php">
						<input type="submit" id="submitLogout" name="submitLogout" value="Logout"/>
				 </form>


								 	<!--div id="register">

											 <form method="POST" action=<?php echo($_SERVER['PHP_SELF']);?>>
											 <input type="submit" id="submitLogout" name="submitLogout" value="Logout"/>
											 </form>



									</div-->

					<?php
							}
							else
							{
					?>
								<div class="reg">
									<a href="?page=register">Register</a>
								</div>
								<div class="reg">
									<a href="?page=login">Login</a>
								</div>
					<?php } ?>

				</div>
				<div id="menu">
					<ul>

					    <?php
							$q="SELECT * FROM pages";
							$r=mysql_query($q,$conn);
							while($nav = mysql_fetch_array($r)){?>

							<li><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['name'] ?></a></li>

						<?php } ?>
					</ul>
				</div>
				<div id="search">
					<form method="get" action="">
						<input type="text" id="df" name="search" value=""/>
						<input type="submit" name="btnSearch" value="Search" />
					</form>
				</div>
			</div>
		<div id="central">

				<?php
				if(isset($_REQUEST['search'])){

						//header('Location: index.php?search='.$_REQUEST['search']);


						$search = $_REQUEST['search'];
						if(empty($search)){
								echo '<h1 style="color:red; margin-left:420px; margin-top:50px;">Wrong input, you must enter text in search box.</h1>';

						}else{
								 $q = "SELECT * FROM food WHERE food_name like '%".$search."%'";
								 $rez = mysql_query($q, $conn);
								 if(mysql_num_rows($rez) == 0){
									 echo '<h1 style="color:red; margin-left:640px; margin-top:50px;">No search results.</h1>';
								 }
								 echo '<div id="searchc">
								 				<p style="margin-left:100px;">Search result for: "'.$search.'"</p>';
								 while($r = mysql_fetch_array($rez)){


									echo '
												<div class="searchr">
												<section class="article">
														<span class="text-content"><span>ORDER NOW!</span></span>
															<img src="'.$r["food_pic"].'" alt="wedges"/>
															<h4>'.$r["food_name"].'</h4>
															<hr/>
															<p>'.$r["food_title"].'<br/></p>
												</section>
												</div>';

								}
								echo '</div>';
				}}else{

					if(isset($_REQUEST['page']))
						if(!is_numeric($_REQUEST['page']))
							include($_REQUEST['page'].".php");
						else
							include $pageinfo['title'].".php";
					else
						include $pageinfo['title'].".php";
				}
					?>
				<?php // include "/pages/". $pageinfo['name'].".php";?>

		</div>
		<div class="clear"></div>
		<div id="footer">
			<div id="infowrap">
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
				</div>
			<div id="fudown">
				<div id="fumenu">
					<ul>

					<?php
						$q="SELECT * FROM pages";
						$r=mysql_query($q,$conn);
						while($nav = mysql_fetch_assoc($r)){?>

						<li><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['name'] ?></a></li>

						<?php } ?>

						<li><a href="documentation.pdf">Documentation</a></li>
					</ul>
				</div>
				<p class="cright">&copy; 2016 by Aleksandar Atlagić. All rights reserved.</p>
				<div id="social">
					<ul>
						<li>
							<a href="http://facebook.com"><img src="pictures/facebook.png" alt="facebook"/></a>
						</li>
						<li>
							<a href="http://instagram.com"><img src="pictures/instagram.png" alt="instagram"/></a>
						</li>
						<li>
							<a href="http://linkedin.com"><img src="pictures/linkedin.png" alt="linkedin"/></a>
						</li>
						<li>
							<a href="http://googleplus.com"><img src="pictures/googleplus.png" alt="googleplus"/></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>


	<div class="poll">

		<?php
			include "poll.php";
		?>
		<button class="button close"> Close </button>
	</div>


	</body>
</html>
