<?php

$conn = null;

function connect() { //connect to DB
    global $conn; //set var to global
    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS); //mysqli_connect(host,user,pw)
    if(!$conn) { //if not connected then kill (test if error)
        die(mysqli_error($conn));   //kill
    }
    mysqli_select_db($conn, DBNAME); //select DB that's to be used
}


function getstudent($students) {
    global $conn;
    $sql = 'SELECT firstname FROM students where class_id  = "'. $students .'"';
    $result = mysqli_query($conn, $sql);
    $students = [];
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }
    return $students;
    }


    function getijoin($ijoin) {
      global $conn;
      $sql = 'SELECT students.firstname, students.surname, classes.class_name
      FROM students INNER JOIN classes
      ON classes.class_id = students.class_id';
      $result = mysqli_query($conn, $sql);
      $ijoin = [];
      if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)) {
              $ijoin[] = $row;
          }
      }
      return $ijoin;
    }



    function debug($data) {
      echo '<pre>';
      print_r($data);
      echo '</pre>';
    }
