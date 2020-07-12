<?php

include('controllers/PublicacionesController.php');


$iduser = $_POST['iduser'];
$publicacion = $_POST['publicacion'];


publicaciones::publicar($iduser,$publicacion);