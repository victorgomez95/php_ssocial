<!-- <?php
extract($_GET);
echo "<script>alert('$mensaje');</script>";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>BSGS</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Business Strategy Game Simulation</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>

        <div class="row center">
          <h2 class="header center teal-text text-lighten-2">Menu Principal</h2>
        </div>

      </div>
    </div>
    <div class="parallax"><img src="img/imagen11.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
          <a href="personal.html">
						<h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Pesonal</h5>
					</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
						<a href="publicidad.php">
							<h2 class="center brown-text"><i class="material-icons">thumb_up</i></h2>
							<h5 class="center">Publicidad</h5>
						</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
						<a href="#">
	            <h2 class="center brown-text"><i class="material-icons">credit_card</i></h2>
	            <h5 class="center">Ventas</h5>
						</a>
          </div>
        </div>
      </div>

    </div>
  </div>







  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Upemor</h5>
          <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Otros</h5>
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
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
