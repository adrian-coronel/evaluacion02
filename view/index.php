<?php
  include('/laragon/www/desarrollo-de-app-web/class08/controller/ProductoController.php');
  
  $producto = new ProductoController();
  $productos = $producto->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- GET BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Productos</title>
</head>
<body>
  
  <header>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          Bootstrap
        </a>
      </div>
    </nav>
  </header>

  <!-- PRODUCTOS  -->
  <div class="container py-5 d-flex flex-wrap justify-content-center">
    <?php foreach($productos as $producto):?>
      <div class="card m-2" style="width: 18rem;">
        <img src="<?= $producto->getImgUrl() ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6><?= $producto->getNombre() ?></h6>
          <span>Precio: <?= $producto->getPrecio() ?></span>
          <br>
          <span>Stock: <?= $producto->getStock() ?></span>
          
          <p class="card-text">
            <?= $producto->getDescripcion() ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>


</body>
</html>