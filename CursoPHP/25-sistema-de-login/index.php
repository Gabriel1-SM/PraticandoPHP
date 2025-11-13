<?php
//conexão novamente do outro arquivo
require_once 'db_connect.php';
//sessão
session_start();

//botão enviar
if (isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
        
        // Verifica se a query foi bem-sucedida
        if($resultado && mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            // CORREÇÃO: Adicionei o nome da tabela 'usuarios'
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            
            // Verifica se a segunda query foi bem-sucedida
            if($resultado && mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
                exit(); // Importante após header
            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;
        else:
            $erros[] = "<li> Usuário inexistente </li>";            
        endif;
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>login</h1>
    <?php 
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
        endif;
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" methdod>
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha">
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>