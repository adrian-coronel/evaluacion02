<?php

include('/laragon/www/class08/model/Producto.php');
include('/laragon/www/class08/connection/connectionMySql.php');

class ProductoDAO implements DAOInterface{

  

  public static function getAll()
  {
    $connect = connect();
    $productos = [];

    # SQL
    $query = $connect->prepare("SELECT ID_PRODUCTO, NOMBRE, DESCRIPCION, STOCK, PRECIO,IMG_URL FROM PRODUCTO;");
    $query->execute();
    $resultado = $query->get_result();

    # Append Array
    while($producto = mysqli_fetch_array($resultado)){
      array_push($productos,new Producto($producto['ID_PRODUCTO'],$producto['NOMBRE'],$producto['DESCRIPCION'],$producto['STOCK'],$producto['PRECIO'],$producto['IMG_URL']));
    }

    disconnect($connect);
    return $productos;
  }

  public static function create(Producto $producto)
  {
    $connect = connect();

    # Inicializando variables
    $Nombre= $producto->getNombre();$Descripcion= $producto->getDescripcion();
    $Stock= $producto->getStock();$Precio= $producto->getPrecio();$ImgUrl= $producto->getImgUrl();

    $query = $connect->prepare("INSERT INTO PRODUCTO(NOMBRE, DESCRIPCION, STOCK, PRECIO, IMG_URL) VALUES(?,?,?,?,?);");
    $query->bind_param('ssids',$Nombre,$Descripcion,$Stock,$Precio,$ImgUrl); # bind_param(typos de dato, value)

    $query->execute();
  
    disconnect($connect);
    return $query ? true : false;
  }

  public static function update(Producto $producto)
  {
    $connect = connect();
    
    # Inicializando variables
    $IdProducto= $producto->getIdProducto();$Nombre= $producto->getNombre();$Descripcion= $producto->getDescripcion();
    $Stock= $producto->getStock();$Precio= $producto->getPrecio();$ImgUrl= $producto->getImgUrl();

    # Prepare Statement
    $query = $connect->prepare("UPDATE PRODUCTO SET NOMBRE = ?, DESCRIPCION = ?, STOCK = ?, PRECIO = ?,IMG_URL = ? WHERE ID_PRODUCTO = ?;");
    $query->bind_param('ssidsi',$Nombre,$Descripcion,$Stock,$Precio,$ImgUrl,$IdProducto); # bind_param(typos de dato, value)

    $query->execute();
  
    disconnect($connect);
    return $query ? true : false;
  }

  public static function delete($idProducto)
  {
    $connect = connect();

    $query = $connect->prepare("DELETE FROM PRODUCTO WHERE ID_PRODUCTO = ?;");
    $query->bind_param('i',$idProducto); # bind_param(typos de dato, value)

    $query->execute();
  
    disconnect($connect);
    return $query ? true : false;
  }

}