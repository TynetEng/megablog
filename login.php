<?php session_start();
     
    if(isset($_POST['submit'])){

        if(!empty($_POST['email']) && !empty($_POST['password'])){
            require "dbcon.php";
            $email = $_POST['email'];
            $pass = md5($_POST['password']);

            $usa = mysqli_query($conn, "SELECT email, name, id From usersInfo where email='$email' and password='$pass'");
            if($data = mysqli_fetch_array($usa)){
                $_SESSION['uid'] = $data['id'];
                $_SESSION['uname'] = $data['name'];
                $_SESSION['uemail'] = $data['email'];

                $_SESSION['success'] = "Login successfully";
                header('location:dash.php');
            }
            else{
                $_SESSION['signup_error']=["Invalid credentials provided"];
            }
        }
        
        
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <div class="logo">
            <img src="./image/mega2.png" alt="">
        </div>
        <div class="box card card-body">

            <h3>LOGIN</h3>

            <?php
                if (isset($_SESSION['success'])){
                    echo"   <div class='alert alert-success'>
                                <strong>".
                                $_SESSION['success'] .
                                '</strong>
                        </div>';
                    
                }
                unset($_SESSION['success']);
            ?>
            <?php
                if (isset($_SESSION['signup_error'])){
                    foreach ($_SESSION['signup_error'] as $key => $value){
                    echo"   <div class='alert alert-danger'>
                                <strong>".
                                $value .
                                '</strong>
                        </div>';
                    
                }
                unset($_SESSION['signup_error']);
            }
            ?>
            <form action="./login.php" method="POST">
                <div class="ft">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="ft">
                    <input type="text" name="password" placeholder="Enter your password"  class="form-control">
                </div>
                <div class="sign">
                    <button class="btn" name="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    
    <style>
        .parent {
            width: 100%;
        }
        .logo{
            display: flex;
            justify-content: center;
            padding-top: 2%;
        }
        .logo img{
            width: 10%;
        }
        .parent .box {
            width: 30%;
            margin: auto;
            margin-top: 40px;
            box-shadow: rgba(0, 0, 0, 0.6);
        }
        .parent .box h3 {
            text-align: center;
            color: teal;
        }
        .parent .box .ft {
            margin-top: 2%;
        }
        .parent .box .sign {
            margin-top: 2%;
            text-align: center;
        }
        .parent .box .sign .btn{
            background-color: teal;
            color: white;
            font-weight: bold;
        }

        @media (max-width: 760px) {
            .parent {
                margin-top: 25vh;
            }
            .logo img{
                width: 30%;
                margin-bottom: 2%;
            }
            .parent .box {
                width: 100%;
                margin: 0px;
            }
        }
    </style>
</body>
</html>