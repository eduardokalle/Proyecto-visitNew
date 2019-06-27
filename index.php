
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

        <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">

        <script src="librerias/jquery-3.3.1.js"></script>
        <script src="librerias/alertify/alertify.min.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Ingreso Visitnew</div>
                    <div class="panel panel-body">
                        <div style="text-align: center;">
                            <img src="img/logoisadlogin.png" height="300">
                        </div>
                        <p></p>                        
                        <div>
                            <label >Usuario</label>
                            <input type="text" id="usuario" class="form-control input-sm">
                            <label >Password</label>
                            <input type="password" id="password" class="form-control input-sm">
                            <p></p>
                            <button type="submit"class="btn btn-primary" id="entrars">Entrar</button>
                            <a class="btn btn-danger" id="registros" href="recordar.php">¿ Olvidaste tu cuenta ?</a>
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
        $("#entrars").click(function() {
        
            if($('#usuario').val()==""){
                alertify.alert('Datos no ingresados',"Por favor introdusca su usuario");
                return false;
            }
            else if($('#password').val()==""){
                alertify.alert('Datos no ingresados',"Por favor introdusca su contraseña");
                return false;
            }

            cadenaing="usuario=" + $('#usuario').val() +
                      "&password=" + $('#password').val();
                       
                    $.ajax({
                        type: "POST",
                        url: "php/logining.php",
                        data: cadenaing,
                        success: function(r) {   
                            if (r == 1) {
                                window.location="form.php";
                            } else {
                                alertify.error("El ingreso no es valido :(");
                            }
                        }    
                    });
        });
    });
</script>
