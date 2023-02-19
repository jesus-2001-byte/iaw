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
        // Imprime en pantalla los números múltiplos de 5, comprendidos entre el 1 y el 100. Usa la estructura for. Devuelve el cuadrado de su suma.

        $suma = 0;
        for ($var = 1; $var <= 100; $var++) {
        if ($var % 5 == 0) {
            echo $var . "<br>";
            $suma += $var;
        }
        }
        $suma_cuadr = $sum * $sum;
        echo "El cuadrado de la suma de los múltiplos de 5 es: " . $suma_cuadr;
    ?>
</body>
</html>