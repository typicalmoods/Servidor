<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php

     $inicio = $_POST["inicio"];//14
     $fin = $_POST["fin"];//1
     $cantidad = $_POST["cantidad"];//irá de 4 en 4, como ejemplo
     $contadorPares = 0;
     $contadorImpares = 0;

     if($inicio > $fin) {
        $inicio = $_POST["fin"];//1
        $fin = $_POST["inicio"];//14
     }
        //    1       1 <= 14  $i=$i+4
     for($i=$inicio; $i<=$fin; $i=$i+$cantidad){

        //para mostrar pares:
        if($i % 2 == 0) {
            echo $i . "<br>";
            $contadorPares++;
        //para mostrar impares:
        } else {
            echo $i . "<br>";
            $contadorImpares++;
        }
        
        
    }
    echo "Hay $contadorPares pares <br>";
    echo "Hay $contadorImpares impares";
    ?>
</body>
</html>