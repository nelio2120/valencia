<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("persona","id_persona,nombre,apellido,cedula,telefono,correo,direccion,fecha_nacimiento,sexo,provincia","id_persona=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar persona","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_persona'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Cedula",$datos['cedula'],"Ingrese su cedula","text","Cedula");
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"Ingrese su nombre","text","Nombre");

    print FORM::GENERAR_INPUT_USUARIO("Apellido",$datos['apellido'],"Ingrese su apellido","text","Apellido");


    print FORM::GENERAR_INPUT_USUARIO("Telefono",$datos['telefono'],"Ingrese su telefono","text","Telefono");


    print FORM::GENERAR_INPUT_USUARIO("correo",$datos['correo'],"Ingrese su correo","text","correo");


    print FORM::GENERAR_INPUT_USUARIO("Telefono",$datos['direccion'],"Ingrese su direccion","text","direccion");


    print FORM::GENERAR_INPUT_USUARIO("Ciudad",$datos['ciudad'],"Ingrese su ciudad","text","ciudad");

    print FORM::GENERAR_INPUT_USUARIO("Fecha nacimiento",$datos['fecha_nacimiento'],"Ingrese su fecha de nacimiento","text","Fecha de nacimiento");

    print FORM::GENERAR_INPUT_USUARIO("provincia",$datos['provincia'],"Ingrese su provincia","text","Provincia");


//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Persona");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>