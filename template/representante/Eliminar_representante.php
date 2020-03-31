<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("representante","idRepresentante,concat(Nombre,' ',Apellido) as nombre","idRepresentante=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classRepresentante::ELIMINAR_REPRESENTANTE();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Usuario","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['idRepresentante'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("nombre",$datos['nombre'],"Ingrese su usuario","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);
//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Representante");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}






?>
