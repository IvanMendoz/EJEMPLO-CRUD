<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>DROP DB</title>
</head>
<body>
    <?php
        include("include/config.inc");
        $connection = mysqli_connect($servidor,$user, $contraseña, $DB);
        mysqli_set_charset($connection, "utf8");

        $query = "DROP DATABASE IF EXISTS base2910";
        $runQuery = mysqli_query($connection, $query);

        if($runQuery){
            echo "<h1>THE DATABASE base2910 WAS DELETE SUCESSFULLY :)</h1>";
        }else{
            echo ("UPSS!! SOMETHING WE WRONG.<br>");
            echo ("THE PROBLEM IS: .<br>");
            echo ("ERROR CODE: .<b>".mysql_errno ()."</b><br>");
            echo ("ERROR DESCRIPTION: <b>".mysql_error ()."</b><br>");
        }
    ?>
    <br>
    <a class="btn btn-primary" href="index.html">IR A LA PAGINA INICIAL</a>

</body>
</html>
