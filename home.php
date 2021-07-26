<?php 
session_start();


if (isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "you must login to view this page";
    header('location: page.php');
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    header('location: page.php');
}
?>


<!DOCTYPE html>
<html>
    <body>
        <h1>This is the home page</h1>
        <?php 
        if (isset($_SESSION['success'])) : ?>

        <div>
            <h3>
                <?php  
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>


        <?php 
        if (isset($_SESSION['user_name'])) : ?>
        <h3>welcome <strong> <?php  echo $_SESSION['user_name']; ?></strong></h3>

        <button><a href="home.php?logout='1'"></a></button>
        <?php endif ?>
    </body>
</html>