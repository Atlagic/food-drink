		<div class="wrap">	
			<div id="choose">
					<div id="select">
						<a href="?page=2">Food</a> | <a href="?page=menu2">Drinks</a>
					</div>
				</div>
				<div class="menu">
					<h2>APPETIZERS</h2>
					<h5>This is a section of your menu. Give your section a brief description</h5>
					<div class="food">
					<?php
						$event_query = "SELECT * FROM food WHERE food_type = 'appetizers'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());
						
						while($r = mysql_fetch_array($event_result))
						{

						
							echo '
								
									<section class="article">
									<span class="text-content"><span>ORDER NOW!</span></span>
										<img src="'.$r["food_pic"].'" alt="wedges"/>
										<h4>'.$r["food_name"].'</h4>
										<hr/>
										<p>'.$r["food_title"].'<br/></p>
									</section>';
									 
						
							
						}
					?>
					</div>
				</div>
				<div class="menu">
					<h2>MAINS</h2>
					<h5>This is a section of your menu. Give your section a brief description</h5>
					<div class="food">
					<?php
						$event_query = "SELECT * FROM food WHERE food_type = 'mains'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());
						
						while($r = mysql_fetch_array($event_result))
						{

						
							echo '
								
									<section class="article">
									<span class="text-content"><span>ORDER NOW!</span></span>
										<img src="'.$r["food_pic"].'" alt="wedges"/>
										<h4>'.$r["food_name"].'</h4>
										<hr/>
										<p>'.$r["food_title"].'<br/></p>
									</section>';
									 
						
							
						}
					?>
					</div>
				</div>
			</div>
			