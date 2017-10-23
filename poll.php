
	<div id="poll">


           <form style="padding-left:12px" name="poll_form" method="post" id="poll-view">
		   <div align='center' class="user-backdrop"></div>
			<div align='center' class="user-content">
				<?php
				$question=" SELECT polls_id, question FROM polls WHERE active=1";
				$res1=mysql_query($question,$conn) or die("Query 1 not executed!".mysql_error());
				$arr1=mysql_fetch_array($res1);
				echo"<table>";
					echo'<tr><td>'.$arr1['question'].'</td></tr>';

					$query=" 	SELECT answers,answers_id
									FROM answers a  JOIN polls p
									ON p.polls_id = a.polls_id
									WHERE p.active=1";

					$res=mysql_query($query,$conn) or die ("Query 2 not executed!!".mysql_error());

				while($arr=mysql_fetch_array($res))
				{
					echo"<tr><td align='center' ><input type='radio'  id='answers' name='answers' value=".$arr['answers_id'].">&nbsp".$arr['answers']."</td></tr>";
				}
				echo"</table>";
					echo "<tr><tr align='center' ><input type='submit' class='change' name='vote' value='Vote'>&nbsp</td></tr>";
					echo "<tr><tr align='center' ><input type='submit' class='change' name='res' value='Count'></td></tr>";



				$voting=&$_POST['vote'];
				$results=&$_POST['res'];
				if(isset($voting))
				{
						$answer=&$_POST['answers'];
						$write_answer=' UPDATE result SET result=result+1 WHERE answers_id='.$answer;
						$execute_answer=mysql_query($write_answer,$conn) or die ("Pick one!");
					if($execute_answer)
					{
						echo'<br/>You have voted!<br>';
					}
					else{
						echo 'Pick one!';
					}
				}
						if(isset($results)){
							$results="SELECT * FROM polls WHERE active=1";
							$execute_results=mysql_query($results, $conn) or die("Query 4 not executed!".mysql_error());
							$row=mysql_fetch_array($execute_results);
							$id=$row['polls_id'];
							echo '<table>';
							echo '<tr><td>'.$row['question'].'</td></tr>';
							$answers = "SELECT *
											FROM answers a JOIN result r
											ON a.answers_id = r.answers_id
											WHERE r.polls_id =".$id;

							$get = mysql_query($answers) or die(mysql_error());
								while($row=mysql_fetch_array($get))
								{
									echo '<tr><td>'.$row['answers'].'</td><td>'.$row['result'].'</td></tr><br/>';
								}
									echo '</table>';
							}
				mysql_close($conn);

				?>
				</div></form>
							<div id="rezultat"></div>

									</div>
