			
		<div class="wrap">
			<div id="choose">
					<div id="select">
						<a href="?page=2">Food</a> | <a href="?page=menu2">Drinks</a>
					</div>
				</div>
				<div class="menu2">
					<div class="descript">
						<h2>BEER</h2>
						<h5>This is a section of your menu. Give your section a brief description</h5>
					</div>
					<div class="drinks">
						<?php
						$event_query = "SELECT * FROM drinks WHERE drinks_type = 'beer'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{


							echo '

									<section class="article">
									<span class="text-content"><span>Beer or not to beer?</span></span>
										<img src="'.$r["drinks_pic"].'" alt="wedges"/>
										<h4>'.$r["drinks_name"].'</h4>
										<hr/>
										<p>'.$r["drinks_title"].'<br/></p>
									</section>';



						}
					?>
					</div>
					<div class="descript">
						<h2>WHITE WINE</h2>
						<h5>This is a section of your menu. Give your section a brief description</h5>
					</div>
					<div class="drinks">
						<?php
						$event_query = "SELECT * FROM drinks WHERE drinks_type = 'white wine'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{


							echo '

									<section class="article">
									<span class="text-content"><span>*White sensation*</span></span>
										<img src="'.$r["drinks_pic"].'" alt="wedges"/>
										<h4>'.$r["drinks_name"].'</h4>
										<hr/>
										<p>'.$r["drinks_title"].'<br/></p>
									</section>';



						}
					?>
					</div>
					<div class="descript">
						<h2>RED WINE</h2>
						<h5>This is a section of your menu. Give your section a brief description</h5>
					</div>
					<div class="drinks">
						<?php
						$event_query = "SELECT * FROM drinks WHERE drinks_type = 'red wine'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{


							echo '

									<section class="article">
									<span class="text-content"><span>Back in black!</span></span>
										<img src="'.$r["drinks_pic"].'" alt="wedges"/>
										<h4>'.$r["drinks_name"].'</h4>
										<hr/>
										<p>'.$r["drinks_title"].'<br/></p>
									</section>';



						}
					?>
					</div>
					<div class="descript">
						<h2>COCKTAILS</h2>
						<h5>This is a section of your menu. Give your section a brief description</h5>
					</div>
					<div class="drinks">
						<?php
						$event_query = "SELECT * FROM drinks WHERE drinks_type = 'cocktails'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{


							echo '

									<section class="article">
									<span class="text-content"><span>Drink for every mood.</span></span>
										<img src="'.$r["drinks_pic"].'" alt="wedges"/>
										<h4>'.$r["drinks_name"].'</h4>
										<hr/>
										<p>'.$r["drinks_title"].'<br/></p>
									</section>';



						}
					?>
					</div>
				</div>
			</div>
