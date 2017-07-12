<?php
					// Enable error logging: 
						error_reporting(E_ALL ^ E_NOTICE);
						// mysqli connection via user-defined function
						include ('./my_connect.php');
						$mysqli = get_mysqli_conn();
						
						
				  if(isset($_POST['addCust'])){
					  echo "<script type='text/javascript'>alert('help');</script>";
					$customer_ID = addslashes ($_POST['customer_ID']);
					   $first_Name = addslashes ($_POST['first_Name']);
					   $last_name = addslashes ($_POST['last_name']);
					   $email = addslashes ($_POST['email']);
					   $credit_Score = addslashes ($_POST['credit_Score']);
					
					$sql = "INSERT INTO Customers ". "(Customer_Id,F_Name, L_Name,email,gender,B_Day,Credit_Rating) ". "VALUES('$customer_ID','$first_Name',$last_name,$email,$credit_Score NOW())";
					$stmt = mysqli_prepare($sql);
					$stmt->bind_param("isssi", $customer_ID, $first_Name, $last_name, $email, $credit_Score);
					$stmt->execute();
					$stmt->close(); 
					$mysqli->close();
					}else {
				}

				?>