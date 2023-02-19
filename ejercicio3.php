<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Imprime en pantalla el cuadrado de los números del 1 al 50, ambos incluidos. Usa la estructura while. 
    //Devuelve en pantalla la suma total. 
        $n = 1;
        $suma = 0;
        while ($num <= 50) 
        {
            $cuadrado = $n * $n;
        echo "El cuadrado de $n es: $cuadrado <br>";
        $suma += $cuadrado;
        $n++;
        }
        echo "La suma total es: $suma";
    ?>
</body>
</html>