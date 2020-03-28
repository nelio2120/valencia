<?php
require('../../mod_seguridad/ambiente.php');

if(isset($_POST['ejercicio']) && isset($_POST['punto'])){
        $array = array("Ejercicio"=>$_POST['ejercicio'],"Punto"=>$_POST['punto']);
        echo DATATABLE::OBTENER_TR_INPUT_DETALLE_EJERCICIO($array);
    }