<?php
    require_once('coneccion.php');

    $nvuelo = $_POST['nvuelos'];
    $hora = $_POST['hora'];
    $ldestino = $_POST['ldestino'];
    $lsalida = $_POST['lsalida'];
    $asalida = $_POST['asalida'];
    $adestino = $_POST['adestino'];
    $estado = $_POST['estado'];

    $consulta_crear_vuelo = "INSERT INTO vuelos (id_vuelo, hora_programada, destino, aeropuerto_salida, aeropuerto_llegada, estado, lugar_salida) 
    values ('$nvuelo','$hora','$ldestino','$asalida','$adestino','$estado','$lsalida')";

    $resulltado = mysqli_query($mysqli, $consulta_crear_vuelo);
    if($resulltado){

        echo '<script> alert ("VUELO creado exitosamente,");
        window.history.go(-2); </script>';
        exit;
        ;
    }else{
        echo "<script>alert('error al crear vuelo');";
    }
?>