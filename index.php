<?php session_start() ?>
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
            <h3>SIGNUP</h3>
            <form action="./signup.php" method="POST">
                <div class="ft">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control">
                </div>
                <div class="ft">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="ft">
                    <input type="text" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="sign">
                    <button class="btn">SIGNUP</button>
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