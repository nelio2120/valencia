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
                                        Mantenimiento
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\"  onclick=\"src_iframe('../../template/usuario/');\">Gestionar Usuario</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/persona/');\">Generar Persona</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/ejercicio/');\">Generar Ejercicio</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/entrenador/');\">Generar Entrenador</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/categoria/');\">Generar Categoria</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/nivel/');\">Generar Nivel</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../../template/representante/');\">Generar Representante</a>
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
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseLayouts1\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\"
                                ><div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Reporte
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div
                            ></a>
                            <div class=\"collapse\" id=\"collapseLayouts1\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" onclick=\"src_iframe('../../template/reporte/formulario_pdf.php');\">Generar Reporte</a>
                                </nav>
                            </div>
                        </div>
                        
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Usuario Logeado en :</div>
                       Gimnasia Deportiva v1.0
                    </div>
                </nav>
            </div>
        ";
        return $html;
    }




}
