<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("parametro","id_parametro,nombre,respuesta","id_parametro=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar Parametro","return validar_usuario();","#","form");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_parametro'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"Ingrese un nombre al parametro","text","Nombre del parametro");
    print FORM::GENERAR_INPUT_USUARIO("Respuesta",$datos['respuesta'],"Ingrese su respuesta","text","Ingrese una respuesta");
   //ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar parametro");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>



<script type="text/javascript">
    
    $(document).ready(function() {
          $('#boton_submit').click(function(event) {
            event.preventDefault();
            
            nombre = $('#Nombre').val();
            respuesta = $('#Respuesta').val();
            
                if (nombre==null
                    || nombre==''
                    || nombre.length==0){
                    $('#Nombre').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Nombre").removeClass('is-invalid');
                    },3000);
                    return;}

        

                    if (respuesta==null
                    || respuesta==''
                    || respuesta.length==0){
                    $('#Respuesta').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Respuesta").removeClass('is-invalid');
                    },3000);
                    return;
                }


                var formulario = document.getElementById('form');
                formulario.submit();
          });



    });


</script>