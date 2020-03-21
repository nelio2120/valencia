<?php

require ('../sistema/BDD.php');
class Login
{
    static public function VALIDAR_USUARIO()
    {
        $name_user = filter_input(INPUT_POST,"usuario");
        $name_user = trim($name_user);
        $name_user = strtoupper($name_user);
        $consulta = BDD::CONSULTAR("usuarios","clave","usuario ='$name_user'");
        if($consulta)
        {
            return print "<script>window.location='../startbootstrap-sb-admin-gh-pages/index.html'</script>";
        }else{
            return print "<script> alert('tu huevada no vale'); </script>";
        }
    }
}