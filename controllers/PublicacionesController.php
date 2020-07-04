<?php

include('./conexion.php');

class publicaciones
{
     function publicar($iduser, $publicacion)
    {
        $consulta ="insert into publicaciones (iduser, publicacion) values ($iduser,'$publicacion')";
        $respuesta = mysqli_query(Conexion::Conectar(), $consulta);

        return $respuesta;
    }

    function mostrar()
    {
        $consulta ="select *from publicaciones";
        $respuesta = mysqli_query(Conexion::Conectar(),$consulta);

        return $respuesta;
    }

}

?>