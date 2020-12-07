<?php
    
    require_once('../php/coneccion.php');
    $compra = $_POST['compra'];
    $consultatiquetes = "SELECT id_vuelo, hora_salida, hora_llegada, aeropuerto_salida, aeropuerto_llegada, estado, nom_aeropuerto 
    FROM vuelos, aeropuerto where aeropuerto.id_aeropuerto=vuelos.aeropuerto_llegada and id_aeropuerto='$compra'";
    
?>
<?php
    if($_POST['enviar']){
        
        $clase = $_POST['clase'];
        $pasajeros = $_POST['pasajeros'];
        $cc =  $_POST['cc'];
       

        $conn = "INSERT INTO tiquetes (num_pasajeros, documento, id_clase) values ('$pasajeros','$cc','$clase')";
        $sqll = mysqli_query($mysqli,$conn);
        if($sqll){
            echo ("funciono");
        }else {
            echo ("no funciono");
        }

    }else{
        echo ("no funciono");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modificarVuelos.css">
    <title>Proceso de Compra</title>
</head>
<body>

<div class="tabla_vuelos_administrador">
        <div class="titulo">VUELOS</div>
        <div class="elem_TI">N° VUELO</div>
        <div class="elem_TI">HORA SALIDA</div>
        <div class="elem_TI">HORA LLEGADA</div>
        <div class="elem_TI">AEROPUERTO SALIDA</div>
        <div class="elem_TI">AEROPUERTO LLEGADA</div>
        <div class="elem_TI">ESTADO</div>
        <div class="elem_TI"></div>
       
<?php $resultadostiquetes = mysqli_query($mysqli,$consultatiquetes);
    
    while($row=mysqli_fetch_assoc($resultadostiquetes)){?>
        
        <div class="elem"><?php echo $row["id_vuelo"]; ?> </div>
        <div class="elem"><?php echo $row["hora_salida"]; ?> </div>
        <div class="elem"><?php echo $row["hora_llegada"]; ?> </div>
        <div class="elem"><?php echo $row["nom_aeropuerto"]; ?> </div>
        <div class="elem"><?php echo $row["nom_aeropuerto"]; ?> </div>
        <div class="elem"><?php echo $row["estado"]; ?> </div>
        <div class="elem"><a href="comprarBoleto.php?id=<?php echo $row["id_vuelo"];?>">Comprar</a></div>

       
    <?php } mysqli_free_result($resultadostiquetes);?>
    </div>
    
</body>
</html>


