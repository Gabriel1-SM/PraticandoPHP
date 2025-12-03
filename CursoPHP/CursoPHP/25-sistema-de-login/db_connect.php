<?php
// Conexão Banco de Dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

// Fazer a conexão
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Verificar SE HOUVE ERRO na conexão
if(!$connect) {
    echo "Falha na conexão: " . mysqli_connect_error();
} else {
    echo "Conexão bem sucedida!";
}
?>