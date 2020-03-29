<?php


class classEstudiante
{
    static public function INSERTAR_ESTUDIANTE(){
        $name_persona = filter_input(INPUT_POST,"persona");
        $name_nivel = filter_input(INPUT_POST,"nivel");
        $name_entrenado = filter_input(INPUT_POST,"entrenador");
        $name_club = filter_input(INPUT_POST,"club");
        $name_club = trim($name_club);
        $name_club = strtoupper($name_club);
        $name_categoria = filter_input(INPUT_POST,"categoria");


        $array = array("id_persona"=>$name_persona,"id_nivel"=>$name_nivel,"id_entrenador"=>$name_entrenado,"club"=>$name_club,"id_categoria"=>$name_categoria);
        if(BDD::INSERTAR_DESDE_ARRAY("estudiante",$array)) return true;
        else return print  print "<script>alert('Error al Insertar estudiante');</script>";
    }
    static public function ACTUALIZAR_ESTUDIANTE(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_persona = filter_input(INPUT_POST,"persona");
        $name_nivel = filter_input(INPUT_POST,"nivel");
        $name_entrenado = filter_input(INPUT_POST,"entrenador");
        $name_club = filter_input(INPUT_POST,"club");
        $name_club = trim($name_club);
        $name_club = strtoupper($name_club);
        $array = array("id_persona"=>$name_persona,"id_nivel"=>$name_nivel,"id_entrenador"=>$name_entrenado,"club"=>$name_club,"id_categoria"=>$name_categoria);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("estudiante",$array,"id_entrenador=$name_id")) return true;
        else return print  print "<script>alert('Error al Actualizar estudiante');</script>";
    }
    static public function ELIMINAR_ESTUDIANTE(){
        $name_id = filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("estudiante","id_estudiante=$name_id")) return true;
        else return print  print "<script>alert('Error al ELIMINAR estudiante');</script>";
    }
}