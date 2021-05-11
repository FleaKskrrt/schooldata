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
      $sql = "SELECT * FROM students;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($result > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['studentid'] . "<br>";
          }
      }



     ?>
  </body>
</html>
