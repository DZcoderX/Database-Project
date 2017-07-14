

<body>
<h1> testing</h1>
<form>
<?php

					
					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect.php');
						
						$mysqli = get_mysqli_conn();
						
						$sql = "SELECT c.F_Name "
					. "FROM Customers c "
					. "WHERE c.CustomerID = ?";
					$stmt = $mysqli->prepare($sql);
						$cID = $_GET['custID'];
					
					  
					echo $cID;
					echo "test";
					
					$stmt->bind_param('s', $cID); 
					$stmt->execute();
					$stmt->bind_result($cID);
					
					
					if ($stmt->fetch()) 
					{ 
					 
					echo '<label for="aname">Update Name for Aircraft' . $cID . ', currently named '.$cID.' to: </label>'; 
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

