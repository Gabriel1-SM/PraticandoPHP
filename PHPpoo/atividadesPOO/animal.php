<?php
// ABSTRAÇÃO: Classe base define O QUE animais fazem
abstract class Animal {
    // ENCAPSULAMENTO: Dados protegidos
    protected $nome;
    protected $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    // ABSTRAÇÃO: Métodos que todos os animais têm
    abstract public function fazerSom();
    abstract public function mover();
    
    // Método concreto (compartilhado)
    public function dormir() {
        return "{$this->nome} está dormindo";
    }
    
    // ENCAPSULAMENTO: Getters protegidos
    public function getNome() {
        return $this->nome;
    }
}

// HERANÇA: Cachorro É UM Animal
class Cachorro extends Animal {
    private $raca;
    
    public function __construct($nome, $idade, $raca) {
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }
    
    // POLIMORFISMO: Implementação específica
    public function fazerSom() {
        return "Au Au!";
    }
    
    public function mover() {
        return "{$this->nome} está correndo";
    }
    
    // Método específico da classe
    public function getRaca() {
        return $this->raca;
    }
}

// HERANÇA: Gato É UM Animal  
class Gato extends Animal {
    // POLIMORFISMO: Implementação DIFERENTE
    public function fazerSom() {
        return "Miau!";
    }
    
    public function mover() {
        return "{$this->nome} está pulando";
    }
}
// Herança: peixe é um animal
class Peixe extends Animal {
    private $especie;

    public function __construct($nome, $idade, $especie){
        parent::__construct($nome, $idade);
        $this->especie = $especie;
    }

    public function fazerSom()
    {
        return "bluuuu bluuuu!";
    }

    public function mover(){
        return "{$this->nome} está nadando";
    }

    //Encapsulamento: Getter
    public function getEspecie(){
        return $this->especie;
    }
}
// HERANÇA: Pássaro É UM Animal
class Passaro extends Animal {
    private $corPenas;
    
    public function __construct($nome, $idade, $corPenas) {
        parent::__construct($nome, $idade);
        $this->corPenas = $corPenas;
    }
    
    // POLIMORFISMO: Implementação DIFERENTE
    public function fazerSom() {
        return "Piu Piu!";
    }
    
    public function mover() {
        return "{$this->nome} está voando";
    }
    
    // ENCAPSULAMENTO: Getter específico
    public function getCorPenas() {
        return $this->corPenas;
    }
}

// TESTANDO TODOS OS PILARES
$animais = [
    new Cachorro("Rex", 3, "Labrador"),
    new Gato("Mimi", 2),
    new Passaro("Piu", 1, "Azul"),
    new Peixe("Gean", 1,"pintado")
];

foreach ($animais as $animal) {
    echo "Nome: " . $animal->getNome() . "\n";
    echo "Som: " . $animal->fazerSom() . "\n";  // POLIMORFISMO
    echo "Movimento: " . $animal->mover() . "\n"; // POLIMORFISMO
    echo $animal->dormir() . "\n"; // HERANÇA (método herdado)
    
    // ENCAPSULAMENTO: Acesso controlado
    if ($animal instanceof Cachorro) {
        echo "Raça: " . $animal->getRaca() . "\n";
    }
    if ($animal instanceof Passaro) {
        echo "Cor das penas: " . $animal->getCorPenas() . "\n";
    }
    echo "--------------------\n";
}
?>