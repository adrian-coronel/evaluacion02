<?php

// include('/laragon/www/desarrollo-de-app-web/class08/dao/ProductoDAO.php');

include('/laragon/www/class08/decorator/ProductoDecorator.php');

class ProductoController{
  
  public function getAll()
  {
    return ProductoDecorator::getAll();
  }

  public function create($nombre,$descripcion,$stock,$precio,$imgUrl)
  {
    return ProductoDecorator::create(new Producto(null,$nombre,$descripcion,$stock,$precio,$imgUrl));
  }

  public function update($idProducto,$nombre,$descripcion,$stock,$precio,$imgUrl)
  {
    return ProductoDecorator::update(new Producto($idProducto,$nombre,$descripcion,$stock,$precio,$imgUrl));
  }

  public function delete($idProducto)
  {
    return ProductoDecorator::delete($idProducto);
  }

  public function get($id)
  {
    return ProductoDecorator::get($id);
  }
  
  public function search($search)
  {
    return ProductoDecorator::search($search);
  }
}
