<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Cedula","Nombre","Apellido","Telefono","Correo");
$array_detalle = BDD::QUERY("select Cedula,Nombre, Apellido ,Telefono,correo,idRepresentante from representante");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Representante","representante");
print DATATABLE::SCRIPTS_JS();