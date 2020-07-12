<?php

require_once('vendor/autoload.php');

use App\Controllers\RegisterController;
use App\Models\User;
use App\Clases\Conexion;

$password = 123456;
$conexion = Conexion::Conectar();
//var_dump($conexion);
$password = RegisterController::encryptation($password);

$newuser = new User('UserTest','Lastname','test@gmail.com',$password);

$respuesta = RegisterController::setUserRegistration($newuser,$conexion);

echo $newuser.'<br>';

echo $respuesta;

?>