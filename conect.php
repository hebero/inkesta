<?php
	function Conectarse(){
		if (!($link=mysql_connect("mysql.hostinger.es","u869122966_ink","499849984998"))) {
		echo ("Error conectando a la base de datos");
		exit();
	}
	if (!mysql_select_db("u869122966_sesi",$link)){ 
		echo ("Error al conectar a la base de datos");
		exit();
	}
	return $link;
	}
		$link = Conectarse();
		mysql_close($link); 
?>