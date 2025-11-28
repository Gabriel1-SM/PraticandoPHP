<html>
  <body>

<?php
/********** Formulario GET/POST *********/
/*
Funções (filter_input - filter_var)

FILTER_VALIDATE_INT   // Verifica se é um número inteiro
FILTER_VALIDATE_EMAIL // Verifica se é um e-mail válido
FILTER_VALIDATE_FLOAT // Verifica se é um número decimal (float)
FILTER_VALIDATE_IP    // Verifica se é um endereço IP válido
FILTER_VALIDATE_URL   // Verifica se é uma URL válida
*/

?>
    <!-- <form action="dados.php" method="GET">
      Nome: <input type="text" name="nome"><br>
      Email: <input type="email" name="email"><br>
      <input type="submit" name="enviar">
    </form>
 <a href="dados.php?idade=valor25&sobrenome=Santos">Enviar Dados</a>
</body>
</html> -->


<form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="POST">
      Nome: <input type="text" name="nome"><br>
      Idade: <input type="text" name="idade"><br>
      Email: <input type="text" name="email"><br>
      Peso:  <input type="text" name="peso"><br>
      IP: <input type="text" name="ip"><br>
      URL: <input type="text" name="URL"><br>
      <input type="submit" name="enviar-formulario">Enviar</button><br>
    </form>

</body>
</html>
