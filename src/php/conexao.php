<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste_dados";

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    printf("Connected successfully<br>");
} catch (PDOException $err) {
    printf("Connection failed: <br>" . $err->getMessage());
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);