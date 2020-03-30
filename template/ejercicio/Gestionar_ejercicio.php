<?php
require '../../mod_seguridad/ambiente.php';


print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Ejercicio");



$array2 = BDD::QUERY("select id_nivel as id,concat(nombre,' ',rango) as nombres from nivel");
print FORM::GENERAR_SELECT($array2,"select","Nivel");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su cedula","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Descripcion","","Ingrese su nombre","text","form-control py-4");

print FORM::GENERAR_INPUT_USUARIO("Imagen","","Ingrese su apellido","file"," py-4");


print FORM::GENERAR_BUTTON_SUBMIT("Crear Ejercicio");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>