<!DOCTYPE html>
<html>
<head>
	<title>Subir imágenes</title>
</head>
<body>
	<h1>Subir imágenes</h1>

	<?php
    //Subir al directorio imagenes una imagen seleccionada por el usuario
    // siempre que sea GIF o JPG y no pase de 200kb,
    // a este directorio y luego mostrará todas las imágenes que se hayan subido.
    
    // Comprobamos si se ha enviado un archivo
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['imagen'])) {
		$imagen = $_FILES['imagen'];
		$imagen_nombre = $imagen['name'];
		$imagen_tipo = $imagen['type'];
		$imagen_tmp = $imagen['tmp_name'];
		$imagen_error = $imagen['error'];
		$imagen_tamano = $imagen['size'];

		// Comprobamos que sea una imagen de tipo JPG o GIF
		if ($imagen_tipo == 'image/jpeg' || $imagen_tipo == 'image/gif') {
			// Comprobamos que el tamaño de la imagen no supere los 200kb
			if ($imagen_tamano <= 200000) {
				// Movemos la imagen al directorio de imágenes
				$directorio = 'imagenes/';
				$imagen_destino = $directorio . $imagen_nombre;
				move_uploaded_file($imagen_tmp, $imagen_destino);
				echo "<p>Imagen subida correctamente.</p>";
			} else {
				echo "<p>La imagen es demasiado grande. Por favor, seleccione una imagen de menos de 200kb.</p>";
			}
		} else {
			echo "<p>Por favor, seleccione una imagen de tipo JPG o GIF.</p>";
		}
	}

	// Mostramos todas las imágenes del directorio de imágenes
	$directorio = 'imagenes/';
	$imagenes = scandir($directorio);
	foreach ($imagenes as $imagen) {
		if ($imagen !== '.' && $imagen !== '..') {
			echo "<img src='$directorio/$imagen' width='200'>";
		}
	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<label for="imagen">Seleccione una imagen:</label>
		<input type="file" name="imagen" id="imagen">
		<br>
		<input type="submit" value="Subir imagen">
	</form>
</body>
</html>