<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Cedula","Nombre","Apellido","Telefono","Correo");
$array_detalle = BDD::QUERY("select Cedula,nombre, apellido ,telefono,correo,id_persona from persona");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Persona","personas");
print DATATABLE::SCRIPTS_JS();