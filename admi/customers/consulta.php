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
$query="SELECT * FROM clientes ORDER BY documento";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['clientes']))
{
	$q=$mysqli->real_escape_string($_POST['clientes']);
	$query="SELECT * FROM clientes WHERE 
		documento LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		apellido LIKE '%".$q."%' OR
		id_vuelo LIKE '%".$q."%' OR
		tiquetes LIKE '%".$q."%'";
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
			<td>VUELO</td>
			<td>TIQUETES</td>
		</tr>';

	while($filaClientes= $buscarClientes->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaClientes['documento'].'</td>
			<td>'.$filaClientes['nombre'].'</td>
			<td>'.$filaClientes['apellido'].'</td>
			<td>'.$filaClientes['id_vuelo'].'</td>
			<td>'.$filaClientes['tiquetes'].'</td>
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
