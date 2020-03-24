<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Usuario");
print FORM::GENERAR_INPUT_USUARIO("Usuario","","Ingrese su usuario","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Clave","","Ingrese su password","password","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Confirmar","","Repita su Clave","password","form-control py-4");
$array[] = array("value"=>"1","valor"=>"nuevo");
$array[] = array("value"=>"2","valor"=>"nelio");
print FORM::GENERAR_SELECT($array,"select");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Usuario");
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();



print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>