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
  <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/stylefor.css">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="style/stylefor.css">
  <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap.min.css">

  <script src="librerias/jquery-3.3.1.js"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/datatable/jquery.dataTables.min.js"></script>
  <script src="librerias/datatable/dataTables.bootstrap.min.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/alertify/alertify.min.js"></script>

  <script src="librerias/dataTable/expr/dataTables.buttons.min.js"></script>
  <script src="librerias/dataTable/expr/jszip.min.js"></script>
  <script src="librerias/dataTable/expr/pdfmake.min.js"></script>
  <script src="librerias/dataTable/expr/vfs_fonts.js"></script>
  <script src="librerias/dataTable/expr/buttons.html5.min.js"></script>

  <title>Reportes</title>
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
      <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='config.php'">Configuracion</button>
      <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='registro.php'">Registro Usuarios</button>
      <button class="btn btn-primary navbar-btn btnCS" onclick="window.location.href='index.php'">Cerrar Sesion <span class="glyphicon glyphicon-off"></span></button>

    </div>
  </nav>
  <div class="container">

    <h2>Reportes</h2>
    <div class="row">
      <div class="col-sm-6">
        <form action="reports.html" method="post">
          <div class="row form-group">
            <div class="row form-group"><br></div>
        </form>
        <div>
          <h4>Generar reporte de visitas ingresadas</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Reportes
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Reporte  de todas las visitas ingresadas</h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



</body>

</html>
<?php
    }else{

        header("location:index.php");
    }
?>