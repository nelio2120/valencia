<?php
require('../template/ambiente.php');
require('../mod_seguridad/FORM.php');
require('../sistema/BDD.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Persona");
print FORM::GENERAR_INPUT_USUARIO("Cedula","","Ingrese su cedula","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su nombre","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("apellido","","Ingrese su apellido","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("telefono","","Ingrese su telefono","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("correo","","Ingrese su correo","Email","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("direccion","text","ingrese su direccion","text","form-control py-4");
$array3 = BDD::QUERY("select estudiante.id_estudiante,concat(persona.nombre,' ',persona.apellido) as nombres from estudiante 
inner join persona on estudiante.id_persona = persona.id_persona");
print FORM::GENERAR_SELECT($array3,"select","Estudiante responsable");

print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento","","Ciudad","date","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("sector","","Ingrese el sector","text","form-control py-4");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Persona");
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>