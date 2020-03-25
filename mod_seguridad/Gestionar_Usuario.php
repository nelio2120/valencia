<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');

if(isset($_POST['boton_submit'])) return print "<script>console.log('LLAMA A NAVARRO')</script>";


//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Usuario","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("Usuario","","Ingrese su usuario","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Clave","","Ingrese su password","password","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Confirmar","","Repita su Clave","password","form-control py-4");
//ASI SE GENERAN SELECT
$array = BDD::QUERY("select id_persona as id ,concat(nombre,' ',apellido) as nombres from persona");
print FORM::GENERAR_SELECT($array,"select","Persona");
//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Crear Usuario");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::SCRIPTS_VALIDATOS();
?>