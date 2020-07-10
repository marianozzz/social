<?php @session_start();?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-2 mb-3 border-bottom shadow-sm navbar navbar-dark bg-dark">
  <h5 class="my-0 mr-md-auto font-weight-normal text-white">Inicio</h5>
  <nav class="my-2 my-md-0 mr-md-3 ">
  <?php if(!empty($_SESSION) ){ ?>
    <p class="text-white"> Conectado como: <a class="p-2 text-white" href="#"><?php echo $_SESSION['name'].", ".$_SESSION['lastname']; ?></a>
    <a class="p-2 text-white" href="./cerrar.php">Cerrar Sesion</a>
  <?php } ?>
  </nav>
   <?php if(empty($_SESSION)){ ?>
  <a class="btn btn-outline-primary" href="#">Login</a>
  <a class="btn btn-outline-primary" href="registro.php">Regristro</a>
   <?php } ?>
</div>