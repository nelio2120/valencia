<?php
require '../../mod_seguridad/ambiente.php';


print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Ejercicio");



$array2 = BDD::QUERY("select id_nivel as id,concat(nombre,' ',rango) as nombres from nivel");
print FORM::GENERAR_SELECT($array2,"select","Nivel");

print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su cedula","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Descripcion","","Ingrese su nombre","text","form-control py-4");

print FORM::GENERAR_INPUT_USUARIO("Imagen","","Ingrese su apellido","file"," py-4");


print FORM::GENERAR_BUTTON_SUBMIT("Crear Ejercicio");

print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_LOS_SCRIPTS();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>

<script type="text/javascript">
	
	$(document).ready(function() {
		  $('#boton_submit').click(function(event) {
		  	event.preventDefault();
		  	
		  	var_1 = $('#Nombre').val();
		  	var_2 = $('#Descripcion').val();
			var_3 = $('#Imagen').val();

				if (var_1==null
	  				|| var_1==''
	   				|| var_1.length==0){
	   				$('#Nombre').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Nombre").removeClass('is-invalid');
					},3000);
					return;
				}

		

				if (var_2==null
	  				|| var_2==''
	   				|| var_2.length==0){
	   				$('#Descripcion').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Descripcion").removeClass('is-invalid');
					},3000);
					return;
				}

				if (var_3==null
	  				|| var_3==''
	   				|| var_3.length==0){
	   				$('#Imagen').toggleClass('is-invalid');
					setTimeout(function(){
						$("#Imagen").removeClass('is-invalid');
					},3000);
					return;
				}


				var formulario = document.getElementById('form');
				formulario.submit();
		  });



	});


</script>