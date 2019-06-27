<?php

require_once "../php/conexion.php";
$conexion = conexion();

?>
<div class="row">
    <div class="col-sm-12">
        <table id="tablav" class="table table-hover table-condensed table-bordered">
            <caption>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalR">Agregar</button>
            </caption>
            <thead>
                <tr class="success">
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Fecha N</td>
                    <td>E-Mail</td>
                    <td>Telefono</td>
                    <td>Genero</td>
                    <td>Ciudad</td>
                    <td>Direccion</td>
                    <td>Quien te Invito</td>
                    <td>Descripcion</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT id,nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion
                        FROM usuario";


                $result = mysqli_query($conexion, $sql);

                while ($ver = mysqli_fetch_row($result)) {

                    $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4] . "||" .
                        $ver[5] . "||" .
                        $ver[6] . "||" .
                        $ver[7] . "||" .
                        $ver[8] . "||" .
                        $ver[9] . "||" .
                        $ver[10];

                    ?>


                    <tr>
                        <td><?php echo $ver[1] ?></td>
                        <td><?php echo $ver[2] ?></td>
                        <td><?php echo $ver[3] ?></td>
                        <td><?php echo $ver[4] ?></td>
                        <td><?php echo $ver[5] ?></td>
                        <td><?php echo $ver[6] ?></td>
                        <td><?php echo $ver[7] ?></td>
                        <td><?php echo $ver[8] ?></td>
                        <td><?php echo $ver[9] ?></td>
                        <td><?php echo $ver[10] ?></td>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalE" id="Editarf" onclick="verdatos('<?php echo $datos ?>')">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" id="Eliminarf" onclick="preguntarsino('<?php echo $ver[0] ?>')">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </td>
                    </tr>

                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablav').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],

            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }

        });



    });
</script>