<?php

session_start();

if (isset($_SESSION['user'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/stylefor.css">
        <title>Reportes</title>

        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
  
       <script src="librerias/jquery-3.3.1.js"></script>
       <script src="librerias/alertify/alertify.min.js"></script>
       <script src="librerias/bootstrap/js/bootstrap.min.js"></script>


    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">VisitNew</a>
                </div>
                <button class="btn btn-primary navbar-btn btnFormulario" onclick="window.location.href='form.php'">Formulario</button>
                <button class="btn btn-primary navbar-btn btnAsistencia" onclick="window.location.href='assistance.php'">Asistencia</button>
                <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='reports.php'">Reportes</button>
                <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='Config.php'">Configuracion</button>
                <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='registro.php'">Registro Usuarios</button>
                <button class="btn btn-primary navbar-btn btnCS" onclick="window.location.href='index.php'">Cerrar Sesion <span class="glyphicon glyphicon-off"></span></button>

            </div>
        </nav>
        <div class="container">

            <h2>Configuracion</h2>
            <div class="row">
                <div class="col-sm-6">
                    <form action="reports.html" method="post">
                        <div class="row form-group">
                            <div class="row form-group"><br></div>
                    </form>
                    <div>
                        <h4>Configuracion</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Campañas-->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCA">
            Ingresar Campañas
        </button>

        <!-- Modal Campañas-->
        <div class="modal fade" id="myModalCA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ingreso de Campañas</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class='col-sm-4 control-label'>Titulo de Campaña</label>
                                <div class="col-sm-8">
                                    <input type="text" name="titulo" id="titulo" class="form-control input-sm" placeholder="Ingresa el Titulo " required>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class='col-sm-4 control-label'>Responsable</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="responsable" id="responsable" class="form-control input-sm" placeholder="Ingresa el Responsable " required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarCampa">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- Button Campañas-->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCI">
            Ingresar Ciudades
        </button>

        <!-- Modal Campañas-->
        <div class="modal fade" id="myModalCI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ingreso de Ciudades</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class='col-sm-4 control-label'>Ciudad Nueva</label>
                                <div class="col-sm-8">
                                    <input type="text" name="CiudadC" id="CiudadC" class="form-control input-sm" placeholder="Ingresa una nueva ciudad " required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    </body>

    </html>

<script type="text/javascript">
        $(document).ready(function() {
            $("#guardarCampa").click(function() {

                if ($('#titulo').val() == "") {
                    alertify.alert('Datos no ingresados', "Por favor introdusca el titulo");
                    return false;
                } else if ($('#responsable').val() == "") {
                    alertify.alert('Datos no ingresados', "Por favor introdusca el responsable");
                    return false;
                }

                
            titulo=$('#titulo').val();
            responsable=$('#responsable').val();

            agregarcampana(titulo,responsable);


            });
        });
</script>

<?php
} else {

    header("location:index.php");
}
?>