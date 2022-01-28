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
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <?php 

            $query = "SELECT * from blog";
            $details = mysqli_query($conn, $query);



            while($data = mysqli_fetch_assoc($details)){
                echo "<div>
                <h2><a href=edited_blog.php?post_id=".$data['id']."&title=".$data['title'].">".$data['title']."</a></h2>
                <p>".$data['content']."</p>
                </div>";
                echo '=============';
            }



        ?> 
    </div>
    
</body>
</html>