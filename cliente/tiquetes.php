<?php
require_once('../php/validacion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiquetes.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Comprar Tiquetes</title>
</head>
<body>
    <div class="for">
        
        <form action="proceso_compra.php" method="POST" name="tiquetesF">
            <h1>¡COMPRA TUS TIQUETES!</h1>
            <select name="compra" id="">
                <option value="">Elija un Destino</option>
                <option value="1">Alemania</option>
                <option value="2">Rusia</option>
                <option value="3">China</option>
                <option value="4">España</option>
            </select>
            <select name="clase" id="">
                <option value="">Elija Una Clase</option>
                <option value="baja">Baja</option>
                <option value="media">Media</option>
                <option value="alta">Alta</option>
            </select>
            <div class="pasajeross">
                <label for="pasajeros">Numero de pasajeros</label>
               <div class="incre">
                <input type="button" value="-" onclick="tiquetesF.pasajeros.value--"> 
                <input type="text" name="pasajeros" value="1" >
                <input type="button" value="+" onclick="tiquetesF.pasajeros.value++">
                </div>
                <input type="hidden" value="<?php echo $_SESSION['cc'];?>" name="cc">
             
            </div>
               <input class="siguiente" type="submit" value="Siguente" name="enviar">

            <p>El tiquete se comprara en nombre de la cedula <?php echo $_SESSION['cc'];?> </p>
        </form>
    </div>
</body>
</html>