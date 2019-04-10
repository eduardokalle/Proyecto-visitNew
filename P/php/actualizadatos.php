<?php

require_once "conexion.php";
$conexion = conexion();

$id=$_POST['id'];
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


$sql = "UPDATE usuario SET nombre='$n',
                              apellido='$a',
                              fn='$fn',
                              email='$e',
                              telefono='$t',
                              genero='$g',
                              ciudad='$c',
                              direccion='$d',
                              qi='$qi',
                              descrpcion='$des'
        where id='$id'";

                            


echo $result =  mysqli_query($conexion,$sql);
                          
?>