<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR ESTUDIANTE</title>
</head>
<body>
    <?php
    include('include/config.inc');
    $conecction = mysqli_connect($servidor,$user,$contrasena,$DB);
    mysqli_set_charset($conexion,"utf8");		

    $idalumno=$_REQUEST['idalumno'];
    $query="call DeleteAlumno ('$idalumno');";
    echo($query);
    
    $runQuery=mysqli_query( $conecction, $query) or die ( "No se puede eliminar el registro");
    if($runQuery)
    {
        echo ("THE REGISTER WAS DELETE SUCESSFULLY.<br>");
        header("Location:showRegisters.php");
    }
    else
    {
        echo ("ERROR IN DELETE THIS REGISTER, PLEASE TRY AGAIN.<br>");
        echo ("THE PROBLEM IS:.<br>");
        echo ("ERROR CODE.<br>".mysql_errno()."</br><br>");
        echo ("ERROR DESCRIPTION.<br>".mysql_error()."</br><br>");
    }
    //CERRAR CONEXIÓN DE BASE DE DATOS
    mysqli_close( $conecction);
    ?>
</body>
</html>