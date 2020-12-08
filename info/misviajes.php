<?php

    require_once('../php/coneccion.php');
    
    $cc = $_POST['id_vuelo'];

    $consulta = "SELECT * FROM vuelos where id_vuelo='$cc'";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="../imagenes/logoage.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Mis Viajes</title>
</head>
<body>
    <div class="certificado">
        <div class="encabezado">
            <h2>VIAJE</h2>
        </div>
        <?php $resulta = mysqli_query($mysqli, $consulta); 
        while($row=mysqli_fetch_assoc($resulta)){?>
        
        <hr>
        <p><b>FLY ADSI</b></p>
        
        
        <p>ID_VUELO :<?php echo $row["id_vuelo"];?></p>
        <p>HORA SALIDA:<?php echo $row["hora_salida"];?> </p>
        <p>HOLRA LLEGADA:<?php echo $row["hora_llegada"];?> </p>
        <p>AEROPUERTO SALIDA : <?php echo $row["aeropuerto_salida"];?> </p>
        <p>AEROPUERTO LLEGADA :<?php echo $row["aeropuerto_llegada"];?> </p>
        <p>ESTADO: <?php echo $row["estado"];?> </p>


        <hr>
        <button id="pdf">Imprimir</button>
    </div>
    <?php } mysqli_free_result($resulta);?>
    <img src="../imagenes/logoage.png" alt="" class="logos">
    <img src="../imagenes/avionlog.jpg.png" alt="" class="logo">
</body>
    <script>
        const boton = document.getElementById("pdf");
        boton.addEventListener("click", ()=>{
            boton.style.display = "none";
            setTimeout(()=>{
                window.print();    
            }, 1000);
        });
    </script>
</html>