<?php
    session_start();

    
    if(isset($_POST['submit'])){
        require "dbcon.php";

        $title = $_POST['title'];
        $content = $_POST['blog'];
        $id = $_SESSION['uid'];
        
        
        $query = "INSERT into blog (title, content, user_id) values ('$title', '$content', '$id')";
        $save = mysqli_query($conn, $query);

        if($save){
            $_SESSION['success'] = "Blog posted successfully";
            header('localhost:dash.php');
        }
        else{
            echo "Error occurred";
        }

    }
    
    else{
        header('localhost:blog.php');
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php require('nav.php') ?>
    </div>
    <div class="parent">
        <?php
            if (isset($_SESSION['success'])){
                echo"   <div class='alert alert-success'>
                            <strong>".
                            $_SESSION['success'] .
                            '</strong>
                       </div>';
                unset($_SESSION['success']);   
            }
            
        ?>
        <div class="headie">
            <h3>POST BLOG</h3>
        </div>
            <div class="panel">
                <form action="./blog.php" method="POST">
                    <div class="inp">
                        <input type="text" name="title" placeholder="Post Title" required class="form-control">
                    </div>
                    <div class="edit">
                        <button onclick="boldText()" type="button">B</button>
                        <button onclick="italicText()" type="button"><em>I</em></button>
                        <button onclick="underlineText()" type="button">U</button>
                        <button onclick="paragraphText()" type="button">P</button>
                        <button onclick="justifyLeft()" type="button"><i class="fa fa-align-left"></i></button>
                        <button onclick="justifyCenter()" type="button"><i class="fa fa-align-center"></i></button>
                        <button onclick="justifyRight()" type="button"><i class="fa fa-align-right"></i></button>
                        <button onclick="justify()" type="button"><i class="fa fa-align-justify"></i></button>
                        <input type="color" id="colour" oninput="colr()">
                        <select name="" id="">
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="blog" id="blog" hidden required>
                    </div>
                    <div>
                        <div contenteditable="true" required placeholder=" Enter Blog text" id="textarea" oninput="enterBlog(this)"></div>
                    </div>
                    <div class="post">
                        <button class="teal" style="margin-top: 5px;" name="submit">POST</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    <style>
        html, body {
            margin: 0px !important;
            padding: 0px !important;
            padding-top: 0px !important;
            width: 100%;
        }
        .headie{
            width: 100%;
        }
        .parent {
            padding: 0% !important;
            width: 100%;
            margin: auto;
        }
        .parent .headie h3 {
            text-align: center;
            padding-top: 3%;
        }
        .teal{
            background-color: teal;
            color: white;
            border: 0;
            padding: 0.5% 2%;
            border-radius: 5px;
            font-weight: bold;
        }

        .panel {
            width: 100%;
        }
        .panel .inp {
            width: 30%;
            margin: auto;
            margin-top: 10px;
        }
        .panel #textarea {
            width: 60%;
            margin-top: 10px;
            border: 1px solid lightgrey;
            min-height: 40%;
            padding: 2%;
            max-height: fit-content;
            margin: auto;
            margin-top: 10px;
        }
        .panel .edit {
            margin-top: 20px;
            text-align: center;
        }
        .panel .edit button {
            border: none;
            width: 40px;
            height: 40px;
            background-color: black;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }
        .panel .post {
            text-align: center;
        }

        @media (max-width: 760px) {
        .parent {
            width: 100%;
            padding: 5% 2%;
        }

        .panel #textarea {
            width: 100%;
        }
        .panel .inp {
            width: 50%;
        }
        .panel .edit {
            line-height: 1.5 !important;
        }
    }
    </style>

    <script>
        let bg = document.getElementById('blog')

        function enterBlog(params){
            bg.value = params.innerHTML;
            console.log(bg.value)
        }
         
        function boldText(){
            document.execCommand('bold', false, null)
        }
        function italicText(){
            document.execCommand('italic', false, null)
        }
        function underlineText(){
            document.execCommand('underline', false, null)
        }
        function paragraphText(){
            document.execCommand('paragraph', false, null)
        }
        function justifyLeft(){
            document.execCommand('justifyLeft', false, null)
        }
        function justifyCenter(){
            document.execCommand('justifyCenter', false, null)
        }
        function justifyRight(){
            document.execCommand('justifyRight', false, null)
        }
        function justify(){
            document.execCommand('justify', false, null)
        }
        function colr(){
            display.style.color = b.value
        }
    </script>
</body>
</html>
