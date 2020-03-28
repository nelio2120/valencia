<?php

class DATATABLE{
    static public function OBTENER_DATATABLE($array_encabezado,$titulo,$id_tabla_detalle){
        $html = "";
        $html .= "
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"99%\" cellspacing=\"0\">
                <thead>
                    <tr align=\"left\">
                        <th>$titulo</th>
                        <th><a onclick=\"ajax_crear_tr('select','text','$id_tabla_detalle');\" class='btn' href='#'><i class='fa fa-plus'></i></a></th>
                    </tr>
        ";
        $html .= self::OBTENER_TR_ENCABEZADO($array_encabezado);
        $html .= "</thead>";
        $html .= "<tbody id=\"$id_tabla_detalle\">";
        $html .= self::OBTENER_TR_INPUT_DETALLE_EJERCICIO($array_encabezado);
        $html .= "</tbody>";
        $html .= "</table>";
        $html .= "</div>";
        return $html;
    }
    static public function OBTENER_TR_INPUT_DETALLE_EJERCICIO($array){
        $html = "<tr style='padding: 0.5rem;'>";
        foreach ($array as $k=>$value)
        {
            if($value == "select")
            {
                $array_consulta = BDD::QUERY("select id_ejercicio as id,nombre as nombres from ejercicio");
                $select = FORM::GENERAR_SELECT($array_consulta,"ejercicio[]","Ejercicio");
                $html .= "<th >".$select."</th>";
            }
            if($value == "text"){
                $html .= "<th>".FORM::GENERAR_INPUT_USUARIO("puntos[]","","Ingrese su puntaje","text","Puntos")."<th>";
            }
        }
        $html .="</tr>";
        return $html;
    }
    static public function OBTENER_TR_ENCABEZADO($array)
    {
        $html = "<tr align=\"cleft\" style=\"height: 30px;\">";
        foreach ($array as $k=>$value)
        {
                $html .= "<th>$k</th>";
        }
        $html .= "</tr>";
        return $html;
    }

}