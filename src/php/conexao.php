<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste_dados";

try {
    $conn = new PDO("mysql:host=$host;dbname=myDB", $usuario, $senha,);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    printf("Connected successfully");
} catch (PDOException $e) {
    printf("Connection failed: " . $e->getMessage());
}