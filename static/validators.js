function validar_usuario() {
    var usuario = document.getElementById('Usuario').value;
    if(usuario != ""){
        return true;
    }else{
        return false;
    }
}