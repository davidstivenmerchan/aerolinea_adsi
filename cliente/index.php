<?php
    require_once('../php/validacion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logoage.png">
    <link rel="stylesheet" href="cliente.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Clientes</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="../imagenes/logoage.png" alt="loguito" width="100px" height="60px">  
            <div class="titulo">
                <h3>AEROLINEA</h3>
            </div>    
                <ul class="header-autogestion">
                    <button class="btn_header"> <a href="../php/cerrar_sesion.php">Cerrar Sesion</a> </button>
                </ul>
            <div class="menu1">
                <div class="admin">
                    <h4>SECCION DE CLIENTES</h4>
                </div>
            </div>      
        </div>
        <hr class="linea">
        <div class="slider">
            <ul>
                <li><img class="sliderimg"src="../imagenes/slider1.jpg" alt=""></li> 
                <li><img class="sliderimg"src="../imagenes/slider2.jpg" alt=""></li>  
                <li><img class="sliderimg"src="../imagenes/slider3.jpg" alt=""></li>  
                <li><img class="sliderimg"src="../imagenes/slider4.jpg" alt=""></li> 
            </ul>
            <!--<img class="imagen-slider" src="../imagenes/aviones.jpg" alt="">-->
        </div>
        <hr>
        <div>
            <div class="info">
                <p class="text-admin">NOMBRE: <?= $_SESSION["nombre"] ?></p>
                <p class="text-admin">CORREO: <?= $_SESSION["email"] ?></p>
                <P class="text-admin">TELEFONO: <?= $_SESSION["telefono"] ?></P>
            </div>
            <button class="btn_editar">EDITAR INFORMACION</button>
           
        </div>
        <div class="modulos">
                 <div class="modulo1"><button class="btn_modulo"><a href="tiquetes.php">COMPRAR TIQUETES</a></button></div>
            </div>
            <div class="redes">
                <div class="facebook"><i class="facebooki fab fa-facebook-f"></i><p>Facebook</p></div>
                <div class="instagram"><i class="instagrami fab fa-instagram"></i><p>Instagram</p></div>
                <div class="twitter"><i class="twitteri fab fa-twitter"></i><p>Twitter</p></div>
                <div class="youtube"><i class="youtubei fab fa-youtube"></i><p>Youtube</p></div>
            </div>
        
        
        
        <hr>
        <footer>
            <img class="logoos" src="../imagenes/logoage.png" alt="">
            <div class="text">
            <p> &copy;<I> FLY-ADSI </I></p>
            <p><I> ADSI 2060060</I></p>
            </div>
             <img class="logooo" src="../imagenes/avionlog.jpg.png" alt="">
        
    </footer>
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</html>