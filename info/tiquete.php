<?php

    require_once('../php/coneccion.php');
  
    
    
    
    $cc = $_POST['cc'];

    $consulta = "SELECT * from tiquetes where documento='$cc'";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="../imagenes/logoage.png">
    <title>Mi Tiquete</title>
</head>
<body>
    <div class="certificado">
        <div class="encabezado">
            <h2>TIQUETE</h2>
        </div>
        <?php $resulta = mysqli_query($mysqli, $consulta); 
        while($row=mysqli_fetch_assoc($resulta)){?>
        
        <hr>
        <p><b>FLY ADSI</b></p>
        
        <p>ID_TIQUETE :<?php echo $row["id_tiquete"];?></p>
        <p>DOCUMENTO:<?php echo $row["documento"];?> </p>
        <p>NUMERO DE VUELO:<?php echo $row["id_vuelo"];?> </p>
        <p>NUMERO DE SILLAS : <?php echo $row["num_pasajeros"];?> </p>
        <p>CLASE : <?php echo $row["id_clase"];?> </p>

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