
<?php
require_once('../php/coneccion.php');
$id = $_GET['id'];
$consulta_vuelos = "SELECT * FROM vuelos WHERE id_vuelo='$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/modificarVuelos.css">
<title>Panel de edicion de vuelos</title>
</head>
<body>
<form class="tabla_vuelos_administrador" action="">
    <div class="titulo">VUELOS</div>
    <div class="elem_TI">N° VUELO</div>
    <div class="elem_TI">HORA PROGRAMADA</div>
    <div class="elem_TI">LUGAR DESTINO</div>
    <div class="elem_TI">LUGAR SALIDA</div>
    <div class="elem_TI">AEROPUERTO SALIDA</div>
    <div class="elem_TI">AERO DESTINO</div>
    <div class="elem_TI">ESTADO</div>
    <div class="elem_TI">VALIDAR</div>
<?php $resultados = mysqli_query($mysqli,$consulta_vuelos);

while($row=mysqli_fetch_assoc($resultados)){?>
    <input type="text" class="elem" value="<?php echo $row["id_vuelo"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["hora_programada"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["destino"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["lugar_salida"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["aeropuerto_salida"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["estado"];?>" style="color:black">
    <input type="text" class="elem" value="<?php echo $row["aeropuerto_llegada"];?>" style="color:black">

    <?php } mysqli_free_result($resultados);?>
    
</form>

</body>
</html>









