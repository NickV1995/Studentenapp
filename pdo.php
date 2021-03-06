<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'studentenapp');
define('DB_USER', 'root');
define('DB_PASS', 'hgv4kx5y');

function verbinden(){
  $verbinding = 'mysql:host=' . DB_HOST . ';DB_NAME' . DB_NAME;
  $db = null;

  try{
    return new PDO($verbinding, DB_USER, DB_PASS);
  } catch(PDOexception $e){
    return NULL;
  }
}




?>