
				<div id="img">
					<div id="logo"><img src="pictures/logo4.png" alt="logo"/></div>
					<img src="pictures/background1.jpg">
				</div>
				<div class="wrap">
				<div id="events">
					<?php
						$event_query = "SELECT * FROM events LIMIT 4";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{


							echo '<div class="event">
								<h3>'.$r["event_name"].'</h3>
								<img src="'.$r["event_pic"].'" alt="eventPicture"
								<p>'.$r["event_title"].'</p>
								<a href="?page=4">Read more></a>
							</div>';
						}
						?>
				</div>
			</div>
