<?php 
$senha = "123456";
$senhadb= '$2y$10$oFE8aekCkeXjqCspN.0nteY.Z8StqLxjmbznmZor5l2VxA2cBA/lG';
if(password_verify($senha,$senhadb)):
    echo "senha valida";
else:
    echo "senha invalida";
endif;
$senhasegura = password_hash($senha, PASSWORD_DEFAULT);

// $novasenha = base64_encode($senha);
// echo "sua senha é ". base64_decode($novasenha);
// echo "<hr>";
// echo "Md5: ". md5($senha);
// echo "<hr>";
// echo "Sha1 :". sha1($senha);

// echo $senhasegura;