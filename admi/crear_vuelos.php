<?php
require '../php/coneccion.php';


$sql_aero= "SELECT * FROM aeropuerto";
$query_aero = mysqli_query($mysqli, $sql_aero);
$fila_aero = mysqli_fetch_assoc($query_aero);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crear_vuelos.css">
    <title>crear vuelos</title>
</head>
<body>
    <div class="conte">
        <div class="formu">
            <img src="../imagenes/logoage.png" alt="">
    <form method="POST" action="../php/crear_vuelos.php">
        <h2> CREAR VUELOS</h2>
        <input type="number" placeholder="N° vuelo"name="nvuelos" autocomplete="off">
        <input type="time" placeholder="Hora salida "name="hora" autocomplete="off">
        <input type="time" placeholder="Hora llegada"name="horat" autocomplete="off">
        <label for="">origen</label>
        <select class="inputR" name="asalida" id="asalida">
            <?php
            foreach ($query_aero as $salida) : ?>
                <option value="<?php echo $salida['id_aeropuerto'] ?> ">
                    <?php echo $salida['nom_aeropuerto'] ?></option>
            <?php
            endforeach;
            ?>
        </select>
        <label for="">destino</label>
        <select class="inputR" name="adestino" id="adestino">
            <?php
            foreach ($query_aero as $destino) : ?>
                <option value="<?php echo $destino['id_aeropuerto'] ?> ">
                    <?php echo $destino['nom_aeropuerto'] ?></option>
            <?php
            endforeach;
            ?>
        </select>
        <input type="text" placeholder="Estado"name="estado" autocomplete="off">
        <input class="enviar" type="submit">
    </form>
</div>
    <h1> BIENVENIDO ADMINISTRADOR</h1>
    </div>
</body>
</html>