function validar_usuario() {
        var usuario = document.getElementById('Usuario').value;
    if(usuario != ""){
        return true;
    }else{
        return false;
    }
}

function ajax_crear_tr(ejercicio,punto,id,name_eje,name_punto) {
    var n = $('select[name="ejercicio1[]"]').length;
    console.log('si entra '+name_eje + " name "+ name_punto);
    var param = {ejercicio,punto,name_eje,name_punto};
        $.ajax({
            data: param,
            url: './crear_tr.php',
            method: 'post',
            success: function (data) {
                $("#"+id).append(data);
            }
        });
}
function validar_repetido(tabla,campo,value,id) {
    var param = {tabla,campo,value}
    $.ajax({
        data: param,
        url: './validar_repetidos.php',
        method: 'post',
        success: function (data) {
            if (data==true){
                $("#"+id).css("background-color","red");
            }
        }
    })
}