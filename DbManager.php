<?php
//Clase Manejadora de la base de datos y conexi�n con el servidor
class DBManager
{
	var $conect;

	//Constructor
	function DBManager()
	{
	}
	//127.0.0.1
	//Funci�n conectar con el servidor y la base de datos
	function conectar()
	{
		if (!($con=@mysql_connect("localhost","root","Fercho")))
		{
			echo "Error al concetarse con el servidor";
			exit();
		}
		if (!@mysql_select_db("bd_ejemplo_2",$con))
		{
			echo "Error al seleccionar la base de datos";
			exit();
		}
		$this->conect=$con;
		return true;
	}

}
?>
