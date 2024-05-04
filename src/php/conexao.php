<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste_dados";

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print "<span style='color: #0A0;'>Connected successfully!</span><br>";
} catch (PDOException $err) {
    print "<span style='color: #A00;'>Connection failed!:</span><br>" . $err->getMessage();
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);