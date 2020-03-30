<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre","Fecha");
$array_detalle = BDD::QUERY("select concat(persona.nombre,' ',persona.apellido) as nombre,fecha ,id_evaluacion_aspirante from evaluacion_aspirante
    inner join estudiante on evaluacion_aspirante.id_estudiante = estudiante.id_estudiante
    inner join persona on persona.id_persona = estudiante.id_persona");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Evaluacion","evaluacion");
print DATATABLE::SCRIPTS_JS();