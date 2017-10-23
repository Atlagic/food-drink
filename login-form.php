<?php
/*
include 'connection.inc';


				if(isset($_REQUEST['btnSubmitLog'])){

						$username = $_REQUEST['tbUsername'];
						$pass = $_REQUEST['tbPassword'];




							$reUserName = '/^[A-Z]{1}[a-z]{3,14}$/';

							$rePassword = '/^[a-zA-Z]\w{3,14}$/';

							$greske = array();


						// if(!preg_match( $reUserName , $username))
						// {
							// $greske[] = 'Wrong input username' ;
						// }
						// if(!preg_match( $rePassword , $pass))
						// {
							// $greske[] = 'Wrong input password' ;
						// }


						if(empty($greske)){

							$q = "SELECT * FROM login WHERE username ='".$username."' AND password = '".md5($pass)."'"	;
							$rez = mysql_query($q, $conn) or die('Query failed');
							$r=mysql_fetch_array($rez);
							if($rez){
								$_SESSION['idu'] = $r['id_role'];
								$_SESSION['username'] = $r['username'];
								$_SESSION['name'] = $r['name'];
								$_SESSION['lastname'] = $r['lastname'];
								$_SESSION['email'] = $r['email'];
								echo "<p style='font-size:30px; margin-top:100px;'>Login successful";
								exit(header('Location: admin.php'));
									// $sec=1;
									// $page = $_SERVER['PHP_SELF'];
							// header("Refresh: $sec; url=$page");

							}
							else{

								echo "Username or password are wrong</br>";
							}

							// for($i = 0; $r = mysql_fetch_array($rez); $i++){
								// echo $r[$i];
							// }


						}
						else
						{
							echo '<ul>';
							foreach($greske as $g)
								echo '<li>'.$g.'</li>';


							echo '</ul>';
						}


				}
	mysql_close();

			?>
