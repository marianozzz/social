<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Registro de usuario</title>
</head>
<?php include ('includes/barra.php');?>
<body class=" bg-dark text-white">
<div class="container-fluid">

<div class="row justify-content-center align-items-center bg-dark text-white" >

    <div class="col-md-4" style="background:#24303c;">
        
        <form action="testregister.php" method="post"  style="padding-bottom:10px">

            <div class="form-group">
                <label for="name">Ingrese su nombre</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Ingrese su apellido</label>
                <input type="text" name="lastname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Ingrese su email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Ingrese su contraseña</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
       
        <button type="submit" class="btn btn-success">Registrarme</button>
        </form>

    </div>

</div>



</div>


    
</body>
</html>