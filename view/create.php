<?php

include('/laragon/www/class08/controller/ProductoController.php');
if($_POST['enviar']){
  $productoController = new ProductoController();

  $nombre= $_POST['nombre'];
  $descripcion= $_POST['descripcion'];
  $stock= $_POST['stock'];
  $precio= $_POST['precio'];
  $imgUrl= $_POST['imgUrl'];
  $productoController->create($nombre,$descripcion,$stock,$precio,$imgUrl);
}

header('Location: index.php');