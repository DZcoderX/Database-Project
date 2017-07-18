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

<!-- title  -->
<h4 style="text-align:center">Update Customer</h4>
<br><br>
<form action="viewHandleCust.php" method="get">

<?php


// Enable error logging:
	error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
	include ('./my_connect1.php');
	$mysqli = get_mysqli_conn();
?>

<div class="container">

<?php
// SQL statement
	$sql = "SELECT a.customer_id "
		. "FROM Customer a";

// Prepared statement, stage 1: prepare
	$stmt = $mysqli->prepare($sql);

// Prepared statement, stage 2: execute
	$stmt->execute();

// Bind result variables
	$stmt->bind_result($customer_id);


/* fetch values */
	echo '<label for="customer_id">Select the Customer you would like to update information for: </label>';
	echo '<select name="customer_id">';
	while ($stmt->fetch())
	{
			printf ('<option value="%d">%s</option>', $customer_id, $customer_id);
	}
	echo '</select><br>';

/* close statement and connection*/

	$stmt->close();
	$mysqli->close();
	?>

<!-- Continue button -->

	<br>
	<button style="height:50px;width:200px;text-align:center"  class="btn waves-effect waves-light darkred" type="submit" >Continue
    <i class="material-icons right">send</i>
  </button>
	</form>
	</form>
</div>

<!-- For front end  -->
<!--Import jQuery before materialize.js-->

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="../js/materialize.min.js"></script>
			<script type="text/javascript">

	 	 $(document).ready(function() {
		 $('select').material_select();});
	</script>

</body>
</html>
