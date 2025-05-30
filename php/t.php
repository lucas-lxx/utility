<?php
class Cep {
  private $cep;

  public function __construct($cep) {
    if ($this->isValid($cep)) {
      $this->cep = $cep;
    }
  }

  public function getCep() {
    return $this->cep;
  }


  public function setCep($cep) {
    $this->cep = $cep;
  }

  public function isValid() {
    if ($cep >= '09000001' && $cep <= '09399999') {
      return true;
    } else if ($cep >= '09600001' && $cep <= '09899999') {
      return true;
    } else if ($cep >= '09500001' && $cep <= '09599999') {
      return true;
    }
    return false;
  }
}

$c = new Cep('09000002');
$c->isValid();
?>