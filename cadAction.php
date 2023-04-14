    <?php
        require 'conn.php';

        try {
            $placa = filter_input(INPUT_POST, 'placa');
            $placaM = strtoupper($placa);
            $placafinal = str_replace(' ', '', $placaM);
            date_default_timezone_set('America/Sao_Paulo');
            $data_hora_atual = new DateTime();
            $data_entrada = $data_hora_atual->format('Y-m-d H:i:s');

            $query = "INSERT INTO uso (placa, data_entrada) VALUES (:placa, :data_entrada)" ;

            $entrada = $pdo->prepare($query);
            $entrada->bindValue(':placa', $placafinal);
            $entrada->bindValue(':data_entrada', $data_entrada);

            if ($entrada->execute()) {
                header("Location:index.php"); 
            } else {
                echo "Erro ao inserir registro no banco de dados";
                exit();
            }
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            exit();
        }
    ?>
