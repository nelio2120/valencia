<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("usuario","id_usuario,usuario,clave,idpersona","id_usuario=$id and estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar Usuario","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_usuario'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Usuario",$datos['usuario'],"Ingrese su usuario","text","Usuario");
    print FORM::GENERAR_INPUT_USUARIO("Clave",$datos['clave'],"Ingrese su password","password","Contraseña");
    print FORM::GENERAR_INPUT_USUARIO("Confirmar",$datos['clave'],"Repita su Clave","password","Confirmar Contraseña");
//ASI SE GENERAN SELECT
    $array = BDD::QUERY("select id_persona as id ,concat(nombre,' ',apellido) as nombres from persona");
    print FORM::GENERAR_SELECT($array,"select","Persona",$datos['idpersona']);
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT("Crear Usuario");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>