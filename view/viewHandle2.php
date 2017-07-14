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
						
						$sql = "SELECT T.store_id, S.store_name, Sum(T.sub_total)"
                        . "FROM (Transactions AS T JOIN Stores AS S ON T.store_id = S.store_id)"
                        . "WHERE T.trans_date >= ? "
                        . "GROUP BY T.store_id";
    
					$stmt = $mysqli->prepare($sql);
//						$cID = $_GET['custID'];
//					    $storeName = $_GET['storeName'];
                        $Date = $_GET['date'];
					  
//					echo $cID;
//                    echo $sDate;
//                    echo $eDate;
//					
					
                    
					$stmt->bind_param('s', $Date); 
					$stmt->execute();
					$stmt->bind_result($storeID,$storeName,$total);
				    
                    if ($stmt->fetch()){
                        echo $storeID;
                        echo '<br>';
                        echo $storeName;
                        echo '<br>';
                        echo $total;
                        echo '<br>';
                    } 
                    while($stmt->fetch()){
                        printf ('<label>%s</label>', $store);
                        printf ('<label>%s</label',$storeName);
                        printf('<label>%s</label>',$total);
                    }
//                        
//                    while($stmt->fetch()){
//                        echo $storeID;
//                        echo '<br>';
//                        echo $storeName;
//                        echo '<br>';
//                        echo $total;
//                        echo '<br>';
//                    }else{
//                        echo '<label for="aname">Record not found</label>';
//                    }
//					if ($stmt->fetch()) 
//					{ 
//					 
//					echo '<label for="aname">Update Name for Aircraft' . $total . ', currently named '.$total.' to: </label>'; 
//					} 
//					else
//					{
//					echo '<label for="aname">Record not found</label>'; 
//					}
					$stmt->close(); 
					$mysqli->close();
					
				?>
				</form>
				</body>

