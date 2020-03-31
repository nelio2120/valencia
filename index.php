<?php

session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: ./template/login/login.php');
}else{
    header('Location: ./template/menu/menu_desktop.php');
}

?>