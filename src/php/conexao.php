<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$DATA_HOJE = date("d/m/Y");

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "donor_donation_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<span class='sucess_php'>Connected successfully!</span><br>";
} catch (PDOException $err) {
    echo "<span class='error_php'>Connection failed!:</span><br>" . $err->getMessage();
}