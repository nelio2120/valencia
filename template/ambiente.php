<?php

class Ambiente
{
    static public function ENCABEZADO($add = "")
    {
        $html = "";
        $html .= self::ABRIR_HEAD();
        $html .= self::OBTENER_ETIQUETAS_HEAD();
        $html .= self::SCRIPT_IFRAME();
        $html .= $add;
        $html .= self::CERRAR_HEAD();
        return $html;
    }
    static public function SCRIPTS_VALIDATOS()
    {
        $html = "";
        $html .= "<script src='../static/validators.js'></script>";
        return $html;
    }
    static public function ABRIR_HEAD()
    {
        $html = "";
        $html .= "<head>";
        return $html;
    }
    static public function SCRIPT_IFRAME()
    {
        $html = "";
        $html .= "
                <script>
                    function src_iframe(url) {
                       document.getElementById('iframe_principal').src=url;
                    }
                </script>
        ";
        return $html;
    }
    static public function OBTENER_LOS_SCRIPTS()
    {
        $html = "";
        $html .= "
        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../startbootstrap-sb-admin-gh-pages/dist/js/scripts.js\"></script>";
        return $html;
    }
    static public function OBTENER_ETIQUETAS_HEAD()
    {
        $html = "";
        $html.= "
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"NELIO CIGUENCIA\" />
        <title>Sistema de Gimnasa</title>
        <link href=\"../startbootstrap-sb-admin-gh-pages/dist/css/styles.css\" rel=\"stylesheet\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js\" crossorigin=\"anonymous\"></script>        
        <link href=\"https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\" />                
        <script src='../static/validators.js'></script>               
                ";
        return $html;
    }
    static public function CERRAR_HEAD()
    {
        return $html = "</head>";
    }
    static public function PAGINA_404()
    {
        $html = "";
        $html .= "
            <div id=\"layoutError\">
            <div id=\"layoutError_content\">
                <main>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"text-center mt-4\">
                                    <img class=\"mb-4 img-error\" src=\"../startbootstrap-sb-admin-gh-pages/src/assets/img/error-404-monochrome.svg\" />
                                    <p class=\"lead\">This requested URL was not found on this server.</p>
                                    <a href=\"../login/login.php\"><i class=\"fas fa-arrow-left mr-1\"></i>Return to Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id=\"layoutError_footer\">
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
        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../startbootstrap-sb-admin-gh-pages/src/js/scripts.js\"></script>
        ";
        return $html;
    }

    static public function NAV_BAR()
    {
        $html = "";
        $html .= "
    <div id=\"layoutSidenav_nav\">
         <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
                 <a class=\"navbar-brand\" href=\"index.html\">Sistema Academico</a>
                    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\">
                        <i class=\"fas fa-bars\"></i>
                    </button><!-- Navbar Search-->
            <div class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
                
            </div>
            <!-- Navbar-->
            <ul class=\"navbar-nav ml-auto ml-md-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user fa-fw\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Configuraciones</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"login.html\">Cerrar Session</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>";
        return $html;
    }
    static public function ABRIR_BODY($style = "sb-nav-fixed")
    {
        $html = "";
        if ($style != "") $style = "class=\"$style\"";
        $html .= "<body $style>";
        return $html;
    }
    static public function CERRAR_BODY()
    {
        $html = "";
        $html .= self::OBTENER_LOS_SCRIPTS();
        $html .= "</body>";
        return $html;
    }
    static public function ABRIR_LAYOUT_BASE()
    {
        return $html = "<div id=\"layoutSidenav\">";
    }
    static public function CERRA_LAYOUT_BASE()
    {
        return $html = "</div>";
    }
    static public function INICIAR_LAYOUT_CONTENT()
    {
        $html = "";
        $html .= "<div id=\"layoutSidenav_content\">";
        return $html;
    }
    static public function CERRA_LAYOUT_CONTENT()
    {
        return $html = " </div>";
    }
    static public function ABRIR_IFRAME()
    {
        $html = "";
        $html .= "
        <iframe id=\"iframe_principal\" class=\"\" 
        src=\"../startbootstrap-sb-admin-gh-pages/dist/login.html\" 
        width=\"auto\" frameborder=\"0\" 
        style=\"width:100%; height: 100%;PADDING:0px;MARGIN:0px;\">IFRAME</iframe>
        ";
        return $html;
    }

}