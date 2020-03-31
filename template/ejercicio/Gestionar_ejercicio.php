<?php
require '../../mod_seguridad/ambiente.php';

if(isset($_POST['boton_submit'])) classEjercicio::INSERTAR_EJERCICIO();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Ejercicio");



$array2 = BDD::QUERY("select id_nivel as id,concat(nombre,' ',rango) as nombres from nivel");
print FORM::GENERAR_SELECT($array2,"nivel","Nivel");

print FORM::GENERAR_INPUT_USUARIO("nombre","","Ingrese su cedula","text","Nombre");
print FORM::GENERAR_INPUT_USUARIO("descripcion","","Ingrese su nombre","text","Descripcion");

print FORM::GENERAR_INPUT_USUARIO("imagen","","Ingrese su apellido","file","Imagen");


print FORM::GENERAR_BUTTON_SUBMIT("Crear Ejercicio");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>

<script type="text/javascript">
	



</script>