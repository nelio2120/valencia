<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("usuario","id_usuario,usuario,clave,idpersona","id_usuario=$id and estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classUsuario::UPDATE_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar Usuario","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_usuario'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Usuario",$datos['usuario'],"Ingrese su usuario","text","Usuario");
    print FORM::GENERAR_INPUT_USUARIO("Clave",$datos['clave'],"Ingrese su password","password","Contraseña");
    print FORM::GENERAR_INPUT_USUARIO("Confirmar",$datos['clave'],"Repita su Clave","password","Confirmar Contraseña");
//ASI SE GENERAN SELECT
    $array = BDD::QUERY("select id_persona as id ,concat(nombre,' ',apellido) as nombres from persona");
    print FORM::GENERAR_SELECT($array,"select","Persona",$datos['idpersona']);
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Usuario");

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
            usuario = $('#Usuario').val();
            contra = $('#Clave').val();
            confirmar = $('#Confirmar').val();

                if (usuario==null
                    || usuario==''
                    || /\s/.test(usuario)
                    || usuario.length==0){
                    $('#Usuario').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Usuario").removeClass('is-invalid');
                    },3000);
                    return;
                }
            
                if (contra==null
                    || contra==''
                    || /\s/.test(contra)
                    || contra.length==0){
                    $('#Clave').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Clave").removeClass('is-invalid');
                    },3000);
                    return;
                }

                if (confirmar==null
                    || confirmar==''
                    || /\s/.test(confirmar)
                    || confirmar.length==0){
                    $('#Confirmar').toggleClass('is-invalid');
                    setTimeout(function(){
                        $("#Confirmar").removeClass('is-invalid');
                    },3000);
                    return;
                }

                var formulario = document.getElementById('form_usuario');
                formulario.submit();



          });



    });


</script>