<?php

session_start();
include 'db-config.php';

$nomelogado = '';
$emailLogado = '';
$btnSair = '';
$botao_cadastro = '';

if(isset($_SESSION['dados-login']))
{
    $nomelogado = "Bem Vindo " .$_SESSION['dados-login']['nome_logado'];
    $emailLogado = $_SESSION['dados-login']['email_logado'];
    $btnSair = "<a href='sair.php' class='text-white'><i class='fas fa-sign-out-alt'></i> Sair</a>";
}
else
{
    $botao_cadastro = "<a href='./cadastro.html' class='my-auto'>
                                <i class='fas fa-user fa-2x'></i>
                            </a>";
}

?>