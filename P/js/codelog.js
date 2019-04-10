
function login(){

    var user1 = document.getElementById("user1").value;
    var pass1 = document.getElementById("pass1").value;

if(user1 == "admin"  && pass1 == "1234"){
    
    window.location = "index.php";
    return true;
    

}else { 

    alert("datos incorrectos");
    
    return false;
      }    
                }

