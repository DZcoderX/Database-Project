<?php
					// Enable error logging: 
						error_reporting(E_ALL ^ E_NOTICE);
						// mysqli connection via user-defined function
						include ('./my_connect.php');
						
						$mysqli = get_mysqli_conn();
						
						echo "Test";
						
					   $customer_ID = $_GET['customer_ID'];
					   $first_Name = $_GET['first_Name'];
					   $last_name = $_GET['last_name'];
					   $email = $_GET['email'];
					   $credit_Score = $_GET['credit_Score'];
					   
					   
					   echo "id:   ".$customer_ID . "  fname:   ".
					   $first_Name . "  last name:  " . $last_name .
						"  email:  " . $email . "  creditscore:  " . $credit_Score;
					   
						
						
					$sql = "INSERT INTO Customers "
					. "(CustomerID,F_Name,L_Name,Email,CreditScore)"
					. "VALUES(?,?,?,?,?)";
					
					
					$stmt = mysqli_prepare($sql);
					$stmt->bind_param("sssss", $customer_ID, $first_Name, $last_name, $email, $credit_Score);
					$stmt->execute();
					
					if ($stmt->execute()){
						echo"success";
					}else {
						echo"error";
					}
						
					;
					
					
					$stmt->close(); 
					$mysqli->close();
					

				?>