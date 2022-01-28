<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db ="phpclass";

    $conn = mysqli_connect($server, $user, $password, $db);

    if($conn){
        // echo "Connected successfully!";
    }
    else{
        echo "Connection error";
    }
?>