<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="parent">
            <div class="header shadow-sm">
                <div class="navbar navbar-expand-sm container">
                    <div class="left">
                        <a href="#" class="navbar-brand">
                            <img src="./image/mega.png" alt="">
                        </a>

                        <button class="navbar-toggler bell"  id="openSideBar">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <div class="show">
                            <ul class="navbar-nav">
                                <li class="nav-items">
                                    <a href="dash.php" class="nav-link">
                                        DASHBOARD
                                    </a>
                                </li>
                                <li class="nav-items">
                                    <a href="blog.php" class="nav-link">
                                        BLOG 
                                    </a>
                                </li>
                                <li class="nav-items">
                                    <a href="post.php" class="nav-link">
                                        BLOG POST
                                    </a>
                                </li>
                                <li class="nav-items">
                                    <a href="edit.php" class="nav-link">
                                        EDIT BLOG
                                    </a>
                                </li>
                                <li class="nav-items">
                                    <a href="index.php" class="nav-link">
                                        SIGNUP
                                    </a>
                                </li>
                                <li class="nav-items drop">
                                    <a href="#" class="nav-link">
                                        MY ACCOUNT
                                    </a>
                                    <div class="ex">
                                        <div class="tin">
                                            <a href="login.php">
                                                LOGIN
                                            </a>
                                        </div>
                                        <div class="tin">LOGOUT</div>
                                        <div class="tin2">SETTINGS</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sideBar">
                        <ul class="navbar-nav">
                            <li class="nav-items">
                                <a href="dash.php" class="nav-link">
                                    DASHBOARD
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="blog.php" class="nav-link">
                                    BLOG
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="post.php" class="nav-link">
                                    BLOG POST
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="edit.php" class="nav-link">
                                    EDIT BLOG
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="#" class="nav-link">
                                    SIGNUP
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="#" class="nav-link">
                                    MY ACCOUNT
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="login.php" class="nav-link">
                                    LOGIN
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="#" class="nav-link">
                                    LOGOUT
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="#" class="nav-link">
                                    SETTINGS
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
       $(document).ready(function(){
        $('.sideBar').hide()
        $('#openSideBar').click(function(){
            $('.sideBar').toggle()   
        })
       })
    </script>
</body>
</html>

<style>
    html,body{ 
        margin: 0px;
    }
    nav{
        width: 100%;
        top: -10% !important;
        margin: 0;
        z-index: 100;
        background-color: teal;
        align-items: center;
    }
    a{
        color: white;
        font-weight: bold;

    }
    a:hover{
        color: rgb(226, 223, 223);
    }
    .show{
        display: flex;
        margin-left: 30% !important;
    }
    .sideBar{
        display: none;
    }
    .navbar{
        display: flex;
        align-items: center;
    }
    .ex{
        background-color: white;
        border-radius: 3%;
        width: 18% !important;
        padding: 0% 2%;
        line-height: 3.0;
        padding-top: 5px;
        padding-bottom: 5px;
        height: 150px;
        position: absolute ;
        border: 1px solid lightgray;
        z-index: 100;
        box-shadow: 1px 1px 1px  black;
        display: none;
    }
    .tin{
        border-bottom: 1px solid lightgray;
        font-weight: bold;
        text-align: center;
    }
    .tin a{
        color: black;
        text-decoration: none;
    }
    img{
        width: 60%;    
    }
    .tin2{
        font-weight: bold;
        text-align: center;
    }
    .drop:hover .ex{
        display: inherit;
    }

    @media(max-width:760px){
        .sideBar{
            background: white;
            top: 0;
            left: -3% !important;
            width: 55%;
            height: 100vh;
            position: absolute !important;
            z-index: 1000;
            box-shadow: 0px 0px 2px black;
            padding: 4% 6%;
            font-size: 17px;
            line-height: 3.0;
        }
        a{
            color: teal;
        }
        .left{
            display: flex;
            justify-content: space-between !important;
            align-items: center;
            width: 100% !important;
        }
        .bell{
            color: white;
        }
        .collapse{
            display: none;
        }
        nav{
            width: 100% !important;
        }
        
    }
    

</style>