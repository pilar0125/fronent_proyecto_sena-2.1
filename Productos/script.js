document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);


//Primero se declaran las variables
var contenedor_login_register= document.querySelector(".contenedor__login-register");
var formulario_login= document.querySelector(".formulario__login");
var formulario_resgister= document.querySelector(".formulario__register");
var caja_trasera_login= document.querySelector(".caja__trasera-login");
var caja_trasera_register= document.querySelector(".caja__trasera_register");

function achoPagina(){
    if(window.innerWidth> 850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";

    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display= "none";
        formulario_login.style.display= "block";
        formulario_resgister.style.display= "none";
        contenedor_login_register.style.left= "0px";

    }
}


function iniciarSesion(){

        formulario_resgister.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display= "block";
        caja_trasera_register.style.opactiy= "1";
        caja_trasera_login.style.opactiy="0";
}
    
   

function register(){

  
        formulario_resgister.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display= "none";
        caja_trasera_register.style.opactiy= "0";
        caja_trasera_login.style.opactiy="1";
  
  
}


