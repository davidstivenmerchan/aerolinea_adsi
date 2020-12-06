<?php
   session_start();

    if(!isset($_SESSION['cc']) || !isset($_SESSION['id_tip_usu']))
    {
       header("location: ../index.php");
        exit;
   }
?>   