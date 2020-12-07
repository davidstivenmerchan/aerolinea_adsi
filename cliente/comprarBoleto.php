<?php
    require_once('../php/coneccion.php');

    $idvuelo = $_GET["id"];
    
    
   
    $consul_comprar = " UPDATE tiquetes SET id_vuelo = '$idvuelo' where id_tiquete= MAX";
    $resultador =mysqli_query($mysqli, $consul_comprar);

    if($resultador){
        echo '<script> alert ("vuelo comprado exitosamente");
        window.history.go(-2); </script>';
    }else{
        echo '<script> alert ("no funciono"); </script>';
    }

?>