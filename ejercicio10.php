<!DOCTYPE html>
<html>
<head>
	<title>Resumen del pedido</title>
</head>
<body>
	<h1>Resumen del pedido</h1>

	<?php
	//Idem que el anterior, sólo que ahora al enviar el pedido, 
	//devuelva una web que resume los artículos que han sido pedidos a través del formulario web.
	
	// Obtener los datos del formulario de pedido
	$tipo_pan = $_POST['tipo_pan'];
	$cantidad = $_POST['cantidad'];
	$encontrado = $_POST['encontrado'];

	// Calcular el precio total del pedido
	if ($tipo_pan == 'barras') {
		$precio_unitario = 1.5;
	} elseif ($tipo_pan == 'bollos') {
		$precio_unitario = 0.5;
	} elseif ($tipo_pan == 'pan_bocatas') {
		$precio_unitario = 2;
	} else {
		$precio_unitario = 0;
	}

	$precio_total = $cantidad * $precio_unitario;

	// Mostrar el resumen del pedido
	echo "<p>Tipo de pan: $tipo_pan</p>";
	echo "<p>Cantidad: $cantidad unidades</p>";
	echo "<p>Precio unitario: $precio_unitario €</p>";
	echo "<p>Precio total: $precio_total €</p>";
	echo "<p>¿Cómo encontró nuestra página web? $encontrado</p>";
	?>

	<p>Gracias por su pedido.</p>
</body>
</html>