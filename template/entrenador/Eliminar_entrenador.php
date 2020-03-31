<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("entrenador inner join persona on persona.id_persona = entrenador.id_persona","id_entrenador,concat(nombre,' ',apellido) as nombre","id_entrenador=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classEntrenador::ELIMINAR_ENTRENADOR();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Entrenador","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_entrenador'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("usuario",$datos['nombre'],"Ingrese su usuario","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);
    
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Entrenador");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
