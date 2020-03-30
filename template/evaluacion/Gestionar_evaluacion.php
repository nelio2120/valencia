<?php
require('../../mod_seguridad/ambiente.php');


if(isset($_POST['boton_submit']))  classEvaluacion::INSERTAR_EVALUACION();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');

$javascript = "<script> var input = document.getElementById('punto');
if(input){
    input.addEventListener('input',function(){
    if (this.value.length > 2)
        this.value = this.value.slice(0,2);
}) ;
}else{
    console.log('es nulo');
}
</script>";
print "<form method=\"POST\"> ";

print FORM_MD::ABRIR_MENU_FORMULARIO_MD_CABECERA("home","Datos Generales","true");
print FORM_MD::AGREGAR_MENU_FORMULARIO("form2","Flexibilidad",false);
print FORM_MD::AGREGAR_MENU_FORMULARIO("form3","Fuerza",false);
print FORM_MD::CERRAR_MENU_FORMULARIO_MD_CABECERA();
print FORM_MD::ABRIR_DIV_FORMULARIO_MD();

// FORMULARIO
print FORM_MD::ABRIR_FORMULARIO_MD("home","Datos Generales","show active",false);
// campos del formulario
$array = BDD::QUERY("select e.id_estudiante as id, concat(p.nombre,' ',p.apellido) as nombres from estudiante as e 
inner join persona as p on p.id_persona = e.id_persona;");
print FORM::GENERAR_SELECT($array,"estudiante","Estudiante");
print FORM::GENERAR_INPUT_USUARIO("fecha","","","date","Fecha");

// cerrar campos del formulario

print FORM_MD::CERRAR_FOMULARIO_MD();
print FORM_MD::CERRAR_FOMULARIO_MD();
// CIERRE FORMULARIO


// abre el formulario md 2
print FORM_MD::ABRIR_FORMULARIO_MD("form2","Flexibilidad","",false);
$array_cabecera_detalle = array("Ejercicio"=>"select","Puntos"=>"text");
print DATATABLE::OBTENER_DATATABLE($array_cabecera_detalle,"Agregar Ejercicios","tabla1","ejercicio1","punto1","min=\"1\" max=\"10\"  ","punto");
print FORM::GENERAR_INPUT_USUARIO("tipo1","F","","hidden","");
print FORM_MD::CERRAR_FOMULARIO_MD();
print FORM_MD::CERRAR_FOMULARIO_MD();

//tercer formulario #3
print FORM_MD::ABRIR_FORMULARIO_MD("form3","Fuerza","",false);
$array_cabecera_detalle = array("Ejercicio"=>"select","Puntos"=>"text");
print DATATABLE::OBTENER_DATATABLE($array_cabecera_detalle,"Agregar Ejercicios","tabla2","ejercicio2","punto2","min=\"1\" max=\"10\" ");
print FORM::GENERAR_INPUT_USUARIO("tipo2","S","","hidden","");

print FORM_MD::CERRAR_FOMULARIO_MD();
print FORM_MD::CERRAR_FOMULARIO_MD();
print "<br/>";
print FORM::GENERAR_BUTTON_SUBMIT("Crear Usuario","boton_submit","btn btn-secondary btn-block","width:50%");
print "<br/>";
print $javascript;
print "</form> ";
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::SCRIPTS_VALIDATOS();