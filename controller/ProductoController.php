<?php

include('/laragon/www/desarrollo-de-app-web/class08/dao/ProductoDAO.php');

class ProductoController{

  
  public function getAll()
  {
    return ProductoDAO::getAll();
  }

  public function create($nombre,$descripcion,$stock,$precio,$imgUrl)
  {
    return ProductoDAO::create($nombre,$descripcion,$stock,$precio,$imgUrl);
  }

  public function update($idProducto,$nombre,$descripcion,$stock,$precio,$imgUrl)
  {
    return ProductoDAO::update($idProducto,$nombre,$descripcion,$stock,$precio,$imgUrl);
  }

  public function delete($idProducto)
  {
    return ProductoDAO::delete($idProducto);
  }
  
}
