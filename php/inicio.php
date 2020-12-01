<?php
    require_once("coneccion.php");

    if($_POST["enviar"]){
        //Declaramos las variables para almacenar los datos digitados
        $documento = $_POST["user"];
        $clave = $_POST["contra"];

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "SELECT * FROM usuario WHERE documento = '$documento' AND clave = '$clave'";
        $query = mysqli_query($mysqli,$consul);
        $fila = mysqli_fetch_assoc($query);

        //Hacemos una toma de decision para que se logee el usuario correctamente
        if($fila){
            $_SESSION['nombre'] = $fila['nom_user'];
            $_SESSION['apellido'] = $fila['ape_user'];
            $_SESSION['telefono'] = $fila['celular'];
            $_SESSION['direccion'] = $fila['direccion'];
            $_SESSION['email'] = $fila['correo'];
            $_SESSION['id_tip_usu'] = $fila['id_tip_user'];
            
            //Hacemos la toma de decision para determinar quien se va a logear
            if($_SESSION['id_tip_usu'] == 1){
                header('Location: ..admi/admin.html');
                exit();
            }
            elseif ($_SESSION['id_tip_usu'] == 2) {
                header('Location: ..usuario/usuario.php');
                exit();
            }
            else{
                echo "No perro no cogio";
            }
        }
        else{
            echo "No perro no cogio x2";
        }
    }
    else{
        echo "No perro no cogio x3";
    }
?>