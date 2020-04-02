<?php


class FORM {

    static public function FORMULARIO_USUARIO($method="POST",$titulo = "",$onsubmit = "",$action = "")
    {
        $html = "";
        if($onsubmit) $onsubmit = "onsubmit=\"$onsubmit\" ";
        if($action) $action = "action=\"$action\" ";
        $html .= "
           <div id=\"layoutAuthentication\">
                <div id=\"layoutAuthentication_content\">
                    <main>
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <div class=\"card shadow-lg border-0 rounded-lg mt-5\">                                       
        ";
        $html .= self::CREAR_FORMULARIO_CARD($method,$titulo,$onsubmit,$action);
        return $html;
    }
    static public function CREAR_FORMULARIO_CARD($method,$titulo,$onsubmit,$action,$noForm = "")
    {
        $html = "";
        if(!$noForm) $form = "<form method=\"$method\" $onsubmit $action enctype='multipart/form-data'> ";
        $html .= "
                 <div class=\"card-header\">
                    <h3 class=\"text-center font-weight-light my-4\">$titulo</h3>
                 </div>
                 <div class=\"card-body\">
                   $form
        ";
        return $html;
    }
    static public function CERRAR_FORMULARIO($form = false)
    {
        if (!$form) $formulario = "</form>";
        return $html = "  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><br>
            </div>";
    }

    static public function GENERAR_INPUT_USUARIO($nombre,$valor= "",$placeholder,$tipo,$label="",$read_online="",$condicion ="",$id="",$style= "form-control py-4")
    {
        $html = "";
        if($read_online) $read_online = "readonly=\"readonly\"";
        $html .= "
          <div class=\"form-row\">
            <div class=\"col-md-10\">
              <div class=\"form-group\">
                 <label class=\"small mb-1\" for=\"$nombre\">$label</label>
                 <input class=\"$style\" id=\"$id\" value=\"$valor\" name=\"$nombre\" $condicion type=\"$tipo\" required $read_online placeholder=\"$placeholder\" />
              </div>
            </div>
          </div>
        ";
        return $html;
    }
    static public function GENERAR_BUTTON_SUBMIT($label,$nombre="boton_submit",$class= "btn btn-primary btn-block",$style="")
    {
        $html = "";
        $html .= "
           <div class=\"form-group mt-4 mb-0\">
            <button class=\"$class\" style='$style' type=\"submit\" id=\"$nombre\" name=\"$nombre\" href=\"#\" >$label</button>
           </div>
        ";
        return $html;
    }
    static public function GENERAR_BUTTON_SUBMIT_ELIMINAR($label,$nombre="boton_submit",$style= "btn btn-primary btn-block")
    {
        $html = "";
        $html .= "
            
           <div class=\"form-row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                         <button class=\"$style\" type=\"submit\" id=\"$nombre\" name=\"$nombre\" href=\"#\" >$label</button>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <a class=\"btn btn-danger btn-block\" href=\"./index.php\" id=\"$nombre\" name=\"$nombre\" href=\"#\" >CANCELAR</a>
                    </div>
                </div>
                 </div>
        ";
        return $html;
    }
    static public function GENERAR_SELECT($opciones=array(),$name,$label,$select="",$style="form-control")
    {
        $html = "";
        $html .= "
            <div class=\"form-row\">
            <div class=\"col-md-10\">
              <div class=\"form-group\">
                 <label class=\"small mb-1\" for=\"$name\">$label</label>
                 <select name=\"$name\" id=\"$name\" class=\"$style\"   >";
        $selected = "";
        foreach ($opciones as $key=>$value){
            if($select == $value['id']) $selected = "selected";
            $html .= "<option value=\"".$value['id']."\" $selected > ".$value['nombres']." </option>";
            $selected = "";
        }
        $html .= "
                 </select>
              </div>
            </div>
          </div>
        ";
        return $html;
    }
    static public function GENERAR_SELECT_ACTIVO($style= "form-control")
    {
        $html = "";
        $html .= "
            <div class=\"form-row\">
            <div class=\"col-md-10\">
              <div class=\"form-group\">
                 <label class=\"small mb-1\" for=\"activo\">Estado</label>
                 <select name=\"activo\" id=\"activo\" class=\"$style\" >
                    <option value=\"ACTIVO\">ACTIVO</option>
                    <option value=\"INACTIVO\">INACTIVO</option>
                    ";
        $html .= "
                 </select>
              </div>
            </div>
          </div>
        ";
        return $html;
    }


    static public function OBTENER_FOOTER_HTML()
    {
        $html = "";
        $html .= "
             <div id=\"layoutAuthentication_footer\">
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        ";
        return $html;
    }


}