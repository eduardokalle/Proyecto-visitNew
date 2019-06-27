<?php

require_once "conexion.php";
$conexion = conexion();

$nlog=$_POST['nombre'];
$alog=$_POST['apellido'];
$ulog=$_POST['usuario'];
$plog=$_POST['password'];

$sql = " INSERT INTO usuariolog (nombre,apellido,usuario,password)
                            values('$nlog','$alog','$ulog','$plog')";


echo $result =  mysqli_query($conexion,$sql);

?>