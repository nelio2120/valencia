<?php

class Login
{
    static public function VALIDAR_USUARIO()
    {
        $name_user = filter_input(INPUT_POST,"usuario");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $pass = filter_input(INPUT_POST,"pass");
        $pass = trim($pass);
        $consulta = BDD::CONSULTAR("usuario","clave","usuario ='$name_user' and estado = 'ACTIVO'");
        if($consulta)
        {
            if($consulta['clave'] == $pass)
            {
                session_start();
                $_SESSION['usuario'] = $name_user;
               return print "<script>window.location='../menu/menu_desktop.php'</script>";
            }
            else
            {
                return print "<script> alert('Contraseña incorrecta'); </script>";
            }
        }else{
            return print "<script> alert('Usuario inactivo'); </script>";
        }
    }
}