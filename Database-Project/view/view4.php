


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
        <link type="text/css" rel="stylesheet" href="../css/styleWelcome.css"  media="screen,projection"/>
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
      <li><a href="../view/viewdemo.php">View</a></li>
      </ul>
    </div>
  </nav>


<!-- ============ End of the Nav Bar=============-->


	<form method="get" action="./viewHandle4.php" class="col s12">
<br>
<br>
<br>
	<div class="container">
		<select name="brandName">
		 <option value="" disabled selected>Brand Name</option>
		  <option value="Dole">Dole</option>
		  <option value="Del Monte">Del Monte
</option>
		  <option value="Jon's Farm">Jon's Farm
</option>
		  <option value="Freshi">Freshi</option>
		  <option value="Organic Plus">Organic Plus
</option>
		  <option value="Betres Market">Betres Market
</option>
		  <option value="Food By Rui">Food By Rui
</option>
		  <option value="Great Value">Great Value
</option>
		  <option value="J&D Foods">J&D Foods
</option>
		  <option value="Keystone">Keystone</option>
		  <option value="Selection">Selection</option>
		  <option value="Pineridge Farms
">Pineridge Farms
</option>
		  <option value="Chuck's Bay">Chuck's Bay
</option>
		  <option value="No Name">No Name
</option>
		  <option value="Tropicana">Tropicana</option>
		  <option value="Wonder">Wonder</option>
		  <option value="DiGiorno">DiGiorno</option>
		  <option value="Kraft">Kraft</option>
		  <option value="Chinko Market">Chinko Market
</option>
		  <option value="Frito-Lay">Frito-Lay</option>
		  <option value="Hunky Monkey">Hunky Monkey
</option>
		  <option value="Chapmans">Chapmans</option>
		  <option value="Quaker">Quaker</option>
		  <option value="Kellogg's">Kellogg's</option>

		</select>
		<label>Materialize Select</label>
	  </div>
		<br>
        <br>
        <br>



		<div class="container">
<!--
			<div class="input-field col s4">
              <input id="custID" name="custID" type="text" class="validate">
              <label for="custID">CustomerID</label>
            </div>
-->

			<button class="btn waves-effect waves-light darkred" type="submit" >Submit
            <i class="material-icons right">send</i>
        </button>

            </div>


		</form>

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
