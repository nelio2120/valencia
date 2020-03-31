<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("categoria","descripcion,idcategoria","idcategoria=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classCategoria::ACTUALIZAR_CATEGORIA();
//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');
    print FORM::FORMULARIO_USUARIO("POST","Actualizar Entrenador","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['idcategoria'],"","hidden","");
   print FORM::GENERAR_INPUT_USUARIO("descrpcion",$datos['descripcion'],"","text","Descripcion");
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Entrenador");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
