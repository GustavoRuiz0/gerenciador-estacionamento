<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Uso do Veículo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Relatório de Uso do Veículo</h1>
        <form method="POST">
            <div class="form-group">
                <label for="placa">Digite a placa do veículo:</label>
                <input type="text" class="form-control" id="placa" name="placa">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <?php
            require_once 'conn.php';
            if (isset($_POST['placa'])) {
                $placaV = filter_input(INPUT_POST, 'placa');
                $placaM = strtoupper($placaV);
                $placafinal = str_replace(' ', '', $placaM); 
                date_default_timezone_set('America/Sao_Paulo');

                $query = "SELECT * FROM uso WHERE placa = :placaV";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(':placaV', $placafinal);
                $stmt->execute();

                if ($stmt->rowCount() > 0) 
                {
                    echo '<br>';
                    echo '<table class="table">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Data Entrada</th>';
                    echo '<th>Data Saída</th>';
                    echo '<th>Tempo de Uso</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 

                    {
                        $data_entrada = new DateTime($row['data_entrada']);
                        $data_saida = new DateTime($row['data_saida']);
                        $diferenca = $data_saida->diff($data_entrada);
                        echo '<tr>';
                        echo '<td>' . $data_entrada->format('d/m/Y H:i:s') . '</td>';
                        echo '<td>' . $data_saida->format('d/m/Y H:i:s') . '</td>';
                        echo '<td>' . $diferenca->format('%H:%I:%S') . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } 
                
                else 
                
                {
                    echo '<br>';
                    echo '<div class="alert alert-danger">';
                    echo '<strong>Erro!</strong> Nenhum registro encontrado para a placa informada.';
                    echo '</div>';
                }
            }
            $horas = $diferenca->h + ($diferenca->days * 24); // converte para horas

     

            if ($horas < 1) 
            {
                $preco = 2.50;
            } elseif ($horas >= 1 && $horas <= 2) 
            {
                $preco = 4.50;
            } elseif ($horas > 2 && $horas <= 3) 
            {
                $preco = 7.50;
            } else 
            {
                $preco = 9.50;
            }
        ?>

        <div class="jumbotron">
			<h1>Valor a ser pago <?php echo $preco;?>0</h1>
		</div>
</div>
</body>
</html>
