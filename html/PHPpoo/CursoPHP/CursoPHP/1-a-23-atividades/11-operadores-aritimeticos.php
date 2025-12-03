<?php
/********** Operadores Aritiméticos *********/
// são usado com valores numéricos para executar operações aritiméticas comuns: adição, subtração, multiplicação etc.\\
/*
Adição +
Subtração -
Multiplicação *
Divisão /
Módulo % resto da divisão
Exponenciação ** 
*/
echo 10+ 10;
echo "<hr>";

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;


$adicao = $a + $b;
echo $adicao;
echo "<hr>";

$subtracao = $c - $a;
echo $subtracao;
echo "<hr>";

$multiplicacao = $d * $b;
echo $multiplicacao;
echo "<hr>";

$divisao = $c / $d;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

//exibindo a média de 4 números
echo (5+7+9+8)/4;