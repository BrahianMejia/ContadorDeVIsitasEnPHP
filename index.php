<?php  

	function contar_usuarios()
	{
		$archivo = 'contador.txt';

		if (file_exists($archivo)) 
		{
			$cuenta = file_get_contents($archivo) + 1;
			file_put_contents($archivo, $cuenta);

			return $cuenta;
		}
		else
		{
			file_put_contents($archivo, 1);
			return 1;
		}

	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Contador de visitas</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400, 300, 700">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>
		<h1>Contador de visitas</h1>
		<div class="visitantes">
			<p class="numero"><?php echo contar_usuarios()?></p>
			<p class="texto">Visitas</p>
		</div>
	</body>
</html>