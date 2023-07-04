<?php
spl_autoload_register('myAutoLoader');

// loads classes automatically as soon as class is instantiated
function myAutoLoader($className) {
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

// ensures correct pathing 
  if(strpos($url, 'includes') !== false) {
    $root = '../classes/';
  } else {
    $root = "classes/";
  }

  $ext = ".class.php";
  $path = $root . $className . $ext;

// returns a cleaner, more concise error message
  if(!file_exists($path)) {
    return false;
  }

  require_once $path;
}
?>