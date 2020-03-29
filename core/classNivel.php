<?php


class classNivel
{
    static public function INSERTAR_NIVEL(){
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_rango = filter_input(INPUT_POST,"rango");
        $name_rango = trim($name_rango);
        $name_nombre = trim($name_nombre);
        $name_rango = strtoupper($name_rango);
        $name_nombre = strtoupper($name_nombre);

        $array = array("nombre"=>$name_nombre,"rango"=>$name_rango);
        if(BDD::INSERTAR_DESDE_ARRAY("nivel",$array)) return true;
        else return print  print "<script>alert('Error al Insertar NIVEL');</script>";
    }
    static public function ACTUALIZAR_NIVEL(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_rango = filter_input(INPUT_POST,"rango");
        $name_rango = trim($name_rango);
        $name_nombre = trim($name_nombre);
        $name_rango = strtoupper($name_rango);
        $name_nombre = strtoupper($name_nombre);
        $array = array("nombre"=>$name_nombre,"rango"=>$name_rango);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("nivel",$array,"id_nivel=$name_id")) return true;
        else return print  print "<script>alert('Error al Actualizar NIVEL');</script>";
    }
    static public function ELIMINAR_NIVEL(){
        $name_id = filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("nivel","id_nivel=$name_id")) return true;
        else return print  print "<script>alert('Error al ELIMINAR NIVEL');</script>";
    }
}