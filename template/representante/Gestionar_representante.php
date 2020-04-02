<?php
require '../../mod_seguridad/ambiente.php';
if(isset($_POST['boton_submit']))  classRepresentante::INSERTAR_REPRESENTANTE();
$javascript = "
        <script type=\"text/javascript\">
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
						$(\"#Cedula\").removeClass('is-invalid');
					},3000);
					return;
				}
			
				if (nombre==null
	  				|| nombre==''
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
	   				|| apellido.length==0){
	   				$('#Telefono').toggleClass('is-invalid');
					setTimeout(function(){
						$(\"#Telefono\").removeClass('is-invalid');
					},3000);
					return;
				}
					if (correo==null
	  				|| correo==''
       				|| /\s/.test(correo)
	   				|| apellido.length==0){
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
				if (fecha==null
	  				|| fecha==''
       				|| /\s/.test(fecha)
	   				|| fecha.length==0){
	   				$('#Fecha_nacimiento').toggleClass('is-invalid');
					setTimeout(function(){
						$(\"#Fecha_nacimiento\").removeClass('is-invalid');
					},3000);
					return;
				}
		  		if (sector==null
	  				|| sector==''
	   				|| sector.length==0){
	   				$('#sector').toggleClass('is-invalid');
					setTimeout(function(){
						$(\"#sector\").removeClass('is-invalid');
					},3000);
					return;
				}
				var formulario = document.getElementById('form');
				formulario.submit();
		  });
	});
</script>
";
$javascript1 = "<script> var input = document.getElementById('Cedula');
if(input){
    input.addEventListener('input',function(){
    if (this.value.length > 12)
        this.value = this.value.slice(0,12);
}) ;
}else{
    console.log('es nulo');
}
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
    function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = \" áéíóúabcdefghijklmnñopqrstuvwxyz\";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
    }
        
}
</script>";
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Crear Representante");
print FORM::GENERAR_INPUT_USUARIO("cedula","","Ingrese su cedula","text","Cedula","","onkeypress='return validaNumericos(event)'","Cedula");
print $javascript1;
print FORM::GENERAR_INPUT_USUARIO("nombre","","Ingrese su nombre","text","Nombre","","onkeypress=\"return soloLetras(event)\"");
print FORM::GENERAR_INPUT_USUARIO("apellido","","Ingrese su apellido","text","Apellido","","onkeypress=\"return soloLetras(event)\"");
print FORM::GENERAR_INPUT_USUARIO("telefono","","Ingrese su telefono","text","Telefono","","\"onkeypress='return validaNumericos(event)'");
print FORM::GENERAR_INPUT_USUARIO("correo","","Ingrese su correo","Email","Correo");
print FORM::GENERAR_INPUT_USUARIO("direccion","text","ingrese su direccion","text","Direccion","","onkeypress=\"return soloLetras(event)\"");
print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento","","Ciudad","date","Fecha de Nacimiento","");
print FORM::GENERAR_INPUT_USUARIO("sector","","Ingrese el sector","text","Sector","","onkeypress=\"return soloLetras(event)\"");
$array = BDD::QUERY("select id_estudiante as id , concat(nombre,' ',apellido)as nombres from estudiante 
inner join persona on persona.id_persona = estudiante.id_persona;");
print FORM::GENERAR_SELECT($array,"estudiante","Estudiante");
print FORM::GENERAR_BUTTON_SUBMIT("Crear Representante");
print $javascript;
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
?>


