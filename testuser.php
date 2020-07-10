<?php

//include ('models/User.php');
include ('controllers/RegisterController.php');

$password = 123456;
$password = registration::encryptation($password);
$newuser = new User('UserTest','Lastname','test@gmail.com',$password);

$respuesta =registration::setUserRegistration($newuser);

//echo $newuser;

echo $respuesta;

?>