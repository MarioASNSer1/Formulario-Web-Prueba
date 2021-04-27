<?php
	session_start();
	if (isset($_SESSION['k_password']))
	{
                //echo $_SESSION['k_password'];
                 echo $_SESSION['k_nombres'];
								 echo $_SESSION['k_apellidos'];

		echo 'Haz sido identificado correctamente';
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
	<a href="logout.php">Cerrar Sesión</a>
    <table width="681" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutDefaultTable-->
      <tr>
        <td width="463" height="59">&nbsp;</td>
        <td width="218">&nbsp;</td>
      </tr>
      <tr>
        <td height="39">&nbsp;</td>
        <td valign="top" bgcolor=""><?php echo $_SESSION['k_nombre'];?>&nbsp;</td>
      </tr>
    </table>
</body>
</html>
<?php
	}
	else
	{
		echo"Acceso no autorizado";
	}
	?>
