<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../sistema/BDD.php');
require ('../mod_seguridad/classFORM_MD.php');
require ('../mod_seguridad/classDATATABLE.php');

if(isset($_POST['boton_submit'])) return print "<script>console.log('LLAMA A NAVARRO')</script>";


//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print "<script>
    function ajax_crear_tr(ejercicio,punto,id) {
    console.log('si entra');
    var param = {ejercicio,punto};
    $.ajax({
        data: param,
        url: '../mod_seguridad/crear_tr.php',
        method: \"post\",
        success: function (data) {
            $(\"#\"+id+\"\").append(data);
        }
    });
}

</script>";
print Ambiente::ABRIR_BODY('bg-primary');

print FORM_MD::ABRIR_MENU_FORMULARIO_MD_CABECERA("home","CABECERA","true");
print FORM_MD::AGREGAR_MENU_FORMULARIO("form2","DETALLES",false);
print FORM_MD::CERRAR_MENU_FORMULARIO_MD_CABECERA();
print FORM_MD::ABRIR_DIV_FORMULARIO_MD();
// FORMULARIO
print FORM_MD::ABRIR_FORMULARIO_MD("home","Datos Generales","show active");
// campos del formulario
$array = BDD::QUERY("select e.id_persona as id, concat(p.nombre,' ',p.apellido) as nombres from estudiante as e 
inner join persona as p on p.id_persona = e.id_persona;");
print FORM::GENERAR_SELECT($array,"persona","Persona");
print FORM::GENERAR_INPUT_USUARIO("fecha","","","date");
// cerrar campos del formulario

print FORM_MD::CERRAR_FOMULARIO_MD();
print FORM_MD::CERRAR_FOMULARIO_MD();
// CIERRE FORMULARIO


// abre el formulario md 2
print FORM_MD::ABRIR_FORMULARIO_MD("form2","Detalle Cabecera");
$array_cabecera_detalle = array("Ejercicio"=>"select","Puntos"=>"text");
print DATATABLE::OBTENER_DATATABLE($array_cabecera_detalle,"Agregar Ejercicios","tabla1");

print FORM_MD::CERRAR_FOMULARIO_MD();
print FORM_MD::CERRAR_FOMULARIO_MD();
/*
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
*/
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::SCRIPTS_VALIDATOS();
?>