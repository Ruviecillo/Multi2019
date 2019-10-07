<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="moneda.php" method="POST">
		<legend>Conversor de pesos chilenos</legend><br>
	
			<label for="">Ingrese cantidad de pesos a convertir:</label>

			<input type="text" name="pesos" placeholder="ingrese un valor"><br>
			<label> Seleccione la moneda
			<select name="lista">
				<option value="dolar">USD
				<option value="euro">EUR
				<option value="yen">JPY
				<option value="real">BRL
				<option value="corona">NOK
			</select>
			</label>

		<input type="submit" name="Convertir">
	</form>
</body>
</html>