<?php
    require_once('coneccion.php');

    

    $nvuelo = $_POST['nvuelos'];
    $hora = $_POST['hora'];
    $ldestino = $_POST['pais'];
    $lsalida = $_POST['lsalida'];
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

    $consulta_crear_vuelo = "INSERT INTO vuelos (id_vuelo, hora_programada, destino, aeropuerto_salida, aeropuerto_llegada, estado, lugar_salida, fff) 
    values ('$nvuelo','$hora','$ldestino','$asalida','$adestino','$estado','$lsalida', '$fff')";

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