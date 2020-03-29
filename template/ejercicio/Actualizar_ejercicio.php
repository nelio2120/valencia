<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("ejercicio","id_ejercicio,id_nivel,nombre,descripcion,imagen","id_ejercicio=$id");

print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');

    print FORM::FORMULARIO_USUARIO("POST","Actualizar ejercicio","return validar_usuario();","#");

    $array2 = BDD::QUERY("select id_nivel as id ,concat(nombre,' ',rango ) as nombres from nivel");
    print FORM::GENERAR_SELECT($array2,"select","Nivel",$datos['id_nivel']);

    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"Ingrese el nombre del ejercicio","text","Ejercicio");

    print FORM::GENERAR_INPUT_USUARIO("Descripcion",$datos['descripcion'],"Ingrese la descripcion del ejercicio","text","Descripcion");

    print FORM::GENERAR_INPUT_USUARIO("Imagen",$datos['imagen'],"Ingrese el nombre del ejercicio","text","Imagen del ejercicio");

    

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