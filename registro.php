<?php

session_start();

if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">

    <script src="librerias/jquery-3.3.1.js"></script>
    <script src="librerias/alertify/alertify.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>

</head>
<P></P>
<br>
<br>

<body style="background-color:#33C7FF">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel panel-heading">Registro de usuario</div>
                    <div class="panel panel-body">
                        <form id="formregist">
                            <label>Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control input-sm">
                            <label>Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control input-sm">
                            <label>Usuario</label>
                            <input type="text" id="usuario" name="usuario" class="form-control input-sm">
                            <label>Password</label>
                            <input type="text" id="password" name="password" class="form-control input-sm">
                            <p></p>
                            <span class="btn btn-primary" id="registron">Registrar</span>
                        </form>
                        <div style="text-align:right;">
                            <a href="form.php" class="btn btn-default">Regresar</a>
                            <a href="index.php" class="btn btn-default">Login</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $("#registron").click(function() {

            if ($('#nombre').val() == "") {
                alertify.alert('Datos no ingresados', "Por favor introdusca su nombre");
                return false;
            } else if ($('#apellido').val() == "") {
                alertify.alert('Datos no ingresados', "Por favor introdusca su apellido");
                return false;
            } else if ($('#usuario').val() == "") {
                alertify.alert('Datos no ingresados', "Por favor introdusca su usuario");
                return false;
            } else if ($('#password').val() == "") {
                alertify.alert('Datos no ingresados', "Por favor introduzca su contraseña");
                return false;
            }


            cadenalog = "nombre=" + $('#nombre').val() +
                "&apellido=" + $('#apellido').val() +
                "&usuario=" + $('#usuario').val() +
                "&password=" + $('#password').val();

            $.ajax({
                type: "POST",
                url: "php/resgistrolog.php",
                data: cadenalog,
                success: function(r) {
                    if (r == 1) {
                        $('#formregist')[0].reset();
                        alertify.success("Su registro fue exitoso :)");
                    } else {
                        alertify.error("Fallo el servidor :(");
                    }
                }
            });
        });
    });
</script>
<?php
    }else{

        header("location:index.php");
    }
?>