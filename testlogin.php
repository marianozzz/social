<?php
require_once('vendor/autoload.php');

use App\Clases\Auth;
use App\Clases\Conexion;

$pass = 123456;   
$email = 'test@gmail.com'; 
$conexion = Conexion::Conectar();

$pass = Auth::auth($pass);
//echo $pass;


$resultado = Auth::query($conexion,$email, $pass);

echo $resultado;

?>