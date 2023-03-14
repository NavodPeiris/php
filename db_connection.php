<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'test_user', 'a1b2c3d4', 'company', '3390'); 

    if(!$conn){
        echo "connection error: " . mysqli_connect_error();
    }
?>