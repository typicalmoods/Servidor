<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php

     $inicio = $_POST["inicio"];
     $fin = $_POST["fin"];

     if($inicio > $fin) {
        $inicio = $_POST["fin"];
        $fin = $_POST["inicio"];
     }
     for($i=$inicio; $i<=$fin; $i++){
        echo $i . "<br>";
    }
    ?>
</body>
</html>