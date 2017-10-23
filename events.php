<?php
	$pictures = array();
	$page_limit = 4;
	$picture_shown = 0;

	if (isset($_REQUEST['pic'])) {
		$picture_shown = $_REQUEST['pic'];
	}

	$count_all_query ="SELECT COUNT(id_event) FROM events";
	$result_count = mysql_query($count_all_query, $conn);

	if (mysql_num_rows($result_count) == 1) {
		$result_count = mysql_fetch_array($result_count);
	}

	$result_count = $result_count[0];
	$left = $picture_shown - $page_limit;
	$right = $picture_shown + $page_limit;

	$get_pictures_query = "SELECT * FROM events LIMIT $page_limit OFFSET $picture_shown";

	$get_pictures_result = mysql_query($get_pictures_query, $conn);
	if (mysql_num_rows($get_pictures_result) > 0) {
		while ($row = mysql_fetch_array($get_pictures_result)) {
			$pictures[] = $row;
		}
	}

?>
			<div class="wrap">
				<div id="event_list">
					<div id="text">
						<h1>EVENTS</h1>
						<h2>People turn to their favorite pub restaurants when they want to hold special events,
						corporate parties and other functions. Private dinners, wedding-rehearsal meals, showers
						and community fundraisers provide great opportunities to generate business and attract new diners.<br/> Check out what​
						we got this weekend for you!​</h2>
					</div>
					<div id="Events">

						<?php
						// $event_query = "SELECT * FROM events";
						// $event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						// while($r = mysql_fetch_array($event_result))
						foreach ($pictures as $r) {


						echo '<div class="Event">
							<div class="pic">
								<img src="'.$r["event_pic"].'" alt="eventPicture"/>
							</div>
							<div class="pic_des">
								<h2>'.$r["event_name"].'</h2>
								<h5>'.$r["event_title"].'</h5><br/>
								<h2>When:</h2>
								<h5>'.$r["event_time"].'</h5>
							</div>
						</div>';


						}
						?>
					</div>
					<div class="page-navigation">
							<nav class="pager">
							  	<ul class="pager">
							  	<?php if ($left < 0) :?>
									<li><a href="<?php print 'index.php?page=4&pic='.$right; ?>"> RIGHT >></a></li>
								<?php elseif($right >= $result_count) :?>
									<li><a href="<?php print 'index.php?page=4&pic'.$left; ?>"> << LEFT </a></li>
								<?php else :?>
							    	<li><a href="<?php print 'index.php?page=4&pic='.$left; ?>">Previous</a></li>
							    	<li><a href="<?php print 'index.php?page=4&pic='.$right; ?>">Next</a></li>
							    <?php endif;?>
							  </ul>
							</nav>
						</div>
				</div>
			</div>
