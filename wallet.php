<?php
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        ?>

        <html>
            <body>
                <?php require('nav.php') ?>
                <h1><?php echo $_SESSION['uname'] ?> Welcome to Wallet</h1>

                <footer>
                    <h5>Tynet Empire</h5>
                </footer>
            </body>
        </html>
        <?php
    }
    else{
        header('location:index.php')
    }
?>