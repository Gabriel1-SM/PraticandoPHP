<?php
// Criar um array, de pessoas, nesse array, tera, as chaves como, nome, nota1, nota2, nota3, nota4
// (as notas pode ter valores entre 0.0 a 10.0 FLOAT)
// Teve ter uma função que calculará esses notas de cada aluno, e obter a media das notas, e salvar em um novo array
// com o array com as media dos alunos, navegar em um laço de repetição, e verificar se a nota é maior ou igual a 7, se for, será salvo em um novo array de alunos aprovados, senão um array alunos reprovados
// mostrar todos os alunos aprovados, com a media obtida e o seu nome, e mostrar os reprovados com a media e nome

$pessoas = [
  [
    "nome"  => "Gabriel",
    "nota1" => 5.5,
    "nota2" => 6.9,
    "nota3" => 10,
    "nota4" => 8.4
  ],
  [
    "nome"  => "Maria",
    "nota1" => 9,
    "nota2" => 8.5,
    "nota3" => 7.5,
    "nota4" => 9
  ]
];
function calcularMedia(array $pessoa){
  $media = ($pessoa["nota1"] + $pessoa["nota2"] + $pessoa["nota3"] + $pessoa["nota4"]) / 4;
  $nome = $pessoa["nome"];

  if($media >= 7):
    echo "$nome foi aprovado com a média $media.";
  else: 
    echo "$nome reprovado, playboy";
  endif;
} 

foreach ($pessoas as $pessoa){
 calcularMedia($pessoa);
}

 
    // calcularMedia("Bob",5,7,5,9);
