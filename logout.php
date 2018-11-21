<?php

// session_start();
// unset($_SESSION);
// session_destroy();
// session_write_close();
// header('Location:index.php');
// die;

?>

<?php

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['login_user']);
    header('location:index.php');
}

?>