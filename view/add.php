<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- GET BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Agregar Producto</title>
</head>
<body class="bg-light" style="font-family: Roboto, san-serif; font-size: 15px;">
<header>
    <?php include('layout/nav.php'); ?>
  </header>

  <div class="container-lg py-5">
    <form class="col-10 bg-white px-5 py-4 rounded shadow-sm mx-auto" action="create.php" method="POST">
      <div class="form-header mb-4">
        <h4 class="display-4">Agregar Producto</h4>
        <hr>
      </div>

      <?php include('layout/_form.php') ?>

      <input type="submit" 
        class="btn btn-primary shadow-sm my-3 w-100" 
        name="enviar" 
        value="Guardar"
      >
      <a href="index.php" class="btn bg-white shadow-sm  w-100">Regresar</a>

    </form>
  </div>
</body>
</html>