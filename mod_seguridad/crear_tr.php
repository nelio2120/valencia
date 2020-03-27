<?php
    require ('./classDATATABLE.php');
    require ('../sistema/BDD.php');
    require ('./FORM.php');
    if(isset($_POST['ejercicio']) && isset($_POST['punto'])){
        $array = array("Ejercicio"=>$_POST['ejercicio'],"Punto"=>$_POST['punto']);
        echo DATATABLE::OBTENER_TR_INPUT_DETALLE_EJERCICIO($array);
    }