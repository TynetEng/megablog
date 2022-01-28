<?php
    session_start();

    require "dblog.php";

    $title = $_POST['title'];
    $blog = $_POST['blog'];
    
    $query = "INSERT into post (title, content) values ($title, $blog)";
    $save = mysqli_query($conn, $query);

    if($save){
        echo "Blog posted successfully";
    }
    else{
        echo "Error occurred";
    }

?>