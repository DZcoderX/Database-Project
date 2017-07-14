<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">      
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>             
      <style>
         div {
            width : 200px;	
            height : 200px;				
         } 
      </style>
   </head>



<body>

    
    <div class="container">
    <form>
        
        <h3 style="text-align:center;">Data Analysis</h3>
      <table class="striped bordered centered">
      <thead>
         <tr><th style="text-align:center;">Item ID</th><th style="text-align:center;">Item name</th><th style="text-align:center;">Number of Promo</th></tr>
      </thead>
      <tbody>
         
<?php
		
					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect1.php');
						
						$mysqli = get_mysqli_conn();

                        $sql = "SELECT I.item_id, I.name, COUNT(*) "
                        . "FROM Item I Join Promotion P ON I.item_id = P.item_id "
                        . "WHERE P.start_date >= ? AND P.end_date<= ? "
                        . "GROUP BY I.item_id, I.name "
                        . "HAVING COUNT(*) >= ?";
    
					$stmt = $mysqli->prepare($sql);
//						$cID = $_GET['custID'];
//					    $storeName = $_GET['storeName'];
                        $sDate = $_GET['startDate'];
                        $eDate = $_GET['endDate'];
                        $numPromo = $_GET['numPromo'];
   				
					
                    
                $stmt->bind_param('sss', $sDate, $eDate, $numPromo); 
                $stmt->execute();
                $stmt->bind_result($itemID,$itemName,$count);


				    

                    while($stmt->fetch()){
                        printf ('<tr><td>%s</td>', $itemID);
                        printf ('<td>%s</td>',$itemName);
                        printf('<td>%s</td></tr>',$count);
                       
                    }

					$stmt->close(); 
					$mysqli->close();
					
				?>
          
          </tbody>
      </table>
    </form>
    </div>
</body>

