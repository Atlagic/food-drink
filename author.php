			<div class="wrap">
				<div id="aboutus">
					<div id="left_pic">
						<img src="gallery/me.jpg" alt="leftpic"/>
					</div>
					<div class="about">
						<h1>ABOUT AUTHOR</h1>
						<h5>I'm Aleksandar Atlagic, 21 year old student from Valjevo(Serbia). I'm currently living in Belgrade
							and so far I studied at primary school <a href="http://www.osnadapuric.rs/"> "Nada Puric"</a> and<br/> <a href="http://www.tehnickaskolava.rs//"> "Technical school of Valjevo"</a>. Now I'm on third
							year of ICT colledge of vocational studies which is a great school for learning about internet technologies,
							and i hope that one day I'm going to work as a web developer.</h5>
						<h1 style="margin-top:30px;">BASIC INFORMATIONS</h1>
						<h5 style="margin-top:6px;">Name: Aleksandar<br/>
						Lastname: Atlagic<br/>
						Index: 93/14<br/>
						Field of study: Internet technologies<br/>
						Site for: Web programming PHP1</h5>
					</div>
					<div class="about">
						<h1>IF YOU LIKE PLEASE VOTE!</h1>

						<form method="post" action ="<?php print $_SERVER['PHP_SELF'];?>?page=6">
					  <table>
					    <tr>
					      <?php

					        $event_query = "SELECT poll_id, question FROM polls WHERE active = 1";
					        $event_result = mysql_query($event_query,$conn) or die ("database error".mysql_error());
					        $r = mysql_fetch_array($event_result);

					          echo '<th style="padding-top:16px;">'.$r["question"].'</th>';

					        ?>
					        </tr>
					        <tr>
					          <td style="color:blue; ">
					          <?php
					            $event_query = "SELECT * FROM answers a JOIN polls p ON a.poll_id = p.poll_id WHERE p.active = 1";
					            $event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());
					            while($r = mysql_fetch_array($event_result))
					            {
					              echo "<input type='radio' name='poll' id='poll' value =".$r['answer_id'].">".$r['answer']."<br/>";
					            }

					          ?>
					        </td>
					      </tr>
					      <tr>
					        <td style="padding-top: 10px;">
					          <input type="submit" name="vote" id="vote" style="cursor: pointer; color:white; background-color:black; width:80px; height:30px;" value="VOTE!"/>
					          <input type="submit" name="pollRes" id="pollRes" style="cursor: pointer; color:white; background-color:black; width:80px; height:30px;" value="COUNT!"/>
					        </td>
					      </tr>
					    </table>
					    </form>
					    <?php

					    if(isset($_REQUEST['vote']))
					    {
					        $answer = $_REQUEST['poll'];
					        $poll_query ="SELECT * FROM results WHERE answer_id ='".$answer."'";
					        $result_query = mysql_query($poll_query);
					        $r = mysql_fetch_array($result_query);
					        $num_votes = $r['result'] + 1;

					        $write_answer="UPDATE results SET result=".$num_votes." WHERE answer_id='".$answer."'";
					        $execute_answer = mysql_query($write_answer) or die ("Answer query is not executed!".mysqli_error());
					      if($execute_answer)
					      {
					        echo"<br/>You have voted!<br>";
					      }
					      else{
					        echo"Pick one!";
					      }
					    }
					    if(isset($_REQUEST['pollRes']))
					    {
					          $results = "SELECT * FROM polls WHERE active = 1";
					          $execute_results = mysql_query($results) or die("Query for resluts not executed!".mysqli_error());
					          $row=mysql_fetch_array($execute_results);
					          $id = $row['poll_id'];
					            echo '<div id="pollResult" style="float:left;"><table>';
					            echo '<th style="margin-top: 20px; color:black;">'.$row['question'].'</th>';
					          $answers = "SELECT answer, result FROM answers a JOIN results r ON a.answer_id = r.answer_id WHERE r.poll_id =".$id;
					          $get = mysql_query($answers) or die(mysql_error());
					            while($row = mysql_fetch_array($get))
					            {
					              echo '<tr><td style="color:blue;">'.$row["answer"].':</td><td style="color:blue;">'.$row["result"].' times voted</td></tr>';
					            }
					              echo '</table></div>';
					      }?>
					</div>
				</div>
			</div>
