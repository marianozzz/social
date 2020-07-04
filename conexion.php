<?php
class Conexion
 {

    public function Conectar()
    {
            $servidor="localhost"; 
            $user ="root";
            $db="lap";
            $password="";

            $conexion = new mysqli($servidor,$user,$password,$db);  

            if($conexion->connect_error)
            {
                die("Error en la conexion :".$conexion->connect_errno."-".$conexion->connect_error);
            }
            else
            {
                return $conexion;
            }
    }
 }

?>