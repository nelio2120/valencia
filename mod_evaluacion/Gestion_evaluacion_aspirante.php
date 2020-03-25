<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Evaluacion para aspirante");

$array3[] = BDD::QUERY("select estudiante.id_estudiante,concat(persona.nombre,' ',persona.apellido) as nombres from estudiante 
inner join persona on estudiante.id_persona = persona.id_persona");
print FORM::GENERAR_SELECT($array3,"select","Estudiante a evaluar");

$array2[] = BDD::QUERY("select parametro.id_parametro,concat(parametro.nombre,' ',parametro.respuesta) as nombres from parametro");
print FORM::GENERAR_SELECT($array2,"select","Parametros");

print FORM::GENERAR_INPUT_USUARIO("fecha","","Ingrese de la evaluacion","date","form-control py-4");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Evaluacion");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>