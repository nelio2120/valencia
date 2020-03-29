<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("representante","idRepresentante,Nombre,Apellido,Cedula,Telefono,correo,idestudiante,fecha_nacimiento,sector,direccion","idRepresentante=$id");


print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-dark');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar representante","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['idRepresentante'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['Nombre'],"Ingrese su nombre","text","Nombre");
    print FORM::GENERAR_INPUT_USUARIO("Apellido",$datos['Apellido'],"Ingrese su nombre","text","Apellido");
    print FORM::GENERAR_INPUT_USUARIO("Cedula",$datos['Cedula'],"Ingrese su cedula","text","Cedula");
    print FORM::GENERAR_INPUT_USUARIO("Telefono",$datos['Telefono'],"Telefono","text","Telefono");
    print FORM::GENERAR_INPUT_USUARIO("correo",$datos['correo'],"correo electtronico","text","Correo");
//ASI SE GENERAN SELECT
    $array = BDD::QUERY("select e.id_estudiante as id ,concat(p.nombre,' ',p.apellido) as nombres from estudiante e join persona p on e.id_persona = p.id_persona");
    print FORM::GENERAR_SELECT($array,"select","Estudiante",$datos['idestudiante']);
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar representante");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>