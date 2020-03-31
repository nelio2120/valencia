<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("persona","id_persona,nombre,apellido,cedula,telefono,ciudad,correo,direccion,fecha_nacimiento,sexo,provincia","id_persona=$id");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classPersona::ACTUALIZAR_PERSONA();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar persona","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_persona'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("cedula",$datos['cedula'],"Ingrese su cedula","text","Cedula","","","Cedula");
    print FORM::GENERAR_INPUT_USUARIO("nombre",$datos['nombre'],"Ingrese su nombre","text","Nombre","","","Nombre");

    print FORM::GENERAR_INPUT_USUARIO("apellido",$datos['apellido'],"Ingrese su apellido","text","Apellido","","","Apellido");


    print FORM::GENERAR_INPUT_USUARIO("telefono",$datos['telefono'],"Ingrese su telefono","text","Telefono","","","Telefono");


    print FORM::GENERAR_INPUT_USUARIO("correo",$datos['correo'],"Ingrese su correo","email","Correo","","","Correo");


    print FORM::GENERAR_INPUT_USUARIO("ciudad",$datos['ciudad'],"Ingrese su ciudad","text","ciudad","","","Ciudad");

    print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento",$datos['fecha_nacimiento'],"Ingrese su fecha de nacimiento","text","Fecha de nacimiento","","","Fecha");

    print FORM::GENERAR_INPUT_USUARIO("provincia",$datos['provincia'],"Ingrese su provincia","text","Provincia","","","Provincia");


//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Persona");
    $script = "<script type=\"text/javascript\">
    
    $(document).ready(function() {
          $('#boton_submit').click(function(event) {
            event.preventDefault();
            
            cedula = $('#Cedula').val();
            nombre = $('#Nombre').val();
            apellido = $('#Apellido').val();
            telefono = $('#Telefono').val();
            direccion = $('#Direccion').val();
            fecha = $('#Fecha').val();
            correo = $('#Correo').val();
            ciudad = $('#Ciudad').val();
            provincia = $('#Provincia').val();




                if (cedula==null
                    || cedula==''
                    || /\s/.test(cedula)
                    || cedula.length==0){
                    $('#Cedula').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Cedula\").removeClass('is-invalid');
                    },3000);
                    return;
                }
            
                if (
                    nombre==null
                    || apellido==''
                    || nombre.length==0){
                    $('#Nombre').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Nombre\").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (apellido==null
                    || apellido==''
                    || apellido.length==0){
                    $('#Apellido').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Apellido\").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (telefono==null
                    || telefono==''
                    || /\s/.test(telefono)
                    || telefono.length==0){
                    $('#Telefono').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Telefono\").removeClass('is-invalid');
                    },3000);
                    return;
                }

                    if (correo==null
                    || correo==''
                    || /\s/.test(correo)
                    || telefono.length==0){
                    $('#Correo').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Correo\").removeClass('is-invalid');
                    },3000);
                    return;
                }
                
                if (direccion==null
                    || direccion==''
                    || direccion.length==0){
                    $('#Direccion').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Direccion\").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (ciudad==null
                    || ciudad==''
                    || ciudad.length==0){
                    $('#Ciudad').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Ciudad\").removeClass('is-invalid');
                    },3000);
                    return;
                }


                if (fecha==null
                    || fecha==''
                    || fecha.length==0){
                    $('#Fecha_nacimiento').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Fecha_nacimiento\").removeClass('is-invalid');
                    },3000);
                    return;
                }

                 if (provincia==null
                    || provincia==''
                    || provincia.length==0){
                    $('#Provincia').toggleClass('is-invalid');
                    setTimeout(function(){
                        $(\"#Provincia\").removeClass('is-invalid');
                    },3000);
                    return;
                }
            


                

                var formulario = document.getElementById('form');
                formulario.submit();



          });



    });


</script>";
    print $script;

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>



