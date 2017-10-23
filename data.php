<?php
			
			include "connection.inc";
					
						$name = $_REQUEST['tbName'];
						$lastName = $_REQUEST['tbLastName'];
						$email = $_REQUEST['tbEmail'];
						$username = $_REQUEST['tbUsername'];
						$pass = $_REQUEST['tbPassword'];
						$pass2 = $_REQUEST['tbPassword2'];
												
							$reName ='/^[A-Z]{1}[a-z]{3,14}$/';
				
							$reLastName = '/^[A-Z]{1}[a-z]{3,14}$/';
							
							$reEmail = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
							
							$reUserName = '/^[A-Z]{1}[a-z]{3,14}$/';
							
							$rePassword = '/^[a-zA-Z]\w{3,14}$/';
									
							$greske = array();
									
						if(!preg_match( $reName , $name))
						{
							$greske[] = 'Wrong input name' ;
						}
						if(!preg_match( $reLastName , $lastName))
						{
							$greske[] = 'Wrong input last Name' ;
						}
						if(!preg_match( $reEmail , $email))
						{
							$greske[] = 'Wrong input email' ;
						}
						if(!preg_match( $reUserName , $username))
						{
							$greske[] = 'Wrong input username' ;
						}
						if(!preg_match( $rePassword , $pass))
						{
							$greske[] = 'Wrong input password' ;
						}
						if($pass != $pass2)
						{
							$greske[] = 'Passwords doesn\'t match' ;
						
						}
						
						
						
						
						if(empty($greske)){
							
							$q = "INSERT INTO login VALUES('','".$username."','". md5($pass)."',2,'".$name."','".$lastName."','".$email."')";
							$rez = mysql_query($q, $conn) or die('Query failed');
							
							// for($i = 0; $r = mysql_fetch_array($rez); $i++){
								// echo $r[$i];
							// }
							echo "You are now registred";
							
						}
						else 
						{
							echo '<ul>';
							foreach($greske as $g)
								echo '<li>'.$g.'</li>';
								
							
							echo '</ul>';
						}

			
			
			?>