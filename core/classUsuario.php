<?php


class classUsuario
{

    static public function INSERTAR_USUARIO(){
        $name_user = filter_input(INPUT_POST,"Usuario");
        $name_clave = filter_input(INPUT_POST,"Clave");
        $name_Confirmar = filter_input(INPUT_POST,"Confirmar");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $name_clave = trim($name_clave);

        $name_Confirmar = trim($name_Confirmar);
        $name_Confirmar = strtoupper($name_Confirmar);
        $select = filter_input(INPUT_POST,"select");
        $array = array("usuario"=>$name_user,"clave"=>$name_clave,"idpersona"=>$select,"estado"=>"ACTIVO");
        if($name_clave == $name_Confirmar){
            if(BDD::INSERTAR_DESDE_ARRAY("usuario",$array))
            return print self::REDIRECCIONAR_ANTERIOR();
            else print "<script>alert('Error al guardar Usuario, Revisar Registro');</script>";
        }else{
            print "<script>alert('Deben coincidir la clave con su confirmacion clave : $name_clave confirmar: $name_Confirmar');</script>";
        }
    }
    static public function REDIRECCIONAR_ANTERIOR(){
       return header('Location: ./index.php');
    }
    static public function UPDATE_USUARIO(){
        $name_id = filter_input(INPUT_POST,"id");
        $name_user = filter_input(INPUT_POST,"Usuario");
        $name_clave = filter_input(INPUT_POST,"Clave");
        $name_Confirmar = filter_input(INPUT_POST,"Confirmar");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);

        $name_clave = strtoupper($name_clave);
        $name_Confirmar = trim($name_Confirmar);
        $name_Confirmar = strtoupper($name_Confirmar);
        $select = filter_input(INPUT_POST,"select");
        $array = array("usuario"=>$name_user,"clave"=>$name_clave,"idpersona"=>$select,"estado"=>"ACTIVO");
        if($name_clave == $name_Confirmar){
             BDD::ACTUALIZAR_DESDE_ARRAY("usuario",$array,"id_usuario = $name_id");
            return print self::REDIRECCIONAR_ANTERIOR();
        }else{
            print "<script>alert('Deben coincidir la clave con su confirmacion clave : $name_clave confirmar: $name_Confirmar');</script>";
        }
    }
    static public function ELIMINAR_USUARIO()
    {
        $name_id = filter_input(INPUT_POST,"id");
        $name_user = filter_input(INPUT_POST,"Usuario");
        $name_clave = filter_input(INPUT_POST,"Clave");
        $name_user = trim($name_user);

        $name_clave = trim($name_clave);
        $name_clave = strtoupper($name_clave);
        $select = filter_input(INPUT_POST,"select");
        $array = array("usuario"=>$name_user,"clave"=>$name_clave,"idpersona"=>$select,"estado"=>"INACTIVO");
        if(BDD::ACTUALIZAR_DESDE_ARRAY("usuario",$array,"id_usuario=$name_id")){
            return print self::REDIRECCIONAR_ANTERIOR();
        }else{
            print "<script>alert('Error al eliminar usuario');</script>";
        }
    }
}