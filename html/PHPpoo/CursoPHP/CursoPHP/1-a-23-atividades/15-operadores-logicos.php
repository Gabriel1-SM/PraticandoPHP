<?php
/********** Operadores de comparação *********/
// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and) retorna se ambas for verdade
// ou (|| - or) retorna se pelo menos uma for verdade
// ou exclusivo (xor) só retorna verdadeiro se um ou outro for verdade, se os dois forem verdade ele retorna falso
// negação (!) vai negar que tal info é falsa ex: if (!($idade == 25) and ($nome == "Rodrigo")):

$idade = 25;
$nome = "Rodrigo";

if (!($idade == 25) and ($nome == "Rodrigo")):
    echo"é verdadeiro";
    else:
        echo "é falso";
        endif;


