<?php

session_start();


require_once "conexion.php";
$conexion = conexion();

$uing = $_POST['usuario'];
$ping = $_POST['password'];

$sql = " SELECT * FROM usuariolog WHERE usuario='$uing' and password='$ping'";
$result =  mysqli_query($conexion, $sql);

if(mysqli_num_rows($result) > 0) {
    $_SESSION['user']=$uing;
    echo 1;
}else{
    echo 0;
}

?>

