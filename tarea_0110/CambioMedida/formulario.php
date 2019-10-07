<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="medida.php" method="POST">
		<legend>Conversor de unidad de medida (unidad inicial metros)</legend><br>
	
			<label for="">Ingrese los metros a convertir:</label>

			<input type="text" name="metros" placeholder="ingrese un valor">
			<select name="lista1">
				<option value="milla">Milla
				<option value="yarda">Yarda
				<option value="feet">Pie
				<option value="pulgada">Pulgada
				<option value="legua">Legua	
				<option value="km">Km
				<option value="cm">cm
				<option value="dm">dm
				<option value="mm">mm
				<option value="nm">nn
			</select>

		<input type="submit" name="enviar">
	</form>
</body>
</html>