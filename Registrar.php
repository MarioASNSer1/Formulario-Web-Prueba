<?php
//Registra un cliente en la base de datos
include_once("Cservicios.php");

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$objcliente=new cCliente;
$objcliente->registrar_cliente($cedula,$nombre,$telefono,$direccion);
?>