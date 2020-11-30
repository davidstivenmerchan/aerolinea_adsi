<?php
    require_once("conexion.php");

    $usu = $_POST['usu'];
    $pw = $_POST['contra'];

    $consul = "SELECT * FROM usuario WHERE id_usu = '$usu' AND clave = '$pw'";
    $query = mysqli_query($connect,$consul);
    $fila = mysqli_fetch_assoc($query);
    
    if($fila){
        header("Location: ../iniciosesion.html");
    } else {
        echo "error perro";
    }
?>