<!DOCTYPE html>
<html>
<head>
	<title>Pedido de panadería</title>
</head>
<body>
	<h1>Pedido de panadería</h1>
	<form action="" method="POST">
		<label for="tipo_pan">Tipo de pan:</label>
		<select name="tipo_pan" id="tipo_pan">
			<option value="barras">Barras de pan</option>
			<option value="bollos">Bollos</option>
			<option value="pan_bocatas">Pan de bocatas</option>
		</select>
		<br>
		<label for="cantidad">Cantidad:</label>
		<input type="number" name="cantidad" id="cantidad">
		<br>
		<label for="encontrado">¿Cómo encontró nuestra página web?</label>
		<input type="text" name="encontrado" id="encontrado">
		<br>
		<input type="submit" value="Enviar pedido">
	</form>

	<?php
	//Verifica si se ha enviado el formulario mediante el método HTTP POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //recupera los valores de los campos "tipo_pan", "cantidad" y "encontrado" del formulario 
    //a través de la variable superglobal $_POST 
    //los almacena en las variables
        $tipo_pan = $_POST['tipo_pan'];
		$cantidad = $_POST['cantidad'];
		$encontrado = $_POST['encontrado'];

		// Aquí iría el código para procesar el pedido y guardar los datos en una base de datos, por ejemplo

		echo "<p>Pedido enviado correctamente. Gracias!</p>";
	}
	?>
</body>
</html>