
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
    <div class="col-sm-12">
        <table id="tabla" class="table table-hover table-condensed table-bordered">
            <tr>
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
                <?php 
                    if(isset($_SESSION['consulta'])){
                        if($_SESSION['consulta'] > 0){
                            $id=$_SESSION['consulta'];

                            $sql="SELECT id,nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion
                            FROM usuario where id='$id'";

                        }else{

                            $sql="SELECT id,nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion
                            FROM usuario";
                        }

                    }else{ 

                        $sql="SELECT id,nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion
                            FROM usuario";
                    }  

                    $result = mysqli_query($conexion,$sql);     
                    
                    while($ver=mysqli_fetch_row($result)){
                           
                        $datos=$ver[0]."||".
                               $ver[1]."||".
                               $ver[2]."||".
                               $ver[3]."||".
                               $ver[4]."||".
                               $ver[5]."||".
                               $ver[6]."||".
                               $ver[7]."||".
                               $ver[8]."||".
                               $ver[9]."||".
                               $ver[10];

                ?>


            <tr>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td><?php echo $ver[5]?></td>
                <td><?php echo $ver[6]?></td>
                <td><?php echo $ver[7]?></td>
                <td><?php echo $ver[8]?></td>
                <td><?php echo $ver[9]?></td>
                <td><?php echo $ver[10]?></td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalE" id="Editarf" onclick="verdatos('<?php echo $datos ?>')">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" id="Eliminarf"  onclick="preguntarsino('<?php echo $ver[0] ?>')">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </td>
            </tr>

            <?php
                    }
            ?>
        </table>
    </div>
</div>