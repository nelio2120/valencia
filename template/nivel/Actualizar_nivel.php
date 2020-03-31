<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("nivel","id_nivel,nombre,rango","id_nivel=$id");

print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classNivel::ACTUALIZAR_NIVEL();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar Nivel","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_nivel'],"","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"Ingrese un nombre","text","Nombre");

    print FORM::GENERAR_INPUT_USUARIO("Rango",$datos['rango'],"Ingrese un rango","text","Rango");

//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar nivel");

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
            rango = $('#Rango').val();
            
                if (nombre==null
                    || nombre==''
                    || nombre.length==0){
                    $('#Nombre').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Nombre").removeClass('is-invalid');
                    },3000);
                    return;}

        

                    if (rango==null
                    || rango==''
                    || rango.length==0){
                    $('#Rango').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Rango").removeClass('is-invalid');
                    },3000);
                    return;
                }


                var formulario = document.getElementById('form');
                formulario.submit();
          });



    });


</script>