<?php

class Carro {
  private $portas;
  private $cor;
  private $ano;

  public function __construct($portas, $cor, $ano) {
    $this->portas = $portas;
    $this->cor = $cor;
    $this->ano = $ano;
  }

  public function stats() {
    echo "Carro: portas {$this->portas}, cor {$this->cor}, ano {$this->ano}\n";
  }
}

$c = new Carro(4, "azul", 1998);
$c->stats();