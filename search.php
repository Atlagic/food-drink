<?php

function search_data(){
	

	$search = trim($_REQUEST["df"]);
	
	header("?search=".$search);
	echo '<div class="wrap" style="text-align:center; font-size:30px; padding:0;">';	
		//dodati nasa slova
		$regSearch="/^[A-Za-z0-9\s]+$/";
		if(!preg_match($regSearch,$search)){
			echo '<br/> Greska, pogresan unos!<br/>';
			
		}else{
				
				
			#Database Connection:
			include("connection.ini")or die('Greska prilikom konekcije sa bazom:\n'.mysqli_connect_error());;
			//$dbc = mysqli_connect(SERVER, USER, PASS, DATABASE) OR die('Greska prilikom konekcije sa bazom:\n'.mysqli_connect_error());
			

			$result='';
			$query=" SELECT * FROM food f WHERE food_name like '%".$search."%' || food_title like '%".$search."%'";
			$result = mysqli_query($dbc, $query);
			
			if(mysqli_num_rows($result) ){
				echo '<br/> Reults for search "'. $search. '"<br/>';
				
				echo '<div class="rightside_sociva" style="width:100%">';
				while($items = mysqli_fetch_assoc($result)){ ?>
						<a href="?page=2&brand=<?php echo $items['food_id'];?>&item=<?php echo $items['Id'];?>" class="item_box cell" data-match="item<?php echo $items['Id'];?>">
							<img src="<?php echo $items['food_pic'];?>" alt="picture" width="100%" />
							<div class="item_overlay"></div>
							<div class="item_thumb item_naziv"><?php echo $items['food_name'];?></div>
						</a>
<?php			}
				echo "</div>";
			}else{
				echo '<br/> No results for your search!  <br/>'. $search;	
			}
		}
	echo '</div>';
}
?>

