<?php 
    session_start();
    if(isset($_COOKIE['session_name()'])){
        setcookie(session_name(), "",time()-3600,"/");
    }
        unset($_SESSION['usu']);
        unset($_SESSION['contra']);
        
        $_SESSION = array();
        session_destroy();
        session_write_close();
        header("location: ../index.php");


?>
