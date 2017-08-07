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
        <li><a href="menu_principal.php">Menu Principal</a></li>
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
        <div class="row center">
          <h1 class="header center teal-text text-lighten-2">Datos de la Compañia</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/imagen11.jpg" alt="Unsplashed background img 1"></div>
  </div>



  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">

					<div class="col m6">
						<h4>Registro de empresa</h4>
						<form method="post" action="registro_empresa.php">
						    <table class="tabla" >
								<tr><td>Nombre de la compañía</td><td><input type="text" name="nombre_comp" class="form-control"></td></tr>
								<tr><td>Año de fundación</td><td><input type="number" name="anio" class="form-control"></td></tr>
								<tr><td>Encargado de la compañìa</td><td><input type="text" name="encargado" class="form-control"></td></tr>
								<tr><td>Ubicación de la compañía</td><td><input type="text" name="ubicacion" class="form-control"></td></tr>
								<tr><td>
								</td></tr>
								<tr><td></td><td align="center"><button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button></td></tr>
								</tr>
							</table>
						</form>
					</div>
					<div class="col m6">
						  <div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="img/images1.jpeg">
						    </div>
						    <div class="card-content">
						      <span class="card-title activator grey-text text-darken-4">Bienvenido!</span>
						    </div>
						  </div>
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
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. </p>
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

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include("conectar.php");
	extract($_POST);

    $consulta = mysql_query("insert into empresa(nombre,anio_fundacion,encargado,ubicacion,id) values ('$nombre_comp','$anio','$encargado','$ubicacion','20')");
    if ($consulta) {
    	echo "<script>alert('Se registro correctamente');</script>";
    }else{
    	echo "<script>alert('Error de registro!!!');</script>";
    }
}

?>
