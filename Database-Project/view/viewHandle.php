<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
       <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

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
        <tr><th style="text-align:center;">Number of Dependents</th>
          <th style="text-align:center;">Start Date</th>
          <th style="text-align:center;">End Date </th>
         <th style="text-align:center;">Total Sales</th></tr>
      </thead>
      <tbody>
<?php

					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect1.php');

						$mysqli = get_mysqli_conn();

						$sql = "SELECT Sum(T.sub_total) FROM Transactions T JOIN Customer "
                        . "ON cust_id=customer_id where "
                        . "(SELECT Count(*) "
                        . "FROM Dependent "
                        . "WHERE Dependent.customer_id = Customer.customer_id) = ? "
                        . "AND T.trans_date BETWEEN ? AND ? ";


					$stmt = $mysqli->prepare($sql);

                        $sDate = $_GET['startDate'];
                        $eDate = $_GET['endDate'];
                        $num = $_GET['number'];

//                    echo $sDate . $eDate . $num;
					$stmt->bind_param('iss', $num, $sDate, $eDate);
//                    echo $stmt;
					$stmt->execute();
					$stmt->bind_result($total);



                    while($stmt->fetch()){
                      printf('<tr><td>%s</td>',$num);
                      printf('<td>%s</td>',$sDate);
                      printf('<td>%s</td>',$eDate);
                      printf('<td>%s</td></tr>',$total);
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

    <script type="text/javascript">

        $( document ).ready(function{
               $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
                            })



    </script>

</body>

</html>
