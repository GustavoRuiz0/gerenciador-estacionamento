<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento de Estacionamento</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Gerenciamento de Estacionamento</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Início</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="jumbotron">
			<h1>Bem-vindo ao sistema de gerenciamento de estacionamento!</h1>
			<p>Aqui você pode registrar a entrada e saída de veículos, gerar relatórios e configurar o sistema de acordo com suas necessidades.</p>
			<p><a class="btn btn-primary btn-lg" href="cadastrar.php" role="button">Estacionar</a></p>

            <p><a class="btn btn-primary btn-lg" href="retirar.php" role="button">Retirar veiculo</a></p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Como funciona?</h3>
				<p>Para registrar a entrada de um veículo, basta informar a placa no formulário de cadastro. Para registrar a saída de um veículo, basta selecionar a placa na lista de veículos estacionados e confirmar a saída.</p>
			</div>
			<div class="col-sm-6">
				<h3>Por que usar este sistema?</h3>
				<p>Este sistema oferece uma maneira fácil e eficiente de gerenciar seu estacionamento, mantendo um registro preciso de todos os veículos que entram e saem. Com relatórios detalhados, você pode ter uma visão completa do seu estacionamento e tomar decisões informadas para melhorá-lo.</p>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<p>Desenvolvido por Gustavo Ruiz</p>
	</footer>

</body>
</html>
