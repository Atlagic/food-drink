			<div class="wrap">
				<div id="order_online">
					<div id="left">
						<div class="dropdown">
							<a class="account" >FOOD  >></a>

							<div class="submenu">
								<ul class="root">
									<li ><a href="?page=appetizers" >APPETIZERS</a></li>
									<li ><a href="?page=mains" >MAINS</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="center">
						<h1>FOOD</h1>
						<div id="handler">
							<h2>MAINS</h2>
							<p><?php $r['food_title'] ?></p>
							<?php
							$event_query = "SELECT * FROM food WHERE food_type = 'mains'";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());
						
						while($r = mysql_fetch_array($event_result))
						{

						
							echo '
								
									
										<div class="order_dish">
											<img src="'.$r["food_pic"].'" alt="wedges"/>
											<h4>'.$r["food_name"].'</h4>
										</div>';
									 
						
							
						}
					?>
						
							</div>
						</div>
					
					
					<div id="right">
						<div id="right_top">
							<div id="my_order">
								<p>My order&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(0 items)</p>
							</div>
							<div id="browse">
								
							</div>
						</div>
						<div id="right_bottom">
							<div id="subtotal">
								<p>Subtotal&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$0</p>
							</div>
							<div id="purchase">
								<form>
									<table>
										<tr>
											<td>
												<textarea cols="12" rows="1" style="margin-top:10px;margin-left:28px; padding:30px 40px; border:2px solid #0ba39c;" placeholder="Special requests"></textarea>
											</td>
										</tr>
										<tr>
											<td style="color:white;padding-left:10px;padding-top:6px;">Pickup only</td>
										</tr>
										<tr>
											<td><input type="button" class="orderBtn" id="btnOrder" name="order" value="ORDER NOW  >"/></td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>;
		<script type="text/javascript" >
			$(document).ready(function()
			{

			$(".account").click(function()
			{
			var X=$(this).attr('id');
			if(X==1)
			{
			$(".submenu").hide();
			$(this).attr('id', '0'); 
			}
			else
			{
			$(".submenu").show();
			$(this).attr('id', '1');
			}

			});

			//Mouse click on sub menu
			$(".submenu").mouseup(function()
			{
			return false
			});

			//Mouse click on my account link
			$(".account").mouseup(function()
			{
			return false
			});


			//Document Click
			$(document).mouseup(function()
			{
			$(".submenu").hide();
			$(".account").attr('id', '');
			});
			});
		</script>