 
function agregardatos (nombre,apellido,fn,email,telefono,genero,ciudad,direccion,qi,descrpcion) {

    cadena = "nombre=" + nombre 
           + "&apellido=" + apellido  
           + "&fn=" + fn 
           + "&email="+ email 
           + "&telefono=" + telefono 
           + "&genero=" + genero
           + "&ciudad=" + ciudad 
           + "&direccion=" + direccion 
           + "&qi=" + qi  
           + "&descrpcion=" + descrpcion ;
     
    $.ajax({
        type:"POST",
        url:"php/agregardatos.php",
        data:cadena,

        success:function(r){
         
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                
                alertify.success('Agragado con exito :)');

            }else{
                alertify.success('Fallo el servidor');

            }

     
        }
    });

}


function verdatos(datos){

    d=datos.split("||");
  
    $('#ID').val(d[0]);
    $('#NomE').val(d[1]);
    $('#ApeE').val(d[2]);
    $('#FNE').val(d[3]);
    $('#E-MailE').val(d[4]); 
    $('#TelE').val(d[5]);
    $('#GenE').val(d[6]);
    $('#CiuE').val(d[7]);
    $('#DirE').val(d[8]);
    $('#QIE').val(d[9]);
    $('#msgE').val(d[10]);

}

function actualizadatos() {


    id=$('#ID').val();
    nombre=$('#NomE').val();
    apellido=$('#ApeE').val();
    fn=$('#FNE').val();
    email=$('#E-MailE').val();
    telefono=$('#TelE').val();
    genero="";
      $('#GenE input').each(function(){
        if ($(this).is(":checked")) {
          genero = $(this).val();
        }
      })
    ciudad=$('#CiuE').val();
    direccion=$('#DirE').val();
    qi=$('#QIE').val();
    descrpcion=$('#msgE').val();

    cadena = "id=" + id 
           + "&nombre=" + nombre 
           + "&apellido=" + apellido  
           + "&fn=" + fn 
           + "&email="+ email 
           + "&telefono=" + telefono 
           + "&genero=" + genero
           + "&ciudad=" + ciudad 
           + "&direccion=" + direccion 
           + "&qi=" + qi  
           + "&descrpcion=" + descrpcion ;

            
    $.ajax({
        type:"POST",
        url:"php/actualizadatos.php",
        data:cadena,

        success:function(r){
         
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                
                alertify.success('Actualizado con exito :)');

            }else{
                alertify.error('Fallo el servidor');

            }

     
        }
    });
    
}

function preguntarsino(id){

    alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro', function(){ eliminardatos(id) }
        , function(){ alertify.error('Se Cancelo')});

}

function eliminardatos(id){

    cadena = "id=" + id;
      
    $.ajax({
        type:"POST",
        url:"php/eliminardatos.php",
        data:cadena,
    
        success:function(r){
         
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                
                alertify.success('Eliminado con exito :)');

            }else{
                alertify.error('Fallo el servidor');

            
            }

     
        }
    });


}