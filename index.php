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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form id="form1">
   <div class="divTable">
             <div class="divCell">Firstname</div>
             <div  class="divCell">Lastname</div>
             <div  class="divCell">Class</div>
    </div>
    <div class=data>
    <?php for($i = 0; $i < count(getijoin()); $i++) { ?>
            <div class="cell1">
                <?php echo getijoin()[$i]['firstname'];?>
            </div>
            <div class="cell2">
                <?php echo getijoin()[$i]['surname'];?>
            </div>
            <div class="cell3">
                <?php echo getijoin()[$i]['class_name'];?>
            </div>
          <?php } ?>

      </div>
  </form>

    <?php
    $age = 25;
    for($i = 0; $i < count(getstudent('1')); $i++) {
    echo getstudent('1')[$i]["firstname"];
      debug(getstudent('1')[$i]);
      }


      debug(getijoin());
      ?>
  </body>
</html>
