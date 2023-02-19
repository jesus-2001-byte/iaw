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
//Crea un array con los meses del año. Imprímelos en pantalla ordenados de alfabéticamente.
        $meses = array("Enero", "Febrero", "Marzo",
                     "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", 
                    "Octubre", "Noviembre", "Diciembre");
        sort($meses); 

        foreach ($meses as $mes) {
        echo $mes . "<br>";
        }
    ?>
</body>
</html>