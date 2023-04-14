<!DOCTYPE html>
<html>
<head>
	<title>Registro de Entrada de Veículo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Registro de Entrada de Veículo</h2>
		<form action="cadAction.php" method="post">
			<div class="form-group">
				<label for="placa">Placa do Veículo:</label>
				<input type="text" class="form-control" id="placa" name="placa">
			</div>
			<button type="submit" class="btn btn-default">Registrar</button>
		</form>
	</div>
</body>
</html>
