<?php

function connect(){
  return  mysqli_connect("localhost","root","miryam2003","eval02");
}

function disconnect($connection){
  mysqli_close($connection);
}
