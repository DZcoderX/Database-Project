indexdelete.php<!DOCTYPE html>
<html>
	 <head>
		 <!--Import Google Icon Font-->
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <!--Import materialize.css-->
		 <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		 <link type="text/css" rel="stylesheet" href="../css/styleWelcome.css"  media="screen,projection"/>

		 <!--Let browser know website is optimized for mobile-->
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

		 <!-- <header>
			 <form action="../welcome.php" style="text-align:left">
			   <button style="height:30px;width:130px"  class="btn waves-effect waves-light" type="submit" > Home

			           </button>
			 </form>
		 </header> -->
<h1 style="text-align:center">Update Customer Information</h1>
<br>

<form action="update_customer.php" method="get"/>
<div class="container">

<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
include('./my_connect1.php');
$mysqli = get_mysqli_conn();

// SQL statement
$sql = "SELECT a.customer_id, a.address, a.email, a.credit_rating, a.f_name "
. "FROM Customer a "
. "WHERE a.customer_id = ?";

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

// Prepared statement, stage 2: bind and execute
$customer_id = $_GET['customer_id'];


// "i" for integer, "d" for double, "s" for string, "b" for blob
$stmt->bind_param('i', $customer_id);
$stmt->execute();

// Bind result variables
$stmt->bind_result($customer_id, $address, $email, $credit_rating, $f_name);

/* fetch values */

if ($stmt->fetch())
{
echo '<p><input type="hidden" name="customer_id" value="' . $customer_id . '"/></p>';
echo '<p><label for="address"> ' . $f_name . 's address is '.$address.'.
<br> Enter the new address you would like to update to: </label></p>';
echo '<input type="text" name="address" value="'.$address.'"/><br>';

echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
echo '<p><label for="email">The email address is currently set to '.$email.'.
<br> Enter the new email address you would like to update
  to: </label></p>';
echo '<input type="text" name="email" value="'.$email.'"/><br>';

echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
echo '<p><label for="credit_rating"> The most up to date credit score rating is '.$credit_rating.'.
<br> Enter the new credit score if it has been changed: </label><p>';
echo '<input type="text" name="credit_rating" value="'.$credit_rating.'"/><br>';
}

else
{
echo '<label for="address">Record not found</label>';
}
/* close statement and connection*/
$stmt->close();
$mysqli->close();
?>
<br>
<button style="height:50px;width:200px"  class="btn waves-effect waves-light darkred" type="submit" >Confirm
            <i class="material-icons right">send</i>
        </button>
</form>
</div>
<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript">

	 $(document).ready(function() {
	$('select').material_select();});
</script>
</body>
</html>
