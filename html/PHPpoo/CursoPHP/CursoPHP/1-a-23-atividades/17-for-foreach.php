<?php
/********** For e Foreach *********/
/*
| Estrutura | Quando usar                 | Ideal para...              |
| --------- | --------------------------- | -------------------------- |
| `for`     | Repetição com contador fixo | Números, loops controlados |
| `foreach` | Percorrer arrays/coleções   | Listas, dados em array     |

*/


for ($contador = 0; $contador <=10; $contador++):
    echo "o contador é $contador <br>";
endfor;
echo"<hr>";
echo"<br>";
//////////////////////////////////////////////////////////////////////////
//tabuada:
for ($contador = 0; $contador <=10; $contador++):
    echo "5 x $contador = " .($contador*5)."<br>";
    endfor;

    echo "<hr>";
///////////////////////////////////////////////////////////////////////////
    $cores = array("verde","vemelhor","azul");
    foreach ($cores as $valor):
        echo $valor ."<br>";
        endforeach;

 echo "<hr>";
$nomes = ["Ana", "João", "Pedro"];
foreach ($nomes as $nome) {
    echo $nome . "<br>";
}
