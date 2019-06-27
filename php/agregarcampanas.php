<?php

require_once "conexion.php";
$conexion = conexion();

$tituloC=$_POST['titulo'];
$responC=$_POST['responsable'];


$sql = " INSERT INTO campana (titulo,responsable)
                            values('$tituloC','$responC')";


echo $result =  mysqli_query($conexion,$sql);

?>