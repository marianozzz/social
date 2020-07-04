<?php
// Indicamos que vamos a utilizar variables de session
session_start();
include('conexion.php');

if($_POST)
{

    $email = $_POST['email'];
    $password= md5($_POST['clave']);


    $conexion = Conexion::Conectar();
    $consulta = "select *from users WHERE Email = '$email' and Pass='$password'";

    $respuesta = mysqli_query($conexion,$consulta);

    foreach($respuesta as $dato)
    {
        if(($dato['Email'] == $email) && ($dato['Pass']== $password))
        {

            $_SESSION['name']     = $dato['Nombre'];
            $_SESSION['lastname'] = $dato['Apellido'];
            $_SESSION['iduser']   = $dato['iduser'];

            header("Location:inicio.php");
        }
        else
        {  
             
        ?>
        <script>
            window.alert("Nombre de usuario o contraseña incorrectos");
            window.location = "https://localhost/lap/";      
        </script>
        <?php

        }//cierra la llave del else
    }
}


?>