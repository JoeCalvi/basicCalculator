<?php
spl_autoload_register('myAutoLoader');

// loads classes automatically as soon as class is instantiated
function myAutoLoader($className) {
  $root = "classes/";
  $ext = ".class.php";
  $path = $root . $className . $ext;

  include_once $path;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>