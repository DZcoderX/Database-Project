<?php
					// Enable error logging: 
						error_reporting(E_ALL ^ E_NOTICE);
						// mysqli connection via user-defined function
						include ('./my_connect1.php');
						
						$mysqli = get_mysqli_conn();
						
						

                        $customer_ID = $_GET['customer_id'];
					   $first_Name = $_GET['f_name'];
					   $last_name = $_GET['l_name'];
					   $email = $_GET['email'];
					   $credit_rating = $_GET['credit_rating'];
						 $Gender = $_GET['gender'];
						 $Address = $_GET['address'];
						 $Birthday = $_GET['b_day'];
//					   $customer_ID = $_GET['customer_ID'];
//					   $first_Name = $_GET['first_Name'];
//					   $last_name = $_GET['last_name'];
//					   $email = $_GET['email'];
//					   $credit_Score = $_GET['credit_Score'];
					   
					   
					   
						
						
					$sql = "INSERT INTO Customer "
					. "(customer_id,f_name,l_name,gender,b_day,address,email,credit_rating)"
					. "VALUES(?,?,?,?,?,?,?,?)";
					

					$stmt = $mysqli->prepare($sql);


					$stmt->bind_param("issssssi", $customer_ID, $first_Name, $last_name, $Gender, $Birthday, $Address, $email, $credit_rating);


					$stmt->execute();
					
//					if ($stmt->execute()){
//						echo"success";
//					}else {
//						echo"error";
//					}
//						
					
					
					
					$stmt->close(); 
					$mysqli->close();
					

				?>