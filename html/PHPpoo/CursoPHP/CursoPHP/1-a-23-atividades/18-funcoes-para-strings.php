<?php
/********** Funções para Strings *********/
/*s
trtoupper = maiúscula
strtolower = minúscula
substr = retorna parte de string
str_pad = preenche a string com caracteres até atingir um tamanho desejado.
str_repeat = repete uma string um número específico de vezes.
strlen = retorna o comprimento (número de caracteres) de uma string.
str_replace = substitui partes de uma string por outra.
strpos = encontra a posição de uma substring dentro de uma string (retorna a posição ou false se não encontrar).
*/

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";
$mensagem = "olá mundo";
echo substr($mensagem, 4, 6);


echo "<hr>";
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 6, "*");
echo $novoObjeto;

echo "<hr>";
$string = str_repeat("sucesso!", 5);
echo $string;

echo "<hr>";
$mensagem = "olá mundo";
echo strlen($mensagem);

echo "<hr>";
$texto = "a seleção Argentina será campeã da copa de 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";
echo strpos($texto, "copa");
