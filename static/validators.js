function validar_usuario() {
    var usuario = document.getElementById('Usuario').value;
    if(usuario != ""){
        return true;
    }else{
        return false;
    }
}

function ajax_crear_tr(ejercicio,punto,id) {
    console.log('si entra');
    var param = {ejercicio,punto};
    $.ajax({
        data: param,
        url: '../mod_seguridad/crear_tr.php',
        method: "post",
        success: function (data) {
            $("#"+id+"").append(data);
        }
    });
}