<?php
  include('/laragon/www/class08/controller/ProductoController.php');
  
  $productoController = new ProductoController();
  $productos = $productoController->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- GET BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Productos</title>
</head>
<body class="bg-light" style="font-family: Roboto, san-serif; font-size: 15px;">
  
  <header>
    <?php include('layout/nav.php'); ?>
  </header>

  <!-- PRODUCTOS  -->
  <div class="container-lg py-5 d-flex flex-wrap justify-content-center">

    <!-- Cards -->
    <?php foreach($productos as $producto):?>
      <div class="card" style="width: 18rem;">
        <img src="<?= $producto->getImgUrl() ?>" class="card-img-top my-2" alt="...">
        
        <div class="card-body">
          <h5><?= $producto->getNombre() ?></h5>
          <span>Precio: <?= $producto->getPrecio() ?></span>
          <br>
          <span>Stock: <?= $producto->getStock() ?></span>
          <p class="card-text"><?= $producto->getDescripcion() ?></p>
        </div>

        <div class="btn-group col-6 m-3">
          <a href="edit.php?id=<?= $producto->getIdProducto() ?>" class="btn btn-primary">Editar</a>
          <a href="#" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    <?php endforeach; ?>

  </div>


</body>
</html>