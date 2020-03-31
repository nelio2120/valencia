<?php
require '../../mod_seguridad/ambiente.php';


print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Persona");
print FORM::GENERAR_INPUT_USUARIO("Cedula","","Ingrese su cedula","text","Cedula");
print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese su nombre","text","Nombre");
print FORM::GENERAR_INPUT_USUARIO("apellido","","Ingrese su apellido","text","Apellido");
print FORM::GENERAR_INPUT_USUARIO("telefono","","Ingrese su telefono","text","Telefono");
print FORM::GENERAR_INPUT_USUARIO("correo","","Ingrese su correo","Email","Correo");
print FORM::GENERAR_INPUT_USUARIO("direccion","text","ingrese su direccion","text","Direccion");
$array3 = BDD::QUERY("select estudiante.id_estudiante as id,concat(persona.nombre,' ',persona.apellido) as nombres from estudiante 
inner join persona on estudiante.id_persona = persona.id_persona");
print FORM::GENERAR_SELECT($array3,"select","Estudiante responsable");

print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento","","Ciudad","date","Fecha de Nacimiento");
print FORM::GENERAR_INPUT_USUARIO("sector","","Ingrese el sector","text","Sector");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Persona");
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
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