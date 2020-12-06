<?php
    require_once('../php/validacion.php');
    require_once('../php/coneccion.php');

    $con = "SELECT * FROM usuario";
    $que = mysqli_query($mysqli,$con);
    $datos = mysqli_fetch_assoc($que);

    $consultika = "SELECT * FROM tipo_user";
    $query2 = mysqli_query($mysqli,$consultika);
    $fila2 = mysqli_fetch_assoc($query2);

    if($fila2){
        
        $_SESSION['nom_tip_user'] = $fila2['nom_tip_user'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="../imagenes/logo_aerolinea.PNG" alt="loguito" width="100px" height="60px">  
            <div class="titulo">
                <h3>AEROLINEA</h3>
            </div>    
                <ul class="header-autogestion">
                    <button class="btn_header"> <a href="../php/cerrar_sesion.php">Cerrar Sesion</a> </button>
                </ul>
            <div class="menu1">
                <div class="admin">
                    <h4><?php echo $_SESSION['nom_tip_user'];?>: <?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['apellido'];?></h4>
                </div>
            </div>      
        </div>
        <hr class="linea">
        <div class="slider">
            <ul>
                <li class="sli"><img src="../imagenes/1.jpg" alt="" width="1320" height="380"></li>
                <li class="sli"><img src="../imagenes/2.jpg" alt="" width="1320" height="380"></li>
                <li class="sli"><img src="../imagenes/3.jpg" alt="" width="1320" height="380"></li>
                <li class="sli"><img src="../imagenes/4.jpg" alt="" width="1320" height="380"></li>
            </ul>
            <!--<img class="imagen-slider" src="../imagenes/aviones.jpg" alt="">-->
        </div>
        <hr>
        <div>
            <div class="info">
                <p class="text-admin">NOMBRE: <?php echo $_SESSION['nombre'];?></p>
                <p class="text-admin">CORREO: <?php echo $_SESSION['email'];?></p>
                <P class="text-admin">TIPO USUARIO: <?php echo $_SESSION['nom_tip_user'];?></P>
            </div>
            <button class="btn_editar">EDITAR INFORMACION</button>
            <div class="facebook"><i class="facebooki fab fa-facebook-f"></i><p>Facebook</p></div>
            <div class="instagram"><i class="instagrami fab fa-instagram"></i><p>Instagram</p></div>
            <div class="twitter"><i class="twitteri fab fa-twitter"></i><p>Twitter</p></div>
            <div class="youtube"><i class="youtubei fab fa-youtube"></i><p>Youtube</p></div>
        </div>
        <hr>
        <div class="modulos">
            <div class="modulo1"><button class="btn_modulo"><a href="customers/index.html">Clientes</a></button></div>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="vuelos.php">Vuelos</a>
                        <ul class="submenu">
                            <li><a href="crear_vuelos.html">Crear Vuelos</a></li>
                            <li><a href="modificar_vuelos.php">Editar Vuelos</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <hr>
        <div class="footer">
            <h2 class="titulo-footer">AEROLINEA ADSI © 2020</h2>
        </div>
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</html>