function validar_usuario() {
        var usuario = document.getElementById('Usuario').value;
    if(usuario != ""){
        return true;
    }else{
        return false;
    }
}

function ajax_crear_tr(ejercicio,punto,id) {
    var n = $('select[name="ejercicio[]"]').length;
    console.log('si entra '+n);
    var param = {ejercicio,punto};
    if(n < 10){
        $.ajax({
            data: param,
            url: './crear_tr.php',
            method: 'post',
            success: function (data) {
                $("#"+id).append(data);
            }
        });
    }

}