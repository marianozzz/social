<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos al inicio</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
  <body>
    
  <?php include ('includes/barra.php'); ?>
   

    <div class="container">

    <!-- Inicio del row -->
        <div class="row">
    <!--Inicio del col -->
          <div class="col-md-4">

              <form action="login.php" method="post" class="form-group" style="padding-top:80px">
                
              <div class="form-group">
                <label for="nombre">Ingrese su Email</label>
                <input type="email" name="email" class="form-control" required placeholder="Ingrese su email">
              </div>  

              <div class="form-group">
                <label for="password">Ingrese su clave</label>
                <input type="password" name="clave" class="form-control" required placeholder="Ingrese su clave personal" >
              </div>

                <input type="submit" value="Inicia session" name="Iniciar Session" class="btn btn-info">

              </form>
  <!--fin del col -->
          </div>
  <!-- fin del row-->
       </div>
<!--fin del container-->
  </div>


  </body>
</html>