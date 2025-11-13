<html>
<body>

<?php
if (isset($_POST['enviar-formulario'])):
    // Array de erros
    $erros = array();
    
    // SANITIZAÇÃO (limpeza dos dados)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    
    // VALIDAÇÃO (verifica se os dados são válidos)
    if(!filter_var($idade, FILTER_VALIDATE_INT) || empty($idade)):
        $erros[] = "Idade precisa ser um número inteiro";
    endif;
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)):
        $erros[] = "E-mail inválido";
    endif;
    
    if(!filter_var($url, FILTER_VALIDATE_URL) || empty($url)):
        $erros[] = "URL inválida";
    endif;
    
    // Exibindo mensagens
    if (!empty($erros)):
        echo "<ul>";
        foreach ($erros as $erro):
            echo "<li>$erro</li>";
        endforeach;
        echo "</ul>";
    else:
        echo "Parabéns, seus dados estão corretos!<br>";
        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "E-mail: $email <br>";
        echo "URL: $url <br>";
    endif;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    E-mail: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br> <!-- Note: minúsculo -->
    <button type="submit" name="enviar-formulario">Enviar</button><br>
</form>

</body>
</html>