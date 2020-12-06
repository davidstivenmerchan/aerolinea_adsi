<?php
    require_once('../php/validacion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <title>Clientes</title>
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
                    <h4>SECCION DE CLIENTES</h4>
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
                <p class="text-admin">NOMBRE: ACA VA EL NOMBRE QUE VIENE DEL PHP</p>
                <p class="text-admin">CORREO: ACA VIENE EL CORREO DEL PHP</p>
                <P class="text-admin">TIPO USUARIO: ACA VIENE EL TIPO DE USUARIO PHP</P>
            </div>
            <button class="btn_editar">EDITAR INFORMACION</button>
            <div class="facebook"><i class="facebooki fab fa-facebook-f"></i><p>Facebook</p></div>
            <div class="instagram"><i class="instagrami fab fa-instagram"></i><p>Instagram</p></div>
            <div class="twitter"><i class="twitteri fab fa-twitter"></i><p>Twitter</p></div>
            <div class="youtube"><i class="youtubei fab fa-youtube"></i><p>Youtube</p></div>
        </div>
        <hr>
        <div class="modulos">
            <div class="modulo1"><button class="btn_modulo"><a href="tiquetes.html">COMPRAR TIQUETES</a></button></div>
        </div>
        <hr>
        <div class="footer">
            <h2 class="titulo-footer">AEROLINEA ADSI © 2020</h2>
        </div>
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</html>