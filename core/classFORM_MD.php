<?php


class FORM_MD extends FORM
{
    static public function AGREGAR_MENU_FORMULARIO($href,$label,$select=true,$active ="",$nombre="home-tab")
    {
        $html = "";
        $html .= "
        <li class=\"nav-item\" style='height: 55px; margin-left: 10px; width: 140px; background: #9CD8F6; border-radius: 10px;' >
            <a class=\"nav-link $active font-weight-light\" id=\"$nombre\" style=' font-family: \"Times New Roman\", Times, serif;color: #003CED;height: 55px; ' data-toggle=\"tab\" href=\"#$href\" role=\"tab\" aria-controls=\"$href\" aria-selected=\"$select\">$label</a>
        </li>
        ";
        return $html;
    }
    static public function ABRIR_MENU_FORMULARIOS(){
        $html = "";
        $html .= "<ul class=\"nav nav-tabs\" id=\"myTab\"  role=\"tablist\" style='background: #9CD8F6;border-radius: 5px;'>";
        return $html;
    }
    static public function ABRIR_MENU_FORMULARIO_MD_CABECERA($href,$label,$select){
        $html = "";
        $html .= "
              <div id=\"layoutAuthentication\">
                <div id=\"layoutAuthentication_content\">
                    <main>
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-12\">
                                    <div class=\"card shadow-lg border-0 rounded-lg mt-5\">     
        ";
        $html .= self::ABRIR_MENU_FORMULARIOS();
        $html .= self::AGREGAR_MENU_FORMULARIO($href,$label,$select,"active");
        return $html;
    }
    static public function CERRAR_MENU_FORMULARIO_MD_CABECERA()
    {
        $html = "";
        $html .= "</ul>";
        return $html;
    }
    static public function ABRIR_DIV_FORMULARIO_MD(){
        $html = "";
        $html .= "
               <div class=\"tab-content\" id=\"myTabContent\">
        ";
        return $html;
    }
    static public function ABRIR_FORMULARIO_MD($href,$titulo,$active="",$form = false){
        $html = "";
        $html .= "
            <div class=\"tab-pane fade $active\" id=\"$href\" role=\"tabpanel\" aria-labelledby=\"$href-tab\">
        ";
        $html .= FORM::CREAR_FORMULARIO_CARD("POST",$titulo,"","",$form);
        return $html;
    }
    static public function CERRAR_FOMULARIO_MD(){
        $html = "";
        $html .= "</div>";
        return $html;
    }

}

?>