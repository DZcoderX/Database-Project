<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="css/styleView.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
		
		<form method="get" action="./viewHandle.php">
		
			<div class="input-field col s4">
              <input id="custID" name="custID" type="text" class="validate">
              <label for="custID">CustomerID</label>
            </div>
			
			<button class="btn waves-effect waves-light" type="submit" >Submit
    <i class="material-icons right">send</i>
  </button>
		
		
		</form>
	
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>