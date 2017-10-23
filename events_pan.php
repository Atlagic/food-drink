<?php @session_start();

	if($_SESSION['role'] == "admin"){

?>
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<form method="POST" action="">
	<table>
		<tr>
			<th><input type="checkbox" name="all" class="all" value="All"></th>
			<th>ID</th>
			<th>Name</th>
			<th>Tittle</th>
			<th>Picture</th>
			<th>Time</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<tr>
			<?php
						$event_query = "SELECT * FROM events";
						$event_result = mysql_query($event_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($event_result))
						{

						echo "<tr>";

						echo '
								<td><input type="checkbox" name="ch" class="rest" value="'.$r["id_event"].'"></td>
								<td>'.$r["id_event"].'</td>
								<td>'.$r["event_name"].'</td>
								<td>'.$r["event_title"].'</td>
								<td><img src="'.$r["event_pic"].'"alt="anPic" width="150px"></td>
								<td>'.$r["event_time"].'</td>
								<td><a href="?page=edit&id='.$r["id_event"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
								<td><a href=""><i class="fa fa-ban" aria-hidden="true"></i></a></td>';



						echo "</tr>";
						}
						?>
</form>



<?php


	}
	else{


		echo "Zabranjen pristup";
	}
?>
