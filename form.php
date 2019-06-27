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
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="style/stylefor.css">
  <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap.min.css">
  

    <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">---->

  <!---<link rel="stylesheet" href="style/stylefor.css">---->
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




  <title>Formulario</title>

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

        <button class="btn btn-primary navbar-btn btnCS"  onclick="window.location.href='php/salir.php'">Cerrar Sesion <span class="glyphicon glyphicon-off"></span></button>
    </div>
  </nav>

  <div class="container">
    <h2>Registro Visitas</h2>
    <div id="tabla"></div>
  </div>


  <!-- Modal Agregar R-->
  <div class="modal fade" id="modalR" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agrega Nueva Persona</h4>
        </div>
        <div class="modal-body">
          <div class="form-horizontal">
            <div class="form-group">
              <label class='col-sm-4 control-label'>Nombre</label>
              <div class="col-sm-8">
                <input type="text" name="Nombre" id="Nom" class="form-control input-sm" placeholder="Ingresa tu Nombre "
                  required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Apellido</label>
              <div class="col-sm-8">
                <input type="text" name="Apellido" id="Ape" class="form-control input-sm"
                  placeholder="Ingresa tu Apellido" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Fecha Nacimiento</label>
              <div class="col-sm-8">
                <input type="date"  data-date-format="DD MMMM YYYY" value="1900-01-01" name="Fecha_Nacimiento" id="FN" class="form-control input-sm" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>E-Mail</label>
              <div class="col-sm-8">
                <input type="emai" name="email" id="E-Mail" class="form-control input-sm" placeholder="Ingrese su Email"
                  required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Telefono</label>
              <div class="col-sm-8">
                <input type="tel" name="Tel" id="Tel" class="form-control input-sm" placeholder="Ingrese su Telefono"
                  min="6" required>
              </div>
            </div>
            <div class="form-group" id="Gen">
              <label class='col-sm-4 control-label'>Genero</label>
              <input type="radio" name="gender" value="Masculino" class="" required>Masculino<br>
              <input type="radio" name="gender" value="Femenino" class="">Femenino<br>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Ciudad</label>
              <div class="col-sm-8">
                <select name="Ciudad" id="Ciu" class="form-control">
                  <option value="Bogota">Bogota</option>
                  <option value="Medellin">Medellin</option>
                  <option value="Cali">Cali</option>
                  <option value="Manizales">Manizales</option>
                  <option value="Bucaramanga">bucaramanga</option>
                  <option value="Cucuta">Cucuta</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Direccion</label>
              <div class="col-sm-8">
                <input type="text" name="Dir" id="Dir" class="form-control input-sm" placeholder="Ingrese su Direccion" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Quien Te Invito</label>
              <div class="col-sm-8">
                <input type="text" name="" id="QI" class="form-control input-sm"
                  placeholder="Ingresa el nombre de la  persona que te invito" required>
              </div>
            </div>
            <div class="form-group">
              <label label class='col-sm-4 control-label'>Descripcion</label>
              <div class="col-sm-8">
                <textarea id="msg" name="Descripcion" class="form-control input-sm" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarN">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal Agregar E-->
  <div class="modal fade" id="modalE" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizacion</h4>
        </div>
        <div class="modal-body">

          <div class="form-horizontal">
            <div class="form-group">
              <label class='col-sm-4 control-label'>ID</label>
              <div class="col-sm-8">
                <input type="text" name="Nombre" id="ID" class="form-control input-sm" hidden="" required>
                </div>
            </div>

            <div class="form-group">
              <label class='col-sm-4 control-label'>Nombre</label>
              <div class="col-sm-8">
                <input type="text" name="Nombre" id="NomE" class="form-control input-sm"
                  placeholder="Ingresa tu Nombre "  required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Apellido</label>
              <div class="col-sm-8">
                <input type="text" name="Apellido" id="ApeE" class="form-control input-sm"
                  placeholder="Ingresa tu Apellido" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Fecha Nacimiento</label>
              <div class="col-sm-8">
                <input type="date" name="Fecha_Nacimiento" id="FNE" class="form-control input-sm" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>E-Mail</label>
              <div class="col-sm-8">
                <input type="emai" name="email" id="E-MailE" class="form-control input-sm"
                  placeholder="Ingrese su Email" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Telefono</label>
              <div class="col-sm-8">
                <input type="tel" name="" id="TelE" class="form-control input-sm" placeholder="Ingrese su Telefono"
                  min="6" required>
              </div>
            </div>
            <div class="form-group" id="GenE">
              <label class='col-sm-4 control-label'>Genero</label>
              <input type="radio" name="gender" value="Masculino" class="" required>Masculino<br>
              <input type="radio" name="gender" value="Femenino" class="">Femenino<br>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Ciudad</label>
              <div class="col-sm-8">
                <select name="Ciudad" id="CiuE" class="form-control">
                  <option value="Bogota">Bogota</option>
                  <option value="Medellin">Medellin</option>
                  <option value="Cali">Cali</option>
                  <option value="Manizales">Manizales</option>
                  <option value="Bucaramanga">bucaramanga</option>
                  <option value="Cucuta">Cucuta</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Direccion</label>
              <div class="col-sm-8">
                <input type="text" name="" id="DirE" class="form-control input-sm" placeholder="Ingrese su Direccion" required>
              </div>
            </div>
            <div class="form-group">
              <label class='col-sm-4 control-label'>Quien Te Invito</label>
              <div class="col-sm-8">
                <input type="text" name="" id="QIE" class="form-control input-sm"
                  placeholder="Ingresa el nombre de la  persona que te invito" required>
              </div>
            </div>
            <div class="form-group">
              <label label class='col-sm-4 control-label'>Descripcion</label>
              <div class="col-sm-8">
                <textarea id="msgE" name="Descripcion" class="form-control input-sm" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarE">Actualizar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>



<script type="text/javascript">
  $(document).ready(function () {
    $('#tabla').load('componentes/tabla.php');

  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#modalR input, select").on("keyup", function(){
	    $(this).parent().find("span").remove()
    })
    $('#guardarN').click(function(){
      var contador = validarCampos();
      console.log(contador)

      if (contador > 0) {
        alertify.alert('Datos no ingresados','Por favor ingrese los campos requeridos.');
        return false;
      }
      nombre=$('#Nom').val();
      apellido=$('#Ape').val();
      fn=$('#FN').val();
      email=$('#E-Mail').val();
      telefono=$('#Tel').val();
      genero="";
      $('#Gen input').each(function(){
        if ($(this).is(":checked")) {
          genero = $(this).val();
        }
      })
      ciudad=$('#Ciu').val();
      direccion=$('#Dir').val();
      qi=$('#QI').val();
      descrpcion=$('#msg').val();

      agregardatos (nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion);
       
    });

    $('#guardarE').click(function(){
        actualizadatos();
      });


  });

  function validarCampos() {
    con = 0;
      $("#modalR input, select").each(function(){
          if($(this).val() == "") {
        if ($(this).parent().find("span").length <= 0) {
            $(this).parent().append("<span style='color:red;'>*</span>")
        }            
              con++;
          }
      })
    return con;

  }
</script>

<?php
    }else{

        header("location:index.php");
    }
?>