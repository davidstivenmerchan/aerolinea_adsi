<?php
    
    require_once('../php/coneccion.php');
    $compra = $_POST['compra'];
    $consultatiquetes = "SELECT * FROM vuelos where fff='$compra'";
    
?>
<?php
    if($_POST['enviar']){
        
        $clase = $_POST['clase'];
        $pasajeros = $_POST['pasajeros'];
        $cc =  $_POST['cc'];
       

        $conn = "INSERT INTO tiquetes (puestos, clase, documento) values ('$pasajeros','$clase','$cc')";
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
    <title>Document</title>
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
        <div class="elem_TI"></div>
       
       
        
    
<?php $resultadostiquetes = mysqli_query($mysqli,$consultatiquetes);
    
    while($row=mysqli_fetch_assoc($resultadostiquetes)){?>
        
        <div class="elem"><?php echo $row["id_vuelo"]; ?> </div>
        <div class="elem"><?php echo $row["hora_programada"]; ?> </div>
        <div class="elem"><?php echo $row["destino"]; ?> </div>
        <div class="elem"><?php echo $row["lugar_salida"]; ?> </div>
        <div class="elem"><?php echo $row["aeropuerto_salida"]; ?> </div>
        <div class="elem"><?php echo $row["aeropuerto_llegada"]; ?> </div>
        <div class="elem"><?php echo $row["estado"]; ?> </div>
        <div class="elem"><a href="comprarBoleto.php?id=<?php echo $row["id_vuelo"];?>">Comprar</a></div>

       
    <?php } mysqli_free_result($resultadostiquetes);?>
    </div>
    
</body>
</html>


