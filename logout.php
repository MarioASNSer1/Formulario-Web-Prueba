<?php
	session_start(); 
	// Borramos toda la sesion
	session_destroy();
	//echo 'Ha terminado la session <p><a href="index.php">index</a></p>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SICOES</title>
	<link href="css/login.css" rel="stylesheet" type="text/css"></link>						<!--Permite aplicar estilos generales-->
</head>

<body>
	<table width="100%" align="center">
	<tr>
		<td height="199" align="center" class="subtitulos">Sesión finalizada correctamente...</td>
	</tr>
	<tr>
	    <td height="21" align="center"><a href="index.php">Regresar</a></td>
	</tr>
	</table>
</body>
</html>
