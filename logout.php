<?php

// session_start();
// unset($_SESSION);
// session_destroy();
// session_write_close();
// header('Location:index.php');
// die;

?>

<?php
ini_set('display_errors', 1);
session_start();
if(isset($_GET['Logout'])) {
    unset($_SESSION['login_user']);
    session_destroy();
    
    header('Location:index.php');
}

?>