<?php
require '../../mod_seguridad/ambiente.php';
if (isset($_POST['boton_submit'])) classPersona::INSERTAR_PERSONA();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Representante");
print FORM::GENERAR_INPUT_USUARIO("Cedula","","Ingrese su cedula","text","Cedula");
print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su nombre","text","Nombre");
print FORM::GENERAR_INPUT_USUARIO("apellido","","Ingrese su apellido","text","Apellido");
print FORM::GENERAR_INPUT_USUARIO("telefono","","Ingrese su telefono","text","Telefono");
print FORM::GENERAR_INPUT_USUARIO("correo","","Ingrese su correo","Email","Correo");
print FORM::GENERAR_INPUT_USUARIO("direccion","","ingrese su direccion","text","Direccion");
print FORM::GENERAR_INPUT_USUARIO("ciudad","","Ciudad","text","Ciudad");
print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento","","Ciudad","date","Fecha de nacimiento");
$array[] = array("id"=>"M","nombres"=>"Masculino");
$array[] = array("id"=>"F","nombres"=>"Femenino");
print FORM::GENERAR_SELECT($array,"sexo","Sexo");
print FORM::GENERAR_INPUT_USUARIO("provincia","","Provincia","text","Provincia");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Persona");
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>