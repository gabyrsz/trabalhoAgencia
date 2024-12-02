<?php

include 'alert.html';
include "db-config.php";

session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


    $sqlEmail = "SELECT * FROM usuarios WHERE email = ?";
    $stmtEmail = $conn->prepare($sqlEmail);
    $stmtEmail->bind_param('s', $email);
    $stmtEmail->execute();
    $result = $stmtEmail->get_result();
 
    if ($result->num_rows > 0) {
        echo "<script>mostrarAlertaEmail()</script>";
    } 
    else {
        // Salvar usuario
        $sql =
            "INSERT INTO tb_usuario (nome_usuario, email_usuario, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssd", $nome, $email, $senha);

        if ($stmt->execute()) {
            echo "<script>mostrarAlerta()</script>";

            $usuarioLogado = [
                'nome_logado' => $nome,
                'email_logado' => $email,
            ];
        
            $_SESSION['dados-login'] = $usuarioLogado;
            
            $stmt->close();
            $conn->close();
        } else {
            echo "Erro ao criar a conta: " . $conn->error;
        }
    }


