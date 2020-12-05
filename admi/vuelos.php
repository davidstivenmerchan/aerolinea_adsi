<?php
    require_once('../php/coneccion.php');
    $consulta_vuelos = "SELECT * FROM vuelos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/vuelos_admi.css">
    <title>Administrador-Vuelos</title>
</head>
<body>
    <div class="tabla_vuelos_administrador">
        <div class="titulo">VUELOS</div>
        <div class="elem_TI">N° VUELO</div>
        <div class="elem_TI">HORA PROGRAMADA</div>
        <div class="elem_TI">LUGAR DESTINO</div>
        <div class="elem_TI">LUGAR SALIDA</div>
        <div class="elem_TI">AEROPUERTO SALIDA</div>
        <div class="elem_TI">AEROPUERTO DESTINO</div>
        <div class="elem_TI">ESTADO</div>
        
    <?php $resultados = mysqli_query($mysqli,$consulta_vuelos);
    
    while($row=mysqli_fetch_assoc($resultados)){?>
        <div class="elem"><?php echo $row["id_vuelo"]; ?> </div>
        <div class="elem"><?php echo $row["hora_programada"]; ?> </div>
        <div class="elem"><?php echo $row["destino"]; ?> </div>
        <div class="elem"><?php echo $row["lugar_salida"]; ?> </div>
        <div class="elem"><?php echo $row["aeropuerto_salida"]; ?> </div>
        <div class="elem"><?php echo $row["aeropuerto_llegada"]; ?> </div>
        <div class="elem"><?php echo $row["estado"]; ?> </div>
       
       

        <?php } mysqli_free_result($resultados);?>
        
    </div>

    
</body>
</html>