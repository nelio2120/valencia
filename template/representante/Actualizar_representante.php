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

<script type="text/javascript">
    
    $(document).ready(function() {
          $('#boton_submit').click(function(event) {
            event.preventDefault();
            
            cedula = $('#Cedula').val();
            nombre = $('#Nombre').val();
            apellido = $('#Apellido').val();
            telefono = $('#Telefono').val();
            direccion = $('#Direccion').val();
            fecha = $('#Fecha_nacimiento').val();   
            correo = $('#Correo').val();
            sector = $('#sector').val();




                if (cedula==null
                    || cedula==''
                    || /\s/.test(cedula)
                    || cedula.length==0){
                    $('#Cedula').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Cedula").removeClass('is-invalid');
                    },3000);
                    return;
                }
            
                if (nombre==null
                    || nombre==''
                    || nombre.length==0){
                    $('#Nombre').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Nombre").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (apellido==null
                    || apellido==''
                    || apellido.length==0){
                    $('#Apellido').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Apellido").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (telefono==null
                    || telefono==''
                    || /\s/.test(telefono)
                    || apellido.length==0){
                    $('#Telefono').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Telefono").removeClass('is-invalid');
                    },3000);
                    return;
                }

                    if (correo==null
                    || correo==''
                    || /\s/.test(correo)
                    || apellido.length==0){
                    $('#Correo').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Correo").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (direccion==null
                    || direccion==''
                    || direccion.length==0){
                    $('#Direccion').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Direccion").removeClass('is-invalid');
                    },3000);
                    return;
                }
                if (fecha==null
                    || fecha==''
                    || /\s/.test(fecha)
                    || fecha.length==0){
                    $('#Fecha_nacimiento').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Fecha_nacimiento").removeClass('is-invalid');
                    },3000);
                    return;
                }
            


                if (sector==null
                    || sector==''
                    || sector.length==0){
                    $('#sector').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#sector").removeClass('is-invalid');
                    },3000);
                    return;
                }

                var formulario = document.getElementById('form');
                formulario.submit();



          });



    });


</script>