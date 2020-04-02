<?php


class classEjercicio
{
    static public function INSERTAR_EJERCICIO(){
        $name_nivel = filter_input(INPUT_POST,"nivel");
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_descripcion = filter_input(INPUT_POST,"descripcion");
        $name_image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $name_nivel = trim($name_nivel);
        $name_nombre = trim($name_nombre);
        $name_descripcion = trim($name_descripcion);
        $name_nivel = strtoupper($name_nivel);
        $name_nombre = strtoupper($name_nombre);
        $name_descripcion = strtoupper($name_descripcion);

        $array = array("id_nivel"=>$name_nivel,"nombre"=>$name_nombre,"descripcion"=>$name_descripcion,"imagen"=>$name_image);
        if(BDD::INSERTAR_DESDE_ARRAY("ejercicio",$array))return print classUsuario::REDIRECCIONAR_ANTERIOR();
        else return print  print "<script>alert('Error al Insertar Ejercicio');</script>";
    }
    static public function ACTUALIZAR_EJERCICIO(){
        $name_id= filter_input(INPUT_POST,"id");
        $name_nivel = filter_input(INPUT_POST,"nivel");
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_descripcion = filter_input(INPUT_POST,"descripcion");
        $name_image = addslashes(file_get_contents( $_FILES['Imagen']['tmp_name']));
        $name_nivel = trim($name_nivel);
        $name_nombre = trim($name_nombre);
        $name_descripcion = trim($name_descripcion);
        $name_nivel = strtoupper($name_nivel);
        $name_nombre = strtoupper($name_nombre);
        $name_descripcion = strtoupper($name_descripcion);
        $array = array("id_nivel"=>$name_nivel,"nombre"=>$name_nombre,"descripcion"=>$name_descripcion,"imagen"=>$name_image);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("ejercicio",$array,"id_ejercicio=$name_id")) return print classUsuario::REDIRECCIONAR_ANTERIOR();
        else return print  print "<script>alert('Error al Actualizar Ejercicio');</script>";
    }
    static public function ELIMINAR_EJERCICIO(){
        $name_id= filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("ejercicio","id_ejercicio=$name_id")) return print classUsuario::REDIRECCIONAR_ANTERIOR();
        else return print  print "<script>alert('Error al Eliminar Ejercicio');</script>";
    }





}