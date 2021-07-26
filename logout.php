<?php
    session_unset();
    session_destroy();
    $_SESSION['user_name'] = '';
    $_SESSION['user_password'] = '';
    $_SESSION['user_email'] = '';
    header("Location: page.php");

?>