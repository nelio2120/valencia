<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre","Rango");
$array_detalle = BDD::QUERY("select nombre, rango ,id_nivel from nivel");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Nivel","nivel");
print DATATABLE::SCRIPTS_JS();