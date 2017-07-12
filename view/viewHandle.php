<body>

<?php
					// Enable error logging: 
						error_reporting(E_ALL ^ E_NOTICE);
						// mysqli connection via user-defined function
						include ('./my_connect.php');
						
						$mysqli = get_mysqli_conn();
						
						echo "Test";
						
					  
						
					$sql = "SELECT c.F_Name "
					. "FROM Customers c "
					. "WHERE c.CustomerID = ?";
					
					
					$stmt = mysqli_prepare($sql);
					
					$cID = $_GET['custID'];
					
					$stmt->bind_param('s', $cID); 
					$stmt->execute();
					$stmt->bind_result($);
					
					
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
				
				</body>