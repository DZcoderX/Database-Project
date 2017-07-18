        <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	  <link href="../css/stylesView.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/stylesAdd.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
      <li><a href="../view/view.php">View</a></li>
      </ul>
    </div>
  </nav>


<!-- ============ End of the Nav Bar=============-->

        <div style="margin-top: 50px; font-size:40px"class="container row center">

<?php
					// Enable error logging:
						error_reporting(E_ALL ^ E_NOTICE);
						// mysqli connection via user-defined function
						include ('./my_connect1.php');

						$mysqli = get_mysqli_conn();

// (2) Handle GET parameters
             $customer_ID = $_GET['customer_id'];
					   $first_Name = $_GET['f_name'];
					   $last_name = $_GET['l_name'];
					   $email = $_GET['email'];
					   $credit_rating = $_GET['credit_rating'];
						 $Gender = $_GET['gender'];
						 $Address = $_GET['address'];
						 $Birthday = $_GET['b_day'];
             $member = $_GET['member'];



//sql statement

					$sql = "INSERT INTO Customer "
					. "(customer_id,f_name,l_name,gender,b_day,address,email,credit_rating)"
					. "VALUES(?,?,?,?,?,?,?,?)";



          if($member != null){

            $sql2 = "INSERT INTO Member "
  					. "(customer_id)"
  					. "VALUES(?)";
              // Prepared statement, stage 1: prepare

            $stmt2 = $mysqli->prepare($sql2);
            $stmt2->bind_param("i", $customer_ID);
              // $stmt->execute() function returns boolean indicating success
            if ($stmt2->execute()){
  						echo"success";
  					}else {
  						echo"error";
  					}

          } else {
            $sql2 = "INSERT INTO Non_Member "
  					. "(customer_id)"
  					. "VALUES(?)";
            $stmt2 = $mysqli->prepare($sql2);
            $stmt2->bind_param("i", $customer_ID);
            if ($stmt2->execute()){
  						echo"success";
  					}else {
  						echo"error";
  					}
          }

					$stmt = $mysqli->prepare($sql);


					$stmt->bind_param("issssssi", $customer_ID, $first_Name, $last_name, $Gender, $Birthday, $Address, $email, $credit_rating);


//					$stmt->execute();

					if ($stmt->execute()){
						echo"success";
					}else {
						echo"error";
					}




					$stmt->close();
					$mysqli->close();


				?>
            </div>
              <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

	  <script type="text/javascript">
		 $(document).ready(function() {
    $('select').material_select();
  });

	  </script>



        <script type="text/javascript">

        $("#txtstartdate").datepicker({

            minDate: '01/01/2017',
          onSelect: function(date) {
            $("#txtenddate").datepicker('option', 'minDate', date);
          }
        });

        $("#txtenddate").datepicker({});


        </script>
    </body>
  </html>
