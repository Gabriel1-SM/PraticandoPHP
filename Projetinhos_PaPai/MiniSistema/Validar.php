<?php
$user_correto = "admin";
$senha_correta = "1234";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        if ($usuario === $user_correto && $senha === $senha_correta) {
            echo "Login bem-sucedido";
        } else {
            echo "Usuário ou senha incorretos!";
        }
    }
};