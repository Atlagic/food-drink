 <?php
	include 'connection.inc';
	
	if(!isset($_REQUEST['page']) || !is_numeric($_REQUEST['page']))
	{
		$pageid = 1;
	}
	else
	{
		$pageid = $_REQUEST['page'];
	
	}
	
	$query = "SELECT * FROM pages WHERE id = $pageid";
	$r = mysql_query($query, $conn);
	$pageinfo = mysql_fetch_assoc($r);
 ?>