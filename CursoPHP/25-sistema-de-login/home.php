<?php
require_once 'db_connect.php';
session_start();

if(!isset($_SESSION['logado'])){
    header('Location: index.php');
    exit();
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect,$sql);

// VERIFICA SE A QUERY FUNCIONOU E TEM DADOS
if($resultado && mysqli_num_rows($resultado) > 0) {
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
} else {
    // Se não achou usuário, faz logout forçado
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Restrita</title>
</head>
<body>
    <!-- AGORA SEGURO - $dados existe -->
    <h1>Olá <?php echo $dados['nome']; ?> </h1>
    <button><a href="logout.php">Sair</a></button>
</body>
</html>