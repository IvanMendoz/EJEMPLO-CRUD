<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>MODIFICAR ESTUDIANTE</title>
</head>
<body>
    <?php
		//CAPTURAR EL CODIGO A MODIFICAR
		$idalumno=$_REQUEST['idalumno'];
		//CARGAR LA CONEXION Y OBTENER LA CONEXION ACTIVA $MISQL
		include('include/config.inc');
		$conecction = mysqli_connect($servidor,$user,$contraseña,$DB);
		mysqli_set_charset($conecction,"utf8");
		
		$query="call selectAlumnoID('$idalumno');";
		$runQuery=$conecction->query($query);
		$row=$runQuery->fetch_assoc(); 
			
		mysqli_close($conecction);	
	?>
        
        
	<form method = "post" name="frmvalor" action="saveChanges.php">
		<TABLE>
			<TR>
				<TD>Idalumno:</TD>
				<TD><input type="text" name="txtidAlumno2" value="<?php echo $row['idalumno'];?>"><input type="text" name="txtidAlumno" style="visibility:hidden" value="<?php echo $row['idalumno'];?>"></TD>
			</TR>
			<TR>
				<TD>Nombre:</TD>
				<TD><input type="text" name="txtNombre" value="<?php echo $row['nombre'];?>"></TD>
			</TR>
			<TR>
			<TD>Direccion:</TD>
				<TD><input type="text" name="txtDireccion" value="<?php echo $row['direccion'];?>"></TD>
			</TR>
			<TR>
				<TD>Edad:</TD>
				<TD><input type="text" name="txtEdad" value="<?php echo $row['edad'];?>"></TD>
			</TR>
		</TABLE>
		<BR>
        <INPUT class="btn btn-primary" type="submit" name="btnModificar" value="MODIFICAR">
        <button class="btn btn-primary"onclick="Location:showRegisters.php">CANCELAR</button>
	</form>
</body>
</html>