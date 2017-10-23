<?php @session_start();

	if($_SESSION['role'] == "admin"){

?>
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<h1 style="text-align:center;">HERE YOU CAN MANNAGE POLLS</h1>
<form method="POST" action="">
	<table>
		<tr>
			<th><input type="checkbox" name="all" class="all" value="All"></th>
			<th>ID</th>
			<th>Question</th>
			<th>Active</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<tr>
			<?php
						$event_query = "SELECT * FROM polls";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{

						echo "<tr>";

						echo '
								<td><input type="checkbox" name="ch" class="rest" value="'.$r["poll_id"].'"></td>
								<td>'.$r["poll_id"].'</td>
								<td>'.$r["question"].'</td>
								<td>'.$r["active"].'</td>
								<td><a href="?page=edit&id='.$r["poll_id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
								<td><a href=""><i class="fa fa-ban" aria-hidden="true"></i></a></td>';



						echo "</tr>";
						}
						?>
			</table>
</form>
<h1 style="text-align:center;">HERE YOU CAN MANNAGE ANSWERS</h1>
<form method="POST" action="">
	<table>
		<tr>
			<th><input type="checkbox" name="all" class="all" value="All"></th>
			<th>ANSWER ID</th>
			<th>POLL ID</th>
			<th>ANSWER</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<tr>
			<?php
						$event_query = "SELECT * FROM answers";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{

						echo "<tr>";

						echo '
								<td><input type="checkbox" name="ch" class="rest" value="'.$r["answer_id"].'"></td>
								<td>'.$r["answer_id"].'</td>
								<td>'.$r["answer"].'</td>
								<td>'.$r["poll_id"].'</td>
								<td><a href="?page=edit_an&id='.$r["poll_id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
								<td><a href=""><i class="fa fa-ban" aria-hidden="true"></i></a></td>';
						echo "</tr>";
						}
						?>
		</table>
</form>


<?php


	}
	else{


		echo "Zabranjen pristup";
	}
?>
