<?php
    require_once('../php/coneccion.php');

    $idvuelo = $_POST['idvuelo'];
    $hora = $_POST['hora'];
    $destino = $_POST['destino'];
    $lsalida = $_POST['lsalida'];
    $asalida = $_POST['asalida'];
    $estado = $_POST['estado'];
    $allegada = $_POST['allegada'];

    $consul_actualizar = "UPDATE vuelos SET id_vuelo='$idvuelo', hora_programada='$hora', destino='$destino', lugar_salida='$lsalida', aeropuerto_salida='$asalida', estado='$estado', aeropuerto_llegada='$allegada' WHERE id_vuelo='$idvuelo'";
    $resultadoo =mysqli_query($mysqli, $consul_actualizar);

    if($resultadoo){
        echo '<script> alert ("vuelo actualizado exitosamente");
        window.history.go(-2); </script>';
    }else{
        echo "<script>alert('error al actualizar vuelo');
        window.history.go(-2); </script>";
    }

?>