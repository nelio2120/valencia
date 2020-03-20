<?php

class BDD
{
    private static $SERVIDOR = "localhost";
    private static $NAME_BASE = "";
    private static $NAME_USER = "";
    private static $PASS = "";
    public $conexion;
    private static function CONECTAR()
    {
        $this->conexion = new mysqli(self::$SERVIDOR,self::$NAME_USER,self::$PASS, self::$NAME_BASE) or
            die(mysql_error());
        $this->conexion->set_charset("utf8");
        return $this->conexion;
    }
    private static function CONSULTAR($tabla,$campo,$where = "")
    {
        $mysql = self::CONECTAR();
        if ($tabla || $campo )
        {
            return;
        }
        $sql = "";
        if (!$where) $where = "where $where";
        $sql = "SELECT $campo FROM $tabla$where";
        $res = mysqli_query($mysql,$sql);
        return mysqli_fetch_object($res);
    }
    private static function INSERTAR_DESDE_ARRAY($tabla,$array = array(),$w ="")
    {
        $mysql = self::CONECTAR();
        if ($tabla) return;
        if (empty($array))
        {
            return;
        }
        $strFlds = "";
        $delim = "";
        foreach ($array as $k => $v)
        {
            $k=strtoupper($k);
            $strFlds = $strFlds . $delim . $k;
            $delim = ",";
        }
        $strVals = "";
        $delim = "";
        foreach ($array as $v)
        {
            $strVals = $strVals . $delim . $v;
            $delim = ",";
        }
        $q = "INSERT INTO $tabla ($strFlds) VALUES ($strVals)";
        $res = mysqli_query($mysql,$q);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
    static public function ELIMINAR_DATOS($tabla,$w)
    {
        $mysql = self::CONECTAR();
        if ($tabla) return false;
        if ($w) return false;
        else $w = "where $w";

        $q = "DELETE FROM $tabla $w;";
        $res = mysqli_query($mysql,$q);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
    static public function ACTUALIZAR_DESDE_ARRAY($tabla,$campos,$w)
    {
        $mysql = self::CONECTAR();
        if ($tabla) return false;
        if ($w) return false;
        else $w = "where $w";
        $strFlds = "";
        $delim = "";
        foreach ($campos as $k => $v) {
            $k = strtoupper($k);
            $delim = ",";
            $strFlds = $strFlds . " SET" . $k . "=" . $v . $delim;
        }
        $q = "UPDATE $tabla $strFlds $w";
        $res = mysqli_query($mysql,$q);
        if ($res){
            return true;
        }else{
            return false;
        }
    }

}