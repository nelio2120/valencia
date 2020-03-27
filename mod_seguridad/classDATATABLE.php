<?php

class DATATABLE{
    static public function OBTENER_DATATABLE($array_encabezado,$titulo,$name){
        $html = "";
        $html .= "
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"99%\" cellspacing=\"0\">
                <tr align=\"left\">
                    <th>$titulo</th>
                    <th><button onclick=\"agregar_td()\" class='btn'><i class='glyphicon glyphicon-plus'></i></button></th>
                </tr>
        ";
        $html .= "";
        return $html;
    }
    static public function OBTENER_TR($array)
    {
        $html = "";
        foreach ($array as $k=>$value)
        {

        }
        $html .= "";
    }
}