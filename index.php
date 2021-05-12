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
    for($i = 0; $i < count(getstudent('IT')); $i++) {
    echo getstudent('IT')[$i]["firstname"];
      debug(getstudent('IT')[$i]);
      }


      $ijoin = '';
      debug(getijoin($ijoin));
      ?>
  </body>
</html>
