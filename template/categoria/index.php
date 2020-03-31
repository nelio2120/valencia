<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Descripcion");
$array_detalle = BDD::QUERY("select descripcion,idcategoria from categoria");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Categoria","categoria");
print DATATABLE::SCRIPTS_JS();