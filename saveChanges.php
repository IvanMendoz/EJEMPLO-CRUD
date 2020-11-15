<?php
	include('include/config.inc');
	$conecction = mysqli_connect($servidor,$user,$contraseña,$DB);
	mysqli_set_charset($conecction,"utf8");

	$idAlumno=$_POST["txtidAlumno"];
	$nombre=$_POST["txtNombre"];
	$direccion=$_POST["txtDireccion"];
	$edad=$_POST["txtEdad"];
	$query="call updateAlumno('$idAlumno','$nombre', '$direccion', '$edad');";

	echo $query;
	$runQuery=$conecction->query($query);

	if($runQuery){
		echo "Registro actualizado";
		header("Location:showRegisters.php");
	}
	else
	{
		echo "ERROR: ERROR IN EDIT THIS REGISTER.";
    }
    mysqli_close($conecction);
?>