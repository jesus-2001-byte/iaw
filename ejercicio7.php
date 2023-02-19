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
        //    Código PHP que dibuja 100 cuadrados en la pantalla usando colores aleatorios.
        $ancho = 50;
        $alto = 50;

        for ($i = 1; $i <= 100; $i++) {
        //Las variables toman un valor aleatorio
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b = rand(0, 255); 
        //Cuadro div con el color de fondo personalizado       
        echo "<div style='background-color:rgb($r, $g, $b);width:$ancho;height:$alto;float:left;margin:5px;'></div>";
        }
    ?>
</body>
</html>