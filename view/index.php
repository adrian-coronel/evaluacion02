<?php
  include('/laragon/www/class08/controller/ProductoController.php');
  
  
  if(isset($_POST['search'])){
    $productoController = new ProductoController();
    $productos = $productoController->search($_POST['search']); 
  } else{
    $productoController = new ProductoController();
    $productos = $productoController->getAll();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- GET BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Productos</title>
  <style>
    .element-hover:hover {
      transform: translateY(-3px);
      transition: .3s ease-in;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
      /* justify-content: space-evenly; */
    }

    /* .search{
      background-color: #5F638F;
    } */
  </style>
</head>
<body class="bg-light" style="font-family: Roboto, san-serif; font-size: 15px;">
  
  <header>
    <?php include('layout/nav.php'); ?>
  </header>

  <!-- PRODUCTOS  -->
  <div class="container-lg py-5 d-flex flex-wrap justify-content-center">

    <div class="w-100">
    <h1 class="display-5">Productos</h1>
    <a href="add.php" class="btn btn-success">Registrar</a>
    <hr>
    </div>
    <!-- Cards -->
    <?php foreach($productos as $producto):?>

      <?php include('./layout/card.php'); ?>

    <?php endforeach; ?>

  </div>

  <script src="script/index.js"></script>
</body>
</html>