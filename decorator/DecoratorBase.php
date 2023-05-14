<?php
include('/laragon/www/class08/dao/DAOInterface.php');


interface DecoratorBase extends DAOInterface{

  public static function search($search);
  public static function get($id);
  
}