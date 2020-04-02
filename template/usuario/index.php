<?php


require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Usuario","Persona");
$array_detalle = BDD::QUERY("select usuario , concat(nombre,' ',apellido) as persona,id_usuario from usuario 
inner join persona on usuario.idpersona = persona.id_persona where estado = 'ACTIVO';");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Usuarios","Usuario");
print DATATABLE::SCRIPTS_JS();