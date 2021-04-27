<?php
	include_once("DbManager.php");
  session_start();

	$usuario=$_POST['txt_usuario'];
	$password=$_POST['txt_password'];

	$obj=new DBManager;
	if ($obj->conectar()==true)
	{
		if($usuario!="" && $password!="")
		{
 			//$query="SELECT password,usuario FROM tusuarios WHERE usuario='$usuario'";
      $query="SELECT a.password,a.usuario,b.nombres FROM tusuarios a,tclientes b WHERE a.usuario='$usuario' && a.cedula=b.cedula";
			$result = mysql_query($query);
    		if($row = mysql_fetch_array($result))
			{
				if( $row["password"] == $password && $row["usuario"]==$usuario)
				{
          			$_SESSION['k_username'] = $row['usuario'];
			          $_SESSION["k_password"] = $row['password'];
                $_SESSION["k_nombre"] =   $row['nombres'];
					//echo true;
					include_once("menu.php");
				//	header("Location: menu.php");
        		}
			}
			else
			{
				echo "Usuario no registrado";
        	}
    	}
			else{include_once("index.php");}

	}
	mysql_close();
?>
