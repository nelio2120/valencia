<?php
    require ('../template/ambiente.php');
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY();
    print Ambiente::NAV_BAR();
    print Ambiente::ABRIR_LAYOUT_BASE();
    print Menu::MENU_POR_DEFECTO();
    print Ambiente::INICIAR_LAYOUT_CONTENT();

?>
