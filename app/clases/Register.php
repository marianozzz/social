<?php
namespace App\clases;

include ('./models/User.php');
include ('./conexion.php');

class registration
{

    public function encryptation($password)
    {
        $passby_hash = password_hash($password, PASSWORD_BCRYPT);
        return $passby_hash;
    }
    public function setUserRegistration(User $newUser)
    {
       // $newUser->password = encryptation($newUser->getPassword());
        $insert = "insert into users (Nombre, Apellido, Email,Pass) values
                  ('".$newUser->getName()."','".$newUser->getLastname()."','"
                  .$newUser->getEmail()."','".$newUser->getPassword()."')";
        $respuesta = mysqli_query(Conexion::Conectar(),$insert);

        return $respuesta;
    }


}


?>