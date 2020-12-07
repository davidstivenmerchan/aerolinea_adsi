<?php
    require_once('../php/coneccion.php');

    $idvuelo = $_GET["id"];
    
<<<<<<< HEAD
    
    $consul_comprar = "UPDATE tiquetes SET id_vuelo = '$idvuelo'";
    $resultador =mysqli_query($mysqli, $consul_comprar);
=======
    $max = "SELECT MAX(id_tiquete) FROM tiquetes";
    $query7 = mysqli_query($mysqli,$max);
    $dat = mysqli_fetch_assoc($query7);
>>>>>>> 1001a5f5fcb6ac6692d411c7dfae52c9a08eb115

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