<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("ejercicio","id_ejercicio,id_nivel,nombre,descripcion,imagen","id_ejercicio=$id");

if($datos){
    if(isset($_POST['boton_submit'])) classEjercicio::ELIMINAR_EJERCICIO();
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');

    print FORM::FORMULARIO_USUARIO("POST","Actualizar ejercicio","return validar_usuario();","#");
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_ejercicio'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("nombre",$datos['nombre'],"Ingrese el nombre del ejercicio","text","ESTAS SEGURO DE ELIMINAR?");

    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar ejercicio");
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();

}else{
    print Ambiente::PAGINA_404();
}


?>