<?php
    require_once("coneccion.php");

    if($_POST['enviar']){
        //Declaracion de variables para insercion de datos
        $documento = $_POST['doc'];
        $nombre = $_POST['nom'];
        $apel = $_POST['ape'];
        $direccion = $_POST['dire'];
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $celu = $_POST['celular'];
        $tip_use = 2;
        $tip_docu = 1;

        //Hacemos la consulta para insertar los datos en la BD
        $consulta = "INSERT INTO usuario (documento, nom_user, ape_user, celular, direccion, correo, clave, 
        id_tip_docu, id_tip_user) VALUES ('$documento', '$nombre', '$apel', '$celu', '$direccion', '$correo', 
        '$contra', '$tip_docu', '$tip_use')";
        $sql = mysqli_query($mysqli,$consulta);
        // $registro = mysqli_fetch_assoc($sql);

        if($sql){
            echo '<script>alert ("Se agrego correctamente")</script>';
            header('Location: ../inicio.html');
        }
        else{
            echo "no se agrego"; 
        }
    }
    else{
        echo "No entro";
    }
?>

