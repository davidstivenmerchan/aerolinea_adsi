<?php
    require_once('../php/coneccion.php');

    $idvuelo = $_GET["id"];

    $consulta_eliminar = "DELETE FROM vuelos where id_vuelo='$idvuelo'";

    $resul = mysqli_query($mysqli,$consulta_eliminar);

    if($resul){
        echo '<script> alert ("vuelo eliminado exitosamente");
        window.history.go(-1); </script>';
    }else{
        echo "<script>alert('error al eleminar el vuelo');
        window.history.go(-1); </script>";
    }
?>