<?php
session_start();

// LIMPA TODOS OS DADOS DA SESSÃO
$_SESSION = array();

// DESTRÓI A SESSÃO COMPLETAMENTE
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();

// REDIRECIONA E PARA EXECUÇÃO
header('Location: index.php');
exit();
?>