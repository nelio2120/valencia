<?php


class FORM
{
    static public function FORMULARIO_USUARIO()
    {
        $html = "";
        $html .= "
           <div id=\"layoutAuthentication\">
                <div id=\"layoutAuthentication_content\">
                    <main>
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                        <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Crear Usuario</h3></div>
                                        <div class=\"card-body\">
                                            <form method=\"POST\">
              
        ";
        return $html;
    }
    static public function GENERAR_INPUT_USUARIO($nombre,$valor= "",$placeholder,$style= "form-control py-4",$tipo)
    {
        $html = "";
        $html .= "
            <div class=\"form-row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label class=\"small mb-1\" for=\"$nombre\">$nombre</label>
                        <input class=\"$style\" id=\"$nombre\" name=\"$nombre\" type=\"$tipo\" placeholder=\"$placeholder\" />
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