<?php
    function conexion ()  {
    
        $servidor = "localhost";
        $usuario= "root";
        $password = "";
        $db= "pc01";
        

 // Create connection

        $conexion  = mysqli_connect($servidor, $usuario, $password, $db);
         
        return $conexion;

    }
// Check connection

    //if (conexion()) {

       // echo "Connected successfully";

    //}else{

       // echo "Connected error";

  //  }
   
?>