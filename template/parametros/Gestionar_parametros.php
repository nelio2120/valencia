<?php
require '../../mod_seguridad/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Parametro");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese el nombre del parametro","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Respuesta","","Ingrese la respuesta","text","form-control py-4");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Parametro");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>


<script type="text/javascript">
	
	$(document).ready(function() {
		  $('#boton_submit').click(function(event) {
		  	event.preventDefault();
		  	
		  	nombre = $('#Nombre').val();
		  	respuesta = $('#Respuesta').val();
			
				if (nombre==null
	  				|| nombre==''
	   				|| nombre.length==0){
	   				$('#Nombre').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Nombre").removeClass('is-invalid');
					},3000);
					return;}

		

					if (respuesta==null
	  				|| respuesta==''
	   				|| respuesta.length==0){
	   				$('#Respuesta').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Respuesta").removeClass('is-invalid');
					},3000);
					return;
				}


				var formulario = document.getElementById('form');
				formulario.submit();
		  });



	});


</script>