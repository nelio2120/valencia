<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("estudiante","id_estudiante,id_persona,id_nivel,id_entrenador,club,id_categoria","id_estudiante=$id");

print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classEstudiante::ACTUALIZAR_ESTUDIANTE();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');
    print FORM::FORMULARIO_USUARIO("POST","Actualizar Estudiante","return validar_usuario();","#");
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_estudiante'],"","hidden","");


    $array = BDD::QUERY("select id_persona as id ,concat(nombre,' ',apellido) as nombres from persona");
    print FORM::GENERAR_SELECT($array,"persona","Persona",$datos['id_persona']);

    $array2 = BDD::QUERY("select id_nivel as id ,concat(nombre,' ',rango ) as nombres from nivel");

    print FORM::GENERAR_SELECT($array2,"nivel","Nivel",$datos['id_nivel']);


    $array3 = BDD::QUERY("select id_entrenador as id ,concat(nombre,' ',apellido) as nombres from entrenador,persona where persona.id_persona = entrenador.id_persona");

    print FORM::GENERAR_SELECT($array3,"entrenador","Entrenador",$datos['id_entrenador']);
    print FORM::GENERAR_INPUT_USUARIO("club",$datos['club'],"Ingrese su club","text","Club");
    $array4 = BDD::QUERY("select idcategoria as id , descripcion as nombres from categoria");
    print FORM::GENERAR_SELECT($array4,"categoria","Categoria",$datos['id_categoria']);

//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar estudiante");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>