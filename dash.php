<?php
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
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
                <div>
                    <?php require('nav.php') ?>
                </div>
            <div class="parent">
                
                <div class="headie">
                    <h1>DASHBOARD</h1>
                    <h3> Welcome, <?php echo $_SESSION['uname'] ?>!!!</h3>

                </div>
                <footer>
                    <h5>Tynet Empire</h5>
                </footer>
            </div>

            <style>
                html, body {
                    margin: 0px !important;
                    padding: 0px !important;
                    padding-top: 0px !important;
                }

                .parent, html {
                    width: 100%;
                    padding: 0px !important;
                }
                .parent .headie, html .headie {
                    width: 100%;
                    padding: 0px !important;
                    margin: 0px !important;
                }
                .parent .headie h1, .parent .headie h3, html .headie h1, html .headie h3 {
                    text-align: center;
                }

            </style>
            
        </body>
        </html>
        <?php
    }
    else{
        header('location:index.php');
    }
?>