<?php @session_start();
if($_SESSION['role'] == "admin"){

	if(isset($_REQUEST['removed'])){
				echo "<p style='display:block; font-size:30px; text-align:center; color:#CC0000;'>Successfully deleted";
	}
  if(isset($_REQUEST['del'])){
			$id = $_REQUEST['del'];

			$query= "DELETE FROM food WHERE food_id =".$id;
			$r=mysql_query($query, $conn) or die('Delete Query Failed');

			header('Location: ?page=food_pan&removed');
  }

  if(isset($_REQUEST['page'])&& isset($_REQUEST['id'])){

		if(isset($_REQUEST['btnEdit'])){

			$id = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			$title = $_REQUEST['title'];
			//$pic = $_REQUEST['pic'];
			$foodtp = $_REQUEST['foodtp'];


			$q= "UPDATE food SET food_name='".$name."',food_title='".$title."',food_type='".$foodtp."' WHERE food_id=".$id;   //."food_pic=".$pic;

			if(mysql_query($q, $conn)){
				echo "Successfully Editovano";
			}
			else{
				echo "Query ERROR";
			}
		}

		$id = trim($_REQUEST['id']);

		$query = "SELECT * FROM food WHERE food_id = $id";
		$r=mysql_query($query, $conn);
			if(mysql_num_rows($r) == 0){
				echo "Ne postoji!";
			}
			else{

				$r= mysql_fetch_array($r);

				?>
						<form method="POST" action="?page=food_pan&id=<?php echo $_REQUEST['id']; ?>">
							<table>
								<tr>
									<td colspan="2">
									<img src="<?php echo $r["food_pic"]; ?>" alt="picture"/>
									</td>
								</tr>
								<tr>
									<td>
										ID:
									</td>
									<td>
										<input type="hidden" name="id" value="<?php echo $r["food_id"]; ?>" /><?php echo $r["food_id"]; ?>
									</td>
								</tr>
								<tr>
									<td>
										Name:
									</td>
									<td>
										<input type="text" name="name" value="<?php echo $r["food_name"]; ?> "/>
									</td>
								</tr>
								<tr>
									<td>
										Title:
									</td>
									<td>
										<textarea name="title" rows="6" cols="50"><?php echo $r["food_title"]; ?></textarea>
									</td>
								</tr>
								<tr>
									<td>
										Picture:
									</td>
									<td>
										<input type="file" name="pic" value="<?php echo $r["food_pic"]; ?>" />
									</td>
								</tr>
								<tr>
									<td>
										Type:
									</td>
									<td>
										<input type="radio" name="foodtp" value="appetizers" <?php if($r["food_type"] == "appetizers") echo "checked"; ?> />
										appetizers<br/>
										<input type="radio" name="foodtp" value="mains" <?php if($r["food_type"] == "mains") echo "checked"; ?> />
										mains<br/>
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
		}
	}
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
									$food_query = "SELECT * FROM food";
									$food_result = mysql_query($food_query, $conn) or die ("database error".mysql_error());

									while($r = mysql_fetch_array($food_result))
									{

									echo "<tr>";

									echo '
											<td><input type="checkbox" name="ch" class="rest" value="'.$r["food_id"].'"></td>
											<td>'.$r["food_id"].'</td>
											<td>'.$r["food_name"].'</td>
											<td>'.$r["food_title"].'</td>
											<td><img src="'.$r["food_pic"].'"alt="anPic" width="150px"></td>
											<td>'.$r["food_type"].'</td>
											<td><a href="?page=food_pan&id='.$r["food_id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></td>
											<td><a href="?page=food_pan&del='.$r["food_id"].'"><i class="fa fa-ban" aria-hidden="true"></a></td>';
									echo "</tr>";
									}
									?>
			  </form>
	      <?php
		}
}
else{
	echo "Zabranjen pristup";
}
?>
