<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nome_database";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}   