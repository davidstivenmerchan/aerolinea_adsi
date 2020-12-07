<?php
require_once('../php/coneccion.php');

$consul3 = "SELECT * FROM origen WHERE id_origen = '1'";
$query3 = mysqli_query($mysqli,$consul3);
$fila3 = mysqli_fetch_assoc($query3);

if($fila3){
    $_SESSION['origin'] = $fila3['nom_origen'];
}
$consul4 = "SELECT * FROM origen WHERE id_origen = '2'";
$query4 = mysqli_query($mysqli,$consul4);
$fila4 = mysqli_fetch_assoc($query4);

if($fila4){
    $_SESSION['origin2'] = $fila4['nom_origen'];
}
 
$consul5 = "SELECT * FROM destino WHERE id_destino = '1'";
$query5 = mysqli_query($mysqli,$consul5);
$fila5 = mysqli_fetch_assoc($query5);

if($fila5){
    $_SESSION['destino'] = $fila5['nom_destino'];
}

$consul6 = "SELECT * FROM destino WHERE id_destino = '2'";
$query6 = mysqli_query($mysqli,$consul6);
$fila6 = mysqli_fetch_assoc($query6);

if($fila6){
    $_SESSION['destino2'] = $fila6['nom_destino'];
}

$consul6 = "SELECT * FROM clase WHERE id_clase = '2'";
$query6 = mysqli_query($mysqli,$consul6);
$fila6 = mysqli_fetch_assoc($query6);

if($fila6){
    $_SESSION['destino2'] = $fila6['nom_destino'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiquetes</title>
</head>
<body>
    <div class="for">
        <form action="tiquete.php" method="POST">
            <label for="apellido">Documento</label>
            <input type="number" name="doc" id="docu" placeholder="documento">
            <label for="">Origen</label>
            <label for="origen">
                <select name="ori" id="orige">
                    <option value="1"><?php echo $_SESSION['origin']; ?></option>
                    <option value="2"><?php echo $_SESSION['origin2']; ?></option>
                </select>
            </label>
            <label for="">Destino</label>
            <label for="origen">
                <select name="ori" id="orige">
                    <option value="1"><?php echo $_SESSION['destino']; ?></option>
                    <option value="2"><?php echo $_SESSION['destino2']; ?></option>
                </select>
            </label>
            <label for="">Acompañantes</label>
            <input type="number" placeholder="Ingrese acompañantes">
            <label for="">Clade</label>
        </form>
    </div>
</body>
</html>