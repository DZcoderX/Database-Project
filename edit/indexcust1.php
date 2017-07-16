<body>
<h1>Select the Customer you would like to update information for</h1>

<form action="viewHandleCust.php" method="get">

<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
include ('./my_connect1.php');
$mysqli = get_mysqli_conn();
?>

<?php
// SQL statement
$sql = "SELECT a.customer_id, a.address, a.email, a.credit_rating "
	. "FROM Customer a";

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

// Prepared statement, stage 2: execute
$stmt->execute();

// Bind result variables
$stmt->bind_result($customer_id, $address, $email, $credit_rating);


/* fetch values */
echo '<label for="customer_id">Pick Customer: </label>';
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

<br>
<input type="submit" value="Continue"/>
</br>
</form>
</body>
