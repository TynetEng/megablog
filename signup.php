<?php
    session_start();
    
    require "dbcon.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $error = false;
    $messages = [];

    if(!$_POST['name']){
        $messages[] = "please enter your name";
        $error = true;
    }

    if(!$_POST['email']){
        $messages[] = "please enter your email";
        $error = true;
    }

    if(!$_POST['password']){
        $messages[] = "please enter your password";
        $error = true;
    }
    
    echo $_SESSION['signup_error'] = $messages;

    if($error){
        header('location:/php/firstphp');
    }
    else{

        $usa = mysqli_query($conn, "SELECT email From usersinfo where email='$email'");
        if(mysqli_num_rows($usa)){
            $_SESSION['signup_error'] = ["This email provided has already been used"];
            header('location:/php/firstphp');
        }

        $query = "INSERT into usersInfo (name, email, password) values('$name', '$email', '$pass')";
        $save = mysqli_query($conn, $query);
        if($save){
            $_SESSION['success'] = "Account created successfully";
            header('location:/php/firstphp/login.php');
        }
        else{
            echo "<br> Something went wrong";
        }
        
    }

    die()

?>