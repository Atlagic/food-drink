 <?php
@session_start();

	 unset($_SESSION['role']);
	 session_destroy();
   if(headers_sent()) {
       die("Redirect failed. Please click on this link: <a href='index.php?page=login'>Click here</a>");
     }
     else{
         exit(header("Location: index.php?page=login"));
     }
 ?>
