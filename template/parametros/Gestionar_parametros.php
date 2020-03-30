<?php
require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Parametro");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese el nombre del parametro","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Respuesta","","Ingrese la respuesta","text","form-control py-4");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Parametro");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>