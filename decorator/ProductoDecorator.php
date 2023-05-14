<?php

// include('/laragon/www/class08/connection/connectionMySql.php');
include('/laragon/www/class08/decorator/DecoratorBase.php');
include('/laragon/www/class08/dao/ProductoDAO.php');

class ProductoDecorator extends ProductoDAO implements DecoratorBase{

  public static function search($search)
  {
    $connect = connect();
    $productos = [];

    # SQL
    $query = $connect->prepare("SELECT ID_PRODUCTO, NOMBRE, DESCRIPCION, STOCK, PRECIO, IMG_URL FROM PRODUCTO WHERE NOMBRE LIKE ?;");
    $search = '%'.$search.'%';
    $query->bind_param('s',$search);
    $query->execute();
    $resultado = $query->get_result();

    # Append Array
    while($producto = mysqli_fetch_array($resultado)){
      array_push($productos,new Producto($producto['ID_PRODUCTO'],$producto['NOMBRE'],$producto['DESCRIPCION'],$producto['STOCK'],$producto['PRECIO'],$producto['IMG_URL']));
    }

    disconnect($connect);
    return $productos;
  }

  public static function get($id)
  {
    
    $connect = connect();

    # SQL
    $query = $connect->prepare("SELECT ID_PRODUCTO, NOMBRE, DESCRIPCION, STOCK, PRECIO,IMG_URL FROM PRODUCTO WHERE ID_PRODUCTO = ?");
    $query->bind_param('i',$id);
    $query->execute();
    $resultado = $query->get_result();

    $producto = mysqli_fetch_array($resultado);

    disconnect($connect);
    return new Producto($producto['ID_PRODUCTO'],$producto['NOMBRE'],$producto['DESCRIPCION'],$producto['STOCK'],$producto['PRECIO'],$producto['IMG_URL']);
    // return $producto;
  }
  
}

