<?php
require('../../mod_seguridad/ambiente.php');

if(isset($_POST['boton_submit']))  classEvaluacion::INSERTAR_EVALUACION();

$id = $_GET['id'];
$consulta = BDD::CONSULTAR("evaluacion_aspirante","id_evaluacion_aspirante,id_estudiante","id_evaluacion_aspirante=$id");

//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
if($consulta){
    print FORM::CREAR_FORMULARIO_CARD("POST","ELIMINAR EVALUACION");
    print "<h1>DESEAS ELIMINAR ESTA EVALUACION?</h1>";
    $id_estudiante = $consulta['idestudiante'];
    $estudiante = BDD::QUERY("select concat(nombre,' ',apellido) as nombre from estudiante" .
        " inner join persona on estudiante.id_persona = persona.id_persona where id_estudiante = $id_estudiante");
    print FORM::GENERAR_INPUT_USUARIO("id",$estudiante['nombre'],"","text","",true,"");
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Evaluacion");
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}
