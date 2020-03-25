<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Nivel");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese el nombre del nivel","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Rango","","Ingrese el rango del nivel","text","form-control py-4");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Nivel");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>