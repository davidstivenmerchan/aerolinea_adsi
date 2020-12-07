<?php
    require_once('php/coneccion.php');
    $consulta = "SELECT * FROM vuelos INNER JOIN aeropuerto ON vuelos.aeropuerto_salida = aeropuerto.id_aeropuerto";
    /* "SELECT id_vuelo, hora_salida, hora_llegada, aeropuerto_salida, aeropuerto_llegada, estado, nom_aeropuerto 
    FROM vuelos, aeropuerto where aeropuerto.id_aeropuerto=vuelos.aeropuerto_llegada" */;
    /* $consulta = "SELECT * FROM vuelos " */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/logoage.png">
    <title>aerolinea-adsi</title>
</head>
<body>
    <header>
        <div class="encabezado">
            <div class="funci">
            <a href="Html/iniciosesion.html" class="iniciar">✈INICIAR SESION</a>
            <a href="Html/registro.html"class="registrarse"> ✈CREA TU USUARIO</a>
            </div>
            <div class="infor">
            <img class="logo" src="imagenes/avionlog.jpg.png" alt="">
            <h2 class="titulo_bienvenida">BIENVENIDOS A NUESTRA AEROLINEA</h2>
            </div>
        </div>

        <div class="encabezado2">
            <nav>
                <ul>
                    <li id="inicioo"><b>INICIO</b></li>
                    <li id="vuelos"><b>VUELOS</b></li>
                    <li id="tiquetes"><b>TIQUETES</b></li>
                    <li id="viajes"><b>MIS VIAJES</b></li>
                    <li id="precios"><b>PRECIOS</b></li>
                    <li id="actividades"><b>ACTIVIDADES</b></li>
                    <li id="alojamiento"><b>ALOJAMIENTO</b></li>
                    <li id="somos"><b>QUIENES SOMOS</b></li>
                    <li id="servicios"><b>SERVICIOS</b></li>
                </ul>
            </nav>
        </div>
        <div class="triangulo">
        </div>
    </header>
    <img class="logo_dos" src="imagenes/logoage.png" alt="">
<div class="contenido">
    <div class="inicio" id="inicio">

        <div class="slider">
            <ul>
                <li><img class="sliderimg"src="imagenes/slider1.jpg" alt=""></li> 
                <li><img class="sliderimg"src="imagenes/slider2.jpg" alt=""></li>  
                <li><img class="sliderimg"src="imagenes/slider3.jpg" alt=""></li>  
                <li><img class="sliderimg"src="imagenes/slider4.jpg" alt=""></li> 
            </ul>
        </div>
    </div>
     <!--------------------------------- redes sociales --------------------------->
     <div class="redes">
        <div class="facebook"><i class="facebooki fab fa-facebook-f"></i><p>Facebook</p></div>
        <div class="instagram"><i class="instagrami fab fa-instagram"></i><p>Instagram</p></div>
        <div class="twitter"><i class="twitteri fab fa-twitter"></i><p>Twitter</p></div>
        <div class="youtube"><i class="youtubei fab fa-youtube"></i><p>Youtube</p></div>
    </div>
    <!--------------------------------- redes sociales --------------------------->
    
    <!--------------------------------- vuelos --------------------------->
    <div class="vuelosindex" id="vuelosindex">
        <h2 class="titulo_bienvenida">VUELOS</h2>
        <br>
            <div class="tabla_vuelos_administrador">
                <div class="titulo">VUELOS</div>
                <div class="elem_TI">N° VUELO</div>
                <div class="elem_TI">HORA SALIDA</div>
                <div class="elem_TI">HORA LLEGADA</div>
                <div class="elem_TI">AEROPUERTO SALIDA</div>
                <div class="elem_TI">AEROPUERTO DESTINO</div>
                <div class="elem_TI">ESTADO</div>
            <?php $resultadoss = mysqli_query($mysqli,$consulta);
            
            while($row=mysqli_fetch_assoc($resultadoss)){?>
                <div class="elem"><?php echo $row["id_vuelo"]; ?> </div>
                <div class="elem"><?php echo $row["hora_salida"]; ?> </div>
                <div class="elem"><?php echo $row["hora_llegada"]; ?> </div>
                <div class="elem"><?php echo $row["id_aeropuerto"]; ?> </div>
                <div class="elem"><?php echo $row["id_aeropuerto"]; ?> </div>
                <div class="elem"><?php echo $row["estado"]; ?> </div>

                <?php } mysqli_free_result($resultadoss);?>
                
            </div>
    </div>
     <!--------------------------------- vuelos--------------------------->
    
      <!--------------------------------- +tiquetes --------------------------->
    <div class="tiquee" id="tiquee" >
    <h2 class="titulo_bienvenida">TIQUETES</h2>

   
    <div class="btique">BUSCA TUS TIQUETES</div>
    <form action="" class="tiquetesb">
                <input type="text" class="ntiquete" placeholder="ingrese su cedula">
                <input type="submit" class="envitiquetes" value="BUSCAR">


    
    </form>

    <img class="imgtiquetes"src="imagenes/logoage.png" alt="">
    
    </div>
     <!--------------------------------- +tiquetes --------------------------->

     <!--------------------------------- viajes --------------------------->
    <div class="tiquee" id="viaje">
    <h2 class="titulo_bienvenida">MIS VIAJES</h2>
    <div class="btique">BUSCA TUS VIAJES</div>
    <form action="" class="tiquetesb">
                <input type="text" class="ntiquete" placeholder="ingrese su cedula">
                <input type="submit" class="envitiquetes" value="BUSCAR">


    
    </form>

    <img class="imgtiquetes"src="imagenes/avionlog.jpg.png" alt="">

    </div>
    <!--------------------------------- viajes --------------------------->

    <!--------------------------------- precios --------------------------->
    <div class="precioo" id="precioo">
    <h2 class="titulo_bienvenida">PRECIOS</h2>
    <table class="tablaprecios">
        <tr>
            <th>ORIGEN</th>
            <th>DESTINO</th>
            <th>PRIMERA CLASE</th>
            <th>SEGUNDA CLASE</th>
            <th>TERCERA CLASE</th>
        </tr>    
    
    
        <tr>
            <td>Colombia</td>
            <td>Alemania</td>
            <td>$5'000.000</td>
            <td>$4'940.000</td>
            <td>$4'845.000</td>
        </tr>
        <tr>
            <td>Colombia</td>
            <td>Francia</td>
            <td>$3'580.000</td>
            <td>$3'040.000</td>
            <td>$2'980.000</td>
        </tr>
        <tr>
            <td>Colombia</td>
            <td>Ecuador</td>
            <td>$1'580.000</td>
            <td>$1'040.000</td>
            <td>$980.000</td>
        </tr>
        <tr>
            <td>Colombia</td>
            <td>Argentina</td>
            <td>$2'680.000</td>
            <td>$2'640.000</td>
            <td>$1'920.000</td>
        </tr>
        <tr>
            <td>Colombia</td>
            <td>Japon</td>
            <td>$9'880.000</td>
            <td>$9'140.000</td>
            <td>$7'980.000</td>
        </tr>
        <tr>
            <td>Venezuela</td>
            <td>Francia</td>
            <td>$3'480.000</td>
            <td>$3'777.000</td>
            <td>$2'380.000</td>
        </tr>
        <tr>
            <td>Ecuador</td>
            <td>Canada</td>
            <td>$4'980.000</td>
            <td>$3'940.000</td>
            <td>$2'780.000</td>
        </tr>
    </table>
    </div>
    <!--------------------------------- precios --------------------------->
    <!--------------------------------- actividades --------------------------->
    <div class="activi" id="acti">
        <h2 class="titulo_bienvenida">ACTIVIDADES</h2>
        <div class="contenedor_todo_actividades">
            <div class="actividades"><img src="imagenes/actividad1.jpg" alt=""><h4>Islas Maldivas</h4><p>Un archipiélago remoto del Atlántico Sur.</p><br><hr><div class="precio_actividad"><h5>$8'000.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad2.jpg" alt=""><h4>Paris</h4><p>La capital de Francia, es una importante ciudad europea</p><br><hr><div class="precio_actividad"><h5>$4'000.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad3.jpg" alt=""><h4>Grecia</h4><p>Un país del sureste de Europa con miles de islas</p><br><hr><div class="precio_actividad"><h5>$6'500.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad4.jpg" alt=""><h4>Alemania</h4><p>Un país de Europa occidental con un paisaje de bosques.</p><br><hr><div class="precio_actividad"><h5>$6'320.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad9.jpg" alt=""><h4>San Andres</h4><p>Una isla colombiana del mar Caribe</p><br><hr><div class="precio_actividad"><h5>$800.000</h5></div></div>
        </div>
        <div class="contenedor_todo_actividades">
            <div  class="actividades"><img src="imagenes/actividad5.jpg" alt=""><h4>Belgica-Tomorrowland</h4><p>Un país de Europa Occidental conocido por ciudades medievales</p><br><hr><div class="precio_actividad"><h5>$10'000.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad6.jpg" alt=""><h4>EEUU - Disney</h4><p>Un país de 50 estados que ocupa una extensa franja</p><br><hr><div class="precio_actividad"><h5>$4'000.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad7.jpg" alt=""><h4>Canada</h4><p>Un país soberano en América del Norte</p><br><hr><div class="precio_actividad"><h5>$3'800.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad8.jpg" alt=""><h4>Japon</h4><p>Una nación insular del océano Pacífico con densas ciudades</p><br><hr><div class="precio_actividad"><h5>$12'000.000</h5></div></div>
            <div  class="actividades"><img src="imagenes/actividad10.jpg" alt=""><h4>Holanda</h4><p>Un país de Europa conocido por su paisaje plano de canales</p><br><hr><div class="precio_actividad"><h5>$5'560.000</h5></div></div>
        </div>
    </div>
    <!--------------------------------- actividades--------------------------->

    <!--------------------------------- servicios --------------------------->
    <div class="servicioo" id="servicioo">
        <h2 class="titulo_bienvenida">SERVICIOS</h2>
        <br>
        <p class="p-servicios">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores soluta sit ad veritatis similique magni, in quis architecto corrupti aliquam sequi, deserunt ipsum eveniet, vitae consectetur tempora dolor eum pariatur!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit autem similique, suscipit aliquam inventore voluptatum, architecto reiciendis ipsum corporis ad et nulla vel fugit? Magni dolor incidunt accusamus quia enim?
        </p>
        <div class=servicios>
            <div><img src="imagenes/servicio1.png" alt=""><h4>VUELOS</h4></div>
            <div><img src="imagenes/servicio2.png" alt=""><h4>HOTELES</h4></div>
            <div><img src="imagenes/servicio3.png" alt=""><h4>ACTIVIDADES</h4></div>
            <div><img src="imagenes/servicio4.png" alt=""><h4>RESERVAS</h4></div>
        </div>
    </div>
    
    <!--------------------------------- servicios --------------------------->

    <!--------------------------------- quienes somos --------------------------->
    <div class="somoos" id="somoos">
    <h2 class="titulo_bienvenida">QUIENES SOMOS</h2>
    
    <div style="display:flex">

        <div style="margin-left:40px">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> 
            Quisquam natus explicabo blanditiis accusamus sunt, doloremque <br> 
            error, ducimus odit tempora illum fugiat? Quisquam eligendi culpa <br> 
            dolorem dolore facere, quo vitae quibusdam. Lorem ipsum dolor sit <br> 
            amet consectetur adipisicing elit. Ducimus maiores iste delectus <br>
            quis placeat distinctio, nam odit aperiam repellendus, totam itaque. <br>
            Est repellat cum ex alias nihil, quasi maxime officiis! Lorem ipsum <br>
            dolor sit amet consectetur adipisicing elit. Iusto voluptates autem <br>
            voluptas asperiores vel exercitationem tenetur, ea voluptatum <br>
            perspiciatis sint dignissimos excepturi, labore rerum ipsa iste <br>
            optio laudantium aspernatur amet. Lorem ipsum dolor sit <br> 
            amet consectetur, adipisicing elit. A maiores impedit temporibus <br>
            consequuntur voluptates, repellat inventore vitae nisi, quia mollitia, <br>
            quaerat iure dolorum molestiae quo itaque similique expedita eveniet deserunt.</p>

            <h4>Nuestro correo: aerolinea_adsi@aerolinea.com </h4>
            <i class="facebooki fab fa-facebook-f"></i>
            <i class="instagrami fab fa-instagram"></i>
            <i class="twitteri fab fa-twitter"></i>
            <i class="youtubei fab fa-youtube"></i>

        </div>
        <div class="cmapa">
            <h3 class="mapa">Nuestra Ubicacion</h3>
             <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.9267852351095!2d-75.14139028573702!3d4.424742045221769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38cfeec1207e17%3A0xf234a9dcf773668c!2sAeropuerto%20perales%20de%20ibague!5e0!3m2!1ses!2sco!4v1607294626083!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    
    </div>
   
    </div>
     <!--------------------------------- quienes somos --------------------------->

      <!--------------------------------- alojamiento --------------------------->
    <div class="aloja" id="aloja">
    <h2 class="titulo_bienvenida">ALOJAMIENTO</h2>
    <div style="display:flex">
        <div class="hoteles1"><h5>Economico</h5><div class="div1"><p class="texto1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In porro delectus laboriosam molestias assumenda cumque quod ratione ducimus nihil eveniet, ad necessitatibus ipsa inventore doloremque sed iusto. Aliquam, unde cum.</p></div></div>
        <div class="hoteles2"><h5>Valor</h5><div class="div2"><p class="texto2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. In porro delectus laboriosam molestias assumenda cumque quod ratione ducimus nihil eveniet, ad necessitatibus ipsa inventore doloremque sed iusto. Aliquam, unde cum.</p></div></div>
        <div class="hoteles3"><h5>Calidad</h5><div class="div3"><p class="texto3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In porro delectus laboriosam molestias assumenda cumque quod ratione ducimus nihil eveniet, ad necessitatibus ipsa inventore doloremque sed iusto. Aliquam, unde cum.</p></div></div>
        <div class="hoteles4"><h5>Superior</h5><div class="div4"><p class="texto4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In porro delectus laboriosam molestias assumenda cumque quod ratione ducimus nihil eveniet, ad necessitatibus ipsa inventore doloremque sed iusto. Aliquam, unde cum.</p></div></div>
        <div class="hoteles5"><h5>Exepcional</h5><div class="div5"><p class="texto5"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. In porro delectus laboriosam molestias assumenda cumque quod ratione ducimus nihil eveniet, ad necessitatibus ipsa inventore doloremque sed iusto. Aliquam, unde cum.</p></div></div>
    

    </div>
    <br>

    </div>
    <!--------------------------------- alojamiento --------------------------->


    <footer>
            <img class="logoos" src="imagenes/logoage.png" alt="">
            <div class="text">
            <p> &copy;<I> FLY-ADSI </I></p>
            <p><I> ADSI 2060060</I></p>
            </div>
             <img class="logooo" src="imagenes/avionlog.jpg.png" alt="">
        
    </footer>
</div>
</body>
<script src="js/app.js" ></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</html> 