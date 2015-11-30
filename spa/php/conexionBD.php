<?php

class conexionBD
{

	function conectarBD()
	{
		
		$conexion = mysql_connect("localhost", "root", "");
		mysql_select_db('isesas', $conexion);
		
		return $conexion;
	}

}


?>