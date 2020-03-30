<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre","Club");
$array_detalle = BDD::QUERY("select concat(persona.nombre,' ',persona.apellido) as nombre,club,id_estudiante from estudiante
    inner join persona on persona.id_persona = estudiante.id_persona");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Estudiante","estudiante");
print DATATABLE::SCRIPTS_JS();