<?php
require('../../mod_seguridad/ambiente.php');

if(isset($_POST['ejercicio']) && isset($_POST['punto']) && isset($_POST['name_eje']) && isset($_POST['name_punto'])){
        $array = array("Ejercicio"=>$_POST['ejercicio'],"Punto"=>$_POST['punto']);
        echo DATATABLE::OBTENER_TR_INPUT_DETALLE_EJERCICIO($array,$_POST['name_eje'],$_POST['name_punto']);
    }
else{
    print "<script>console.log('hubo un error')</script>";
}