<?php
require ('../template/ambiente.php');
require ('../sistema/classMenu.php');
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY();
print Ambiente::NAV_BAR();
print Ambiente::ABRIR_LAYOUT_BASE();
print Menu::MENU_POR_DEFECTO();
print Ambiente::CERRA_LAYOUT_BASE();
print Ambiente::INICIAR_LAYOUT_CONTENT();
print Ambiente::ABRIR_IFRAME();
print Ambiente::CERRAR_BODY();
?>

