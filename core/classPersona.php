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
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $name_clave = trim($name_clave);
        $name_clave = strtoupper($name_clave);
        $name_Confirmar = trim($name_Confirmar);
        $name_Confirmar = strtoupper($name_Confirmar);


        $select = filter_input(INPUT_POST,"select");
        $array = array("usuario"=>$name_user,"clave"=>$name_clave,"idpersona"=>$select);
        if($name_clave == $name_Confirmar){
            $id = BDD::INSERTAR_DESDE_ARRAY("usuario",$array);
        }else{
            print "<script>alert('Deben coincidir la clave con su confirmacion clave : $name_clave confirmar: $name_Confirmar');</script>";
        }
    }

}