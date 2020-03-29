<?php


class classRepresentante
{
    static public function INSERTAR_REPRESENTANTE(){
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_apellido = filter_input(INPUT_POST,"apellido");
        $name_cedula = filter_input(INPUT_POST,"cedula");
        $name_telefono = filter_input(INPUT_POST,"telefono");
        $name_correo = filter_input(INPUT_POST,"correo");
        $name_fecha = filter_input(INPUT_POST,"fecha_nacimiento");
        $name_sector = filter_input(INPUT_POST,"sector");
        $name_direccion = filter_input(INPUT_POST,"direccion");

        $name_nombre = trim($name_nombre);
        $name_apellido = trim($name_apellido);
        $name_cedula = trim($name_cedula);
        $name_telefono = trim($name_telefono);
        $name_correo = trim($name_correo);
        $name_fecha = trim($name_fecha);
        $name_sector = trim($name_sector);
        $name_direccion = trim($name_direccion);

        $name_nombre = strtoupper($name_nombre);
        $name_apellido = strtoupper($name_apellido);
        $name_cedula = strtoupper($name_cedula);
        $name_telefono = strtoupper($name_telefono);
        $name_correo = strtoupper($name_correo);
        $name_fecha = strtoupper($name_fecha);
        $name_sector = strtoupper($name_sector);
        $name_direccion = strtoupper($name_direccion);

        $array = array("Nombre"=>$name_nombre,"Apellido"=>$name_apellido,"Cedula"=>$name_cedula,"Telefono"=>$name_telefono
        ,"correo"=>$name_correo,"fecha_nacimiento"=>$name_fecha,"sector"=>$name_sector,"direccion"=>$name_direccion);
        if(BDD::INSERTAR_DESDE_ARRAY("representante",$array)) return true;
        else return print  print "<script>alert('Error al Insertar Representante');</script>";
    }
    static public function ACTUALIZAR_REPRESENTANTE(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_nombre = filter_input(INPUT_POST,"nombre");
        $name_apellido = filter_input(INPUT_POST,"apellido");
        $name_cedula = filter_input(INPUT_POST,"cedula");
        $name_telefono = filter_input(INPUT_POST,"telefono");
        $name_correo = filter_input(INPUT_POST,"correo");
        $name_fecha = filter_input(INPUT_POST,"fecha_nacimiento");
        $name_sector = filter_input(INPUT_POST,"sector");
        $name_direccion = filter_input(INPUT_POST,"direccion");

        $name_nombre = trim($name_nombre);
        $name_apellido = trim($name_apellido);
        $name_cedula = trim($name_cedula);
        $name_telefono = trim($name_telefono);
        $name_correo = trim($name_correo);
        $name_fecha = trim($name_fecha);
        $name_sector = trim($name_sector);
        $name_direccion = trim($name_direccion);

        $name_nombre = strtoupper($name_nombre);
        $name_apellido = strtoupper($name_apellido);
        $name_cedula = strtoupper($name_cedula);
        $name_telefono = strtoupper($name_telefono);
        $name_correo = strtoupper($name_correo);
        $name_fecha = strtoupper($name_fecha);
        $name_sector = strtoupper($name_sector);
        $name_direccion = strtoupper($name_direccion);

        $array = array("Nombre"=>$name_nombre,"Apellido"=>$name_apellido,"Cedula"=>$name_cedula,"Telefono"=>$name_telefono
        ,"correo"=>$name_correo,"fecha_nacimiento"=>$name_fecha,"sector"=>$name_sector,"direccion"=>$name_direccion);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("representante",$array,"idRepresentante=$name_id")) return true;
        else return print  print "<script>alert('Error al Actualizar Representante');</script>";
    }
    static public function ELIMINAR_NIVEL(){
        $name_id = filter_input(INPUT_POST,"id");
        if(BDD::ELIMINAR_DATOS("representante","idRepresentante=$name_id")) return true;
        else return print  print "<script>alert('Error al ELIMINAR REPRESENTANTE');</script>";
    }
}