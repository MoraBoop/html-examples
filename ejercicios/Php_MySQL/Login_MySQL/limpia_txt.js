
function limpia_User(elemento){
    elemento.value = "";
}
function verifica_User(elemento){
    if(elemento.value==""){
        elemento.value = "nombre de usuario";
    }
}
function limpia_Pass(elemento){
    elemento.value = "";
    elemento.type = "password"
}
function verifica_Pass(elemento){
    if(elemento.value==""){        
        elemento.value = "password";
        elemento.type = "text";
    }
}
    