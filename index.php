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
    
    

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center text-lighten-2">Welcome! </h1>
        
             <div class="space"></div>
          
        <br>
        <br>
        
      <!--   Icon Section   -->
      <div class="row center">
          
        
          
          <div class="col s8 m6 l6">
             
                <a class="waves-effect waves-light btn-large darkred" href="./login.php"><i class="material-icons right">edit</i>
                    Login
                  </a>
         </div>
          <div class="col s8 m6 l6">
              
              <a class="waves-effect waves-light btn-large darkred" href=""><i class="material-icons right">add</i>
                    Create Account
                  </a>

         </div>
        
          </div>
<!--          <div class="space"></div>-->

        <br><br>

      </div>
    </div>
      <div class="container" row="center">
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
          </div>
  </div>

<!--============================================== -->
    
 
    
<!--==============================================-->

 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<!--    3nd content area-->




    
 
    
  <footer class="page-footer darkred">
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
