<?php


class classCategoria
{
    static public function INSERTAR_CATEGORIA(){
        $name_user = filter_input(INPUT_POST,"descrpcion");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $array = array("descripcion"=>$name_user);
        $id = BDD::INSERTAR_DESDE_ARRAY("categoria",$array);
    }
}