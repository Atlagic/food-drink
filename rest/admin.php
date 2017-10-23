<?php
session_start();
if(!isset($_SESSION['idu'])){
	exit(header('Location: index.php?page=login'));
}
	 

 echo("Ovo je panel");
 ?>
 
 <form method="POST" action=<?php echo($_SERVER['PHP_SELF']);?>>
 <input type="submit" id="submitLogout" name="submitLogout" value="Logout"/>
 </form>
 
 
 <?php
 if(isset($_REQUEST['submitLogout'])){
	 unset($_SESSION['idu']);
	 session_destroy();
	 exit(header('Location: index.php?page=login'));
 }
 
 ?>
 