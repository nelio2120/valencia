<?php


class classEntrenador
{
    static public function INSERTAR_ENTRENADOR(){
        $name_nivel = filter_input(INPUT_POST,"persona");
        $array = array("id_persona"=>$name_nivel);
        if(BDD::INSERTAR_DESDE_ARRAY("entrenador",$array)) return true;
        else return print  print "<script>alert('Error al Insertar Entrenador');</script>";
    }
    static public function ACTUALIZAR_ENTRENADOR(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_nivel = filter_input(INPUT_POST,"persona");
        $array = array("id_persona"=>$name_nivel);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("entrenador",$array,"id_entrenador=$name_id")) return true;
        else return print  print "<script>alert('Error al Actualizar Entrenador');</script>";
    }
    static public function ELIMINAR_ENTRENADOR(){
        $name_id = filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("entrenador","id_entrenador=$name_id")) return true;
        else return print  print "<script>alert('Error al ELIMINAR Entrenador');</script>";
    }
}