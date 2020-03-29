<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("parametro","id_parametro,nombre,respuesta","id_parametro=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::ELIMINAR_USUARIO();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Parametro","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_parametro'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Nombre parametro",$datos['nombre'],"Ingrese su parametro","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);


    print FORM::GENERAR_INPUT_USUARIO("Respuesta",$datos['respuesta'],"Respuesta","text","Respuesta",true);

    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Parametro");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>