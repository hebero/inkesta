<?php
if(isset($_POST['usuario']) && isset($_POST['password']))
{
	$usertemp = $_POST['usuario'];
	$passtemp = $_POST['password'];

	require_once 'login.php';
	$db_server = mysql_connect($db_host, $db_username, $db_pass);
	if (!$db_server) die("No se puede conectarse a la base de datos". mysql_error());
	mysql_select_db($db_database) or die("No se pudo conectar a la base directa". mysql_error());
	$query="SELECT * FROM SESION WHERE ID_USER ='$usertemp'";
	$result = mysql_query($query);
	if (!$result) die("No se pudo correr el query de busqueda" . mysql_error());
	elseif (mysql_num_rows($result)) 
	{
		$row = mysql_fetch_row($result);
		if ($passtemp == $row[2]) {
			session_start();
			$_SESSION['username'] = $usertemp;
			$_SESSION['password1'] = $passtemp;
			header('Location: ./index.php');
		}
		else{
			die('<script type="text/javascript">alert("Usuario invalido");document.location=("./index.php");</script>');

		}
	}
	else{ 
		die('<script type="text/javascript">alert("Usuario invalido");document.location=("./index.php");</script>');
	}

}


		// $link=Conectarse();
		// $usuari = $_POST['usuario'];
		// $contras = $_POST['password'];

		// $sql = sprintf("SELECT SESION.ID_USER, SESION.PASS, FROM SESION WHERE SESION.ID_USER= '%s' && SESION.PASS= '%s'", $usuari, $contras);
		// $_SESSION['user'] = $usuari;
		// header("Location: ./index.php");
		// $result=mysql_query($sql,$link) or die("Error en: $busqueda: " . mysql_error());
		// if(mysql_num_rows($result)){
		// 	$array=mysql_fetch_array($result);
		// 	$_SESSION["user"]= $array["ID_USER"];
		// 	header("Location: ./index.php");
		// }
		// else{
		// 	echo '<script src="" type="text/javascript" charset="utf-8">';
		// 	echo 'alert("Contraseña o Usuario incorrecto.");';
		// 	echo '</script>"';
		// }
?>