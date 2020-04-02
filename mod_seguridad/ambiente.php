<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: ../login/login.php');
}else{
    require "../../core/ambiente.php";
    require '../../core/FORM.php';
    require '../../core/BDD.php';
    require '../../core/classFORM_MD.php';
    require '../../core/classDATATABLE.php';
    require '../../core/classCategoria.php';
    require "../../core/classUsuario.php";
    require "../../core/classLogin.php";
    require "../../core/classMenu.php";
    require "../../core/classPersona.php";
    require "../../core/classEvaluacion.php";
    require "../../core/classEjercicio.php";
    require "../../core/classRepresentante.php";
    require "../../core/classEntrenador.php";
    require "../../core/classEstudiante.php";
    require "../../core/classNivel.php";
}


?>
