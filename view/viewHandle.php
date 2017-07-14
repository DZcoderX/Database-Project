

<body>
<h1> testing</h1>
<form>
<?php

					
					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect1.php');
						
						$mysqli = get_mysqli_conn();
						
						$sql = "SELECT Sum(T.sub_total) "
                        . "FROM Transactions T JOIN Customer ON cust_id=customer_id "
                        . "WHERE (SELECT Count(*) "
                        . "	FROM Dependent "
                        . "	WHERE Dependent.customer_id = Customer.customer_id AND "
                        . "	T.trans_date >= ? AND "
                        . "	T.trans_date <= ?) >= 1";
    
					$stmt = $mysqli->prepare($sql);
//						$cID = $_GET['custID'];
					    $sDate = $_GET['startDate'];
                        $eDate = $_GET['endDate'];
					  
//					echo $cID;
                    echo $sDate;
                    echo $eDate;
					
					
					$stmt->bind_param('ss', $sDate, $eDate); 
					$stmt->execute();
					$stmt->bind_result($total);
					
                   
                    
					
					if ($stmt->fetch()) 
					{ 
					 
					echo '<label for="aname">Update Name for Aircraft' . $total . ', currently named '.$total.' to: </label>'; 
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

