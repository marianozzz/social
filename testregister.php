<?php

include ('controllers/RegisterController.php');


$pass = $_POST['password'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


$encriptacion = registration::encryptacion($pass);


echo $encriptacion;

?>