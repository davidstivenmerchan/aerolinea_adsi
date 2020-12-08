<?php

    //conexion a la base de datos 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "aerolinea";
    $mysqli = new mysqli ($hostname, $username, $password, $database);
    if ($mysqli ->connect_errno)
    {
        die("Fallo la conexion con Mysql" . mysqli_connect_errno());
    }
//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM usuario WHERE usuario.id_tip_user = 2  ORDER BY documento";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['usuario']))
{
	$q=$mysqli->real_escape_string($_POST['usuario']);
	$query="SELECT * FROM usuario WHERE 
		documento LIKE '%".$q."%' OR
		usuario LIKE '%".$q."%' OR
		nom_user LIKE '%".$q."%' OR
		ape_user LIKE '%".$q."%' OR
		celular	LIKE '%".$q."%' OR
		direccion LIKE '%".$q."%' OR
		correo	LIKE '%".$q."%' OR
		clave LIKE '%".$q."%'";
}

$buscarClientes=$mysqli->query($query);
if ($buscarClientes->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>DOCUMENTO</td>
			<td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>CELULAR</td>
			<td>DIRECCIÓN</td>
			<td>CORREO</td>
		</tr>';

	while($filaClientes= $buscarClientes->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaClientes['documento'].'</td>
			<td>'.$filaClientes['nom_user'].'</td>
			<td>'.$filaClientes['ape_user'].'</td>
			<td>'.$filaClientes['celular'].'</td>
			<td>'.$filaClientes['direccion'].'</td>
			<td>'.$filaClientes['correo'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
