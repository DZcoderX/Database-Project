<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

       <link type="text/css" rel="stylesheet" href="../css/styleWelcome.css"  media="screen,projection"/>
      <style>
         div {
            width : 200px;
            height : 200px;
         }
      </style>
   </head>



<body>

    <!-- =============This is the nav bar===========-->
<nav role="navigation" class="darkred">
    <div class="nav-wrapper container">
      <a href="../welcome.php" class="brand-logo">Home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down right">
        <li><a href="../add/add.php">Add</a></li>
      <li><a href="../edit/indexcust.php">Edit</a></li>
      <li><a href="../delete/indexdelete.php">Delete</a></li>
      <li><a href="../view/viewdemo.php">View</a></li>
      </ul>
    </div>
  </nav>


<!-- ============ End of the Nav Bar=============-->
    <div class="container">
    <form>

        <h3 style="text-align:center;">Data Analysis</h3>
      <table class="striped bordered centered">
      <thead>
         <tr><th style="text-align:center;">Promo ID</th><th style="text-align:center;">Rebate</th><th style="text-align:center;">Item ID</th>
          <th style="text-align:center;">Item Name</th>
          <th style="text-align:center;">Total Spent</th>
          </tr>
      </thead>
      <tbody>

<?php

					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect1.php');

						$mysqli = get_mysqli_conn();

                        $sql = "select p.promo_id, p.rebate, p.item_id, i.name, sum(p.rebate*a.price) as `total spent` "
                        . "from Promotion p inner join Includes a on a.item_id=p.item_id "
                        . "inner join Item i on i.item_id=p.item_id "
                        . "where exists(select i.item_id from Item i where i.item_id=p.item_id and i.brand= ? ) "
                        . "group by promo_id";

					$stmt = $mysqli->prepare($sql);
//						$cID = $_GET['custID'];
//					    $storeName = $_GET['storeName'];
//                        $sDate = $_GET['startDate'];
//                        $eDate = $_GET['endDate'];
                        $brandName = $_GET['brandName'];




                $stmt->bind_param('s', $brandName);
//          echo $sql;
                $stmt->execute();
                $stmt->bind_result($promoID, $promoRebate, $promoItemID, $itemName, $total);



                // echo $promoID . $promoRebate, $promoItemID . $itemName . $total;

                    while($stmt->fetch()){
                        printf ('<tr><td>%s</td>', $promoID);
                        printf ('<td>%s</td>', $promoRebate);
                        printf ('<td>%s</td>', $promoItemID);
                        printf ('<td>%s</td>', $itemName);
                        printf ('<td>%s</td></tr>', $total);
                    }

					$stmt->close();
					$mysqli->close();

				?>

          </tbody>
      </table>
    </form>
    </div>
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

</body>
</html>
