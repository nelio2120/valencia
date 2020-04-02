<?php

class DATATABLE{
    static public function OBTENER_DATATABLE($array_encabezado,$titulo,$id_tabla_detalle,$name_input_select,$name_input_punto,$condicion = "",$id=""){
        $html = "";
        $html .= "
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"99%\" cellspacing=\"0\">
                <thead>
                    <tr align=\"left\">
                        <th>$titulo</th>
                        <th><a onclick=\"ajax_crear_tr('select','text','$id_tabla_detalle','$name_input_select','$name_input_punto');\" class='btn' href='#'><i class='fa fa-plus'></i></a></th>
                    </tr>
        ";
        $html .= self::OBTENER_TR_ENCABEZADO($array_encabezado);
        $html .= "</thead>";
        $html .= "<tbody id=\"$id_tabla_detalle\">";
        $html .= self::OBTENER_TR_INPUT_DETALLE_EJERCICIO($array_encabezado,$name_input_select,$name_input_punto,$condicion,$id);
        $html .= "</tbody>";
        $html .= "</table>";
        $html .= "</div>";
        return $html;
    }
    static public function OBTENER_TR_INPUT_DETALLE_EJERCICIO($array,$name_input,$punto_name,$condicion = "",$id=""){
        $html = "<tr style='padding: 0.5rem;'>";
        foreach ($array as $k=>$value)
        {
            if($value == "select")
            {
                $array_consulta = BDD::QUERY("select id_ejercicio as id,nombre as nombres from ejercicio");
                $select = FORM::GENERAR_SELECT($array_consulta,"$name_input"."[]","Ejercicio");
                $html .= "<th >".$select."</th>";
            }
            if($value == "text"){
                $html .= "<th>".FORM::GENERAR_INPUT_USUARIO("$punto_name"."[]","","Ingrese su puntaje","number","Puntos","","$condicion",$id)."<th>";
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
    static public function CONSULTA_INDEX($array_encabezado,$array_data,$titulo,$href){
        $html = "<div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid\">
                        <h1 class=\"mt-4\">$titulo</h1>
                        <ol class=\"breadcrumb mb-4\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                            <li class=\"breadcrumb-item active\">$titulo</li>
                        </ol>
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                            <a  class='btn' href=\"./Gestionar_$href.php\">Agregar Registro <i class='fa fa-plus'></i></a>
                            </div>
                        </div>
                        <div class=\"card mb-4\">
                        ";
        $th ="";
        $td = "";
        $tr = "";
        $data = "";
        foreach ($array_encabezado as $k){
            $th .= "<th>".$k."</th>";
        }
        $th .= "<th style='width: 40px;'>Accion Editar</th>";
        $th .= "<th style='width: 40px;'>Accion Eliminar</th>";

        foreach ($array_data as $k){
            $data .="<tr>";
            foreach ($k as $atributo=>$valor){
                if(substr($atributo,0,2)=="id"){
                    $data.= "<td><a href='./Actualizar_$href.php?id=$valor' class='btn'><i class=\"fas fa-pencil-alt\"></i></a></td>";
                    $data.= "<td><a href='./Eliminar_$href.php?id=$valor' class='btn'><i class=\"fas fa-window-close\"></i></a></a></td>";
                    continue;
                }
                if(substr($atributo,0,4)=="imag"){
                    $ima = base64_encode($valor);
                    print "<script> console.log('$ima')</script>";
                    $data.="<td><img height='30%' width='40%' src='data:image/jpg;base64,".$ima."' alt='ejercicio'></td>";
                    continue;
                }
                $data .= "<td>$valor</td>";

            }
            $data .="</tr>";
        }
        $html .= "
        <div class=\"card-header\"><i class=\"fas fa-table mr-1\"></i>DataTable $titulo</div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        <thead>
                                            <tr>
                                               ".$th."
                                            </tr>
                                        </thead>
                                        <tbody>
                                               ".$data."
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        ";
        $html .= " </div>
                </main>";
        return $html;
    }
    static public function SCRIPTS_JS(){
        $html = "";
        $html .= "
        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../../startbootstrap-sb-admin-gh-pages/dist/js/scripts.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../../startbootstrap-sb-admin-gh-pages/src/assets/demo/datatables-demo.js\"></script>

        ";
        return $html;
    }

}