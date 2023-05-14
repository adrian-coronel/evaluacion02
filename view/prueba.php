<?php 

  include('/laragon/www/desarrollo-de-app-web/class08/controller/ProductoController.php');
  // include('/laragon/www/desarrollo-de-app-web/class08/model/Producto.php');
  
  $producto = new ProductoController();
  $img = 'https://images-na.ssl-images-amazon.com/images/I/71LoT8-bZUS._AC_UL600_SR600,400_.jpg';
  // var_dump($producto->getAll());
  // $newPo = new Producto(
  //   5,
  //   'Adrian',
  //   'Esta es mi descripcion',
  //   5,
  //   44.3,
  //  'https://images-na.ssl-images-amazon.com/images/I/71LoT8-bZUS._AC_UL600_SR600,400_.jpg'
  // );
  // var_dump($producto->create('Adrian','Esta es mi descripcion',5,44.3,'https://images-na.ssl-images-amazon.com/images/I/71LoT8-bZUS._AC_UL600_SR600,400_.jpg'));
  // $producto
  
  // var_dump($producto->update(3,'SE CAMBIO','Xiaomi 10 Pro nuevo semi usado',2,1249.90,$img));
  // var_dump($producto->delete(5));
  

?>