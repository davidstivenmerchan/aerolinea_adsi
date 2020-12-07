<?php
    require_once('coneccion.php');

    $nvuelo = $_POST['nvuelos'];
    $hora = $_POST['hora'];
    $horat = $_POST['horat'];
    $asalida = $_POST['asalida'];
    $adestino = $_POST['adestino'];
    $estado = $_POST['estado'];

    $consulta_crear_vuelo = "INSERT INTO vuelos (id_vuelo, hora_salida, hora_llegada, aeropuerto_salida, aeropuerto_llegada,estado)  values ('$nvuelo','$hora','$horat','$asalida','$adestino','$estado')";

    $resulltado = mysqli_query($mysqli, $consulta_crear_vuelo);
    if($resulltado){

        echo '<script> alert ("VUELO creado exitosamente,");
        window.history.go(-2); </script>';
        exit;
        
    }else{
        echo '<script> alert ("no se creo su vuelo,");
        window.history.go(-2); </script>';
        exit;
    }
?>