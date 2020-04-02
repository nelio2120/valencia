<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre","Descripcion","Nivel","Imagen");
$array_detalle = BDD::QUERY("select ejercicio.nombre, descripcion,nivel.nombre as n,imagen ,id_ejercicio from ejercicio 
inner join nivel on nivel.id_nivel = ejercicio.id_nivel");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Ejercicio","ejercicio");
print DATATABLE::SCRIPTS_JS();