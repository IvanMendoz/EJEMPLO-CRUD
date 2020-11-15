<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a href="index.html"><h1 class="text-white m-left-10">OLA BEIVI</h1></a>
        <a class="btn btn-primary" href="createDB.php"> Creacion de base de datos </a><br><hr>
        <a class="btn btn-primary" href="insertRegister.html"> Insertar alumno </a><br><hr>
        <a class="btn btn-primary" href="showRegisters.php"> Mostrar Alumno </a><br><hr>
        <a class="btn btn-primary" href="dropDB.php"> Eliminar Base de Datos </a><br><hr>
    </nav>
    <?php

        include("include/config.inc");
        $connection = mysqli_connect($servidor,$user,$contraseña,$DB);
        mysqli_set_charset($connection,"utf8");

        $query = "CALL selectAlumno;";
        $runQuery = mysqli_query($connection,$query);

        echo "<table border=\"1\" width=\"100%\" style='text-align:center; margin-top:5vh; font-weight:bold; width:90%; margin-left:auto; margin-right:auto;'>";
        echo "<thead style='padding:10px;'>";
            echo "<th>id</th>";
            echo "<th>name</th>";
            echo "<th>direction</th>";
            echo "<th>age</th>";
            echo "<th>delete</th>";
            echo "<th>modify</th>";
            echo "</thead>";
            echo "<tbody  style = 'border:1px solid red; padding: 10px;'>";
        while($row = mysqli_fetch_array($runQuery)){
            echo "<tr >";
            echo "<td >".$row['idalumno'];
            echo "<td>".$row['nombre'];
            echo "<td>".$row['direccion'];
            echo "<td>".$row['edad'];
            echo "<td>"."<a class='btn btn-primary' href='deleteStudent.php?idalumno=".$row['idalumno']."'>Eliminar</a>"."</td>";
            echo "<td>"."<a class='btn btn-primary' href='modifyStudent.php?idalumno=".$row['idalumno']."'>Modificar</a>"."</td>"; 
            echo "<tr>";
        }
        echo "<tbody>";
        echo "</table>";
        mysqli_close($connection);
    ?>
</body>
</html>