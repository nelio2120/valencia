<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Entrenador");

$array[] = BDD::QUERY("select persona.id_persona,concat(persona.nombre,' ',persona.apellido) as nombres from persona");
print FORM::GENERAR_SELECT($array,"select","Persona");

$array2[] = BDD::QUERY("select nivel.id_nivel,concat(nivel.nombre,' ',nivel.rango) as nombres from nivel");
print FORM::GENERAR_SELECT($array2,"select","Nivel");

$array3[] = BDD::QUERY("select entrenador.id_entrenador,concat(persona.nombre,' ',persona.apellido) as nombres from entrenador 
inner join persona on entrenador.id_persona = persona.id_persona");
print FORM::GENERAR_SELECT($array3,"select","Entrenador");


print FORM::GENERAR_BUTTON_SUBMIT("Crear Entrenador");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>