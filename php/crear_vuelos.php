<?php
    require_once('coneccion.php');

    

    $nvuelo = $_POST['nvuelos'];
    $hora = $_POST['hora'];
    $horat = $_POST['horat'];
    $asalida = $_POST['asalida'];
    $adestino = $_POST['adestino'];
    $estado = $_POST['estado'];
    $fff = $_POST['fff'];

    if($ldestino=="Alemania"){
        $fff = 1;
    }
    else if($ldestino=="Rusia"){
        $fff = 2;
    }
    else if($ldestino=="China"){
        $fff = 3;
    }else{
        $fff = 4;
    }

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