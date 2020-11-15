<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CREATE DB</title>
</head>
<body>
    
    <?php
        echo "HOLA BEIBI<br>";
    
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'test';
    
        // creación de la conexión a la base de datos con mysql_connect()
        $connection = mysqli_connect($server, $user, $password) or die('ERROR IN CONNECTING TO SERVER'.mysqli_error($mysqli));
    
        // Selección de la base de datos a utilizar
        $db = mysqli_select_db($connection, $database) or die ('ERROR IN CONECCTION TO DATABASE');
    
        //Realizando la consulta para crear una base de datos si es que no existe
        $query = "CREATE DATABASE base2910";
        $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE THE DATABASE");
    
        //Verificando si la base de datos se creo.
        if ($runQuery) {
            echo "<h1>THE DATABASE WAS CREATED SUCCESSFULLY<br></h1>";
        }else {
            echo ("UPS! THERE IS A PROBLEM CREATING THE DATABASE BASE2910.<br>");
            echo ("THE PROBLEM IS: <br>");
            echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
            echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
        }
    
        $database = "base2910";
    
        $db = mysqli_select_db($connection, $database) or die ("UPS!, Something went wrong".mysql_error($mysqli));
    
        $query = "CREATE TABLE IF NOT EXISTS  tbAlumno(
            idalumno INT PRIMARY KEY AUTO_INCREMENT,
            nombre VARCHAR(20),
            direccion VARCHAR(100),
            edad INT
        );";
    
        $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE TABLE");
    
        if ($runQuery) {
            echo "<br>THE TABLE DATA WAS CREATED SUCESSFULLY<br>";
        }else{
            echo ("<br>UPS! THERE IS A PROBLEM CREATING TABLE tbalumno.<br>");
            echo ("THE PROBLEM IS: <br>");
            echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
            echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
        }
    
    
        $query = "CREATE PROCEDURE insertAlumno(
            IN par_nombre VARCHAR(50),
            IN par_direccion VARCHAR(50),
            IN par_edad VARCHAR(50)
        )
        
        INSERT INTO tbalumno (nombre, direccion, edad) VALUES (par_nombre, par_direccion, par_edad);";
    
        $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE STORE PROCEDURE");
    
        if ($runQuery) {
            echo "<br>THE STORE PROCEDURE INSERTALUMNO WAS CREATED SUCESSFULLY<br>";
        }else{
            echo ("<br>UPS! THERE IS A PROBLEM CREATING THE TABLE.<br>");
            echo ("THE PROBLEM IS: <br>");
            echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
            echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
        }
    
        $query = "CREATE PROCEDURE updateAlumno(
        IN par_id INT,
        IN par_nombre VARCHAR(50),
        IN par_direccion VARCHAR(100),
        IN par_edad INT
    )
    
    UPDATE tbalumno SET nombre = par_nombre, direccion = par_direccion, edad = par_edad, idalumno = par_id;";
    
        $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE STORE PROCEDURE");
    
        if ($runQuery) {
            echo "<br>THE STORE PROCEDURE UPDATEALUMNO WAS CREATED SUCESSFULLY<br>";
        }else{
            echo ("<br>UPS! THERE IS A PROBLEM CREATING THE TABLE.<br>");
            echo ("THE PROBLEM IS: <br>");
            echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
            echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
        }
    
    
    
    
        $query = "CREATE PROCEDURE deleteAlumno(
            IN par_id INT
        )
        
        DELETE FROM tbalumno WHERE idalumno = par_id;";
        
            $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE STORE PROCEDURE");
        
            if ($runQuery) {
                echo "<br>THE STORE PROCEDURE DELETEALUMNO WAS CREATED SUCESSFULLY<br>";
            }else{
                echo ("<br>UPS! THERE IS A PROBLEM CREATING THE TABLE.<br>");
                echo ("THE PROBLEM IS: <br>");
                echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
                echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
            }
    
    
    
            $query = "CREATE PROCEDURE selectAlumno(
                )
                SELECT * FROM tbalumno;
                ";
            
            $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE STORE PROCEDURE");
            
            if ($runQuery) {
                echo "<br>THE STORE PROCEDURE SELECTALUMNO WAS CREATED SUCESSFULLY<br>";
            }else{
                echo ("<br>UPS! THERE IS A PROBLEM CREATING THE TABLE.<br>");
                echo ("THE PROBLEM IS: <br>");
                echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
                echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
            }
    
    
            $query = "CREATE PROCEDURE selectAlumnoID(
                IN par_id int  
            )
                
            SELECT * FROM tbalumno WHERE idalumno = par_id;";
                
            $runQuery = mysqli_query($connection, $query) or die ("ERROR IN CREATE STORE PROCEDURE");
                
            if ($runQuery) {
                echo "<br>THE STORE PROCEDURE SELECTALUMNOID WAS CREATED SUCESSFULLY<br>";
            }else{
                echo ("<br>UPS! THERE IS A PROBLEM CREATING THE TABLE.<br>");
                echo ("THE PROBLEM IS: <br>");
                echo ("ERROR CODE: <b>". mysql_errno ()."</b><br>");
                echo ("ERROR DESCRIPTION: <b>". mysql_mysql_error ()."</b><br>");
            }
    ?>
    <a class="btn btn-primary" href="index.html">IR A LA PAGINA INICIAL</a>
</body>
</html>
