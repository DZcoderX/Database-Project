<!DOCTYPE html>
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
	      <a href="../welcome.php" style="margin-left:-22% "class="brand-logo">Home</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down right">
	        <li><a href="../add/add.php">Add</a></li>
	      <li><a href="../edit/indexcust.php">Edit</a></li>
	      <li><a href="../delete/indexdelete.php">Delete</a></li>
	      <li><a href="../view/view.php">View</a></li>
	      </ul>
	    </div>
	  </nav>


	<!-- ============ End of the Nav Bar=============-->

<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
include('./my_connect1.php');
$mysqli = get_mysqli_conn();
// SQL statement
$sql = "UPDATE Customer a "
. "SET a.address = ?, "
. " a.email = ?, "
. " a.credit_rating = ? "
. "WHERE a.customer_id = ? ";

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

// (2) Handle GET parameters; aid is the name of the hidden textbox in the previous page
$customer_id = $_GET[customer_id];

$address = $_GET[address];
$email = $_GET[email];
$credit_rating = $_GET[credit_rating];


// (3) "i" for integer, "d" for double, "s" for string, "b" for blob
$stmt->bind_param('ssii',$address,$email,$credit_rating, $customer_id);




// $stmt->execute() function returns boolean indicating success

if ($stmt->execute())
{
echo '<h1 style="text-align:center">Success!</h1>';
echo '<p style="text-align:center">The address has been updated
to ' . $address . ' <br> the email address has been updated to
' .$email . ' <br> the credit score rating has been updated to ' .$credit_rating . '</p><br>';
}
else
{
echo '<h1>You Failed</h1>';
echo 'Execute failed: (' . $stmt->errno . ') ' . $stmt->error;
}
$stmt->close();
$mysqli->close();
?>

<form action="../welcome.php" style="text-align:center">
  <button style="height:30px;width:130px"  class="btn waves-effect waves-light" type="submit" > Home

          </button>
</form>
<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript">

	 $(document).ready(function() {
	$('select').material_select();});
</script>
</body>
</html>
