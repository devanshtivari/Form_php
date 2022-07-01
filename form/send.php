<?php
    include './db_conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO finndit_data(Name,Email,Phone,Comment) VALUES('$name', '$email', '$phone', '$message')";

    if(mysqli_query($conn,$query)){
        echo '<script type="text/javascript">alert ("Data inserted successfully into the database");</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Ohooo... Error occured!!");</script> ';  
    }
    mysqli_close($conn);
?>