#Imprime en pantalla  los numeros impares del 1 al 100
# y su suma acumulada, usando la estructura if.

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
//Imprime en pantalla los nuneros impares del 1 al 100 y su suma acumulada, usando la estructura if.
    $sum = 0;
//Contador del 1 al 100 que incremente
    for ($var = 1; $var <= 100; $var++) {
    if ($i % 2 != 0) {
        echo $var . "<br>";
        $var += $var;
     }
    }
    echo "La suma acumulada de los números impares es: " . $sum;
    ?>
</body>
</html>
