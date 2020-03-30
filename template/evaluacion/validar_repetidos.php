<?php

require('../../mod_seguridad/ambiente.php');

if(isset($_POST['tabla']) and isset($_POST['campo']) and isset($_POST['value'])) {
    $tabla = $_POST['tabla'];
    $campo = $_POST['campo'];
    $value = $_POST['value'];
    $consulta = BDD::CONSULTAR("$tabla","$campo","$campo=$value");
    if($consulta){
        echo true;
    }else{
        echo false;
    }
}

