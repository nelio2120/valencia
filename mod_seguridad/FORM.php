<?php


class FORM
{
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
                                        <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">$titulo</h3></div>
                                        <div class=\"card-body\">
                                            <form method=\"$method\" $onsubmit $action>   
        ";
        return $html;
    }
    static public function CERRAR_FORMULARIO()
    {
        return $html = "  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><br>
            </div>";
    }
    static public function GENERAR_INPUT_USUARIO($nombre,$valor= "",$placeholder,$tipo,$style= "form-control py-4")
    {
        $html = "";
        $html .= "
          <div class=\"form-row\">
            <div class=\"col-md-10\">
              <div class=\"form-group\">
                 <label class=\"small mb-1\" for=\"$nombre\">$nombre</label>
                 <input class=\"$style\" id=\"$nombre\" type=\"$tipo\" placeholder=\"$placeholder\" />
              </div>
            </div>
          </div>
        ";
        return $html;
    }
    static public function GENERAR_BUTTON_SUBMIT($label,$nombre="boton_submit",$style= "btn btn-primary btn-block")
    {
        $html = "";
        $html .= "
           <div class=\"form-group mt-4 mb-0\">
            <button class=\"$style\" type=\"submit\" id=\"$nombre\" name=\"$nombre\" href=\"#\" >$label</button>
           </div>
        ";
        return $html;
    }
    static public function GENERAR_SELECT($opciones=array(),$name,$label,$style= "form-control")
    {
        $html = "";
        $html .= "
            <div class=\"form-row\">
            <div class=\"col-md-10\">
              <div class=\"form-group\">
                 <label class=\"small mb-1\" for=\"$name\">$label</label>
                 <select name=\"$name\" id=\"$name\" class=\"$style\" >";
        foreach ($opciones as $k=>$v){
            $html .= "<option value=\"".$v['id']."\" > ".$v['nombres']." </option>";
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
                 <label class=\"small mb-1\" for=\"activo\">Activo</label>
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