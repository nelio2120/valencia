<?php
require('../template/ambiente.php');
require('../mod_seguridad/FORM.php');
require('../sistema/BDD.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Representante");
print FORM::GENERAR_INPUT_USUARIO("Cedula","","Ingrese su cedula","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su nombre","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("apellido","","Ingrese su apellido","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("telefono","","Ingrese su telefono","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("correo","","Ingrese su correo","Email","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("direccion","text","ingrese su direccion","password","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("ciudad","","Ciudad","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento","","Ciudad","date","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("sexo","","Ciudad","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("provincia","","Ciudad","text","form-control py-4");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Persona");
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>