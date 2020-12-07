<?php
    require_once('../php/coneccion.php');

    $idvuelo = $_GET["id"];
    
    
    $consul_comprar = "UPDATE tiquetes SET id_vuelo = '$idvuelo'";
    $resultador =mysqli_query($mysqli, $consul_comprar);

    $string = implode($dat);

    echo $string;

    
   if (!empty($string)) {
       
       $consul_comprar = "UPDATE tiquetes SET id_vuelo = '$idvuelo' WHERE id_tiquete = '$string'";
       $resultador =mysqli_query($mysqli, $consul_comprar);
   
       if($resultador){
           echo '<script> alert ("vuelo comprado exitosamente");
           window.history.go(-2); </script>';
       }else{
           echo '<script> alert ("no funciono"); </script>';
       }  
   } else {
       echo "hay un error crak";
   }
?>