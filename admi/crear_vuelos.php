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
    <link rel="icon" href="../imagenes/logoage.png">
    <title>crear vuelos</title>
</head>
<body>
    <div class="conte">
        <div class="formu">
            <img src="../imagenes/logoage.png" alt="">
    <form method="POST" action="../php/crear_vuelos.php">
        <h2> CREAR VUELOS</h2>
        <label for="">N° VUELO</label>
        <input class="vuelos" type="number" placeholder="N° vuelo"name="nvuelos" autocomplete="off"><br>
        <label for="">HORA DE SALIDA</label>
        <input class="hora"type="time" name="hora" autocomplete="off"><br>
        <label for="">HORA DE LLEGADA</label>
        <input class="horat" type="time" name="horat" autocomplete="off"><br>
        <label for="">ORIGEN </label>
        <select class="inputR" name="asalida" id="asalida">
            <?php
            foreach ($query_aero as $salida) : ?>
                <option value="<?php echo $salida['id_aeropuerto'] ?> ">
                    <?php echo $salida['nom_aeropuerto'] ?></option>
            <?php
            endforeach;
            ?>
        </select><br>
        <label for="">DESTINO</label>
        <select class="inputRR" name="adestino" id="adestino">
            <?php
            foreach ($query_aero as $destino) : ?>
                <option value="<?php echo $destino['id_aeropuerto'] ?> ">
                    <?php echo $destino['nom_aeropuerto'] ?></option>
            <?php
            endforeach;
            ?>
        </select><br>
        <label for="">ESTADO</label>
        <input class="estado" type="text" placeholder="Estado"name="estado" autocomplete="off">
        <input class="enviar" type="submit">
    </form>
</div>
    <h1> BIENVENIDO ADMINISTRADOR</h1>
    </div>
</body>
</html>