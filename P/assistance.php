<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo ad.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylefor.css">
	<title>Asistencia</title>
</head>

<body>
  <nav class="navbar navbar-inverse">
   <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VisitNew</a>
    </div>
    <button class="btn btn-primary navbar-btn btnFormulario" onclick="window.location.href='index.php'" >Formulario</button>
      <button class="btn btn-primary navbar-btn btnAsistencia" onclick="window.location.href='assistance.php'">Asistencia</button>
      <button class="btn btn-primary navbar-btn btnReportes" onclick="window.location.href='reports.php'">Reportes</button>
      <button class="btn btn-primary navbar-btn btnCS" onclick="window.location.href='indexlog.php'">Cerrar Sesion <span class="glyphicon glyphicon-off"></span></button>

   </div>
  </nav>
	<div class="container">

        <h2>Asistencia</h2>
        <br>
        <br>
        <div class="row">
                <div class="col-sm-3">
                 <label for="Fecha">Fecha</label>
                </div>
                <div class="col-sm-3">
                    <form action="assistance.html">
		                  <div class="form-group">
                       <div id="filterDate2"></div>
                        <div >
                          <input  type="date" class="form-control" placeholder="dd.mm.yyyy">
                       </div> 
                      </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <label for="Campaña">Campaña</label>
                </div>
                <div class="col-sm-3">
                   <div class="from-group"> 
                      <select class="form-control">
                        <option value="Bogota">david perez uniendo corazones</option>
                        <option value="Bogota">oscar lopez amor y fe</option>
                      </select>
                    </div>
                </div>


                
         </div>
  </div>



    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="js/assen.js"></script>

</body>
</html>