<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::QUERY("select id_estudiante,id_nivel,id_entrenador,club, concat(nombre,' ',apellido) as nombres 
                    from estudiante,persona 
                    where persona.id_persona = estudiante.id_persona and id_estudiante = $id");

print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classEstudiante::ELIMINAR_ESTUDIANTE();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar estudiante","","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_estudiante'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("club",$datos['club'],"Club","text","Estas seguro de eliminar este estudiante?",true);
    print FORM::GENERAR_INPUT_USUARIO("Estudiante",$datos['nombres'],"","text","",true);
    print FORM::GENERAR_INPUT_USUARIO("id_entrenador",$datos['id_entrenador'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("id_nivel",$datos['id_nivel'],"","hidden","");
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar estudiante");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
