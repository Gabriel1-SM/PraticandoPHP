<?php

// A classe Login representa um usuário tentando fazer login.
// Ela usa encapsulamento para proteger o email e a senha.
class Login {

    // ATRIBUTOS PRIVADOS — ninguém fora da classe pode acessar diretamente.
    private $email;
    private $senha;

    // GETTER do email — apenas devolve o valor já armazenado.
    public function getEmail() {
        return $this->email;
    }

    // SETTER do email — recebe valor externo, limpa e salva.
    public function setEmail($e) {

        // Sanitiza o email removendo caracteres proibidos.
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);

        // Salva o email já sanitizado no atributo privado.
        $this->email = $email;
    }

    // GETTER da senha — devolve a senha armazenada.
    public function getSenha() {
        return $this->senha;
    }

    // SETTER da senha — apenas salva.
    // (mais pra frente, você vai trocar isso por password_hash)
    public function setSenha($s) {
        $this->senha = $s;
    }

    // MÉTODO logar — verifica se email e senha são iguais aos esperados.
    public function logar() {

        // Verifica o email e a senha armazenados DENTRO do objeto.
        if ($this->email === "teste@teste.com" && $this->senha === "123456") {

            // Caso os dados estejam corretos
            echo "Logado com sucesso!";

        } else {

            // Caso estejam incorretos
            echo "Dados inválidos!";
        }
    }
}


// ------------------------
// TESTE DA CLASSE LOGIN
// ------------------------

// Criamos um novo objeto da classe Login.
$logar = new Login();

// Definimos o email usando o setter (que também sanitiza).
$logar->setEmail("teste@teste.com");

// Definimos a senha também via setter.
$logar->setSenha("123456");

// Chamamos o método que realiza a verificação do login.
$logar->logar();

echo "<br>";

// Mostramos o email que foi armazenado dentro do objeto.
echo "Email armazenado: " . $logar->getEmail();


// Abaixo tem um exemplo de utilizando atributos publicos
// class login(){
//  public $email;
//  public $senha;

//  public function Logar(){
//     if($this->email == "teste@teste.com" and $this->senha == "123456"):
//         echo "logado com sucesso!";
//     else:
//         echo "login inválido!";
//     endif; 
//     }

// }
// $logar = new $login();
// $logar->email = "teste@teste.com";
// $logar->senha = "123456";
// $logar->logar();