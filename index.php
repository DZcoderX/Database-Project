<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Food Chain Manager</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
<!--    <link href="styles1.css" rel="stylesheet" type="text/css">-->
    
    
    
</head>
<body>
    
    
  <nav role="navigation">
    <div class="nav-wrapper container">
      <a href="../index.php" class="brand-logo">Welcome Danial Betres</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down right">
        
      <li><a href="../view/view.php">Help</a></li>
      </ul>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center text-lighten-2">Welcome to the Food-Chain Management System!</h1>
        
          
        <div class="row center">
          <a class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

<!--============================================== -->
    <footer class="page-footer red">
  <div class="container">
    <div class="section">        
        <br>
      <!--   Icon Section   -->
      <div class="row">
          
        <div class="space"></div>
          <div class="col s12 m6 l3">
              
                <a class="waves-effect waves-light btn-large orange" href="./add/add.php"><i class="material-icons right">add</i>
                    Add
                  </a>
         </div>
          <div class="col s12 m6 l3">
              
              <form action="./edit/indexcust.php" method="get">
                <button class="waves-effect waves-light btn-large orange" type="submit" ><i class="material-icons right">edit</i>Edit</button>
                 </form>
<!--
              <form action="./edit/edit.php" method="get">
                <button class="waves-effect waves-light btn-large orange" type="submit" ><i class="material-icons right">edit</i>Edit</button>
                 </form>
-->
         </div>
         <div class="col s12 m6 l3">
                 
                <a class="waves-effect waves-light btn-large orange" href="./delete/delete.php"><i class="material-icons right">delete</i>Delete</a>
         </div>
         <div class="col s12 m6 l3">
                 
                  <a class="waves-effect waves-light btn-large orange" href="./view/view.php"><i class="material-icons right">visibility</i>Find</a>
          </div>
          </div>
          <div class="space"></div>
      
    </div>
  </div>
        
    </footer>
<!--==============================================-->

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">

      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

    
<!--    3nd content area-->
    <footer class="page-footer red">
  <div class="container">
    <div class="section" >

      
			<div class="carousel">
			<a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
			<a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
			<a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
			<a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
			<a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
		  </div>

		

    </div>
  </div>
      </footer>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">

    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

    
  <footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
          
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by Jon, Danial, and David
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  
  $(document).ready(function(){
      $('.carousel').carousel();
    });
  
  $('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
  </script>

  </body>
</html>
