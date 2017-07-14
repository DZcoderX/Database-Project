<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="css/styleEdit.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
        
        <form action="handle.php" method="get">
        
     <?php
            
            
            // Enable error logging: 
            error_reporting(E_ALL ^ E_NOTICE);
            // mysqli connection via user-defined function
            include ('./my_connect.php');
            
            $mysqli = get_mysqli_conn();
            
            // SQL statement
            $sql = "SELECT c.F_Name, c.L_Name FROM Customers c ";
            
            
            
            // Prepared statement, stage 1: prepare
            $stmt = $mysqli->prepare($sql);

            // Prepared statement, stage 2: execute
            $stmt->execute();
            
            
            
            // Bind result variables 
            $stmt->bind_result($F_Name, $L_Name); 
            
            
            /* fetch values */ 
            echo '<label for="aid">Pick Promo: </label>'; 
            echo '<select name="aid">'; 
            while ($stmt->fetch()) 
            {
            printf ('<option value="%s">%s</option>', $F_Name, $L_Name); 
            }
            echo '</select><br>'; 

            /* close statement and connection*/ 
            $stmt->close(); 
            $mysqli->close();
            
            
            
            ?>

            <br>
            <input type="submit" value="Continue"/>


        
        </form>
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
        
        
<!--        extra js code -->
            
        
        
    </body>
  </html>