<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');
require ('../core/classCategoria.php');

if(isset($_POST['boton_submit']))  classCategoria::INSERTAR_CATEGORIA();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Categoria");

print FORM::GENERAR_INPUT_USUARIO("descrpcion","","Ingrese la descripcion de categoria","text","Descripcion");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Entrenador");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();