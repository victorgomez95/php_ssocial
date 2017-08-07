<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<style type="text/css">
body{
    background: url(http://mymaplist.com/img/parallax/back.png);
	background-color: #444;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);
}

.vertical-offset-100{
    padding-top:100px;
}
</style>

<body>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesión</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="login.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" id="email" type="email">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    	    <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(document).mousemove(function(e){
	 TweenLite.to($('body'), .5, { css:
	        {
	            backgroundPosition: ""+ parseInt(event.pageX/6) + "px "+parseInt(event.pageY/'9')+"px, "+parseInt(event.pageX/'12')+"px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'25')+"px "+parseInt(event.pageY/'25')+"px"
	        }
	    });
	});
});
</script>

</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include("conectar.php");
	extract($_POST);
	$rs = mysql_query("select * from usuarios where correo = '$email' and password='$password'");
	if (mysql_num_rows($rs)==1) {
		# code...
		$rest = mysql_fetch_array($rs);

		session_start();

		$estado = $rest['estado'];
		$id = $rest['id'];



		if ($estado=="activo") {
			header("location:menu_principal.php?mensaje=$id");
		}else{
			mysql_query("update usuarios set estado='activo' where id=$id");
			header("location:registro_empresa.php?mensaje=$id");
		}

	}else{
		echo "<script>alert('Error de validación, Usuario o Password incorrectos!!!');</script>";
	}
}

?>
