<?php

	if($_SESSION['role'] == "admin"){
		
			if(isset($_REQUEST['removed'])){
				echo "<p style='display:block; font-size:30px; text-align:center; color:#CC0000;'>Successfully deleted";

			}

			if(isset($_REQUEST['btnEdit'])){

						$id = $_REQUEST['id'];
						$name = $_REQUEST['name'];
						$title = $_REQUEST['title'];
						//$pic = $_REQUEST['pic'];
						$drinkstp = $_REQUEST['drinkstp'];


						$q= "UPDATE drinks SET drinks_name='".$name."',drinks_title='".$title."',drinks_type='".$drinkstp."' WHERE drinks_id=".$id;   //."food_pic=".$pic;

						$dgrsds = mysql_query($q, $conn) or die('Query ERROR');

						echo "Successfully Edited";


					}


if(isset($_REQUEST['del'])){
		$id = $_REQUEST['del'];

		$query= "DELETE FROM drinks WHERE drinks_id =".$id;
		$r=mysql_query($query, $conn) or die('Delete Query Failed');

		header('Location: ?page=drinks_pan&removed');


}
else if(isset($_REQUEST['page'])&& isset($_REQUEST['id'])){

		$id = trim($_REQUEST['id']);

		$query = "SELECT * FROM drinks WHERE drinks_id = $id";
		$r=mysql_query($query, $conn);
			if(mysql_num_rows($r) == 0){
				echo "Ne postoji!";
			}
			else{

				$r= mysql_fetch_array($r);

				?>
						<form method="POST" action="">
							<table>
								<tr>
									<td colspan="2">
									<img src="<?php echo $r["drinks_pic"]; ?>" alt="picture"/>
									</td>
								</tr>
								<tr>
									<td>
										ID:
									</td>
									<td>
										<input type="hidden" name="id" value="<?php echo $r["drinks_id"]; ?>" /><?php echo $r["drinks_id"]; ?>
									</td>
								</tr>
								<tr>
									<td>
										Name:
									</td>
									<td>
										<input type="text" name="name" value="<?php echo $r["drinks_name"]; ?> "/>
									</td>
								</tr>
								<tr>
									<td>
										Title:
									</td>
									<td>
										<textarea name="title" rows="6" cols="50"><?php echo $r["drinks_title"]; ?></textarea>
									</td>
								</tr>
								<tr>
									<td>
										Picture:
									</td>
									<td>
										<input type="file" name="pic" value="<?php echo $r["drinks_pic"]; ?>" />
									</td>
								</tr>
								<tr>
									<td>
										Type:
									</td>
									<td>
										<input type="radio" name="drinkstp" value="appetizers" <?php if($r["drinks_type"] == "beer") echo "checked"; ?> />
										beer<br/>
										<input type="radio" name="drinkstp" value="mains" <?php if($r["drinks_type"] == "white wine") echo "checked"; ?> />
										white wine<br/>
										<input type="radio" name="drinkstp" value="appetizers" <?php if($r["drinks_type"] == "red wine") echo "checked"; ?> />
										red wine<br/>
										<input type="radio" name="drinkstp" value="mains" <?php if($r["drinks_type"] == "cocktails") echo "checked"; ?> />
										cocktails<br/>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="submit" name="btnEdit" value="Edit"/>
									</td>
								</tr>

								</table>
							</form>




			<?php

}	}
else if(isset($_REQUEST['page'])){

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
			<th>Type</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<tr>
			<?php
						$drinks_query = "SELECT * FROM drinks";
						$drinks_result = mysql_query($drinks_query, $conn) or die ("database error".mysql_error());

						while($r = mysql_fetch_array($drinks_result))
						{

						echo "<tr>";

						echo '
								<td><input type="checkbox" name="ch" class="rest" value="'.$r["drinks_id"].'"></td>
								<td>'.$r["drinks_id"].'</td>
								<td>'.$r["drinks_name"].'</td>
								<td>'.$r["drinks_title"].'</td>
								<td><img src="'.$r["drinks_pic"].'"alt="anPic" width="150px"></td>
								<td>'.$r["drinks_type"].'</td>
								<td><a href="?page=drinks_pan&id='.$r["drinks_id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></td>
								<td><a href="?page=drinks_pan&del='.$r["drinks_id"].'"><i class="fa fa-ban" aria-hidden="true"></i></a></td>';



						echo "</tr>";
						}
						?>
</form>
<?php } ?>



<?php


	}
	else{


		echo "Zabranjen pristup";
	}
?>
