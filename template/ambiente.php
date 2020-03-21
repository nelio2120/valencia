<?php

class Ambiente
{
    static public function ENCABEZADO($add = "")
    {
        $html = "";
        $html .= self::ABRIR_HEAD();
        $html .= self::OBTENER_ETIQUETAS_HEAD();
        $html .= $add;
        $html .= self::CERRAR_HEAD();
        return $html;
    }
    static public function ABRIR_HEAD()
    {
        $html = "";
        $html .= "<head>";
        return $html;
    }
    static public function OBTENER_LOS_SCRIPTS()
    {
        $html = "";
        $html .= "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"js/scripts.js\"></script>";
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
        <title>SB Admin Gimnasa</title>
        <link href=\"../startbootstrap-sb-admin-gh-pages/dist/css/styles.css\" rel=\"stylesheet\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js\" crossorigin=\"anonymous\"></script>        
        <link href=\"https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\" />                
                ";
        return $html;
    }
    static public function CERRAR_HEAD()
    {
        return $html = "</head>";
    }

    static public function NAV_BAR()
    {
        $html = "";
        $html .= "<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"index.html\">Sistema Academico</a>
            <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\">
            <i class=\"fas fa-bars\"></i></button
            ><!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Buscar....\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" />
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-primary\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ml-auto ml-md-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Configuraciones</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"login.html\">Cerrar Session</a>
                    </div>
                </li>
            </ul>
        </nav>";
        return $html;
    }
    static public function ABRIR_BODY($style = "")
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
        return $html = " </div>";
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
}