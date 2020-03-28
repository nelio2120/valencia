<?php


class Menu
{
    public static function MENU_POR_DEFECTO()
    {
        $html = "";
        $html .= " <div id=\"layoutSidenav\">
        <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Core</div>
                            <a class=\"nav-link\" href=\"index.html\"
                                ><div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Dashboard</a
                            >
                            <div class=\"sb-sidenav-menu-heading\">Modulos</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" 
                                data-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Seguridad
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" 
                                        data-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Persona
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\"  onclick=\"src_iframe('../../template/usuario/Gestionar_usuario.php');\">Gestionar Usuario</a>
                                            <a class=\"nav-link\" href=\"register.html\">Generar Reporte</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                         </nav>
                                    </div>
                                </nav>
                            </div>
                              <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\"
                                ><div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Evaluacion
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div
                            ></a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" onclick=\"src_iframe('../../template/evaluacion/Gestionar_evaluacion.php');\">Generar Evaluacion</a>
                                </nav>
                            </div>
                        </div>
                        
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Usuario Logeado en :</div>
                        Sistema Academico v1.0
                    </div>
                </nav>
            </div>
        ";
        return $html;
    }




}
