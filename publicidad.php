
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
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
          "type": "pie3d",
        "renderAt": "chartContainer",
        "width": "500",
        "height": "250",
        "dataFormat": "json",
        "dataSource":  {
         "chart": {
        "caption": "Redes sociales más usadas",
        "palette": "2",
        "animation": "1",
        "formatnumberscale": "1",
        "decimals": "0",
        "numberprefix": "%",
        "pieslicedepth": "30",
        "startingangle": "125",
        "showborder": "0"
    },
    "data": [
        {
            "label": "Facebook",
            "value": "39",
            "issliced": "1"
        },
        {
            "label": "Twitter",
            "value": "25",
            "issliced": "1"
        },
        {
            "label": "Instagram",
            "value": "9",
            "issliced": "0"
        },
        {
            "label": "Youtube",
            "value": "18",
            "issliced": "0"
        },
        {
          "label": "Otros",
          "value": "9",
          "issliced": "0"
        }
    ]
}
  });
revenueChart.render();
});
</script>


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
          <h1 class="header center teal-text text-lighten-2">Publicidad</h1>
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
						<h4>Registro de publicidad</h4>
						<form method="post" action="publicidad.php">
						    <table class="tabla" >
								<tr><td colspan="2">
								    <select>
								      <option value="" disabled selected>Nombre</option>
								      <option value="nombre_comp">Facebook</option>
								      <option value="nombre_comp">Twitter</option>
								      <option value="nombre_comp">Youtube</option>
											<option value="nombre_comp">Instagram</option>

								    </select>
								</td></tr>

								<tr><td>Costo</td><td><input type="number" name="costo" class="form-control"></td></tr>
								<tr><td>
								</td></tr>
								<tr><td></td><td align="center"><button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button></td></tr>
								</tr>
							</table>
						</form><br><br>
			      <table>
			        <tr><td colspan="2"><div id="chartContainer" class="uno"></div></td></tr>
			      </table>
					</div>
					<div class="col m6">
						  <div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="img/publicidad.png">
						    </div>
						    <div class="card-content">
						      <span class="card-title activator grey-text text-darken-4">Principales</span>
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

	<script>
	$(document).ready(function() {
		$('select').material_select();
	});
	</script>

  </body>
</html>



<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include("conectar.php");
	extract($_POST);
	echo "<script>alert($nombre_comp);</script>";
    //$consulta = mysql_query("insert into publicidad(nombre,costo,id) values ('$nombre_comp','$costo','20')");
    if ($consulta) {
    	echo "<script>alert('Se registro correctamente');</script>";
    }else{
    	echo "<script>alert('Error de registro!!!');</script>";
    }
}

?>
