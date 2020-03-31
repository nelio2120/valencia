<?php

require '../../mod_seguridad/ambiente.php';

if(isset($_POST['boton_submit']))  classCategoria::INSERTAR_CATEGORIA();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Categoria","","","form");
print FORM::GENERAR_INPUT_USUARIO("Descripcion","","Ingrese la descripcion de categoria","text","Descripcion");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Entrenador");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>

<script type="text/javascript">
	
	$(document).ready(function() {
		  $('#boton_submit').click(function(event) {
		  	event.preventDefault();
		  	

		  	var_2 = $('#Descripcion').val();

		

				if (var_2==null
	  				|| var_2==''
	   				|| var_2.length==0){
	   				$('#Descripcion').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Descripcion").removeClass('is-invalid');
					},3000);
					return;
				}


				var formulario = document.getElementById('form');
				formulario.submit();
		  });



	});


</script>