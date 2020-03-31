<?php
require '../../mod_seguridad/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("persona","id_persona,nombre,apellido,cedula,telefono,correo,direccion,fecha_nacimiento,sexo,provincia","id_persona=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classPersona::ELIMINAR_PERSONA();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Persona");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_persona'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Cedula",$datos['cedula'],"Ingrese su cedula","text","ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?",true);
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"Ingrese su nombre","text","",true);
    print FORM::GENERAR_INPUT_USUARIO("Telefono",$datos['telefono'],"Ingrese su telefono","text","",true);
//ASI SE GENERAN SELECT
   
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar persona");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}






?>
