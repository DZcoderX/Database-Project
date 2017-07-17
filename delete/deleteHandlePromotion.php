<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <link type="text/css" rel="stylesheet" href="../css/styleWelcome.css"  media="screen,projection"/>

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

     <!-- <form action="indexdelete.php">
       <button style="height:30px;width:130px;margin-left:1%;margin-top:1%"
        class="btn waves-effect waves-light" type="submit" > back

               </button>
     </form> -->
<div class="container">
<form action="delete_promotion.php" method="get">
<h4 style="text-align:center">Delete Promotion</h4><br>
    <table class="striped bordered centered">
    <thead>
       <tr><th style="text-align:center;">Promo ID</th>
         <th style="text-align:center;">Rebate</th>
         <th style="text-align:center;">Start Date</th>
         <th style="text-align:center;">End Date</th>
         <th style="text-align:center;">Item ID </th></tr>
    </thead>
    <tbody>

<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function

include('./my_connect1.php');
$mysqli = get_mysqli_conn();

// SQL statement
// $sql = "DELETE"
// . "FROM Promotion a "
// . "WHERE a.promo_id = ?";

$sql = "SELECT  a.promo_id, a.rebate, a.start_date, a.end_date, a.item_id "
. "FROM Promotion a "
. "WHERE a.promo_id = ?";


//$sql = "DELETE FROM Promotion WHERE promo_id= ?";

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

// Prepared statement, stage 2: bind and execute
$promo_id = $_GET['promo_id'];


// "i" for integer, "d" for double, "s" for string, "b" for blob
$stmt->bind_param('i', $promo_id);
$stmt->execute();

// Bind result variables
$stmt->bind_result($promo_id,$rebate,$start_date,$end_date,$item_id);

echo '<br><br><input type="hidden" name="promo_id" value="' . $promo_id   . '"/>';

/* fetch values */
if ($stmt->fetch())
{
        printf ('<tr><td>%s</td>', $promo_id);
        printf ('<td>%s</td>',$rebate);
        printf('<td>%s</td>',$start_date);
        printf('<td>%s</td>',$end_date);
        printf('<td>%s</td></tr>',$item_id);

// echo '<input type="text" name="address" value="'.$address.'"/><br>';

// echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
// echo '<label for="email">The email address is currently set to '.$email.'.
// <br> Enter the new email address you would like to update
//   to: </label>';
// echo '<input type="text" name="email" value="'.$email.'"/><br>';
//
// echo '<br><br><input type="hidden" name="customer_id" value="' . $customer_id . '"/>';
// echo '<label for="credit_rating"> The most up to date credit score rating is '.$credit_rating.'.
// <br> Enter the new credit score if it has been changed: </label>';
// echo '<input type="text" name="credit_rating" value="'.$credit_rating.'"/><br>';
}
else
{
echo '<label for="promo_id">Record not found</label>';

}
/* close statement and connection*/
$stmt->close();
$mysqli->close();
?>
</tbody>
</table>
<br>
<?php
echo '<br><br><label for="promo_id" ><font size="3"><p style="margin-left:35%">Are you sure you would
      like to delete this promotion? </p></font></label><br><br>';
 ?>

<!-- <input type="submit" value="Update"/> -->
<button style="height:50px;width:200px;margin-left:41%"  class="btn waves-effect waves-light darkred" type="submit" >submit
            <i class="material-icons right">send</i>
        </button>


</form>


</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="../js/materialize.min.js"></script>
     <script type="text/javascript">

 	 $(document).ready(function() {
 	$('select').material_select();});
 </script>
     <!-- <p>
     <a href="indexdelete.php">Return to list</a>
     </p> -->
</body>
</html>
