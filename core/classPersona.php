<?php


class classPersona
{
    static public function INSERTAR_PERSONA(){
        $name_cedula = filter_input(INPUT_POST,"Cedula");
        $name_Nombre = filter_input(INPUT_POST,"Nombre");
        $name_apellido = filter_input(INPUT_POST,"apellido");
        $name_telefono = filter_input(INPUT_POST,"telefono");
        $name_correo = filter_input(INPUT_POST,"correo");
        $name_direccion = filter_input(INPUT_POST,"direccion");
        $name_ciudad = filter_input(INPUT_POST,"ciudad");
        $name_fecha = filter_input(INPUT_POST,"fecha_nacimiento");
        $name_sexo = filter_input(INPUT_POST,"sexo");
        $name_provincia = filter_input(INPUT_POST,"provincia");
        //trim
        $name_cedula = trim($name_cedula);
        $name_Nombre = trim($name_Nombre);
        $name_apellido = trim($name_apellido);
        $name_telefono = trim($name_telefono);
        $name_correo = trim($name_correo);
        $name_direccion = trim($name_direccion);
        $name_ciudad = trim($name_ciudad);
        $name_fecha = trim($name_fecha);
        $name_sexo = trim($name_sexo);
        $name_provincia = trim($name_provincia);
        //strupper
        $name_cedula = strtoupper($name_cedula);
        $name_Nombre = strtoupper($name_Nombre);
        $name_apellido = strtoupper($name_apellido);
        $name_telefono = strtoupper($name_telefono);
        $name_correo = strtoupper($name_correo);
        $name_direccion = strtoupper($name_direccion);
        $name_ciudad = strtoupper($name_ciudad);
        $name_fecha = strtoupper($name_fecha);
        $name_sexo = strtoupper($name_sexo);
        $name_provincia = strtoupper($name_provincia);

        $array = array("cedula"=>$name_cedula,"nombre"=>$name_Nombre,"apellido"=>$name_apellido,
            "telefono"=>$name_telefono,"correo"=>$name_correo,"direccion"=>$name_direccion,"ciudad"=>$name_ciudad
        ,"fecha_nacimiento"=>$name_fecha,"sexo"=>$name_sexo,"provincia"=>$name_provincia);
            if(BDD::INSERTAR_DESDE_ARRAY("persona",$array)) true;
            else print "<script>alert('Error al guardar');</script>";
    }
    static public function ACTUALIZAR_PERSONA(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_cedula = filter_input(INPUT_POST,"Cedula");
        $name_Nombre = filter_input(INPUT_POST,"Nombre");
        $name_apellido = filter_input(INPUT_POST,"apellido");
        $name_telefono = filter_input(INPUT_POST,"telefono");
        $name_correo = filter_input(INPUT_POST,"correo");
        $name_direccion = filter_input(INPUT_POST,"direccion");
        $name_ciudad = filter_input(INPUT_POST,"ciudad");
        $name_fecha = filter_input(INPUT_POST,"fecha_nacimiento");
        $name_sexo = filter_input(INPUT_POST,"sexo");
        $name_provincia = filter_input(INPUT_POST,"provincia");
        //trim
        $name_cedula = trim($name_cedula);
        $name_Nombre = trim($name_Nombre);
        $name_apellido = trim($name_apellido);
        $name_telefono = trim($name_telefono);
        $name_correo = trim($name_correo);
        $name_direccion = trim($name_direccion);
        $name_ciudad = trim($name_ciudad);
        $name_fecha = trim($name_fecha);
        $name_sexo = trim($name_sexo);
        $name_provincia = trim($name_provincia);
        //strupper
        $name_cedula = strtoupper($name_cedula);
        $name_Nombre = strtoupper($name_Nombre);
        $name_apellido = strtoupper($name_apellido);
        $name_telefono = strtoupper($name_telefono);
        $name_correo = strtoupper($name_correo);
        $name_direccion = strtoupper($name_direccion);
        $name_ciudad = strtoupper($name_ciudad);
        $name_fecha = strtoupper($name_fecha);
        $name_sexo = strtoupper($name_sexo);
        $name_provincia = strtoupper($name_provincia);

        $array = array("cedula"=>$name_cedula,"nombre"=>$name_Nombre,"apellido"=>$name_apellido,
            "telefono"=>$name_telefono,"correo"=>$name_correo,"direccion"=>$name_direccion,"ciudad"=>$name_ciudad
        ,"fecha_nacimiento"=>$name_fecha,"sexo"=>$name_sexo,"provincia"=>$name_provincia);
        if(BDD::ACTUALIZAR_DESDE_ARRAY("persona",$array,"id_persona = $name_id")) true;
        else print "<script>alert('Error al Actualizar');</script>";
    }
    static public function ELIMINAR_PERSONA(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_cedula = filter_input(INPUT_POST,"Cedula");
        $name_Nombre = filter_input(INPUT_POST,"Nombre");
        $name_apellido = filter_input(INPUT_POST,"apellido");
        $name_telefono = filter_input(INPUT_POST,"telefono");
        $name_correo = filter_input(INPUT_POST,"correo");
        $name_direccion = filter_input(INPUT_POST,"direccion");
        $name_ciudad = filter_input(INPUT_POST,"ciudad");
        $name_fecha = filter_input(INPUT_POST,"fecha_nacimiento");
        $name_sexo = filter_input(INPUT_POST,"sexo");
        $name_provincia = filter_input(INPUT_POST,"provincia");
        //trim
        $name_cedula = trim($name_cedula);
        $name_Nombre = trim($name_Nombre);
        $name_apellido = trim($name_apellido);
        $name_telefono = trim($name_telefono);
        $name_correo = trim($name_correo);
        $name_direccion = trim($name_direccion);
        $name_ciudad = trim($name_ciudad);
        $name_fecha = trim($name_fecha);
        $name_sexo = trim($name_sexo);
        $name_provincia = trim($name_provincia);
        //strupper
        $name_cedula = strtoupper($name_cedula);
        $name_Nombre = strtoupper($name_Nombre);
        $name_apellido = strtoupper($name_apellido);
        $name_telefono = strtoupper($name_telefono);
        $name_correo = strtoupper($name_correo);
        $name_direccion = strtoupper($name_direccion);
        $name_ciudad = strtoupper($name_ciudad);
        $name_fecha = strtoupper($name_fecha);
        $name_sexo = strtoupper($name_sexo);
        $name_provincia = strtoupper($name_provincia);

        $array = array("cedula"=>$name_cedula,"nombre"=>$name_Nombre,"apellido"=>$name_apellido,
            "telefono"=>$name_telefono,"correo"=>$name_correo,"direccion"=>$name_direccion,"ciudad"=>$name_ciudad
        ,"fecha_nacimiento"=>$name_fecha,"sexo"=>$name_sexo,"provincia"=>$name_provincia);
        if(BDD::ELIMINAR_DATOS("persona","id_persona = $name_id")) true;
        else print "<script>alert('Error al Eliminar');</script>";
    }

}