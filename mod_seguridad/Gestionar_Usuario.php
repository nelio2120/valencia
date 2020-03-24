<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO();
print FORM::GENERAR_INPUT_USUARIO("usuario","","Ingrese su usuario","form-control py-4","text");
print FORM::OBTENER_FOOTER_HTML();

?>