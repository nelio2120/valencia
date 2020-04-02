<?php
require '../../mod_seguridad/ambiente.php';
if(isset($_POST['boton_submit']))  classEstudiante::INSERTAR_ESTUDIANTE();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Entrenador");

$array = BDD::QUERY("select persona.id_persona as id,concat(persona.nombre,' ',persona.apellido) as nombres from persona");
print FORM::GENERAR_SELECT($array,"persona","Persona");

$array2 = BDD::QUERY("select nivel.id_nivel as id ,concat(nivel.nombre,' ',nivel.rango) as nombres from nivel");
print FORM::GENERAR_SELECT($array2,"nivel","Nivel");

$array3 = BDD::QUERY("select entrenador.id_entrenador as id ,concat(persona.nombre,' ',persona.apellido) as nombres from entrenador 
inner join persona on entrenador.id_persona = persona.id_persona");
print FORM::GENERAR_SELECT($array3,"entrenador","Entrenador");
print FORM::GENERAR_INPUT_USUARIO("club","","Ingrese el club","text","CLUB:");
$array4 = BDD::QUERY("select idcategoria as id , descripcion as nombres from categoria");
print FORM::GENERAR_SELECT($array4,"categoria","Categoria");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Entrenador");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>


