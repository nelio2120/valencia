<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("representante","idRepresentante,Nombre,Apellido,Cedula","idRepresentante=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::ELIMINAR_USUARIO();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Usuario","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['idRepresentante'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['Nombre'],"Ingrese su usuario","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);
    print FORM::GENERAR_INPUT_USUARIO("Clave",$datos['Cedula'],"Cedula","hidden","");
//ASI SE GENERAN SELECT
    print FORM::GENERAR_INPUT_USUARIO("select",$datos['idestudiante'],"Repita su Clave","hidden","");
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
