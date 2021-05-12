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
    $sql = 'SELECT firstname FROM students where age  > "'. $students .'"';
    $result = mysqli_query($conn, $sql);
    $students = [];
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }
    return $students;
    }

  function getclasses($classes) {
    global $conn;
    $sql = 'SELECT class_name FROM classes where class_id ="'. $classes .'"';
  }

    function debug($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
