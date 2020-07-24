<?php
namespace App\Controllers;


class RegisterController
{
    
    public function encryptation($password)
    {
        $passby_hash = password_hash($password, PASSWORD_DEFAULT);
        return $passby_hash;
    }
    public function setUserRegistration($newUser ,$conexion)
    {
        $insert = "insert into users (Nombre, Apellido, Email,Pass) values
                  ('".$newUser->getName()."','".$newUser->getLastname()."','"
                  .$newUser->getEmail()."','".$newUser->getPassword()."')";
        $respuesta = mysqli_query($conexion,$insert);
        return $respuesta;
    }


}


?>