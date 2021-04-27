<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">

<title>Validar Ingreso</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="verifica_usuario.php">
<table width="298" border="1" align="center">
  <tr>
    <td width="69"><label>Usuario</label></td>
    <td width="213"><input name="txt_usuario" type="text" id="txt_usuario" size="50" maxlength="15" /></td>
  </tr>
  <tr>
    <td><label>Contraseña</label></td>
    <td><input name="txt_password" type="password" id="txt_password" size="50" maxlength="150"/></td>
  </tr>
   <tr>
    <td colspan="2" align="center"><input name="envia" type="submit" value="Enviar" /></td>
  </tr>
</table>
</form>
</body>
</html>
