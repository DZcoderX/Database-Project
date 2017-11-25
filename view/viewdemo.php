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

         <link href="../css/stylesView.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>

		<div class="carousel carousel-slider center" data-indicators="true">

		<div class="carousel-fixed-item center">
		  <a class="btn waves-effect white grey-text darken-text-2" href="../welcome.php">Home</a>
		</div>

		<div class="carousel-item red white-text" href="#one!">
		  <h1>Find 1</h1>
		  <p class="white-text">Find the total sales from customers with X dependent(s)
          within a time period.</p>

            <a class="waves-effect waves-light btn-large darkred"  href="./view1.php"><i class="material-icons left">cloud</i>Find</a>
		</div>
		<div class="carousel-item purple white-text" href="#two!">
		  <h1>Find 2</h1>
		  <p class="white-text">Find the sum of sales for each store within a given time interval.</p>


		  <a class="waves-effect waves-light btn-large darkred" href="./view2.php"><i class="material-icons left">cloud</i>Find</a>

		</div>
		<div class="carousel-item orange white-text" href="#three!">
		  <h1>Find 3</h1>
		  <p class="white-text">Find all items that have X number of promotions in a given time.</p>

		  <a class="waves-effect waves-light btn-large darkred" href="./view3.php"><i class="material-icons left" >cloud</i>Find</a>


		</div>

            <div class="carousel-item pink white-text" href="#three!">
		  <h1>Find 4</h1>
		  <p class="white-text">Find all the promotions offered by a specific brand and return the total rebate amount given back to customers.</p>

		  <a class="waves-effect waves-light btn-large darkred" href="./view4.php"><i class="material-icons left" >cloud</i>Find</a>


		</div>
	  </div>

<!--
		<form class="col s12 m6 offset-m3" >

		<div class="input-field col s12">



		</div>


		  <div class="input-field col s12">
		  <a class="waves-effect waves-light btn-large" href="./view2.php"><i class="material-icons left">cloud</i>button</a>
		  </div>

		<div class="input-field col s12">
		  <a class="waves-effect waves-light btn-large" href="./view3.php"><i class="material-icons left" >cloud</i>button</a>
			</div>
		</form>
-->



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
      $('.carousel').carousel();
		});
		$('.carousel.carousel-slider').carousel({fullWidth: true});

		$('.carousel').carousel({
    padding: 200
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 15000);
}
		</script>
    </body>
  </html>
