<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Food Chain Manager</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styleWelcome.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<!--    <link href="styles1.css" rel="stylesheet" type="text/css">-->



</head>
<body>


  <nav role="navigation" class="darkred">
    <div class="nav-wrapper container">
      <a href="./welcome.php" class="brand-logo">Welcome Danial Betres</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down right">

      <li><a href="../view/view.php"></a>Grocertrack</li>
      </ul>
    </div>
  </nav>



<!--============================================== -->
    <br>
    <br>
    <br>
    <div class="row center">
    <div class="container">
        <img src="https://i.gyazo.com/aecb04bc01c2309b65beda30a3c75fe7.png">


  </div>
        </div>

    <div class="row center">
  <div class="container">
    <div class="section">
        <br>
      <!--   Icon Section   -->
      <div class="row">

        <div class="space"></div>
          <div class="col s12 m6 l3">

                <a class="waves-effect waves-light btn-large darkred" href="./add/add.php"><i class="material-icons right">add</i>
                    Add
                  </a>
         </div>
          <div class="col s12 m6 l3">

              <form action="./edit/indexcust.php" method="get">
                <button class="waves-effect waves-light btn-large darkred" type="submit" ><i class="material-icons right">edit</i>Edit</button>
                 </form>
<!--
              <form action="./edit/edit.php" method="get">
                <button class="waves-effect waves-light btn-large orange" type="submit" ><i class="material-icons right">edit</i>Edit</button>
                 </form>
-->
         </div>
         <div class="col s12 m6 l3">

                <a class="waves-effect waves-light btn-large darkred" href="./delete/indexdelete.php"><i class="material-icons right">delete</i>Delete</a>
         </div>
         <div class="col s12 m6 l3">

                  <a class="waves-effect waves-light btn-large darkred" href="./view/viewdemo.php"><i class="material-icons right">visibility</i>Find</a>
          </div>
          </div>
          <div class="space"></div>

    </div>
  </div>
    </div>
<!--==============================================-->




<!--    3nd content area-->
<div class="color">
  <div class="container">
    <div class="section"  >


			<div class="carousel">
			<a class="carousel-item" href="#one!"><img style='border:3px solid #000000' src="https://i.imgur.com/UrUL7zj.png"></a>
			<a class="carousel-item" href="#two!"><img style='border:3px solid #000000' src="https://i.imgur.com/V0SIb1a.png"></a>
			<a class="carousel-item" href="#three!"><img style='border:3px solid #000000' src="https://i.imgur.com/pIQDcmS.png"></a>
			<a class="carousel-item" href="#four!"><img style='border:3px solid #000000' src="https://i.imgur.com/L9ZYuYC.jpg"></a>
			<a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/9lMhEpL.png"></a><a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/I2uf3Z5.jpg"></a><a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/vkPJuZn.png"></a><a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/Sew3dIH.png"></a><a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/DX5odbw.jpg"></a><a class="carousel-item" href="#five!"><img style='border:3px solid #000000' src="https://i.imgur.com/KlY2kK0.jpg"></a>
		  </div>



    </div>
  </div>
    </div>




  <footer class="page-footer darkred">
    <div class="container">
      <div class="row">
        
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


       
        

    
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by Jon, Danial, and Rui. All Rights Reserved.
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
