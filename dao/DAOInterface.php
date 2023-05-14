<?php 


interface DAOInterface{
  
  public static function getAll();

  public static function create(Producto $model);

  public static function update(Producto $model);

  public static function delete($id);

}