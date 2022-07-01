<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "finndit";

    $conn = mysqli_connect($server, $username, $password , $db_name);

    if($conn === false){
        die("Could not connect.".mysqli_connect_error());
    }
?>