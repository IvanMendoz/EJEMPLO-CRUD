<html>
	<head>
		<title>Mostrar datos de tabla con MySQL</title>
	</head>
	<body >
		<h1>Insertando registros en la Base de Datos</h1>
		<?php

			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$user,$contraseña,$DB);
			mysqli_set_charset($conexion,"utf8");
	
			$nombre = $_POST["txtnombre"];
			$direccion = $_POST["txtdireccion"];
			$edad = $_POST["txtedad"];
	
			//creando la consulta para insertar el registro
			$consulta = "call InsertAlumno('$nombre', '$direccion', '$edad');";
			echo ($consulta);
			$resultado=mysqli_query( $conexion, $consulta ) or die ( "No se pudo insertar el registro");		

			if ($resultado)
			{
				echo ("El registro fue insertado de forma satisfactoria");
			}
			else
			{
				echo ("Surgio problema para insertar el registro.<br>");
				echo ("El problema es: .<br>");
				echo ("Codigo de error: .<b>".mysql_errno ()."</b><br>");
				echo ("Descripcion de error: <b>".mysql_error ()."</b><br>");
			}			

			header("Location: index.html");

			//liberando recursos y cerrando la BD;
			mysqli_close($conexion);
			header("Location: showRegisters.php");
		?>
		<br><br>
	</body>
</html>|

