<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/stylelog.css">
	<title>Login</title>
</head>
<body>
    <script src="js/codelog.js"></script>

    <div class="simple-login-container">
    <form name="form" method="post" onsubmit="return login();" action="index.php">
        <h2> Inicio Sesión </h2>
        <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" placeholder="Nombre Usuario" name="user" id="user1">
        </div>
        </div>
        <div class="row">
         <div class="col-md-12 form-group">
            <input type="password" placeholder="Ingresa su contrasena" class="form-control" name="pass" id="pass1">
         </div>
        </div>
        <div class="row">
         <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" placeholder="Enviar" >
         </div>
        </div>

        <div class="row">
            <div>
                <img src="img/LOGO-IASD-01-01.png" class="col-lg-12">
            </div>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    

    </div>

</body>
</html>

<script src="librerias/jquery-3.3.1.js"></script>
<script src="librerias/bootstrap/js/bootstrap.min.js"></script>