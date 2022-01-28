<?php
    session_start();

    require "dbcon.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <div class="panel">
            <?php 

                $post_id = $_GET['post_id'];
                $query = "SELECT * from blog JOIN usersinfo ON usersinfo.id=blog.user_id where blog.id=$post_id";
                $details = mysqli_query($conn, $query);
                
                
                if(mysqli_num_rows($details) >=1){
                    while($data = mysqli_fetch_assoc($details)){
                        echo "<div>
                        <h2><a>".$data['title']."</a></h2>
                        <p>".$data['content']."</p>
                        </div>";
                        echo '============= By '.$data['name'];
                        echo " Date: ".date('m-d-Y', strtotime($data['time']));
                    }
                }
                else{
                    echo "Post not found";
                }
                
                
            ?> 
        </div>
    </div>
</body>
</html>