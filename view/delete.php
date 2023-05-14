<?php

include('/laragon/www/class08/controller/ProductoController.php');
if($_GET['id']){
  $productoController = new ProductoController();

  $productoController->delete($_GET['id']);
}

header('Location: index.php');