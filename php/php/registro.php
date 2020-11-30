<?php
    require_once("conexion.php"); 

    $usu = $_POST['usu'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $pw = $_POST['contra'];
    $tip = 1;

    $sql = "INSERT INTO usuario (id_usu, nom_usu, ape_usu, clave, id_tip_usu) VALUES ('$usu', '$nom', '$ape', '$pw', '$tip')";
    $query2 = mysqli_query($connect,$sql);

    if($query2){
        echo "se agrego";
    } else {
        echo "error al agregar";
    }
?>
