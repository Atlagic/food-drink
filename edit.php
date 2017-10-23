<?php
						$event_query = "SELECT * FROM polls WHERE poll_id = ".$_REQUEST['id'];
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

					$r = mysql_fetch_array($event_result);
						echo '<form method="POST" action="" >
						 <table class="regTab" style="width:100%; text-align:center;padding-top:40px;">
							<tr>
								<td>
									<p style="color:#0ba39c; margin-left:10px;">ID</p>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="text" class="styled" id="tbName" name="tbName" value="'.$r["poll_id"].'"/>
								</td>
							 </tr>
							 <tr>
								<td>
									<p style="color:#0ba39c; margin-left:10px;">QUESTION</p>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="text" class="styled" id="tbName" name="tbName" value="'.$r["question"].'"/>
								</td>
							 </tr>
							 <tr>
								<td>
									<p style="color:#0ba39c; margin-left:10px;">ACTIVE</p>
								</td>
							</tr>
							<tr>
								<td>
								   <input type="text" class="styled" id="tbName" name="tbName" value="'.$r["active"].'"/>
								</td>
							 </tr>

							 <tr>
								<td >
									<input type="button" value="Edit" class="button" name="btnSubmit"/>
								</td>
							 </tr>
							</table>
						</form>';

?>
