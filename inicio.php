<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css">
    <title>Inicio</title>
</head>
<body>
<?php 
include('includes/barra.php'); 
include ('controllers/PublicacionesController.php');
if($_SESSION == null)
    {
        header("location:index.php");
    }
$publicaciones = Publicaciones::mostrar();
?>
<div class="container">   
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
          
            <form action="crearpublicacion.php" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Hacer una publicacion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="publicacion" rows="3"></textarea>
                    <input type="text" name="iduser" value ='<?php echo $_SESSION['iduser']?>' hidden>
                </div>
                <input type="submit" value ="Publicar" class="btn btn-primary">
            </form>

                    <?php foreach($publicaciones as $items){ ?>

              
            <div class="card border-success mb-4">
                <div class="card-header bg-transparent border-success"><a href="#">Mariano</a> publico:</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text"><?php echo $items['publicacion'];?></p>
            </div>
                <form action="" method="post">
                <div class="card-footer bg-transparent border-success">
                <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Comentar</span>
                        </div>
                         <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>              
                </div>
                </form>
                
            </div>
            <?php } //cierro el foreach?>
        </div>   
    </div>
</div>

</body>
</html>