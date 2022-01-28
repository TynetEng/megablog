<?php
    session_start();

    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        require "dbcon.php";
        
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
    <div>
        <?php require('nav.php') ?>
    </div>
    <div class="parent">

        <!-- <div>
            <input type="text" >
        </div> -->
        <div class="panel">
            <?php 

                $query = "SELECT * from blog";
              
                $details = mysqli_query($conn, $query);
                // $views = $_POST['views'];

                // $usa = mysqli_query($conn, "SELECT email From usersinfo where email='$email'");
                // if(mysqli_num_rows($usa)){{

                // }
               

                while($data = mysqli_fetch_assoc($details)){
                    echo "<div class='blog'>
                    <h2><a href=single_post.php?post_id=".$data['id']."&title=".$data['title'].">".$data['title']."</a></h2>
                    <p>".$data['content']."</p>
                    </div>";
                    
                }

                
                
            ?> 
        </div>
    </div>

    <style>
        
        .parent .panel {
            display: block;
            margin: 1% 3%;
        }
        .parent .panel .title {
            font-weight: bold;
        }
        .parent .panel .ft {
            display: flex;
            justify-content: space-between;
        }
        .blog{
            padding-bottom: 30px;
        }
        h2{
            font-weight: bold;
        }
        h2 a{
            color: black !important;
        }

    </style>
</body>
</html>
