<?php
//dia 1
$string = "gabriel";
$inteiro = 10;
$booleano = false;
$float = 10.5;
$array = ["gabriel","lucas"];

print_r($array);
echo "<br>";
echo $float . "<br>";
echo $booleano . "<br>";
echo $inteiro . "<br>";
echo $string . "<br>";
echo "<hr>";

// 🔥 DIA 2 — Estruturas de Decisão (if/else)
$idade = 100;
echo " idade é igual a: $idade <br>";
if ($idade >= 1 && $idade <= 12 ){
 echo "você é criança";
} elseif ($idade >12 && $idade <= 17){
    echo "você é adolescente";
} elseif ($idade >=18 && $idade <= 59){
    echo "você é adulto";
} else {
    echo "você é velho"; 
};
echo "<hr>";
// 🔥 DIA 3 — Estruturas de Repetição (for & while)

for ( $i= 1; $i <= 30; $i++  ) {
    if($i % 2 == 0)
    echo $i;
} 
echo "<hr>";
$g = 10;
while( $g > 0):
    echo "Contagem atual: " . $g . "<br>";
    $g--;
    echo "Contagem regressiva completa!";

    break;
endwhile;
echo "<hr>";
// 🔥 DIA 4 — Arrays (básico)
$devs = ["nome1", "nome2", "nome3", "nome4","nome5", "nome6", "nome7"];
echo ($devs[0]);
echo "<br>";
echo ($devs[2]);
echo "<br>";
echo ($devs[6]);
echo "<br>";
echo count($devs);
echo "<hr>";

// 🔥 DIA 5 — Arrays + Loop (nível prático)
$numeros = [10, 55, 3, 80, 43, 120, 22];
$somaMaiores50 = 0;
$quantidadedePares= 0;

foreach ($numeros as $numero){
    if($numero > 50){
      $somaMaiores50 += $numero;
    }

if( $numero % 2 == 0) {
      $quantidadedePares++;
 }
}
 echo "Soma dos números maiores que 50: $somaMaiores50\n";
echo "Quantidade de números pares: $quantidadedePares\n";


// 🔥 DIA 6 — Funções