<?php
require('../template/ambiente.php');
require('../mod_seguridad/FORM.php');
require('../sistema/BDD.php');
require('../mod_seguridad/classFORM_MD.php');
require('../mod_seguridad/classDATATABLE.php');
require('../core/classUsuario.php');
$id = $_GET['id'];

$datos = BDD::CONSULTAR("usuario","id_usuario,usuario,clave,idpersona","id_usuario=$id and estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::ELIMINAR_USUARIO();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar Usuario","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_usuario'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Usuario",$datos['usuario'],"Ingrese su usuario","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);
    print FORM::GENERAR_INPUT_USUARIO("Clave",$datos['clave'],"Ingrese su password","hidden","");
//ASI SE GENERAN SELECT
    print FORM::GENERAR_INPUT_USUARIO("select",$datos['idpersona'],"Repita su Clave","hidden","");
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Usuario");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}






?>
