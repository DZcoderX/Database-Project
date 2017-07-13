<body>
<h1> testing</h1>
<form>
<?php

					
					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect.php');
						
						$mysqli = get_mysqli_conn();
						
						
						$cID = $_GET['custID'];
					
					  
					$sql = "SELECT c.F_Name "
					. "FROM Customers c "
					. "WHERE c.CustomerID = ?";
					
					
					$stmt = mysqli_prepare($sql);
					echo $cID;
					echo "test";
					
					$stmt->bind_param('s', $cID); 
					$stmt->execute();
					$stmt->bind_result($cID);
					
					
					if ($stmt->fetch()) 
					{ 
					echo '<input type="hidden" name="aid" value="' . $customerID . '"/>'; 
					echo '<label for="aname">Update Name for Aircraft #' . $customerID . ', currently named '.$aircraft_name.' to: </label>'; 
					echo '<input type="text" name="aname" value="'.$customerID.'"/><br>'; 
					} 
					else
					{
					echo '<label for="aname">Record not found</label>'; 
					}
					
					
					$stmt->close(); 
					$mysqli->close();
						
					

				?>
				</form>
				</body>