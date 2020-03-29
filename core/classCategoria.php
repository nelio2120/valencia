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
    static public function ACTUALIZAR_CATEGORIA(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_user = filter_input(INPUT_POST,"descrpcion");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $array = array("descripcion"=>$name_user);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("categoria",$array,"idcategoria=$name_id")) true;
        else print "<script>alert('Error al Actualizar categoria');</script>";
    }
    static public function ELIMINAR_CATEGORIA(){
        $name_id = filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("categoria","idcategoria=$name_id")) true;
        else print "<script>alert('Error al eliminar categoria');</script>";
    }
}