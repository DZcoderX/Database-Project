<!-- 
Find the sum of sales for each store within a given time interval

-->

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
						
     
                    $sql = "SELECT T.store_id, S.store_name, Sum(T.sub_total) "
                    . "FROM (Transactions AS T JOIN Stores AS S ON T.store_id = S.store_id) "
                    . "WHERE T.trans_date >= ? AND T.trans_date <= ? "
                    . "GROUP BY T.store_id";
                    
					$stmt = $mysqli->prepare($sql);

					    $sDate = $_GET['startDate'];
                        $eDate = $_GET['endDate'];
					  

					$stmt->bind_param('ss', $sDate, $eDate); 
 
					$stmt->execute();
					$stmt->bind_result($TransStoreID,$storeName,$total);
					
//                    echo $TransStoreID;
//                    echo $storeName;
//                    echo $total;
                  
//                    while($stmt->fetch()){
//                        echo '<h1>TransactionID: '.$TransStoreID.'</h1>';
//                    }
//				
//					while ($stmt->fetch()) 
//					{ 
//					echo '<h1>TransactionID:' . $TransStoreID . ', Store Name: '.$storeName.' Total: '.$total.'</h1>'; 
//					} 
//					else
//					{
//					echo '<label for="aname">Record not found</label>'; 
//					}
//					
//					
					$stmt->close(); 
					$mysqli->close();
						
					

				?>
				</form>
				</body>

