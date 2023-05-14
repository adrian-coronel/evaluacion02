<?php

class Producto {

  private $idProducto;
  private $nombre;
  private $descripcion;
  private $stock;
  private $precio;
  private $imgUrl;

  
  public function __construct($idProducto,$nombre,$descripcion,$stock,$precio,$imgUrl)
  {
    $this->idProducto = $idProducto;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->stock = $stock;
    $this->precio = $precio;
    $this->imgUrl = $imgUrl;
  }


  public function getIdProducto()
  {
    return $this->idProducto;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getDescripcion()
  {
    return $this->descripcion;
  }
  public function getStock()
  {
    return $this->stock;
  }
  public function getPrecio()
  {
    return $this->precio;
  }
  public function getImgUrl()
  {
    return $this->imgUrl;
  }

  public function setIdProducto($idProducto)
  {
    $this->idProducto = $idProducto;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }
  public function setStock($stock)
  {
    $this->stock = $stock;
  }
  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }
  public function setImgUrl($imgUrl)
  {
    $this->imgUrl = $imgUrl;
  }
}
