<h1>Update Customer Information</h1>

<form action="update_customer.php" method="get"/>

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
echo '<input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
echo '<label for="address"> ' . $f_name . 's address is '.$address.'.
<br> Enter the new address you would like to update to: </label>';
echo '<input type="text" name="address" value="'.$address.'"/><br>';

echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
echo '<label for="email">The email address is currently set to '.$email.'.
<br> Enter the new email address you would like to update
  to: </label>';
echo '<input type="text" name="email" value="'.$email.'"/><br>';

echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
echo '<label for="credit_rating"> The most up to date credit score rating is '.$credit_rating.'.
<br> Enter the new credit score if it has been changed: </label>';
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
<input type="submit" value="Update"/>
</br>
</form>
