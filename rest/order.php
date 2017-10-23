
				<div id="order_online">
					<div id="left">
						<div class="dropdown">
							<a class="account" >FOOD</a>

							<div class="submenu">
								<ul class="root">
									<li ><a href="#Dashboard" >APPETIZERS</a></li>
									<li ><a href="#Profile" >MAINS</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="center">
						<h1>FOOD</h1>
						<div id="handler">
							<h2>APPETIZERS</h2>
							<p>This is a section of your menu. Give your section a brief description</p>
							<div id="order">
								<div class="order_dish">
									<img src="pictures/wedges.jpg" alt="wedges"/>
									<h4>POTATO WEDGES</h4>
								</div>
								<div class="order_dish">
									<img src="pictures/boats.jpg" alt="boats"/>
									<h4>POTATO BOATS</h4>
								</div>
								<div class="order_dish">
									<img src="pictures/nachos.jpg" alt="nachos"/>
									<h4>NACHOS</h4>
								</div>
								<div class="order_dish">
									<img src="pictures/beatroot.jpg" alt="beatroot"/>
									<h4>BEATROOT SALAD</h4>
								</div>
								<div class="order_dish">
									<img src="pictures/shrimps.jpg" alt="shrimps"/>
									<h4>SHRIMPS SALAD</h4>
								</div>
								<div class="order_dish">
									<img src="pictures/mixed.jpg" alt="mixed"/>
									<h4>MIXED SALAD</h4>
								</div>
							</div>
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