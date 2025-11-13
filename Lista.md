# 🧠 Lista de Atividades de Lógica em PHP

Você já estudou PHP:
> Variáveis, operadores, arrays, estruturas de repetição (`while`, `for`, `foreach`) e funções.

Agora é hora de praticar **lógica de programação** de verdade!  
Os exercícios abaixo estão divididos por **nível de dificuldade**.

---

## 🟢 Nível 1 – Fundamentos e Lógica Pura
Objetivo: praticar estrutura básica e fluxo lógico.

1. Calculadora simples: peça dois números e uma operação (+, -, *, /) e exiba o resultado.  
2. Par ou ímpar: leia um número e diga se é par ou ímpar.  
3. Maior número: receba 3 números e diga qual é o maior.  
4. Média de notas: calcule a média de 4 notas e diga se o aluno foi aprovado (≥7).  
5. Contador: use `while` e `for` para imprimir de 1 até 50.  
6. Tabuada: exiba a tabuada de um número escolhido pelo usuário.  
7. Conversor de temperatura: transforme Celsius ↔ Fahrenheit.  
8. Soma dos pares: calcule a soma de todos os números pares de 1 a 100.

---

## 🟡 Nível 2 – Arrays e Estruturas
Objetivo: trabalhar lógica com coleções e controle de dados.

1. Notas de alunos: use um array associativo de alunos e notas e mostre quem foi aprovado.  
2. Sorteio de nomes: sorteie aleatoriamente um nome de uma lista.  
3. Maior e menor número em um array: percorra um array e encontre os extremos.  
4. Inversão de array: exiba o array original e o invertido.  
5. Filtro de números pares: crie uma função que retorne apenas os números pares de um array.  
6. Contar elementos: conte quantos números maiores que 10 existem em um array.  
7. Contar vogais: peça uma palavra e conte quantas vogais ela tem.

---

## 🔵 Nível 3 – Funções e Modularização
Objetivo: dividir o código em funções reutilizáveis e bem estruturadas.

1. Função de média com retorno: crie uma função `calcularMedia($notas)` e use-a em vários alunos.  
2. Função de verificação de palíndromo: verifique se uma palavra é igual quando lida de trás pra frente.  
3. Gerador de senhas: gere senhas aleatórias com letras, números e símbolos.  
4. Conversor de base: transforme um número decimal em binário ou hexadecimal.  
5. Calculadora modular: faça uma calculadora onde cada operação é uma função.

---

## 🔴 Nível 4 – Mini Projetos Lógicos
Objetivo: aplicar tudo que aprendeu em pequenos sistemas práticos.

1. **Sistema de boletim:**  
   - Cadastre vários alunos (nome e 4 notas);  
   - Calcule média;  
   - Liste aprovados e reprovados.

2. **Simulador de caixa eletrônico:**  
   - Receba um valor;  
   - Calcule quantas notas de 100, 50, 20, 10, 5 e 2 serão entregues.

3. **Controle de estoque:**  
   - Crie um array de produtos (nome, preço, quantidade);  
   - Permita “comprar” um produto e atualize o estoque.

4. **Jogo de adivinhação:**  
   - Gere um número aleatório de 1 a 100;  
   - O usuário tenta adivinhar com dicas (“maior” / “menor”).

5. **Agenda de contatos simples:**  
   - Cadastre contatos com nome, telefone e e-mail;  
   - Permita listar, buscar e excluir contatos.

6. **Simulador de dados:**  
   - Sorteie dois dados e exiba os resultados e a soma.

---

## ⚫ Nível 5 – Desafios de Raciocínio
Objetivo: resolver problemas clássicos de lógica e algoritmos.

1. Fibonacci: exiba os 10 primeiros números da sequência.  
2. Fatorial: calcule o fatorial de um número.  
3. Número primo: verifique se um número é primo.  
4. Soma de dígitos: some todos os dígitos de um número (ex: 123 → 6).  
5. Ordenação manual: ordene um array sem usar `sort()` (ex.: método da bolha).  
6. Verificar anagrama: veja se duas palavras são compostas pelas mesmas letras.

---

## 💪 Dica Extra
Monte um arquivo `index.php` que sirva como **menu de execução** dos exercícios:
```php
<?php
echo "Escolha um exercício:\n";
echo "1 - Média de notas\n";
echo "2 - Jogo de adivinhação\n";
echo "3 - Caixa eletrônico\n";
// etc...
