<?php
session_start();
include('functions.php');

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'studentdb');

connect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $age = 25;
    for($i = 0; $i < count(getstudent($age)); $i++) {
    echo getstudent($age)[$i]["firstname"];
      debug(getstudent($age)[$i]);
      }
      //for($i = 0; $i < count(getclasses('2')); $i++) {
      //echo getstudent('2')[$i]["class_id"];
      //  debug(getstudent('2')[$i]);
      echo getclasses('2')["class_id"]; {
        debug(getclasses('2')["class_id"]);
      }
      ?>
  </body>
</html>
