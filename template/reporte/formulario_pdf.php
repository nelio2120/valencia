<?php
require '../../mod_seguridad/ambiente.php';
require '../../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
if(isset($_POST['boton_submit'])){
ob_start();
require_once '../../reportes/reporte_evaluacion.php';
$html_audio = ob_get_clean();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
$html = new Html2Pdf('P','A4','es','true','UTF-8');
$html->writeHTML($html_audio);
$html->output('pdf_generar.pdf');
}
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Generar Pdf");
$array = BDD::QUERY("select id_evaluacion_aspirante as id, concat(nombre,' ',apellido,' ',evaluacion_aspirante.fecha) as nombres from evaluacion_aspirante 
            inner join estudiante on evaluacion_aspirante.id_estudiante = estudiante.id_estudiante
            inner join persona on persona.id_persona=estudiante.id_persona");
print FORM::GENERAR_SELECT($array,"evaluacion","Evaluacion");
print FORM::GENERAR_BUTTON_SUBMIT("Generar Pdf");


?>





