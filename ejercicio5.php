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
//Desarrolla el código necesario para redondear un número cualquiera con hasta tres cifras decimales, 
//sin usar la función round.
        $num = 12.34567;
        $decimales = 3; 
//Se define una variable $factor
// que se calcula elevando el número 10 a la potencia de $decimales
        $factor = pow(10, $decimales);
//Se calcula el número redondeado
        $num_redondeado = floor($num * $factor + 0.5) / $factor;
        echo "El número redondeado es: " . $num_redondeado;
    ?>
</body>
</html>