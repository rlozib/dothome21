<?php
    $host = "localhost";
    $user = "rlozib3712";
    $pass = "비밀번호";
    $db = "rlozib3712";

    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno()){
        // echo "Database Connect Fales";
    } else {
        //echo "Database Connect True";
    }
?>
