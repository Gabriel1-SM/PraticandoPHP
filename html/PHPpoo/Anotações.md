# **ÍNDICE - Anotações de Programação Orientada a Objetos em PHP**

## **CONCEITOS FUNDAMENTAIS**
1. [Classes: Modelos para criação do Objeto](#classes-modelos-para-criação-do-objeto)
2. [Atributos: Características/Propriedades](#atributos-característicaspropriedades)
3. [Métodos: Comportamento/Ações](#métodos-comportamentoações)
4. [Construtor: Inicialização do Objeto](#construtor-inicialização-do-objeto)
5. [Destrutor: Finalização do objeto](#destrutor-finalização-do-objeto)

## **PILARES DA POO**
6. [Encapsulamento: Proteção dos dados internos](#encapsulamento-proteção-dos-dados-internos)
7. [Herança: Hierarquia e Reutilização](#herança-hierarquia-e-reutilização)
8. [Polimorfismo: Múltiplas formas](#polimorfismo-múltiplas-formas)
9. [Abstração: Simplificação da Complexidade](#abstração-simplificação-da-complexidade)

## **RELACIONAMENTOS ENTRE CLASSES**
10. [Relacionamento entre Classes](#relacionamento-entre-classes)
11. [Agregação](#agregação)
12. [Composição](#composição)

## **TABELAS E RESUMOS**
13. [Tabela Comparativa dos Relacionamentos](#tabela-comparativa-dos-relacionamentos)
14. [Resumo Final dos Conceitos](#resumo-final-dos-conceitos)

---

## **CONTEÚDO COMPLETO**

### Classes: Modelos para criação do Objeto
Uma classe é como um molde ou uma planta. Ela define como os objetos serão criados, mas não é o objeto em si.

```php
<?php
// A classe é o modelo/planta/forma
class Carro {
    // Aqui dentro definimos como o carro será
}

// Criando objetos (instâncias) da classe
$meuCarro = new Carro();
$seuCarro = new Carro();
?>
```

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Atributos: Características/Propriedades
Atributos são as características que descrevem um objeto. Podem ser públicos, privados ou protegidos.

```php
<?php
class Pessoa {
    // Atributos públicos (acessíveis de qualquer lugar)
    public $nome;
    public $idade;
    
    // Atributo privado (só acessível dentro da classe)
    private $cpf;
    
    // Atributo protegido (acessível na classe e herdeiros)
    protected $salario;
}
?>
```

**Explicação:** 
- `public`: qualquer parte do código pode acessar
- `private`: só pode ser acessado dentro da própria classe
- `protected`: pode ser acessado na própria classe e em classes que herdam dela

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Métodos: Comportamento/Ações
Métodos são as ações que um objeto pode realizar.

```php
<?php
class ContaBancaria {
    private $saldo = 0;
    
    // Método público para depositar dinheiro
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado!<br>";
        }
    }
    
    // Método que retorna o saldo
    public function consultarSaldo() {
        return $this->saldo;
    }
}
?>
```

**Explicação:** Métodos são funções dentro da classe. Eles definem o que o objeto pode fazer. O `$this` refere-se ao objeto atual.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Construtor: Inicialização do Objeto
O construtor é um método especial que é executado automaticamente quando um objeto é criado.

```php
<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;
    
    // Método construtor (chamado automaticamente ao criar objeto)
    public function __construct($nome, $preco, $quantidade = 1) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        echo "Produto '$nome' criado com sucesso!<br>";
    }
}

// Uso do construtor
$produto1 = new Produto("Notebook", 3500.00);
$produto2 = new Produto("Mouse", 89.90, 2);
?>
```

**Explicação:** O construtor `__construct()` inicializa o objeto com valores iniciais. É útil para garantir que o objeto comece em um estado válido.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Destrutor: Finalização do objeto
O destrutor é um método especial que é executado quando um objeto é destruído.

```php
<?php
class ConexaoBanco {
    private $conexao;
    
    public function __construct() {
        $this->conexao = mysqli_connect("localhost", "user", "pass", "db");
        echo "Conexão estabelecida<br>";
    }
    
    // Destrutor - chamado quando objeto é destruído
    public function __destruct() {
        mysqli_close($this->conexao);
        echo "Conexão encerrada<br>";
    }
}

// Uso
$conexao = new ConexaoBanco();
unset($conexao); // Chama __destruct()
?>
```

**Explicação:** O destrutor `__destruct()` é útil para limpar recursos, como fechar conexões com banco de dados ou arquivos.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

---

## **PILARES DA POO**

### Encapsulamento: Proteção dos dados internos
Não deixar qualquer parte do código mexer nos dados!  
**Exemplo do mundo real:** Você usa os botões do celular, mas não mexe nos circuitos internos.

```php
<?php
class ContaCorrente {
    private $saldo;
    private $numeroConta;
    
    public function __construct($numeroConta, $saldoInicial = 0) {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldoInicial;
    }
    
    // GETTER - permite leitura controlada
    public function getSaldo() {
        return $this->saldo;
    }
    
    // SETTER - permite escrita controlada (com validação)
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
    
    // Método privado - só usado internamente
    private function registrarTransacao($tipo, $valor) {
        echo "Transação: $tipo de R$ $valor registrada<br>";
    }
}
?>
```

**Explicação:** O encapsulamento protege os dados usando atributos privados e fornece métodos públicos controlados para acessá-los. Isso previne que dados sejam modificados de forma incorreta.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Herança: Hierarquia e Reutilização
Uma classe pode herdar características e comportamentos de outra classe.  
**Exemplo:** Se existe classe base **Animal**, podemos criar **Gato** e **Cachorro** que herdam **nome** e **idade**.

```php
<?php
// CLASSE PAI (superclasse)
class Animal {
    protected $nome;
    protected $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function comer() {
        echo $this->nome . " está comendo...<br>";
    }
    
    public function dormir() {
        echo $this->nome . " está dormindo...<br>";
    }
}

// CLASSE FILHA (herda de Animal)
class Cachorro extends Animal {
    private $raca;
    
    public function __construct($nome, $idade, $raca) {
        parent::__construct($nome, $idade); // Chama construtor do pai
        $this->raca = $raca;
    }
    
    // Método específico do Cachorro
    public function latir() {
        echo $this->nome . " diz: Au Au!<br>";
    }
    
    // Sobrescrevendo método do pai (override)
    public function comer() {
        echo $this->nome . " come ração canina!<br>";
    }
}

// CLASSE FILHA (herda de Animal)
class Gato extends Animal {
    public function miar() {
        echo $this->nome . " diz: Miau!<br>";
    }
}

// Uso
$rex = new Cachorro("Rex", 3, "Labrador");
$rex->comer();    // Método sobrescrito
$rex->latir();    // Método específico
$rex->dormir();   // Método herdado

$felix = new Gato("Felix", 2);
$felix->miar();
?>
```

**Explicação:** A herança permite reutilizar código. Classes filhas herdam tudo da classe pai e podem adicionar ou modificar comportamentos.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Polimorfismo: Múltiplas formas
O mesmo método pode ter comportamentos diferentes em classes diferentes.

```php
<?php
// Exemplo 1: Polimorfismo com herança
class FormaGeometrica {
    public function calcularArea() {
        return 0;
    }
}

class Quadrado extends FormaGeometrica {
    private $lado;
    
    public function __construct($lado) {
        $this->lado = $lado;
    }
    
    // Implementação específica
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends FormaGeometrica {
    private $raio;
    
    public function __construct($raio) {
        $this->raio = $raio;
    }
    
    // Implementação específica (comportamento diferente)
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

// Polimorfismo em ação
$formas = [
    new Quadrado(5),
    new Circulo(3),
    new Quadrado(4)
];

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "<br>";
    // Mesma interface, comportamentos diferentes!
}
?>
```

**Explicação:** Polimorfismo permite que objetos de diferentes classes respondam ao mesmo método de formas diferentes. No exemplo, tanto `Quadrado` quanto `Circulo` têm o método `calcularArea()`, mas cada um calcula de forma diferente.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Abstração: Simplificação da Complexidade
Mostrar somente o que importa!  
**Exemplo do mundo real:** Você não vê código, circuitos ou elétrons do celular, só vê tela, botões e aplicativos.

```php
<?php
// CLASSE ABSTRATA - não pode ser instanciada diretamente
abstract class Veiculo {
    protected $modelo;
    protected $velocidade = 0;
    
    public function __construct($modelo) {
        $this->modelo = $modelo;
    }
    
    // MÉTODO ABSTRATO - deve ser implementado pelas classes filhas
    abstract public function acelerar();
    
    // MÉTODO CONCRETO - já tem implementação
    public function getVelocidade() {
        return $this->velocidade;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
}

// Interface - define apenas a assinatura dos métodos
interface TransportePublico {
    public function abrirPortas();
    public function cobrarPassagem($valor);
}

// Classe concreta que implementa a abstração
class Onibus extends Veiculo implements TransportePublico {
    private $passageiros = 0;
    
    public function acelerar() {
        $this->velocidade += 10;
        echo "Ônibus acelerando...<br>";
    }
    
    // Implementação dos métodos da interface
    public function abrirPortas() {
        echo "Portas abertas!<br>";
    }
    
    public function cobrarPassagem($valor) {
        echo "Passagem de R$ $valor cobrada<br>";
    }
}
?>
```

**Explicação:** Abstração esconde detalhes complexos e mostra apenas o essencial. Classes abstratas não podem ser instanciadas - servem apenas como modelo. Interfaces definem o que uma classe deve fazer, mas não como fazer.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

---

## **RELACIONAMENTOS ENTRE CLASSES**

### Relacionamento entre Classes
Classes se conhecem, mas sobrevivem separadamente.  
**Exemplo:** Usuário usa perfil, mas ambos existem sozinhos.

```php
<?php
class Usuario {
    private $nome;
    private $perfil; // Referência ao perfil
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    // Usuário pode usar um Perfil
    public function usarPerfil(Perfil $perfil) {
        $this->perfil = $perfil;
        echo "{$this->nome} agora está usando o perfil: " . $perfil->getTipo() . "<br>";
    }
}

class Perfil {
    private $tipo;
    
    public function __construct($tipo) {
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
}

// USO:
$joao = new Usuario("João Silva");
$perfilAdmin = new Perfil("Administrador");

// João usa um perfil
$joao->usarPerfil($perfilAdmin);

// Perfil continua existindo sozinho
echo "Tipo do perfil: " . $perfilAdmin->getTipo() . "<br>";
?>
```

**Explicação:** Neste relacionamento, as classes podem trabalhar juntas, mas são independentes. O perfil pode existir sem usuário, e o usuário pode existir sem perfil.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Agregação
**Pedido** tem vários **Produtos**, mas os Produtos podem existir sem o pedido.

```php
<?php
class Produto {
    private $id;
    private $nome;
    private $preco;
    
    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }
}

class Pedido {
    private $numero;
    private $produtos = []; // Coleção de produtos (agregação)
    
    public function __construct($numero) {
        $this->numero = $numero;
    }
    
    // Adiciona produto ao pedido (agregação)
    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
        echo "Produto '{$produto->getNome()}' adicionado ao pedido #$this->numero<br>";
    }
    
    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }
}

// USO:
// Criando produtos (existem independentemente)
$notebook = new Produto(1, "Notebook Dell", 3500.00);
$mouse = new Produto(2, "Mouse Logitech", 120.00);

// Produtos podem existir sem pedido
echo "Produto criado: " . $mouse->getNome() . "<br>";

// Criando pedido
$pedido1 = new Pedido("2023001");

// Adicionando produtos aos pedidos (agregação)
$pedido1->adicionarProduto($notebook);
$pedido1->adicionarProduto($mouse);

echo "Total do pedido: R$ " . $pedido1->calcularTotal() . "<br>";

// Mesmo se o pedido for destruído, os produtos continuam existindo
?>
```

**Explicação:** Na agregação, um objeto contém outros objetos, mas estes podem existir independentemente. É uma relação "tem-um" não exclusiva.

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Composição
**Casa** tem **Cômodos**, se a casa é destruída, os cômodos também são.

```php
<?php
class Comodo {
    private $nome;
    private $tamanho;
    
    public function __construct($nome, $tamanho) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
    }
    
    public function getNome() { return $this->nome; }
}

class Casa {
    private $endereco;
    private $comodos = []; // Composição: cômodos pertencem à casa
    
    public function __construct($endereco) {
        $this->endereco = $endereco;
    }
    
    // COMPOSIÇÃO: Cômodos são criados DENTRO da casa
    public function adicionarComodo($nome, $tamanho) {
        $comodo = new Comodo($nome, $tamanho); // Criado pela casa
        $this->comodos[] = $comodo;
        echo "Cômodo '{$nome}' adicionado à casa<br>";
    }
    
    public function listarComodos() {
        echo "Cômodos da casa em {$this->endereco}:<br>";
        foreach ($this->comodos as $comodo) {
            echo "- " . $comodo->getNome() . "<br>";
        }
    }
}

// USO:
$minhaCasa = new Casa("Rua das Flores, 123");

// Adicionando cômodos (COMPOSIÇÃO)
$minhaCasa->adicionarComodo("Sala", 25);
$minhaCasa->adicionarComodo("Quarto", 15);

$minhaCasa->listarComodos();

// Se a casa for destruída, todos os cômodos também são
?>
```

**Explicação:** Na composição, os objetos componentes não podem existir sem o objeto principal. É uma relação "tem-um" exclusiva e forte. Se o objeto principal for destruído, todos os componentes também são.

## Características da Composição:
- Relação "tem-um" exclusiva
- Objeto composto não pode existir sem o objeto principal
- Ciclo de vida dependente
- Objeto principal é responsável pela criação e destruição
- Forte acoplamento (se o principal morre, todos morrem)

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

---

## **TABELAS E RESUMOS**

### Tabela Comparativa dos Relacionamentos

| Característica | Associação | Agregação | Composição |
|---|---|---|---|
| Relação | Usa/Conhece | Tem-um (não exclusivo) | Tem-um (exclusivo) |
| Dependência | Baixa | Média | Alta |
| Ciclo de Vida | Independente | Independente | Dependente |
| Pode existir sozinho? | Sim | Sim | Não |
| Exemplo | Usuário ↔ Perfil | Pedido ↔ Produtos | Casa ↔ Cômodos |
| Analogia | Amigos | Carrinho de compras | Corpo ↔ Órgãos |
| Multiplicidade | 1:1, 1:N, N:N | 1:N, N:N | 1:N |

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

### Resumo Final dos Conceitos:

1. **Classe**: Molde para criar objetos
2. **Objeto**: Instância concreta de uma classe
3. **Atributo**: Característica/propriedade do objeto
4. **Método**: Ação/comportamento do objeto
5. **Construtor**: Inicializa o objeto quando criado
6. **Destrutor**: Limpa recursos quando objeto é destruído
7. **Encapsulamento**: Protege dados internos com métodos controlados
8. **Herança**: Reutiliza código de uma classe pai
9. **Polimorfismo**: Mesmo método, comportamentos diferentes
10. **Abstração**: Mostra só o essencial, esconde complexidade
11. **Associação**: Classes que se conhecem mas são independentes
12. **Agregação**: Objeto contém outros, mas são independentes
13. **Composição**: Objeto contém outros que dependem dele

[Voltar ao Índice](#índice---anotações-de-programação-orientada-a-objetos-em-php)

---

*Fim das anotações de POO em PHP*