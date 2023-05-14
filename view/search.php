<?php

include('/laragon/www/class08/controller/ProductoController.php');

if(isset($_POST['search'])){
  $productoController = new ProductoController();
  // $productos = $productoController->search('enny');
  $productos = $productoController->search($_POST['search']);

  $arrayConvert = [];
  foreach($productos as $producto){
    array_push($arrayConvert, array(
      'ID_PRODUCTO' => $producto->getIdProducto(),
      'NOMBRE' => $producto->getNombre(),
      'DESCRIPCION' => $producto->getDescripcion(),
      'STOCK' => $producto->getStock(),
      'PRECIO' => $producto->getPrecio(),
      'IMG_URL' => $producto->getImgUrl()
    ));
  }

  $jsonProductos = json_encode(array_slice($arrayConvert,0,7));
  echo $jsonProductos;
}