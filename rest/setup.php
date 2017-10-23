 <?php
	include 'conection.ini';
	
	if(!isset($_GET['page']) || !is_numeric($_GET['page']))
	{
		$pageid = 1;
	}
	else
	{
		$pageid = $_GET['page'];
	}
	
	$query = "SELECT * FROM pages WHERE id = $pageid";
	$r = mysqli_query($conn, $query);
	$pageinfo = mysqli_fetch_assoc($r);
 ?>