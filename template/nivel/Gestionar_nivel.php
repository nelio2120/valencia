<?php
require '../../mod_seguridad/ambiente.php';

if(isset($_POST['boton_submit']))  classNivel::INSERTAR_NIVEL();

print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Nivel");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese el nombre del nivel","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Rango","","Ingrese el rango del nivel","text","form-control py-4");

print FORM::GENERAR_BUTTON_SUBMIT("Crear Nivel");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();

print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>


<script type="text/javascript">	
	$(document).ready(function() {
		  $('#boton_submit').click(function(event) {
		  	event.preventDefault();
		  	
		  	nombre = $('#Nombre').val();
		  	rango = $('#Rango').val();
			
				if (nombre==null
	  				|| nombre==''
	   				|| nombre.length==0){
	   				$('#Nombre').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Nombre").removeClass('is-invalid');
					},3000);
					return;}

		

					if (rango==null
	  				|| rango==''
	   				|| rango.length==0){
	   				$('#Rango').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Rango").removeClass('is-invalid');
					},3000);
					return;
				}


				var formulario = document.getElementById('form');
				formulario.submit();
		  });



	});


</script>