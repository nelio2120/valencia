<?php
require('../template/ambiente.php');
require('../mod_seguridad/FORM.php');
require('../sistema/BDD.php');



print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Entrenador");

$array = BDD::QUERY("select persona.id_persona,concat(persona.nombre,' ',persona.apellido) as nombres from persona");
print FORM::GENERAR_SELECT($array,"select","Persona");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Entrenador");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>