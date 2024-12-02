<?php
 include 'db-config.php';
 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = ? and senha = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $email, $senha);
$stmt->execute();
$resultado = $stmt->get_result();

if($resultado->num_rows > 0)
{
    $usuario = $resultado->fetch_assoc();
    $usuarioLogado = [
        'nome_logado' => $usuario['nome'],
        'email_logado' => $usuario['email'],
    ];

    $_SESSION['dados-login'] = $usuarioLogado;

    header("Location: index.php");

} else { echo "<script>alert('Email ou senha incorretos!');location.href=\"login.html\";</script>";}

$stmt->close();
$conn->close();



