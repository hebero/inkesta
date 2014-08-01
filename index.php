<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" href="css/inkesta.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Inkesta</title>
	
	<!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role ="document">
<div class="container-fluid">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
    				</button>
				<a class="navbar-brand" href="#">Inkesta</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     			<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li class=""><a href="pruebaWell.html">Prueba</a></li>
					<li> <a href="#"><?php if(isset($_SESSION['username']) && !empty($_SESSION['username']))
					{
					$usuario = $_SESSION['username'];
					 echo ($usuario);
					 echo '</a></li>';
					 echo '<li><a href="cerrar.php" title="">Cerrar Sesión</a></li>';
					}
					else
						{
							
							 echo ("¿?");} ?></a></li>
        		</ul>
        	</div>
		</nav>

		<div class="jumbotron">
		<?php 
		if(isset($_SESSION['username']) && !empty($_SESSION['username']))
					{?>
		<div class="well"><h2><a href="#">Crear Encuesta</a></h2></div>
		<div class="well"><h2><a href="#">Tus Encuestas</a></h2></div>
		<div class="well"><h2><a href="#">Archivos</a></h2></div>
		<?php }
		else{ 
		echo '<h1>Bienvenido a Inkesta</h1>';
		echo '<p>Por favor inicie sesión...</p>';
			echo '  <div class="form-group">
				<h3>¿Eres Administrador de grupo?</h3>
				<hr>
				<button type="button" class="btn btn-primary btn-lg btn-block" id="btn-admin">Administrador</button>
					</div>';
		echo '<form class="form-horizontal" role="form" action="proces.php" method="post" accept-charset="utf-8" id ="form-admin" style="display:none;">';
		echo '	<div class="form-group">';
		echo '		<label for="email" class="control-label"><h3>Email</h3></label>';
    	echo '		<div class="input-group-lg">';
     	echo '			 <input type="text" class="form-control" id="email" placeholder="Email" name="usuario">';
		echo '		</div>'
;		echo '	</div>';
		echo '	<div class="form-group">';
		echo '		<label for="password" class="control-label"><h3>Contraseña</h3></label>';
		echo '		<div class="input-group-lg">';
		echo '			<input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">';
		echo '		</div>';
		echo '	</div>';
		echo '	<div class="form-group">';
		echo '		<button type="submit" class="btn btn-default">Entrar</button>';
		echo '	</div>';
		echo '</form> ';
		echo '  <div class="form-group">
		<h3>¿Eres encuestador?</h3>
		<button type="button" class="btn btn-primary btn-lg btn-block" id="btn-enc">Encuestador</button>
		</div>';
	}?>
				<form class="form-horizontal" role="form" action="proces.php" method="post" accept-charset="utf-8" style="display:none;" id="form-enc">
					<div class="form-group">
						<label for="encuestador">Número de grupo:</label>
						<div class="input-group input-group-lg">
						 <span class="input-group-addon">#</span>
							<input type="text" class="form-control" id="encuestador" name="encuestador" placeholder="Grupo">
						</div>
					</div>	
					<div class="form-group">
						<button type="submit" class="btn btn-default">Entrar</button>
					</div>				
				</form>
		</div>
	</div>
	</div>
	<footer class="bs-footer" role="contentinfo">
		<div class="container">
			<p>Inkesta</p>
			<p></p>
		</div>	
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/ikscript.js" type="text/javascript"></script>
<!-- <script type="text/javascript">
	// $("#btn-enc").click(function() {
	// 	$("#form-enc").fadeIn("slow");
	// });
	// $("#btn-admin").click(function() {
	// 	$("#form-admin").fadeIn("slow");
	// });
</script>-->
</body>
</html>