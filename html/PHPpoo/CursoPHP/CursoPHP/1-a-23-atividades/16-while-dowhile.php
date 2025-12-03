<?php
/********** While & Do While *********/
//Estrutura de repetição
//While =  enquanto for
//Do = faça
$contador =1;
while ($contador <= 10):
    echo "contador é $contador";
    $contador++;
endwhile;

echo"<hr>";

$contador = 1;
do {
    echo "contador é $contador <br>";
    $contador++;
} while ($contador <= 10);