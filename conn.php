<?php
    $banco = "localhost";
    $user = "root";
    $dbName = "estacionamento";
    $dbPassword = "";

   try 
   {
    $pdo = new PDO("mysql:host=$banco;dbname=$dbName", $user, $dbPassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } 
   catch (PDOException $e) 
   {
        echo "Error: " . $e->getMessage();
   }
?>  