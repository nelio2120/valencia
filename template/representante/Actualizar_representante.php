<?php
require '../../mod_seguridad/ambiente.php';

$id = $_GET['id'];
$datos = BDD::CONSULTAR("representante","idRepresentante,Nombre,Apellido,Cedula,Telefono,correo,fecha_nacimiento,sector,direccion,id_estudiante","idRepresentante=$id");
print Ambiente::ENCABEZADO();
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
if($datos){
    if(isset($_POST['boton_submit']))  classRepresentante::ACTUALIZAR_REPRESENTANTE();
//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Actualizar representante","return validar_usuario();","#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$datos['idRepresentante'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("cedula",$datos['Cedula'],"Ingrese su cedula","text","Cedula");
    print FORM::GENERAR_INPUT_USUARIO("nombre",$datos['Nombre'],"Ingrese su nombre","text","Nombre");
    print FORM::GENERAR_INPUT_USUARIO("apellido",$datos['Apellido'],"Ingrese su apellido","text","Apellido");
    print FORM::GENERAR_INPUT_USUARIO("telefono",$datos['Telefono'],"Ingrese su telefono","text","Telefono");
    print FORM::GENERAR_INPUT_USUARIO("correo",$datos['correo'],"Ingrese su correo","Email","Correo");
    print FORM::GENERAR_INPUT_USUARIO("direccion",$datos['direccion'],"ingrese su direccion","text","Direccion");
    print FORM::GENERAR_INPUT_USUARIO("fecha_nacimiento",$datos['fecha_nacimiento'],"Ciudad","date","Fecha de Nacimiento");
    print FORM::GENERAR_INPUT_USUARIO("sector",$datos['sector'],"Ingrese el sector","text","Sector");
    $array = BDD::QUERY("select id_estudiante as id , concat(nombre,' ',apellido)as nombres from estudiante 
inner join persona on persona.id_persona = estudiante.id_persona;");
    print FORM::GENERAR_SELECT($array,"estudiante","Estudiante",$datos['id_estudiante']);

    //ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar representante");
    print $javascript;
//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
   print Ambiente::PAGINA_404();
}

?>

