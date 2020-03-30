<?php


class classEvaluacion
{
    static public function INSERTAR_EVALUACION(){
        $name_estudiante = filter_input(INPUT_POST,"estudiante");
        $name_fecha = filter_input(INPUT_POST,"fecha");
        $name_ejercicio1 = isset($_POST["ejercicio1"])? $_POST['ejercicio1']: null ;
        $name_ejercicio2 =  isset($_POST["ejercicio2"])? $_POST['ejercicio2']:null;
        $name_punto =  isset($_POST["punto1"])? $_POST["punto1"] : null;
        $name_punto2 =  isset($_POST["punto2"])? $_POST["punto2"] : null;


        $array= array("id_estudiante"=>$name_estudiante,"fecha"=>date("Y-m-d", strtotime($name_fecha) ));
        $id = BDD::INSERTAR_DESDE_ARRAY("evaluacion_aspirante",$array);
        if($id){
            for ($i = 0;$i < sizeof($name_ejercicio1);++$i)
            {
                $consulta = BDD::CONSULTAR("detalle_evaluacion","idejercicio","idevaluacion_aspirante=$id and idejercicio= $name_ejercicio1[$i] and tipo='F'");
                if(!$consulta){
                    $array = array("idejercicio"=>$name_ejercicio1[$i],"puntos"=>$name_punto[$i],"idevaluacion_aspirante"=>$id,"tipo"=>"F");
                    BDD::INSERTAR_DESDE_ARRAY("detalle_evaluacion",$array);
                }else{
                    print "<script>alert('tienes campos repetidos, no debes repetir campos');</script>";
                    return;
                }

            }
            for ($i = 0;$i < sizeof($name_ejercicio2);++$i)
            {
                $consulta = BDD::CONSULTAR("detalle_evaluacion","idejercicio","idevaluacion_aspirante=$id and idejercicio= $name_ejercicio1[$i] and tipo='C'");
                if(!$consulta){
                    $array = array("idejercicio"=>$name_ejercicio2[$i],"puntos"=>$name_punto2[$i],"idevaluacion_aspirante"=>$id,"tipo"=>"C");
                    BDD::INSERTAR_DESDE_ARRAY("detalle_evaluacion",$array);
                }else{
                    print "<script>alert('tienes campos repetidos, no debes repetir campos');</script>";
                    return;
                }

            }
            return print classUsuario::REDIRECCIONAR_ANTERIOR();
        }
    }
    static public function ELIMINAR_EVALUACION(){
        $id = filter_input(INPUT_POST,"id");
        BDD::ELIMINAR_DATOS("detalle_evaluacion","idevaluacion_aspirante=$id");
        BDD::ELIMINAR_DATOS("evaluacion_aspirante","id_evaluacion_aspirante=$id");
        return print classUsuario::REDIRECCIONAR_ANTERIOR();
    }
}