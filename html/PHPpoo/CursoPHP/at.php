<?php
//dia 1
$string = "gabriel";
$inteiro = 10;
$booleano = false;
$float = 10.5;
$array = ["gabriel", "lucas"];

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
if ($idade >= 1 && $idade <= 12) {
    echo "você é criança";
} elseif ($idade > 12 && $idade <= 17) {
    echo "você é adolescente";
} elseif ($idade >= 18 && $idade <= 59) {
    echo "você é adulto";
} else {
    echo "você é velho";
}
;
echo "<hr>";
// 🔥 DIA 3 — Estruturas de Repetição (for & while)

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 0)
        echo $i;
}
echo "<hr>";
$g = 10;
while ($g > 0):
    echo "Contagem atual: " . $g . "<br>";
    $g--;
    echo "Contagem regressiva completa!";

    break;
endwhile;
echo "<hr>";
// 🔥 DIA 4 — Arrays (básico)
$devs = ["nome1", "nome2", "nome3", "nome4", "nome5", "nome6", "nome7"];
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
$quantidadedePares = 0;

foreach ($numeros as $numero) {
    if ($numero > 50) {
        $somaMaiores50 += $numero;
    }

    if ($numero % 2 == 0) {
        $quantidadedePares++;
    }
}
echo "Soma dos números maiores que 50: $somaMaiores50\n";
echo "Quantidade de números pares: $quantidadedePares\n";

echo "<hr>";
// 🔥 DIA 6 — Funções
// FUNÇÃO SOMAR
function soma($a, $b)
{
    return $a + $b;
}

// FUNÇÃO MAIOR  
function maior($a, $b)
{
    return $a > $b ? $a : $b;
}

// FUNÇÃO FILTRAR PARES
function filtrarPares($array)
{
    $pares = [];
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        }
    }
    return $pares;
}

$resultsoma = soma(1000, 510);
$resultadomaior = maior(1000, 510);

echo "Soma: " . $resultsoma . "<br>";
echo "Maior: " . $resultadomaior . "<br>";

echo "<hr>";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = filtrarPares($numeros);
echo "Números pares: ";
print_r($pares);

echo "<hr>";
// DIA 7 — Mini-Projeto Final (pré-POO)

$tarefas = [
    "Estudar PHP",
    "Fazer exercícios de lógica",
    "Ler documentação do PHP",
    "Praticar com projetos pequenos",
    "Revisar funções e arrays"
];
function listarTarefas($listaTarefas){
    echo "<h3> MINHAS TAREFAS:</h3>";
    // Mostra cada tarefa com número
    foreach ($listaTarefas as $indice => $tarefa) {
        echo "<p>" . ($indice + 1) . ": " . $tarefa . "</p>";
    }
}listarTarefas($tarefas);

echo "<hr>";
function adicionarTarefa($tarefas, $novaTarefa)
{
    array_push($tarefas, $novaTarefa);
    return $tarefas;
}
$tarefas = adicionarTarefa($tarefas, "xingar Lula");
var_dump($tarefas);
echo "<hr>";
function removerTarefa($tarefas, $index ){
    array_splice($tarefas, $index);
    return $tarefas;
}
$tarefas = removerTarefa($tarefas,2);
var_dump($tarefas);
echo "<hr>";

?>