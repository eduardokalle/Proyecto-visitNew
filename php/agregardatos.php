
<?php

require_once "conexion.php";
$conexion = conexion();

$n=$_POST['nombre'];
$a=$_POST['apellido'];
$fn=$_POST['fn'];
$e=$_POST['email'];
$t=$_POST['telefono'];
$g=$_POST['genero'];
$c=$_POST['ciudad'];
$d=$_POST['direccion'];
$qi=$_POST['qi'];
$des=$_POST['descrpcion'];


$sql = " INSERT INTO usuario (nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion)
                            values('$n','$a','$fn','$e','$t','$g','$c','$d','$qi','$des')";


echo $result =  mysqli_query($conexion,$sql);
                          
?>