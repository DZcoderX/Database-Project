<body>

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
echo '<h1>Success!</h1>';
echo '<p>The address has been updated
to ' . $address . ' <br> the email address has been updated to
' .$email . ' <br> the credit score rating has been updated to ' .$credit_rating . '</p>';
}
else
{
echo '<h1>You Failed</h1>';
echo 'Execute failed: (' . $stmt->errno . ') ' . $stmt->error;
}
$stmt->close();
$mysqli->close();
?>

<p>
<a href="index.php">Return to list</a>
</p>
</body>
