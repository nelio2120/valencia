<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("ejercicio","id_ejercicio,id_nivel,nombre,descripcion,imagen","id_ejercicio=$id");

print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit'])) classEjercicio::ACTUALIZAR_EJERCICIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');

    print FORM::FORMULARIO_USUARIO("POST","Actualizar ejercicio","return validar_usuario();","#");

    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_ejercicio'],"","hidden","");
    $array2 = BDD::QUERY("select id_nivel as id ,concat(nombre,' ',rango ) as nombres from nivel");
    print FORM::GENERAR_SELECT($array2,"nivel","Nivel",$datos['id_nivel']);

    print FORM::GENERAR_INPUT_USUARIO("nombre",$datos['nombre'],"Ingrese el nombre del ejercicio","text","Ejercicio");

    print FORM::GENERAR_INPUT_USUARIO("descripcion",$datos['descripcion'],"Ingrese la descripcion del ejercicio","text","Descripcion");

    print FORM::GENERAR_INPUT_USUARIO("image",$datos['imagen'],"Ingrese el nombre del ejercicio","hidden","Imagen del ejercicio");

    

//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar ejercicio");

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
            
            var_1 = $('#Nombre').val();
            var_2 = $('#Descripcion').val();
            var_3 = $('#Imagen').val();

                if (var_1==null
                    || var_1==''
                    || var_1.length==0){
                    $('#Nombre').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Nombre").removeClass('is-invalid');
                    },3000);
                    return;
                }

        

                if (var_2==null
                    || var_2==''
                    || var_2.length==0){
                    $('#Descripcion').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Descripcion").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (var_3==null
                    || var_3==''
                    || var_3.length==0){
                    $('#Imagen').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Imagen").removeClass('is-invalid');
                    },3000);
                    return;
                }


                var formulario = document.getElementById('form');
                formulario.submit();
          });



    });


</script>