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
    </head>

    <body>
		
		<div class="carousel carousel-slider center" data-indicators="true">
		
		<div class="carousel-fixed-item center">
		  <a class="btn waves-effect white grey-text darken-text-2">button</a>
		</div>
		
		<div class="carousel-item red white-text" href="#one!">
		  <h2>Find 1</h2>
		  <p class="white-text">Fine store sales for a given time interval</p>
            
            <a class="waves-effect waves-light btn-large" href="./view1.php"><i class="material-icons left">cloud</i>button</a>
		</div>
		<div class="carousel-item amber white-text" href="#two!">
		  <h2>Find 2</h2>
		  <p class="white-text">Fine customers with least dependance.</p>
            
            
		  <a class="waves-effect waves-light btn-large" href="./view2.php"><i class="material-icons left">cloud</i>button</a>
		  
		</div>
		<div class="carousel-item green white-text" href="#three!">
		  <h2>PLACE HOLDER </h2>
		  <p class="white-text">PLACE HOLDER</p>
            
		  <a class="waves-effect waves-light btn-large" href="./view3.php"><i class="material-icons left" >cloud</i>button</a>
			
            
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
    setTimeout(autoplay, 6000);
}
		</script>
    </body>
  </html>