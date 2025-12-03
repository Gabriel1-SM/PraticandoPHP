<?php
/********** Funções para Números *********/
/*
number_format = formata um número com separadores de milhar e casas decimais.
round = arredonda um número para o inteiro mais próximo ou para o número com casas decimais especificadas.
ceil = arredonda um número para cima (para o inteiro mais próximo maior ou igual).
floor = arredonda um número para baixo (para o inteiro mais próximo menor ou igual).
rad = converte graus para radianos.
*/
$db = 1234.56;
$preco = number_format($db,2, ",", ".");
echo "o valor do produto é R$ $preco";

echo "<hr>";
echo round(3.5);

echo "<hr>";
echo ceil(3.7);

echo "<hr>";
echo floor(3.6);

echo "<hr>";
echo rand(1,999);