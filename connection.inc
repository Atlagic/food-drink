<?php
	DEFINE("SERVER","localhost");
	DEFINE("USER","root");
	DEFINE("PASS","");
	DEFINE("DATABASE","pub");
	
	
	$conn = mysql_connect(SERVER, USER, PASS) or die("Database connection failed".mysql_error());
	
	$db = mysql_select_db("pub", $conn) or die("Database selection failed");
	
?>