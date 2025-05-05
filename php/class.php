<?php

class Pessoa {
  // Atributos
  public $nome;
  public $idade;

  // Construtor
  public function __construct($nome, $idade) {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  // Método
  public function apresentar() {
    echo "Meu nome é {$this->nome} e tenho {$this->idade} anos.";
  }
}

// Criando um objeto
$pessoa = new Pessoa("Lucas", 22);
$pessoa->apresentar();