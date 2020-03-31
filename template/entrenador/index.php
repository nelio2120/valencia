<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre");
$array_detalle = BDD::QUERY("select concat(persona.nombre,' ',persona.apellido) as nombre, id_entrenador from entrenador
    inner join persona on persona.id_persona = entrenador.id_persona");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Entrenador","entrenador");
print DATATABLE::SCRIPTS_JS();